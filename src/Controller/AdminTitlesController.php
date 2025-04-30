<?php
namespace Liquimet\Controller;

use Twig\Environment;
use Liquimet\Session\Session;
use Liquimet\Model\Navigation;
use Liquimet\Model\User;
use Liquimet\Model\Title;
use Liquimet\Validate\Validate;

class AdminTitlesController {
    private $twig;
    private $session;
    private $modelNavigation;
    private $modelUser;
    private $modelTitle;

    public function __construct(Environment $twig, Session $session, Navigation $modelNavigation, User $modelUser, Title $modelTitle) {
        $this->twig = $twig;
        $this->session = $session;
        $this->modelNavigation = $modelNavigation;
        $this->modelUser = $modelUser;
        $this->modelTitle = $modelTitle;
    }

    public function allTitlesPage() {
        // Ensure only admins can access this page
        $this->session->requireAdmin();
        // Generate CSRF token when rendering the form
        $csrfToken = $this->session->generateCsrfToken();
        //$data = $this->commonUsersPageData();

        $data = [
            'csrf_token' => $csrfToken,
            // Fetch Navigation Data
            'navigation' => $this->modelNavigation->getAdminNavigation(),
            'totalAdminNav' => $this->modelNavigation->totalAdminNav(),
            // Fetch Login And Session Data
            'session' => [
                'id_user' => $this->session->getID(),
                'username' => $this->session->getUsername(),
                'name' => $this->session->getName(),
                'id_gender' => $this->session->getGender(),
                'role' => $this->session->getRole(),
                'title' => $this->session->getTitle(),
            ],
            'isLoggedIn' => $this->session->isLoggedIn(),
            'user' => $this->modelUser->get($this->session->getID()),
            // Fetch Users Table Data
            'titles' => $this->modelTitle->getAll(),
            'total' => $this->modelTitle->totalTitles()
        ];

        echo $this->twig->render('admin/titles.twig', $data);
    }

    public function titleModalPage() {
        // Ensure only admins can access this page
        $this->session->requireAdmin();
        //$data = $this->commonUsersPageData();
        $errors = [];
        $title = [];
        $id=null;

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save'])) {
            $csrf = $_POST['csrf_token'] ?? '';

                if (!isset($_SESSION['csrf_token']) || !$this->session->verifyCsrfToken($csrf)) {
                    echo $this->twig->render('admin/title.twig', [
                        'errors' => 'Si e verificato un problema. Riprovare.', 
                        'csrf_token' => $this->session->generateCsrfToken()
                    ]);
                    return;
                }

            $tName = Validate::validate_input($_POST['name']) ?? '';
            $tTitle = Validate::validate_input($_POST['title']) ?? '';
            $tAcronym = Validate::validate_input($_POST['acronym']) ?? '';
            $id = $_POST['id_title'];
            $data = [
                'name' => Validate::validate_input($_POST['name']) ?? '',          
                'title' => Validate::validate_input($_POST['title']) ?? '',    
                'acronym' => Validate::validate_input($_POST['acronym']) ?? '',
                'id_title' => $_POST['id_title'],
            ]; 

            if (empty($tName) || empty($tTitle) || empty($tAcronym)) {
                echo $this->twig->render('admin/title.twig', [
                    'errors' => 'Tutti i campi sono obbligatori.', 
                    'csrf_token' => $this->session->generateCsrfToken()
                ]);
                return;
            } else {
                $checkName = $this->modelTitle->titleExistsByName($tName);
                $checkTitle = $this->modelTitle->titleExistsByTitle($tTitle);
                $checkAcr = $this->modelTitle->titleExistsByAcr($tAcronym);

                // Name validation
                if (!Validate::validate_name($tName, 4, 100)) {
                    $errors[] = 'Titolo aziendale puo contenere solo lettere e spazi bianchi. (4-100 caratteri)';
                } elseif ($checkName) {
                    $errors[] = 'Titolo aziendale già in uso.';
                }

                // Title validation
                if (!Validate::validate_name($tTitle, 4, 100)) {
                    $errors[] = 'Titolo (inglese) puo contenere solo lettere e spazi bianchi. (4-100 caratteri)';
                } elseif ($checkTitle) {
                    $errors[] = 'Titolo aziendale (inglese) già in uso.';
                }

                // Acronym validation
                if (!Validate::validate_name($tAcronym, 2, 10)) {
                    $errors[] = 'Acronimo puo contenere solo lettere e spazi bianchi. (2-10 caratteri)';
                } elseif ($checkAcr) {
                    $errors[] = 'Acronimo già in uso.';
                }
            

                // If errors exist, re-render the page with the errors
                if (!empty($errors)) {
                    echo $this->twig->render('admin/title.twig', [
                        'errors' => $errors,
                        'titles' => $this->modelTitle->getAll() // Keep the title list
                    ]);
                }

                if ($id) {
                    $this->modelTitle->update( $id, ['name' => $tName, 'title' => $tTitle, 'acronym' => $tAcronym, 'id_title' => $id]);
                    $success = "Titolo aziendale modificato con successo!";
                } else {
                    $this->modelTitle->create(['name' => $tName, 'title' => $tTitle, 'acronym' => $tAcronym]);
                    $success = "Titolo aziendale e stato creato con successo!";
                }
            
                // Reload the page with success message
                echo $this->twig->render('admin/titles.twig', [
                    'success' => $success,
                    'titles' => $this->modelTitle->getAll(),
                ]);
            }
            
        }
/*
        $data = [
            // Fetch Navigation Data
            'navigation' => $this->modelNavigation->getAdminNavigation(),
            'totalAdminNav' => $this->modelNavigation->totalAdminNav(),
            // Fetch Login And Session Data
            'session' => [
                'id_user' => $this->session->getID(),
                'username' => $this->session->getUsername(),
                'name' => $this->session->getName(),
                'id_gender' => $this->session->getGender(),
                'role' => $this->session->getRole(),
                'title' => $this->session->getTitle(),
            ],
            'isLoggedIn' => $this->session->isLoggedIn(),
            'user' => $this->modelUser->get($this->session->getID()),
            // Fetch Users Table Data
            'title' => $this->modelTitle->get()
        ];

        echo $this->twig->render('admin/titles.twig', $data);
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $errors = [];

        // Validation
        if (empty($_POST['name'])) $errors['name'] = 'Name is required';
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) $errors['email'] = 'Invalid email';
        if (strlen($_POST['password']) < 6) $errors['password'] = 'Password must be at least 6 characters';
        if ($_POST['password'] !== $_POST['confirm']) $errors['confirm'] = 'Passwords do not match';

        if (!empty($errors)) {
            $this->session->set('errors', $errors);
            header('Location: /webapp/public/admin/user');
            exit;
        }

        $data = [
            'name' => $_POST['name'],
            'middle' => $_POST['middle'],
            'email' => $_POST['email'],
            'date' => $_POST['date'],
            'city' => $_POST['city'],
            'country' => $_POST['country'],
            'username' => $_POST['username'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
            'gender' => $_POST['gender'],
            'role' => $_POST['role'],
            'title' => $_POST['title'],
        ];

        if (!empty($_POST['id'])) {
            $this->userModel->update($_POST['id'], $data);
        } else {
            $this->userModel->create($data);
        }

        $this->session->set('success', 'User saved successfully.');
        header('Location: /webapp/public/admin/user');
        exit;*/
    }

    public function showTitleForm($id = null)
{
    $title = null;

    // If editing an existing product
    if ($id) {
        $title = $this->modelTitle->get($id);
    }
    var_dump($title); // For debugging, check if user data is fetched correctly
    // Pass product data (empty if new) to the view
    $this->twig->render('admin/title.twig', ['title' => $title]);
}
}
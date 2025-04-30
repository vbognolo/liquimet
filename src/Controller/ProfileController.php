<?php
namespace Liquimet\Controller;

use Twig\Environment;
use Liquimet\Session\Session;
use Liquimet\Model\Navigation;
use Liquimet\Model\User;
use Liquimet\Model\Title;
use Liquimet\Validate\Validate;

class ProfileController {
    private $twig;
    private $session;
    private $navModel;
    private $userModel;
    private $titleModel;

    public function __construct(Environment $twig, Session $session, Navigation $navModel, User $userModel, Title $titleModel) {
        $this->twig = $twig;
        $this->session = $session;
        $this->navModel = $navModel;
        $this->userModel = $userModel;
        $this->titleModel = $titleModel;
    }
    public function renderProfilePage() {
        $this->session->requireLogin();
            
            $sessionData = [
                'id_user' => $this->session->getID(),
                'username' => $this->session->getUsername(),
                'name' => $this->session->getName(),
                'role' => $this->session->getRole()
            ];

            $user = $this->userModel->get($this->session->getID());
            // Format date to long Italian
            $formatter = new \IntlDateFormatter(
                'it_IT',
                \IntlDateFormatter::LONG,
                \IntlDateFormatter::NONE,
                'Europe/Rome',
                null,
                'd MMMM yyyy'
            );
            $user['bday'] = strtolower($formatter->format(strtotime($user['birthday'])));
            $user['joined'] = strtolower($formatter->format(strtotime($user['joined'])));
            $user['modified'] = strtolower($formatter->format(strtotime($user['modified'])));
            
        $data = [
                // Fetch Navigation Data
            'navigation' => $this->navModel->getAdminNavigation(),
            'totalAdminNav' => $this->navModel->totalAdminNav(),
                // Fetch Login And Session Data
            'isLoggedIn' => $this->session->isLoggedIn(),
            'session' => $sessionData,
            'user' => $user
        ];

        echo $this->twig->render('profile.twig', $data);
    }

    public function handleEditProfile() {
        $this->session->requireLogin();

        $csrfToken = $_POST['csrf_token'] ?? '';
            // Ensure CSRF token exists before validation
            if (empty($csrfToken) || !$this->session->verifyCsrfToken($csrfToken)) {
                die(json_encode(['success' => false, 'message' => 'Si è verificato un problema. Aggiornare la pagina e riprovare.']));
            }

            $sessionData = [
                'id_user' => $this->session->getID(),
                'username' => $this->session->getUsername(),
                'name' => $this->session->getName(),
                'role' => $this->session->getRole()
            ];
    
        $id = (int) $_POST['id_user'] ?? 0;
        $user = [
            'existing_id_user' => $id,
            'check_username' => Validate::validate_input($_POST['username']),
            'check_email' => Validate::validate_input($_POST['email']),
            'new_username' => Validate::validate_input($_POST['username']),
            'new_email' => Validate::validate_input($_POST['email']),
            'username' => Validate::validate_input($_POST['username']),
            'email' => Validate::validate_input($_POST['email']),
            'name' => Validate::validate_input($_POST['name']),               
            'surname' => Validate::validate_input($_POST['surname']),
            'bday' => date_format(new \DateTime($_POST['bday']), 'Y-m-d'),
            'city' => Validate::validate_input($_POST['city']),
            'country' => Validate::validate_input($_POST['country']),
            'modified' => date('Y-m-d'),
            'id_user' => $id
        ]; 
    }
}
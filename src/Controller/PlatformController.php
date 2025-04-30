<?php
namespace Liquimet\Controller;

use Twig\Environment;
use Liquimet\Session\Session;
use Liquimet\Model\Navigation;
use Liquimet\Model\User;
use Liquimet\Model\Transport;
use Liquimet\Model\Quantity;
use Liquimet\Validate\Validate;

class PlatformController {
    private $twig;
    private $session;
    private $navModel;
    private $userModel;
    private $transModel;
    private $qtyModel;

    public function __construct(Environment $twig, Session $session, Navigation $navModel, User $userModel, Transport $transModel, Quantity $qtyModel) {
        $this->twig = $twig;
        $this->session = $session;
        $this->navModel = $navModel;
        $this->userModel = $userModel;
        $this->transModel = $transModel;
        $this->qtyModel = $qtyModel;
    }

    public function allTransportsPage() {
        // Ensure only admins can access this page
        $this->session->requireLogin();
        //$data = $this->commonUsersPageData();

        $data = [
            // Fetch Navigation Data
            'navigation' => $this->navModel->getAdminNavigation(),
            'totalAdminNav' => $this->navModel->totalAdminNav(),
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
            'user' => $this->userModel->get($this->session->getID()),
            // Fetch Users Table Data
            'quantities' => $this->qtyModel->getAll(),
            'total' => $this->transModel->totalTransport()
        ];

        echo $this->twig->render('platform.twig', $data);
    }

    public function createTransportPage(){
        $this->session->requireLogin();

        $data = [
            // Fetch Navigation Data
            'navigation' => $this->navModel->getAdminNavigation(),
            'totalAdminNav' => $this->navModel->totalAdminNav(),
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
            'user' => $this->userModel->get($this->session->getID()),
        ];

        echo $this->twig->render('transport.twig', $data);
    }
}
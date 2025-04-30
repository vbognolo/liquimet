<?php
namespace Liquimet\Controller;

use Twig\Environment;
use Liquimet\Session\Session;
use Liquimet\Model\User;
use Liquimet\Model\Transport;
use Liquimet\Model\Quantity;

class AdminController {
    private $twig;
    private $session;
    private $mUser;
    private $mTrans;
    private $mQty;

    public function __construct(Environment $twig, Session $session, User $mUser, Transport $mTrans, Quantity $mQty) {
        $this->twig = $twig;
        $this->session = $session;
        $this->mUser = $mUser;
        $this->mTrans = $mTrans;
        $this->mQty = $mQty;
    }

    public function renderDashboardPage() {
        // Ensure only admins can access this page
        $this->session->requireAdmin();

            $sessionData = [
                'id_user' => $this->session->getID(),
                'username' => $this->session->getUsername(),
                'name' => $this->session->getName(),
                'id_gender' => $this->session->getGender(),
                'role' => $this->session->getRole(),
                'title' => $this->session->getTitle()
            ];

        $data = [
                // Fetch Login And Session Data
            'session' => $sessionData,
            'user' => $this->mUser->get($this->session->getID()),
                // Fetch Dashboard Data
            'allTransports' => $this->mTrans->totalTransport(),
            'fullTransports' => $this->mTrans->totalTransports('F'),
            'partTransports' => $this->mTrans->totalTransports('P'),
            'unloadedSum' => $this->mQty->sumUnloaded(),
            'recent' => $this->mTrans->getRecent(),
            'activeUsers' => $this->mUser->totalUsers(),
            'adminUsers' => $this->mUser->totalUsersRole(1),
            'memberUsers' => $this->mUser->totalUsersRole(2),
            'suspendedUsers' => $this->mUser->totalUsersRole(3)
        ];

        echo $this->twig->render('admin/dashboard.twig', $data);
    }
}

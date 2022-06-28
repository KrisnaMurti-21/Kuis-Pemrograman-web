<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }
    public function index()
    {
        $user = $this->userModel ->findAll();

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
        $u = $this->userModel->search($keyword);
        } else {
        $u = $this->userModel;
        }

        $data = [
            'user' => $user
        ];

        return view('pages/dashboard', $data);
    }
}

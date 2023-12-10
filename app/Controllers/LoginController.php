<?php

namespace App\Controllers;

use App\Models\UserModel;

class LoginController extends BaseController
{
    public function index()
    {
        return view('login'); // Load the login view
    }

    public function authenticate()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // print_r($username);
        // print_r($password);
        // exit();

        $userModel = new UserModel();
        $user = $userModel->where('username', $username)->first();


        if ($user && password_verify($password, $user['password'])) {
            // Start session and set user details
            $session = session();
            $session->set([
                'user_id' => $user['id'],
                'username' => $user['username'],
                'isLoggedIn' => true
            ]);

            return redirect()->to('/dashboard'); // Redirect to dashboard upon successful login
        } else {
            // Redirect back to login page with error message
            return redirect()->back()->with('error', 'Invalid username or password');
        }
    }

    public function logout()
    {
        // Destroy session and log the user out
        $session = session();
        $session->destroy();

        return redirect()->to('/login'); // Redirect to login page after logout
    }
}

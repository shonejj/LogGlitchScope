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

            // Set success flash message
            $session->setFlashdata('success', 'Login successful');
            return redirect()->to('/dashboard'); // Redirect to dashboard upon successful login
        } else {
            // Set error flash message
            $session = session();
            $session->setFlashdata('error', 'Invalid username or password');
            return redirect()->to('/login'); // Redirect back to login page with error message
        }
    }

    public function logout()
    {
        // Destroy session and log the user out
        $session = session();
        $session->destroy();

        // Set success flash message for logout
        $session->setFlashdata('success', 'Logged out successfully');
        return redirect()->to('/login'); // Redirect to login page after logout
    }
}

<?php

namespace App\Controllers;

class DashboardController extends BaseController
{
    public function index()
    {
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/login');
        }
        
        return view('dashboard');
    }
    // Function to fetch Apache logs
    public function fetchApacheLogs()
    {
        // Handle fetching Apache logs here
        $apacheErrorLogPath = '/var/log/apache2/error.log';
        $logContent = '';

        if (file_exists($apacheErrorLogPath) && is_readable($apacheErrorLogPath)) {
            $logContent = file_get_contents($apacheErrorLogPath);
        }

        echo substr($logContent, -5000);
    }

    // Function to fetch MySQL logs
    public function fetchMysqlLogs()
    {
        // Handle fetching MySQL logs here
        $mysqlErrorLogPath = '/var/log/mysql/error.log';
        $logContent = [];

        if (file_exists($mysqlErrorLogPath) && is_readable($mysqlErrorLogPath)) {
            $logContent = file($mysqlErrorLogPath);
        }

        return json_encode(array_slice(array_reverse($logContent), 0, 50));
    }

    // Function to fetch top command output
    public function fetchTopOutput()
    {
        // Handle fetching top command output here
        $output = shell_exec('top -b -n 1');
        echo htmlspecialchars($output);
    }
}

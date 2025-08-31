<?php

class IndexController {
    protected $model;

    public function __construct() {
        require_once '../models/index.php';
        $this->model = new IndexModel();
    }

    public function renderView($viewName, $data = []) {
        $viewPath = "../views/{$viewName}.php";
        if (file_exists($viewPath)) {
            extract($data);
            include($viewPath);
        } else {
            echo "View not found.";
        }
    }

    public function handleRequest() {
        // Logic to handle user requests and route to appropriate methods
        // For example, you can check the request method and parameters here
        $action = $_GET['action'] ?? 'index';
        switch ($action) {
            case 'index':
                $data = $this->model->getData();
                $this->renderView('index', ['data' => $data]);
                break;
            // Add more cases for different actions as needed
            default:
                $this->renderView('404'); // Render a 404 view if action not found
                break;
        }
    }
}

// Initialize the controller and handle the request
$controller = new IndexController();
$controller->handleRequest();
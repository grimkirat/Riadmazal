<?php
require 'vendor/deployer/deployer/recipe/symfony.php'; 

// Define a server for deployment.
// Let's name it "prod".
server('prod', '127.0.0.1')
    ->user('RiadMazal') // Defind SSH username
    ->password('') // Define SSH user's password
    ->stage('production') // Define stage name
    ->env('deploy_path', 'Riadmazal'); // Define the base path to deploy your project to.

// Specify the repository from which to download your project's code.
set('repository', 'grimkirat@github.com:org/app.git');
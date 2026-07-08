<?php
require 'vendor/autoload.php';
require 'bootstrap/app.php';

use Modules\Core\Entities\Project\Project;

try {
    $project = Project::create([
        'name' => 'HirePower Hub',
        'version' => '1.5.6',
        'code' => 'hirepower_hub',
        'user_email' => 'admin@hirepower.local',
        'purchased_code' => '',
    ]);
    
    echo "✓ Project created successfully!\n";
    echo "Project ID: " . $project->id . "\n";
    echo "Name: " . $project->name . "\n";
} catch (\Exception $e) {
    echo "✗ Error: " . $e->getMessage() . "\n";
    exit(1);
}
?>
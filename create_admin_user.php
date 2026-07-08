<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(\Illuminate\Contracts\Http\Kernel::class);

use App\Models\User;
use Illuminate\Support\Facades\Hash;

try {
    // Check if user already exists
    $existingUser = User::where('email', 'admin@hirepower.local')->first();
    if ($existingUser) {
        echo "Admin user already exists with ID: " . $existingUser->id . "\n";
        exit(0);
    }

    $user = User::create([
        'name' => 'Admin User',
        'email' => 'admin@hirepower.local',
        'password' => Hash::make('admin123'),
        'user_is_sys_admin' => 1,
        'role_id' => 1,
        'status' => 1,
        'added_user_id' => 1,
        'email_verified_at' => now(),
    ]);
    
    echo "✓ Admin user created successfully!\n";
    echo "ID: " . $user->id . "\n";
    echo "Email: " . $user->email . "\n";
    echo "Password: admin123\n";
} catch (Exception $e) {
    echo "✗ Error: " . $e->getMessage() . "\n";
    exit(1);
}
?>
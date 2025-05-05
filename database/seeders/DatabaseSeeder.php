<?php
namespace Database\Seeders;

use Spatie\Permission\Models\Role;

use App\Models\User;
use Database\Seeders\RoleSeeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

$user = User::factory()->create([
    'name' => 'Test User',
    'email' => 'test@example.com',
]);

$user->assignRole('Super Admin'); // Assign a role to the test user
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call(RoleSeeder::class);
    }
}

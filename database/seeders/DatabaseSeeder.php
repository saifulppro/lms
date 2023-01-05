<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Course;
use App\Models\Curriculum;
use App\Models\Lead;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->create_user_with_role('Super Admin', 'Super Admin', 'admin@admin.com');
        $this->create_user_with_role('Communications Manager', 'Communication Team', 'communication@admin.com');
        $teacher = $this->create_user_with_role('Teacher', 'Teacher', 'teacher@admin.com');



        // create leads
        Lead::factory()->count(100)->create();

        // create course
        $course = Course::create([
            'name' => 'Laravel',
            'description' => 'laravel is a great way to create web applications and many more',
            'image_url' => 'https://laravel.com/img/logotype.min.svg',
            'user_id' => $teacher->id,
        ]); 
        
        // curriculum factory
        Curriculum::factory()->count(10)->create();

    }
    
    private function create_user_with_role($type, $name, $email){
        $role = Role::create([
            'name' => $type
        ]);

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt('admin'),
        ]);
        if($type == 'Super Admin'){
            $permission = Permission::create([
                'name' => 'create-admin',
            ]);
            $role->givePermissionTo($permission);
        }

        $user->assignRole($role);
        return $user;
    }
}

<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // for ($i=0; $i < 30; $i++) {
        //     DB::table('users')->insert([
        //         'name' => str_random(10),
        //         'email' => str_random(10) . '@gmail.com',
        //         'password' => bcrypt('secret'),
        //         'block' => rand(User::BLOCK, User::UNBLOCK),
        //     ]);
        // }
        DB::table('users')->insert([
                'name' => 'admin',
                'email' =>'admin@admin.com',
                'password' => bcrypt('admin'),
                'block' => User::UNBLOCK,
                'type'=>User::ADMIN,
                'level_id'=>User::DEFAULT_LEVEL,
                'created_at'=>date('Y-m-d H:m:s'),
        ]);
        DB::table('users')->insert([
                'name' => 'teacher',
                'email' =>'teacher@teacher.com',
                'password' => bcrypt('teacher'),
                'block' => User::UNBLOCK,
                'type'=>User::TEACHER,
                'level_id'=>User::DEFAULT_LEVEL,
                'created_at'=>date('Y-m-d H:m:s'),
        ]);
        DB::table('users')->insert([
            'name' => 'student',
            'email' =>'student@student.com',
            'password' => bcrypt('student'),
            'block' => User::UNBLOCK,
            'type'=>User::STUDENT,
            'level_id'=>User::DEFAULT_LEVEL,
            'created_at'=>date('Y-m-d H:m:s'),
        ]);
    }
}

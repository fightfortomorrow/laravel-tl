<?php
use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder {

    public function run(){
        DB::table('users')->truncate();

        $user = new User();
        $user->name = 'admin';
        $user->email = 'xiashuo.he@foxmail.com';
        $user->password = crypt('admin');
        $user->save();
    }

}
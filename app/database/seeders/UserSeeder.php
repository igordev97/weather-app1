<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userName = $this->command->getOutput()->ask('Unesite vase ime');
        if($userName === null){
            $this->command->getOutput()->error('Niste uneli ispravno ime');
            return;
        }
        $email = $this->command->getOutput()->ask('Unesite email');
        if($email === null){
            $this->command->getOutput()->error('Niste uneli ispravno mail');
            return;
        }
        $user = User::where('email', $email)->first();
        if($user instanceof User){
            $this->command->getOutput()->error('Email vec postoji');
            return;
        }

        $password = $this->command->getOutput()->ask('Unesite lozinku.Ukoliko ne unesete nista default lozink ja 1234','1234');

        User::create([
            'name' => $userName,
            'email' => $email,
            'password' => Hash::make($password),
            'role'=>'user'
        ]);

        $this->command->getOutput()->info('Uspeso ste registrovali novog korisnika');
    }
}

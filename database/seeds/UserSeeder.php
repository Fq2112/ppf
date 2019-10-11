<?php

use Faker\Factory;
use App\User;
use App\Support\Role;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('id_ID');

        User::create([
            'name' => 'Fiqy Ainuzzaqy',
            'username' => 'fq_whysoserious',
            'email' => 'fiqy_a@ppf.co.id',
            'password' => bcrypt('ppfindonesia2112'),
            'role' => Role::ROOT,
        ]);

        User::create([
            'name' => 'Sindhu',
            'username' => 'sindhu.scott.royce',
            'email' => 'sindhu@ppf.co.id',
            'password' => bcrypt('ppfindonesia2112'),
            'role' => Role::ROOT,
        ]);

        for ($i=0;$i<5;$i++){
            User::create([
                'name' => $faker->firstName.' '.$faker->lastName,
                'username' => strtolower($faker->userName),
                'email' => $faker->safeEmail,
                'password' => bcrypt('ppfindonesia2112'),
                'role' => Role::ADMIN,
                'about' => \Faker\Factory::create()->paragraph
            ]);
        }

        foreach(User::where('role', Role::ADMIN)->get() as $row){
            $row->update(['email' => strtolower(str_replace(' ','',$row->name)).'@ppf.co.id']);
        }
    }
}

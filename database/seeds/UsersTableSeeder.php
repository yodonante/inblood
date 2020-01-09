<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $donito = Role::find(1); // donito
        $admin = Role::find(2); // admin

        User::truncate();
        $admin= new User;
        $admin->email="jhonatan@yodonante.com";
        $admin->password=bcrypt('Halamadrid');
        $admin->persona_id=1;
        $admin->centromedico_id=1;
        $admin->save();
        $admin->assignRole('donito');
        $admin->assignRole('admin');

        $admin= new User;
        $admin->email="felipe@yodonante.com";
        $admin->password=bcrypt('Pipo123');
        $admin->persona_id=2;
        $admin->centromedico_id=1;
        $admin->save();
        $admin->assignRole('donito');
        $admin->assignRole('admin');

        $admin= new User;
        $admin->email="luis@yodonante.com";
        $admin->password=bcrypt('Paradise123');
        $admin->persona_id=3;
        $admin->centromedico_id=1;
        $admin->save();
        $admin->assignRole('donito');
        $admin->assignRole('admin');

        $admin= new User;
        $admin->email="claudia@yodonante.com";
        $admin->password=bcrypt('Paradise321');
        $admin->persona_id=4;
        $admin->centromedico_id=1;
        $admin->save();
        $admin->assignRole('donito');
        $admin->assignRole('admin');

        $admin= new User;
        $admin->email="marcos@yodonante.com";
        $admin->password=bcrypt('M123');
        $admin->persona_id=5;
        $admin->centromedico_id=1;
        $admin->save();
        $admin->assignRole('donito');
        $admin->assignRole('admin');

        $admin= new User;
        $admin->email="fernanda@yodonante.com";
        $admin->password=bcrypt('noteconectes');
        $admin->persona_id=6;
        $admin->centromedico_id=1;
        $admin->save();
        $admin->assignRole('donito');
        $admin->assignRole('admin');

        $admin= new User;
        $admin->email="edwin@yodonante.com";
        $admin->password=bcrypt('homerojsimpson');
        $admin->persona_id=7;
        $admin->centromedico_id=1;
        $admin->save();
        $admin->assignRole('donito');
        $admin->assignRole('admin');
    }
}

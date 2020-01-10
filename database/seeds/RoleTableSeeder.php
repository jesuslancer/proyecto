<?php
use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = 'admin';
        $role->description = 'Administrador';
        $role->save();        

        $role = new Role();
        $role->name = 'utp';
        $role->description = 'Cordinador de registros ';
        $role->save();

        $role = new Role();
        $role->name = 'profesor';
        $role->description = 'Profesor';
        $role->save();

        $role = new Role();
        $role->name = 'usuario';
        $role->description = 'Usuario';
        $role->save();
    }
}

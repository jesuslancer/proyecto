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
        $role->name = 'proveedor';
        $role->description = 'Proveedor de productos';
        $role->save();

        $role = new Role();
        $role->name = 'vendedor';
        $role->description = 'Representante de ventas';
        $role->save();

        $role = new Role();
        $role->name = 'cliente';
        $role->description = 'Usuario';
        $role->save();
    }
}

<?php

namespace Database\Seeders;

use App\Models\Module;
use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModulePermissionSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->permissionTypes();

        $modules = Module::MODULE_LIST;

        // FOR existing packages to update
        DB::statement("DELETE FROM modules WHERE module_name='ticket support';");
        DB::statement("UPDATE modules SET module_name=REPLACE( module_name, 'Zoom', 'zoom' );");


        foreach ($modules as $module) {
            $insert = Module::updateOrCreate(
                ['module_name' => $module['module_name']],
                ['description' => $module['description'] ?? null]
            );


            // Run for every permissions
            foreach ($module['permissions'] as $permission) {
                $permission['module_id'] = $insert->id;
                $permission['display_name'] = $permission['display_name'] ?? ucwords(str_replace('_', ' ', $permission['name']));

                Permission::updateOrCreate(
                    ['module_id' => $permission['module_id'], 'name' => $permission['name']],
                    $permission
                );

            }
        }
    }

    private function permissionTypes()
    {
        \DB::table('permission_types')->insert([
            ['name' => 'added'],
            ['name' => 'owned'],
            ['name' => 'both'],
            ['name' => 'all'],
            ['name' => 'none']
        ]);
    }

}

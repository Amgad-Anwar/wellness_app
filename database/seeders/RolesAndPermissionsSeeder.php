<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $gardName = config('auth.defaults.guard');
        $permissionsByRole = [
            'admin' => [
               
                // 'case_management.requests' ,
                // 'case_management.requests.edit' ,
                // 'case_management.requests.update' ,
                // 'case_management.requests.create' ,
                // 'case_management.requests.store' ,
                // 'case_management.requests.destroy' ,

                
            ],
        ];


        $insertPermissions = fn ($role) => collect($permissionsByRole[$role])
            ->map(fn ($name) => DB::table(config('permission.table_names.permissions'))->insertGetId(['name' => $name, 'group' => ucfirst(explode('.', str_replace('_', ' ', $name))[0]), 'guard_name' => $gardName, 'created_at' => now(),]))
            ->toArray();

        $permissionIdsByRole = [
            'admin' => $insertPermissions('admin'),
        ];

        foreach ($permissionIdsByRole as $roleName => $permissionIds) {
            $role = Role::whereName($roleName)->first();
            if (!$role) {
                $role = Role::create([
                    'name' => $roleName,
                    'description' => 'Best for business owners and company administrators',
                    'guard_name' => $gardName,
                    'created_at' => now(),
                ]);
            }
            DB::table(config('permission.table_names.role_has_permissions'))
                ->insert(
                    collect($permissionIds)->map(fn ($id) => [
                        'role_id' => $role->id,
                        'permission_id' => $id,
                    ])->toArray()
                );
            $user = User::where('name', $roleName)->first();
            if ($user) {
                $user->assignRole($role);
                //$user->givePermissionTo(DB::table('permissions')->whereIn('id',$permissionIds)->pluck('name')->toArray());
            }
        }
    }
}

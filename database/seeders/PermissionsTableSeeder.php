<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'auth_profile_edit',
            ],
            [
                'id'    => 2,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 3,
                'title' => 'permission_create',
            ],
            [
                'id'    => 4,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 5,
                'title' => 'permission_show',
            ],
            [
                'id'    => 6,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 7,
                'title' => 'permission_access',
            ],
            [
                'id'    => 8,
                'title' => 'role_create',
            ],
            [
                'id'    => 9,
                'title' => 'role_edit',
            ],
            [
                'id'    => 10,
                'title' => 'role_show',
            ],
            [
                'id'    => 11,
                'title' => 'role_delete',
            ],
            [
                'id'    => 12,
                'title' => 'role_access',
            ],
            [
                'id'    => 13,
                'title' => 'user_create',
            ],
            [
                'id'    => 14,
                'title' => 'user_edit',
            ],
            [
                'id'    => 15,
                'title' => 'user_show',
            ],
            [
                'id'    => 16,
                'title' => 'user_delete',
            ],
            [
                'id'    => 17,
                'title' => 'user_access',
            ],
            [
                'id'    => 18,
                'title' => 'campaign_create',
            ],
            [
                'id'    => 19,
                'title' => 'campaign_edit',
            ],
            [
                'id'    => 20,
                'title' => 'campaign_show',
            ],
            [
                'id'    => 21,
                'title' => 'campaign_delete',
            ],
            [
                'id'    => 22,
                'title' => 'campaign_access',
            ],
            [
                'id'    => 23,
                'title' => 'game_create',
            ],
            [
                'id'    => 24,
                'title' => 'game_edit',
            ],
            [
                'id'    => 25,
                'title' => 'game_show',
            ],
            [
                'id'    => 26,
                'title' => 'game_delete',
            ],
            [
                'id'    => 27,
                'title' => 'game_access',
            ],
            [
                'id'    => 28,
                'title' => 'system_calendar_access',
            ],
            [
                'id'    => 29,
                'title' => 'personnage_access',
            ],
            [
                'id'    => 30,
                'title' => 'player_create',
            ],
            [
                'id'    => 31,
                'title' => 'player_edit',
            ],
            [
                'id'    => 32,
                'title' => 'player_show',
            ],
            [
                'id'    => 33,
                'title' => 'player_delete',
            ],
            [
                'id'    => 34,
                'title' => 'player_access',
            ],
            [
                'id'    => 35,
                'title' => 'skill_create',
            ],
            [
                'id'    => 36,
                'title' => 'skill_edit',
            ],
            [
                'id'    => 37,
                'title' => 'skill_show',
            ],
            [
                'id'    => 38,
                'title' => 'skill_delete',
            ],
            [
                'id'    => 39,
                'title' => 'skill_access',
            ],
        ];

        Permission::insert($permissions);
    }
}

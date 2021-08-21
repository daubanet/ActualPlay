<?php

return [
    'userManagement' => [
        'title'          => 'Gestion des utilisateurs',
        'title_singular' => 'Gestion des utilisateurs',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Rôles',
        'title_singular' => 'Rôle',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Utilisateurs',
        'title_singular' => 'Utilisateur',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
            'player'                   => 'Player',
            'player_helper'            => ' ',
        ],
    ],
    'campaign' => [
        'title'          => 'Campaign',
        'title_singular' => 'Campaign',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'photo'              => 'Photo',
            'photo_helper'       => ' ',
            'start'              => 'Start',
            'start_helper'       => ' ',
            'end'                => 'End',
            'end_helper'         => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'game'               => 'Game',
            'game_helper'        => ' ',
        ],
    ],
    'game' => [
        'title'          => 'Game',
        'title_singular' => 'Game',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'start'             => 'Start',
            'start_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'systemCalendar' => [
        'title'          => 'Calendar',
        'title_singular' => 'Calendar',
    ],
    'personnage' => [
        'title'          => 'Personnages',
        'title_singular' => 'Personnage',
    ],
    'player' => [
        'title'          => 'Player',
        'title_singular' => 'Player',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'sex'                => 'Sex',
            'sex_helper'         => ' ',
            'occupation'         => 'Occupation',
            'occupation_helper'  => ' ',
            'age'                => 'Age',
            'age_helper'         => ' ',
            'income'             => 'Income',
            'income_helper'      => ' ',
            'savings'            => 'Savings',
            'savings_helper'     => ' ',
            'nationality'        => 'Nationality',
            'nationality_helper' => ' ',
            'residence'          => 'Residence',
            'residence_helper'   => ' ',
            'str'                => 'Str',
            'str_helper'         => ' ',
            'dex'                => 'Dex',
            'dex_helper'         => ' ',
            'int'                => 'Int',
            'int_helper'         => ' ',
            'idea'               => 'Idea',
            'idea_helper'        => ' ',
            'con'                => 'Con',
            'con_helper'         => ' ',
            'app'                => 'App',
            'app_helper'         => ' ',
            'pow'                => 'Pow',
            'pow_helper'         => ' ',
            'luck'               => 'Luck',
            'luck_helper'        => ' ',
            'siz'                => 'Siz',
            'siz_helper'         => ' ',
            'san'                => 'San',
            'san_helper'         => ' ',
            'edu'                => 'Edu',
            'edu_helper'         => ' ',
            'know'               => 'Know',
            'know_helper'        => ' ',
            'schools'            => 'Schools',
            'schools_helper'     => ' ',
            'degrees'            => 'Degrees',
            'degrees_helper'     => ' ',
            'damage'             => 'Damage',
            'damage_helper'      => ' ',
            'skill'              => 'Skill',
            'skill_helper'       => ' ',
        ],
    ],
    'skill' => [
        'title'          => 'Skill',
        'title_singular' => 'Skill',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'value'              => 'Value',
            'value_helper'       => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'start'              => 'Start',
            'start_helper'       => ' ',
            'is_checked'         => 'Is Checked',
            'is_checked_helper'  => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
];

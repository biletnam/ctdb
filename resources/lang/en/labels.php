<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Labels Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in labels throughout the system.
    | Regardless where it is placed, a label can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'general' => [
        'all'     => 'All',
        'yes'     => 'Yes',
        'no'      => 'No',
        'copyright' => 'Copyright',
        'custom'  => 'Custom',
        'actions' => 'Actions',
        'active'  => 'Active',
        'buttons' => [
            'save'   => 'Save',
            'update' => 'Update',
        ],
        'hide'              => 'Hide',
        'inactive'          => 'Inactive',
        'none'              => 'None',
        'show'              => 'Show',
        'toggle_navigation' => 'Toggle Navigation',
    ],

    'backend' => [
        'ctdb' => [
            'companies' => [
                'create'     => 'Create Company',
                'edit'       => 'Edit Company',
                'management' => 'Company Management',

                'table' => [
                    'name'            => 'Name',
                    'address1'        => 'Address',
                    'city'            => 'City',
                    'zip'             => 'Zip Code',
                    'total'           => 'company total|companies total',
                ],
                'fields' => [
                    'name'            => 'Name',
                    'address1'        => 'Address',
                    'address2'        => '<p class="font-weight-light">(optional)</p>',
                    'city'            => 'City',
                    'state'           => 'State',
                    'zip'             => 'Zip Code',
                    'contact'         => 'Contact <span class="font-weight-light">(optional)</span>',
                    'phone'           => 'Phone <span class="font-weight-light">(optional)</span>',
                    'email'           => 'Email <span class="font-weight-light">(optional)</span>',
                    'description'     => 'Description <span class="font-weight-light">(optional)</span>',
                    'weblink'         => 'Web Site <span class="font-weight-light">(optional)</span>',
                    'facebooklink'    => 'Facebook <span class="font-weight-light">(optional)</span>',
                    'twitterlink'     => 'Twitter <span class="font-weight-light">(optional)</span>',
                    'youtubelink'     => 'YouTube <span class="font-weight-light">(optional)</span>',
                    'instagramlink'   => 'Instagram <span class="font-weight-light">(optional)</span>',
                    'primaryvenue'    => 'Primary Venue <span class="font-weight-light">(optional)</span>',
                    'type'            => 'Company Type',
                ],
            ],
            'venues' => [
                'create'     => 'Create Venue',
                'edit'       => 'Edit Venue',
                'management' => 'Venue Management',

                'table' => [
                    'name'            => 'Name',
                    'address1'        => 'Address',
                    'city'            => 'City',
                    'zip'             => 'Zip Code',
                    'total'           => 'venue total|venues total',
                ],
                'fields' => [
                    'name'            => 'Name',
                    'address1'        => 'Address',
                    'address2'        => '',
                    'city'            => 'City',
                    'state'           => 'State',
                    'zip'             => 'Zip Code',
                    'contact'         => 'Contact',
                    'phone'           => 'Phone',
                    'email'           => 'Email',
                    'description'     => 'Description',
                    'weblink'         => 'Web Site',
                    'facebooklink'    => 'Facebook',
                    'twitterlink'     => 'Twitter',
                    'youtubelink'     => 'YouTube',
                    'instagramlink'   => 'Instagram',
                ],
            ],
            'types' => [
                'create'     => 'Create Company Type',
                'edit'       => 'Edit Company Type',
                'management' => 'Company Type Management',

                'table' => [
                    'name'            => 'Name',
                    'total'           => 'company type total|company types total',
                ],
            ],
            'genres' => [
                'create'     => 'Create Genre',
                'edit'       => 'Edit Genre',
                'management' => 'Genre Management',

                'table' => [
                    'name'            => 'Name',
                    'total'           => 'genre total|genres total',
                ],
            ],
            'licensors' => [
                'create'     => 'Create Licensor',
                'edit'       => 'Edit Licensor',
                'management' => 'Licensor Management',

                'table' => [
                    'name'            => 'Name',
                    'weblink'         => 'Web Link',
                    'total'           => 'licensor total|licensors total',
                ],
            ],
        ],

        'access' => [
            'roles' => [
                'create'     => 'Create Role',
                'edit'       => 'Edit Role',
                'management' => 'Role Management',

                'table' => [
                    'number_of_users' => 'Number of Users',
                    'permissions'     => 'Permissions',
                    'role'            => 'Role',
                    'sort'            => 'Sort',
                    'total'           => 'role total|roles total',
                ],
            ],

            'users' => [
                'active'              => 'Active Users',
                'all_permissions'     => 'All Permissions',
                'change_password'     => 'Change Password',
                'change_password_for' => 'Change Password for :user',
                'create'              => 'Create User',
                'deactivated'         => 'Deactivated Users',
                'deleted'             => 'Deleted Users',
                'edit'                => 'Edit User',
                'management'          => 'User Management',
                'no_permissions'      => 'No Permissions',
                'no_roles'            => 'No Roles to set.',
                'permissions'         => 'Permissions',

                'table' => [
                    'confirmed'      => 'Confirmed',
                    'created'        => 'Created',
                    'email'          => 'E-mail',
                    'id'             => 'ID',
                    'last_updated'   => 'Last Updated',
                    'name'           => 'Name',
                    'screen_name'     => 'Screen Name',
                    'first_name'     => 'First Name',
                    'last_name'      => 'Last Name',
                    'no_deactivated' => 'No Deactivated Users',
                    'no_deleted'     => 'No Deleted Users',
                    'other_permissions' => 'Other Permissions',
                    'permissions' => 'Permissions',
                    'roles'          => 'Roles',
                    'social' => 'Social',
                    'total'          => 'user total|users total',
                ],

                'tabs' => [
                    'titles' => [
                        'overview' => 'Overview',
                        'history'  => 'History',
                    ],

                    'content' => [
                        'overview' => [
                            'avatar'       => 'Avatar',
                            'confirmed'    => 'Confirmed',
                            'created_at'   => 'Created At',
                            'deleted_at'   => 'Deleted At',
                            'email'        => 'E-mail',
                            'last_updated' => 'Last Updated',
                            'name'         => 'Name',
                            'screen_name'  => 'Screen Name',
                            'first_name'   => 'First Name',
                            'last_name'    => 'Last Name',
                            'status'       => 'Status',
                        ],
                    ],
                ],

                'view' => 'View User',
            ],
        ],
    ],

    'frontend' => [

        'auth' => [
            'login_box_title'    => 'Login',
            'login_button'       => 'Login',
            'login_with'         => 'Login with :social_media',
            'register_box_title' => 'Register',
            'register_button'    => 'Register',
            'remember_me'        => 'Remember Me',
        ],

        'contact' => [
            'box_title' => 'Contact Us',
            'button' => 'Send Information',
        ],

        'passwords' => [
            'expired_password_box_title' => 'Your password has expired.',
            'forgot_password'                 => 'Forgot Your Password?',
            'reset_password_box_title'        => 'Reset Password',
            'reset_password_button'           => 'Reset Password',
            'update_password_button'           => 'Update Password',
            'send_password_reset_link_button' => 'Send Password Reset Link',
        ],

        'user' => [
            'passwords' => [
                'change' => 'Change Password',
            ],

            'profile' => [
                'avatar'             => 'Avatar',
                'created_at'         => 'Created At',
                'edit_information'   => 'Edit Information',
                'email'              => 'E-mail',
                'last_updated'       => 'Last Updated',
                'name'               => 'Name',
                'screen_name'        => 'Screen Name',
                'first_name'         => 'First Name',
                'last_name'          => 'Last Name',
                'update_information' => 'Update Information',
            ],
        ],

    ],
];

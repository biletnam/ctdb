<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Labels Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in labels throughout the CTDB subsystem.
    | Regardless where it is placed, a label can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'backend' => [
        'genre' => [
            'headings' => [
                'management'        => "Genre Management",
                'create'            => "Create Genre",
                'edit'              => "Edit Genre",
            ],
            'fields' => [
                'labels' => [
                    'name'          => 'Name',
                ],
                'placeholders' => [
                    'name'          => 'Name'
                ],
            ],
            'table' => [
                'columns' => [
                    'name'          => 'Name',
                ],
                'total'             => 'genre total|genres total',
            ],
        ],
        'type' => [
            'headings' => [
                'management'        => "Company Type Management",
                'create'            => "Create Company Type",
                'edit'              => "Edit Company Type",
            ],
            'fields' => [
                'labels' => [
                    'name'          => 'Name',
                ],
                'placeholders' => [
                    'name'          => 'Name',
                ],
            ],
            'table' => [
                'columns' => [
                    'name'          => 'Name',
                ],
                'total'             => 'type total|types total',
            ],
        ],
        'licensor' => [
            'headings' => [
                'management'        => "Licensor Management",
                'create'            => "Create Licensor",
                'edit'              => "Edit Licensor",
            ],
            'fields' => [
                'labels' => [
                    'name'          => 'Name',
                    'weblink'       => 'Web Link',
                ],
                'placeholders' => [
                    'name'          => 'Name',
                    'weblink'       => 'Include https:// etc...',
                ],
            ],
            'table' => [
                'columns' => [
                    'name'          => 'Name',
                    'weblink'       => 'Web Link',
                ],
                'total'             => 'licensor total|licensors total',
            ],
        ],
        'venue' => [
            'headings' => [
                'management'        => "Venue Management",
                'create'            => "Create Venue",
                'edit'              => "Edit Venue",
            ],
            'fields' => [
                'labels' => [
                    'name'          => 'Name',
                    'address1'      => 'Address',
                    'address2'      => '',
                    'city'          => 'City',
                    'state'         => 'State',
                    'zip'           => 'Zip Code',
                    'contact'       => 'Contact',
                    'phone'         => 'Telephone',
                    'email'         => 'Email',
                    'description'   => 'Description',
                    'weblink'       => 'Web Site',
                    'facebooklink'  => 'Facebook Page',
                    'twitterlink'   => 'Twitter Feed',
                    'youtubelink'   => 'YouTube Channel',
                    'instagramlink' => 'Instagram',
                ],
                'placeholders' => [
                    'name'          => 'Name',
                    'address1'      => 'Address',
                    'address2'      => '',
                    'city'          => 'City',
                    'state'         => 'State',
                    'zip'           => 'Zip Code',
                    'contact'       => 'Contact',
                    'phone'         => 'Telephone',
                    'email'         => 'Email',
                    'description'   => 'Description',
                    'weblink'       => 'Web Site',
                    'facebooklink'  => 'Facebook Page',
                    'twitterlink'   => 'Twitter Feed',
                    'youtubelink'   => 'YouTube Channel',
                    'instagramlink' => 'Instagram',
                ],
            ],
            'table' => [
                'columns' => [
                    'name'          => 'Name',
                    'city'          => 'City',
                    'zip'           => 'Zip Code',
                ],
                'total'             => 'venue total|venues total',
            ],
        ],
    ],
];

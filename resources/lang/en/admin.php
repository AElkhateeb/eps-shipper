<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Last login',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'slider' => [
        'title' => 'Sliders',

        'actions' => [
            'index' => 'Sliders',
            'create' => 'New Slider',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            
        ],
    ],

    'slider' => [
        'title' => 'Sliders',

        'actions' => [
            'index' => 'Sliders',
            'create' => 'New Slider',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'text' => 'Text',
            'activated' => 'Activated',
            'is_published' => 'Is published',
            'link1' => 'Link1',
            'link2' => 'Link2',
            
        ],
    ],

    'identity' => [
        'title' => 'Identities',

        'actions' => [
            'index' => 'Identities',
            'create' => 'New Identity',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'text' => 'Text',
            
        ],
    ],

    '$table;' => [
        'title' => '$Table-;',

        'actions' => [
            'index' => '$Table-;',
            'create' => 'New $Table-;',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            
        ],
    ],

    'pro' => [
        'title' => 'Pros',

        'actions' => [
            'index' => 'Pros',
            'create' => 'New Pro',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'link1' => 'Link1',
            'title' => 'Title',
            'text' => 'Text',
            
        ],
    ],

    'service' => [
        'title' => 'Services',

        'actions' => [
            'index' => 'Services',
            'create' => 'New Service',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'text' => 'Text',
            'body' => 'Body',
            'is_published' => 'Is published',
            
        ],
    ],

    'job' => [
        'title' => 'Jobs',

        'actions' => [
            'index' => 'Jobs',
            'create' => 'New Job',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'text' => 'Text',
            'is_published' => 'Is published',
            
        ],
    ],

    'application' => [
        'title' => 'Applications',

        'actions' => [
            'index' => 'Applications',
            'create' => 'New Application',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            
        ],
    ],

    'testimonial' => [
        'title' => 'Testimonials',

        'actions' => [
            'index' => 'Testimonials',
            'create' => 'New Testimonial',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'job' => 'Job',
            'text' => 'Text',
            'is_published' => 'Is published',
            
        ],
    ],

    'social' => [
        'title' => 'Socials',

        'actions' => [
            'index' => 'Socials',
            'create' => 'New Social',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'icon' => 'Icon',
            'link' => 'Link',
            'is_published' => 'Is published',
            
        ],
    ],

    'package' => [
        'title' => 'Packages',

        'actions' => [
            'index' => 'Packages',
            'create' => 'New Package',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'weight' => 'Weight',
            'number' => 'Number',
            'is_published' => 'Is published',
            
        ],
    ],

    'page' => [
        'title' => 'Pages',

        'actions' => [
            'index' => 'Pages',
            'create' => 'New Page',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'h1' => 'H1',
            'body' => 'Body',
            'is_published' => 'Is published',
            
        ],
    ],

    'shipment' => [
        'title' => 'Shipments',

        'actions' => [
            'index' => 'Shipments',
            'create' => 'New Shipment',
            'edit' => 'Edit :name',
            'will_be_published' => 'Shipment will be published at',
        ],

        'columns' => [
            'id' => 'ID',
            'weight' => 'Weight',
            'pkg_num' => 'Pkg num',
            'status' => 'Status',
            'published_at' => 'Published at',
            'end_at' => 'End at',
            'prod_kind' => 'Prod kind',
            'prod_price' => 'Prod price',
            'way_id' => 'Way',
            'from_user_id' => 'From user',
            'to_user_id' => 'To user',
            'pay_way' => 'Pay way',
            
        ],
    ],

    'place' => [
        'title' => 'Places',

        'actions' => [
            'index' => 'Places',
            'create' => 'New Place',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'enabled' => 'Enabled',
            'parent_id' => 'Parent',
            'bransh_id' => 'Bransh',
            
        ],
    ],

    'way' => [
        'title' => 'Ways',

        'actions' => [
            'index' => 'Ways',
            'create' => 'New Way',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'price' => 'Price',
            'time' => 'Time',
            'enabled' => 'Enabled',
            'from_id' => 'From',
            'to_id' => 'To',
            
        ],
    ],

    'pay-way' => [
        'title' => 'Pay Ways',

        'actions' => [
            'index' => 'Pay Ways',
            'create' => 'New Pay Way',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'fees' => 'Fees',
            'sale' => 'Sale',
            'enabled' => 'Enabled',
            
        ],
    ],

    'withdrawal' => [
        'title' => 'Withdrawals',

        'actions' => [
            'index' => 'Withdrawals',
            'create' => 'New Withdrawal',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'price' => 'Price',
            'status' => 'Status',
            'in_out' => 'In out',
            'enabled' => 'Enabled',
            'from_id' => 'From',
            'to_id' => 'To',
            'way_id' => 'Way',
            
        ],
    ],

    'wallet' => [
        'title' => 'Wallets',

        'actions' => [
            'index' => 'Wallets',
            'create' => 'New Wallet',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'money' => 'Money',
            'belongs_to' => 'Belongs to',
            'belongs_to_id' => 'Belongs to',
            
        ],
    ],

    'withdrawal' => [
        'title' => 'Withdrawals',

        'actions' => [
            'index' => 'Withdrawals',
            'create' => 'New Withdrawal',
            'edit' => 'Edit :name',
            'export' => 'Export',
        ],

        'columns' => [
            'id' => 'ID',
            'price' => 'Price',
            'status' => 'Status',
            'in_out' => 'In out',
            'enabled' => 'Enabled',
            'from_id' => 'From',
            'to_id' => 'To',
            'way_id' => 'Way',
            
        ],
    ],

    'shipment' => [
        'title' => 'Shipments',

        'actions' => [
            'index' => 'Shipments',
            'create' => 'New Shipment',
            'edit' => 'Edit :name',
            'export' => 'Export',
            'will_be_published' => 'Shipment will be published at',
        ],

        'columns' => [
            'id' => 'ID',
            'weight' => 'Weight',
            'pkg_num' => 'Pkg num',
            'status' => 'Status',
            'published_at' => 'Published at',
            'end_at' => 'End at',
            'prod_kind' => 'Prod kind',
            'prod_price' => 'Prod price',
            'way_id' => 'Way',
            'from_user_id' => 'From user',
            'to_user_id' => 'To user',
            'pay_way' => 'Pay way',
            
        ],
    ],

    'way' => [
        'title' => 'Ways',

        'actions' => [
            'index' => 'Ways',
            'create' => 'New Way',
            'edit' => 'Edit :name',
            'export' => 'Export',
        ],

        'columns' => [
            'id' => 'ID',
            'price' => 'Price',
            'time' => 'Time',
            'enabled' => 'Enabled',
            'from_id' => 'From',
            'to_id' => 'To',
            
        ],
    ],

    'contact' => [
        'title' => 'Contacts',

        'actions' => [
            'index' => 'Contacts',
            'create' => 'New Contact',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'icon' => 'Icon',
            'title' => 'Title',
            'text' => 'Text',
            'is_published' => 'Is published',
            
        ],
    ],

    'application' => [
        'title' => 'Applications',

        'actions' => [
            'index' => 'Applications',
            'create' => 'New Application',
            'edit' => 'Edit :name',
            'export' => 'Export',
        ],

        'columns' => [
            'id' => 'ID',
            'fullname' => 'Fullname',
            'job_id' => 'Job',
            'bday' => 'Bday',
            'male' => 'Male',
            'military' => 'Military',
            'email' => 'Email',
            'phone' => 'Phone',
            'phone_2' => 'Phone 2',
            'city' => 'City',
            'area' => 'Area',
            'education' => 'Education',
            'experience' => 'Experience',
            
        ],
    ],

    'contact' => [
        'title' => 'Contacts',

        'actions' => [
            'index' => 'Contacts',
            'create' => 'New Contact',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'icon' => 'Icon',
            'title' => 'Title',
            'text' => 'Text',
            'is_published' => 'Is published',
            'branch_id' => 'Branch',
            
        ],
    ],

    'branch' => [
        'title' => 'Branches',

        'actions' => [
            'index' => 'Branches',
            'create' => 'New Branch',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'location' => 'Location',
            'name' => 'Name',
            'governrate' => 'Governrate',
            'is_published' => 'Is published',
            'manger' => 'Manger',
            
        ],
    ],

    'branch' => [
        'title' => 'Branches',

        'actions' => [
            'index' => 'Branches',
            'create' => 'New Branch',
            'edit' => 'Edit :name',
            'export' => 'Export',
        ],

        'columns' => [
            'id' => 'ID',
            'location' => 'Location',
            'name' => 'Name',
            'governrate' => 'Governrate',
            'is_published' => 'Is published',
            'manger' => 'Manger',
            
        ],
    ],

    'receivere' => [
        'title' => 'Receiveres',

        'actions' => [
            'index' => 'Receiveres',
            'create' => 'New Receivere',
            'edit' => 'Edit :name',
            'export' => 'Export',
        ],

        'columns' => [
            'id' => 'ID',
            
        ],
    ],

    'client' => [
        'title' => 'Clients',

        'actions' => [
            'index' => 'Clients',
            'create' => 'New Client',
            'edit' => 'Edit :name',
            'export' => 'Export',
        ],

        'columns' => [
            'id' => 'ID',
            'fullname' => 'Fullname',
            'address' => 'Address',
            'phone' => 'Phone',
            'phone_2' => 'Phone 2',
            'city' => 'City',
            'area' => 'Area',
            
        ],
    ],

    'client' => [
        'title' => 'Clients',

        'actions' => [
            'index' => 'Clients',
            'create' => 'New Client',
            'edit' => 'Edit :name',
            'export' => 'Export',
        ],

        'columns' => [
            'id' => 'ID',
            'phone' => 'Phone',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];
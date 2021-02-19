<?php

return [
    'userManagement' => [
        'title'          => 'إدارة المستخدم',
        'title_singular' => 'إدارة المستخدم',
    ],
    'management' => [
        'title'          => 'إدارة الموقع',
        'title_singular' => 'إدارة المستخدم',
    ],
    'office' => [
        'title'          => 'إدارة المكاتب',
        'title_singular' => 'إدارة المستخدم',
    ],
    'permission'     => [
        'title'          => 'أذونات',
        'title_singular' => 'الصلاحية',
        'fields'         => [
            'id'                => 'الرقم',
            'id_helper'         => ' ',
            'title'             => 'الاسم',
            'title_helper'      => ' ',
            'created_at'        => 'تاريخ الإضافة',
            'created_at_helper' => ' ',
            'updated_at'        => 'تاريخ التحديث',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'تاريخ الحذف',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role'           => [
        'title'          => 'الأدوار',
        'title_singular' => 'وظيفة',
        'fields'         => [
            'id'                 => 'الرقم',
            'id_helper'          => ' ',
            'title'              => 'الاسم',
            'title_helper'       => ' ',
            'permissions'        => 'أذونات',
            'permissions_helper' => ' ',
            'created_at'         => 'تاريخ الإضافة',
            'created_at_helper'  => ' ',
            'updated_at'         => 'تاريخ التحديث',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'تاريخ الحذف',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user'           => [
        'title'          => 'المستخدمون',
        'title_singular' => 'المستخدم',
        'fields'         => [
            'id'                       => 'الرقم',
            'id_helper'                => ' ',
            'name'                     => 'الاسم',
            'name_helper'              => ' ',
            'email'                    => 'البريد',
            'email_helper'             => ' ',
            'email_verified_at'        => 'تم التحقق من البريد الإلكتروني',
            'email_verified_at_helper' => ' ',
            'password'                 => 'كلمة السر',
            'password_helper'          => ' ',
            'roles'                    => 'الصلاحية',
            'roles_helper'             => ' ',
            'remember_token'           => 'حفظ الدخول',
            'remember_token_helper'    => ' ',
            'created_at'               => 'تاريخ الإضافة',
            'created_at_helper'        => ' ',
            'updated_at'               => 'تاريخ التحديث',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'تاريخ الحذف',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'project'        => [
        'title'          => 'المشاريع',
        'title_singular' => 'المشاريع',
        'fields'         => [
            'id'                  => 'الرقم',
            'id_helper'           => ' ',
            'name'                => 'الاسم',
            'name_helper'         => ' ',
            'description'         => 'الوصف',
            'description_helper'  => ' ',
            'type'                => 'الحالة',
            'type_helper'         => ' ',
            'category'            => 'القسم',
            'category_helper'     => ' ',
            'is_active'           => 'نشط',
            'is_active_helper'    => ' ',
            'price'               => 'المبلغ',
            'price_helper'        => ' ',
            'created_at'          => 'تاريخ الإضافة',
            'created_at_helper'   => ' ',
            'updated_at'          => 'تاريخ التحديث',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'تاريخ الحذف',
            'deleted_at_helper'   => ' ',
            'author'              => 'الكاتب',
            'author_helper'       => ' ',
            'participants'        => 'المشاركين',
            'participants_helper' => ' ',
        ],
    ],
    'client'        => [
        'title'          => 'العملاء',
        'title_singular' => 'عميل',
        'fields'         => [
            'id'                  => 'الرقم',
            'id_helper'           => ' ',
            'name'                => 'الاسم',
            'name_helper'         => ' ',
            'description'         => 'الوصف',
            'description_helper'  => ' ',
            'type'                => 'الحالة',
            'type_helper'         => ' ',
            'category'            => 'القسم',
            'category_helper'     => ' ',
            'is_active'           => 'نشط',
            'is_active_helper'    => ' ',
            'price'               => 'المبلغ',
            'price_helper'        => ' ',
            'created_at'          => 'تاريخ الإضافة',
            'created_at_helper'   => ' ',
            'updated_at'          => 'تاريخ التحديث',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'تاريخ الحذف',
            'deleted_at_helper'   => ' ',
            'author'              => 'الكاتب',
            'author_helper'       => ' ',
            'participants'        => 'المشاركين',
            'participants_helper' => ' ',
        ],
    ],


    'arrow'        => [
        'title'          => 'الأصناف',
        'title_singular' => 'الصنف',
        'fields'         => [
            'id'                  => 'الرقم',
            'id_helper'           => ' ',
            'name'                => 'الاسم',
            'name_helper'         => ' ',
            'addrees'         => 'الوصف',
            'addrees_helper'  => ' ',
            'start_date'                => 'تاريخ البداية',
            'start_date_helper'         => ' ',
            'end_date'            => 'تاريخ النهاية',
            'end_date_helper'     => ' ',
            
        ],
    ],

    'prodect'        => [
        'title'          => 'الاسهم',
        'title_singular' => 'سهم',
        'fields'         => [
            'id'                  => 'الرقم',
            'id_helper'           => ' ',
            'name'                => 'الاسم',
            'name_helper'         => ' ',
            'addrees'         => 'الوصف',
            'addrees_helper'  => ' ',
            'start_date'                => 'تاريخ البداية',
            'start_date_helper'         => ' ',
            'end_date'            => 'تاريخ النهاية',
            'end_date_helper'     => ' ',
            
        ],
    ],
];

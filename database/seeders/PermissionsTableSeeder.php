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
                'name'  => 'إدارة المستخدمين',
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'name'  => 'إنشاء صلاحية',
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'name'  => 'تعديل الصلاحية',
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'name'  => 'عرض الصلاحية',
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'name'  => 'حذف الصلاحية',
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'name'  => 'نافذة الصلاحيات',
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'name'  => 'Create Role',
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'name'  => 'Edit Role',
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'name'  => 'Show Role',
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'name'  => 'Delete Role',
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'name'  => 'Access Role',
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'name'  => 'إنشاء مستخدم',
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'name'  => 'تعديل المستخدم',
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'name'  => 'عرض المستخدم',
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'name'  => 'حذف المستخدم',
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'name'  => 'نافذة المستخدمين',
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'name'  => 'إنشاء مشروع',
                'title' => 'project_create',
            ],
            [
                'id'    => 18,
                'name'  => 'تعديل المشروع',
                'title' => 'project_edit',
            ],
            [
                'id'    => 19,
                'name'  => 'عرض المشروع ',
                'title' => 'project_show',
            ],
            [
                'id'    => 20,
                'name'  => 'حذف المشروع',
                'title' => 'project_delete',
            ],
            [
                'id'    => 21,
                'name'  => 'نافذة المشروعات',
                'title' => 'project_access',
            ],
            [
                'id'    => 22,
                'name'  => 'تغيير كلمة السر',
                'title' => 'profile_password_edit',
            ],
            [
                'id'    => 23,
                'name'  => 'إنشاء عميل',
                'title' => 'client_create',
            ],
            [
                'id'    => 24,
                'name'  => 'تعديل عميل',
                'title' => 'client_edit',
            ],
            [
                'id'    => 25,
                'name'  => 'عرض عميل',
                'title' => 'client_show',
            ],
            [
                'id'    => 26,
                'name'  => 'حذف عميل',
                'title' => 'client_delete',
            ],
            [
                'id'    => 27,
                'name'  => 'نافذة العملاء',
                'title' => 'client_access',
            ],

            [
                'id'    => 28,
                'name'  => 'إنشاء مكتب',
                'title' => 'office_create',
            ],
            [
                'id'    => 29,
                'name'  => 'تعديل المكتب',
                'title' => 'office_edit',
            ],
            [
                'id'    => 30,
                'name'  => 'عرض المكتب',
                'title' => 'office_show',
            ],
            [
                'id'    => 31,
                'name'  => 'حذف المكتب',
                'title' => 'office_delete',
            ],
            [
                'id'    => 32,
                'name'  => 'نافذة المكاتب',
                'title' => 'office_access',
            ],
        ];

        Permission::insert($permissions);
    }
}

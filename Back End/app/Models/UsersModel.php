<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id_user';
    protected $useAutoIncrement = true;

    protected $allowedFields = ['username','full_name','phone','address','email','avatar', 'password', 'role', 'activated','blocked', 'created_at'];
}
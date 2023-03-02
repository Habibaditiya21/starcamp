<?php

namespace App\Models;

use CodeIgniter\Model;

class OrdersModel extends Model
{
    protected $table      = 'orders';
    protected $primaryKey = 'id_order';
    protected $useAutoIncrement = true;

    protected $allowedFields = ['id_user','time', 'order_status'];
}
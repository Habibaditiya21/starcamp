<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderDetailsModel extends Model
{
    protected $table      = 'orderdetails';
    protected $primaryKey = 'id_order_detail';
    protected $useAutoIncrement = true;

    protected $allowedFields = ['id_order','id_product', 'jumlah'];
}
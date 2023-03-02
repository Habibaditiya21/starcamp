<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductsModel extends Model
{
    protected $table      = 'products';
    protected $primaryKey = 'id_product';
    protected $useAutoIncrement = true;

    protected $allowedFields = ['product_name','image', 'kelengkapan', 'price', 'stock'];
}
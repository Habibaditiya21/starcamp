<?php

namespace App\Models;

use CodeIgniter\Model;

class PaymentsModel extends Model
{
    protected $table      = 'payments';
    protected $primaryKey = 'id_payment';
    protected $useAutoIncrement = true;

    protected $allowedFields = ['id_user', 'id_payment_detail', 'payment_status'];
}
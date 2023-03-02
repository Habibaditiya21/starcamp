<?php

namespace App\Models;

use CodeIgniter\Model;

class PaymentDetailsModel extends Model
{
    protected $table      = 'paymentdetails';
    protected $primaryKey = 'id_payment_detail';
    protected $useAutoIncrement = true;

    protected $allowedFields = ['id_order', 'bank_name', 'rek_name', 'date', 'payment_type', 'payment_methode', 'payment_bill', 'payment_proof'];
}
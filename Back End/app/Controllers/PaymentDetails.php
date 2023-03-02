<?php

namespace App\Controllers;
use App\Models\PaymentDetailsModel;
use CodeIgniter\RESTful\ResourceController;

class PaymentDetails extends ResourceController
{
    function __construct(){
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST');
        header("Access-Control-Allow-Headers: X-Requested-With");
        $this->PaymentDetail = new PaymentDetailsModel();
    }
    
    
    public function getAllPaymentDetails()
    {
        $data = $this->PaymentDetail->findAll();
        return $this->respond($data);
    }
    
    public function getPaymentDetailsById()
    {
        $id = $this->request->uri->getSegment(2);
        $data = $this->PaymentDetail->find($id);
        return $this->respond($data);
    }
    
    public function createPaymentDetails()
    {
        $input = $this->request->getVar();
        $res = $this->PaymentDetail->save($input);
        return $this->respond($res);
    }
    
    public function UpdatePaymentDetails()
    {
        $id = $this->request->uri->getSegment(2);
        $input = $this->request->getVar();
        $res = $this->PaymentDetail->update($id, $input);
        return $this->respond($res); 
        
    }
    
    public function deletePaymentDetails()
    {
        $id = $this->request->uri->getSegment(2);
        $res = $this->PaymentDetail->delete($id);
        return $this->respond($res);
    }
}
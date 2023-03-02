<?php

namespace App\Controllers;
use App\Models\PaymentsModel;
use CodeIgniter\RESTful\ResourceController;

class Payments extends ResourceController
{
    function __construct(){
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST');
        header("Access-Control-Allow-Headers: X-Requested-With");
        header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");
        header("Access-Control-Allow-Methods: PUT, POST, GET, OPTIONS, DELETE");
        $this->payment = new PaymentsModel();
    }
    
    
    public function getAllPayment()
    {
        $data = $this->payment->findAll();
        return $this->respond($data);
    }
    
    public function getPaymentById()
    {
        $id = $this->request->uri->getSegment(2);
        $data = $this->payment->find($id);
        return $this->respond($data);
    }
    
    public function createPayment()
    {
        $input = $this->request->getVar();
        $res = $this->payment->save($input);
        return $this->respond($res);
    }
    
    public function UpdatePayment()
    {
        $id = $this->request->uri->getSegment(2);
        $input = $this->request->getVar();
        $res = $this->payment->update($id, $input);
        return $this->respond($res); 
        
    }
    
    public function deletePayment()
    {
        $id = $this->request->uri->getSegment(2);
        $res = $this->payment->delete($id);
        return $this->respond($res);
    }
}
<?php

namespace App\Controllers;
use App\Models\OrderDetailsModel;
use CodeIgniter\RESTful\ResourceController;

class OrderDetails extends ResourceController
{
    function __construct(){
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST');
        header("Access-Control-Allow-Headers: X-Requested-With");
        $this->OrderDetail = new OrderDetailsModel();
    }
    
    
    public function getAllOrderDetails()
    {
        $data = $this->OrderDetail->findAll();
        return $this->respond($data);
    }
    
    public function getOrderDetailsById()
    {
        $id = $this->request->uri->getSegment(2);
        $data = $this->OrderDetail->find($id);
        return $this->respond($data);
    }
    
    public function createOrderDetails()
    {
        $input = $this->request->getVar();
        $res = $this->OrderDetail->save($input);
        return $this->respond($res);
    }
    
    public function UpdateOrderDetails()
    {
        $id = $this->request->uri->getSegment(2);
        $input = $this->request->getVar();
        $res = $this->OrderDetail->update($id, $input);
        return $this->respond($res); 
        
    }
    
    public function deleteOrderDetails()
    {
        $id = $this->request->uri->getSegment(2);
        $res = $this->OrderDetail->delete($id);
        return $this->respond($res);
    }
}
<?php

namespace App\Controllers;
use App\Models\OrdersModel;
use CodeIgniter\RESTful\ResourceController;

class Orders extends ResourceController
{
    function __construct(){
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST');
        header("Access-Control-Allow-Headers: X-Requested-With");
        header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");
        header("Access-Control-Allow-Methods: PUT, POST, GET, OPTIONS, DELETE");
        $this->Order = new OrdersModel();
    }
    
    
    public function getAllOrder()
    {
        $data = $this->Order->findAll();
        return $this->respond($data);
    }
    
    public function getOrderById()
    {
        $id = $this->request->uri->getSegment(2);
        $data = $this->Order->find($id);
        return $this->respond($data);
    }
    
    public function createOrder()
    {
        $input = $this->request->getVar();
        $res = $this->Order->save($input);
        return $this->respond($res);
    }
    
    public function UpdateOrder()
    {
        $id = $this->request->uri->getSegment(2);
        $input = $this->request->getVar();
        $res = $this->Order->update($id, $input);
        return $this->respond($res); 
        
    }
    
    public function deleteOrder()
    {
        $id = $this->request->uri->getSegment(2);
        $res = $this->Order->delete($id);
        return $this->respond($res);
    }
}
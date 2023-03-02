<?php

namespace App\Controllers;
use App\Models\ProductsModel;
use CodeIgniter\RESTful\ResourceController;

class products extends ResourceController
{
    function __construct(){
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST');
        header("Access-Control-Allow-Headers: X-Requested-With");
        header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");
        header("Access-Control-Allow-Methods: PUT, POST, GET, OPTIONS, DELETE");
        $this->produk = new ProductsModel();
    }
    
    
    public function getAllProduct()
    {
        $data = $this->produk->findAll();
        return $this->respond($data);
    }
    
    public function getProductById()
    {
        $id = $this->request->uri->getSegment(2);
        $data = $this->produk->find($id);
        return $this->respond($data);
    }
    
    public function createProduct()
    {
        $input = $this->request->getVar();
        $res = $this->produk->save($input);
        return $this->respond($res);
    }
    
    public function UpdateProduct()
    {
        $id = $this->request->uri->getSegment(2);
        $input = $this->request->getVar();
        $res = $this->produk->update($id, $input);
        return $this->respond($res); 
        
    }
    
    public function deleteProduct()
    {
        $id = $this->request->uri->getSegment(2);
        $res = $this->produk->delete($id);
        return $this->respond($res);
    }
}
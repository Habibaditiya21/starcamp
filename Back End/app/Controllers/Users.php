<?php

namespace App\Controllers;
use App\Models\UsersModel;
use CodeIgniter\RESTful\ResourceController;

class Users extends ResourceController
{
    function __construct(){
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST');
        header("Access-Control-Allow-Headers: X-Requested-With");
        header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");
        header("Access-Control-Allow-Methods: PUT, POST, GET, OPTIONS, DELETE");
        $this->users = new UsersModel();
    }
    
    
    public function getAllUser()
    {
        $data = $this->users->findAll();
        return $this->respond($data);
    }
    
    public function getUserById()
    {
        $id = $this->request->uri->getSegment(2);
        $data = $this->users->find($id);
        return $this->respond($data);
    }
    
    public function createUser()
    {
        $input = $this->request->getVar();
        $res = $this->users->save($input);
        return $this->respond($res);
    }
    
    public function UpdateUser()
    {
        $id = $this->request->uri->getSegment(2);
        $input = $this->request->getVar();
        $res = $this->users->update($id, $input);
        return $this->respond($res); 
        
    }
    
    public function deleteUser()
    {
        $id = $this->request->uri->getSegment(2);
        $res = $this->users->delete($id);
        return $this->respond($res);
    }
}
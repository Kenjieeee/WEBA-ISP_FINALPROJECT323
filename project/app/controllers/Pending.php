<?php

class Pending extends Controller{
    public function index()
    {
        $request = new Reqinfo();
        $arr['status'] ="Pending";
        $data = $request->where($arr);
        $this->view('pending',[
            'data' => $data
        ]);
    }
}

?>
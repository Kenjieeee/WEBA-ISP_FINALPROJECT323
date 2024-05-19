<?php

class Adminhistory extends Controller{
    public function index()
    {
        $request = new Reqinfo();
        $arr['status'] ="Completed";
        $data = $request->where($arr);
        $this->view('adminhistory',[
            'data' => $data
        ]);
    }
}
?>
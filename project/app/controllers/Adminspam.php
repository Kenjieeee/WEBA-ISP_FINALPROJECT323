<?php

class Adminspam extends Controller{
    public function index()
    {
        $request = new Reqinfo();
        $arr['status'] ="Failed";
        $data = $request->where($arr);
        $this->view('adminspam',[
            'data' => $data
        ]);
    }
}
?>
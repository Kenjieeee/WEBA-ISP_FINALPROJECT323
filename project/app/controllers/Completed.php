<?php

class Completed extends Controller{
    public function index()
    {
        $request = new Reqinfo();
        $arr['status'] ="Completed";
        $data = $request->where($arr);
        $this->view('completed',[
            'data' => $data
        ]);
    }
}
?>
<?php

class Adminpending extends Controller{
    public function index()
    {
        $request = new Reqinfo();
        $arr['status'] ="Pending";
        $data = $request->where($arr);
        $this->view('adminpending',[
            'data' => $data
        ]);
    }

    public function approve($id){
        $request = new Reqinfo();
        $arr['status'] = "Approved";
        $request->update($id,$arr);
        redirect('adminpending');
    }
    public function abort($id){
        $request = new Reqinfo();
        $arr['status'] = "Failed";
        $request->update($id,$arr);
        redirect('adminpending');
    }
}
?>
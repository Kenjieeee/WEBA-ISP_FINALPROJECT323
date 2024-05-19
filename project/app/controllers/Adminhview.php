<?php

class Adminhview extends Controller{
    public function index($id)
    {
        
        $request = new Reqinfo();
        $arr['id'] = $id;
        $data = $request->where($arr);
        $row = $data[0];

        $this->view('adminhview',[
            'row' => $row
        ]);
    }
}
?>
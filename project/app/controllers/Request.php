<?php
class Request extends Controller{
    public function index()
    {
        if(isset($_POST['submit'])){
        
            $reqinfo = new Reqinfo();
            $arr['userid'] = $_POST['userid'];
            $arr['fullname'] = $_POST['fullname'];
            $arr['bday'] = $_POST['bday'];
            $arr['bplace'] = $_POST['bplace'];
            $arr['address'] = $_POST['address'];
            $arr['age'] = $_POST['age'];
            $arr['cstatus'] = $_POST['cstatus'];
            date_default_timezone_set('Asia/Manila');
            $date = date('m/d/Y');
            $arr['datesubmit'] = $date;
            $arr['status'] = "Pending";
            $reqinfo->insert($arr);
            redirect('dashboard');
        }
        else{
            $this->view('request');
        }
    }
}
?>
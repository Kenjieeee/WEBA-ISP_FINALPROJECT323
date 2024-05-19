<?php

class Settings extends Controller{
    public function index()
    {

       if(isset($_POST['submit'])){
        $user = new User();
        $id = $_SESSION['USER']->ID;
      
        $allowed[] = 'image/png';
        $allowed[] = 'image/jpeg';

        if ($_FILES['image']['error'] == 0 && in_array($_FILES['image']['type'], $allowed)) {
         
            $folder = "assets/images/";
            if (!file_exists($folder)) {
              mkdir($folder, 0777, true);
            }
            $destination = $folder . $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], $destination);
            $arr['img'] =  $destination;
        }
       
        $arr['fname'] = $_POST['fname'];
        $arr['lname'] = $_POST['lname'];
        $arr['bday'] = $_POST['bday'];
        $arr['bplace'] = $_POST['bplace'];
        $arr['address'] = $_POST['address'];
        $arr['age'] = $_POST['age'];
        $arr['cstatus'] = $_POST['cstatus'];
        $arr['email'] = $_POST['email'];

        $user->update($id,$arr);
        $user_id['ID'] = $id;
        $data= $user->where($user_id);
        $row = $data[0];

        Auth::authenticate($row);
        
        redirect('dashboard');
       }else{
        $this->view('settings');
       }
    }

 
}
?>
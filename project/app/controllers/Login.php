<?php

class Login extends Controller
{
  public function index()
  {
    $errors = [];
    $user = new User();

    if (count($_POST) > 0) {

      $arr['username'] = $_POST['username'];

      $row = $user->first($arr);

      if ($row) {

        if (password_verify($_POST['password'], $row->password)) {

          Auth::authenticate($row);
          redirect('dashboard');
        } else {
          $errors['errors'] = "Invalid email or password!";
        }
      } else {
        $errors['errors'] = "Invalid email or password!";
      }
    }

    $this->view('login', [
      'errors' => $errors
    ]);
  }
}
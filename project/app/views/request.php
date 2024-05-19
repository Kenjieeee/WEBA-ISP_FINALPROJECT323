<?php include "../app/views/partials/header.php"; ?>

    <div class = "maincontent">
        <div class = "requestcontent">
            <h1>REQUEST DOCOMENTS</h1>
            <br><hr>
                <form action="" method = "POST">
                    <div class = "mainrequestcontents">
                        <h3>Personal Information</h3><br>
                        <hr><br>
                        <label for="">Fulname: </label>
                        <label for=""><?= $_SESSION['USER']->fname ."  ". $_SESSION['USER']->lname?></label>
                        <br><br>
                        <label for="">Birthday: </label>
                        <label for=""><?=$_SESSION['USER']->bday?></label>
                        <br><br>
                        <label for="">Birthplace: </label>
                        <label for=""><?=$_SESSION['USER']->bplace?></label>
                        <br><br>
                        <label for="">Address: </label>
                        <label for=""><?=$_SESSION['USER']->address?></label>
                        <br><br>
                        <label for="">Age: </label>
                        <label for=""><?=$_SESSION['USER']->age?></label>
                        <br><br>
                        <label for="">Civil Status: </label>
                        <label for=""><?=$_SESSION['USER']->cstatus?></label>
                        <br><br>
                        <button>Submit Request</button>

                    </div>
                </form>
        </div>
    </div>

<?php include "../app/views/partials/footer.php"; ?>
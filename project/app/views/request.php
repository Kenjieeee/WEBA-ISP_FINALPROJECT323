<?php include "../app/views/partials/header.php"; ?>

    <div class = "maincontent">
        <div class = "requestcontent">
            <h1>REQUEST DOCOMENTS</h1>
            <br><hr>
                <form method = "POST">
                    <div class = "mainrequestcontents">
                        <h3>Personal Information</h3><br>
                        <hr><br><input type = "text" style = "display: none;" name = "userid" value = "<?=$_SESSION['USER']->ID?>">
                        <label>Fulname: </label>
                        <input type="text" name="fullname" value = "<?= $_SESSION['USER']->fname ."  ". $_SESSION['USER']->lname?>" readonly>
                        <br><br>
                        <label>Birthday: </label>
                        <input type="text" name="bday" value = "<?= $_SESSION['USER']->bday ?>"readonly>
                        <br><br>
                        <label>Birthplace: </label>
                        <input type="text" name="bplace" value = "<?=$_SESSION['USER']->bplace ?>" readonly>
                        <br><br>
                        <label>Address: </label>
                        <input type="text" name="address" value = "<?=$_SESSION['USER']->address?>" readonly>
                        <br><br>
                        <label>Age: </label>
                        <input type="text" name="age" value = "<?=$_SESSION['USER']->age?>" readonly>
                        <br><br>
                        <label>Civil Status: </label>
                        <input type="text" name="cstatus" value = "<?=$_SESSION['USER']->cstatus?>" readonly>
                        <input type="text" name="status" value = "<?=$_SESSION['USER']->status?>" style = "display: none;">
                        <br><br>
                        <button class = "submitbtn" name = "submit">Submit Request</button>

                    </div>
                </form>
        </div>
    </div>

<?php include "../app/views/partials/footer.php"; ?>
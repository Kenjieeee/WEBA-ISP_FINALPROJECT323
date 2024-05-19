<?php include "../app/views/adminpartials/header.php"; ?>
    <div class = "maincontent">
        <div class = "pending_view">
        <h3>Personal Information</h3><br>
            <hr><br><input type = "text" style = "display: none;" name = "userid" value = "<?=$row->userid?>">
            <label>Fulname: </label>
            <input type="text" name="fullname" value = "<?= $row->fullname ?>" readonly>
            <br><br>
            <label>Birthday: </label>
            <input type="text" name="bday" value = "<?= $row->bday?>"readonly>
            <br><br>
            <label>Birthplace: </label>
            <input type="text" name="bplace" value = "<?=$row->bplace?>" readonly>
            <br><br>
            <label>Address: </label>
            <input type="text" name="address" value = "<?=$row->address?>" readonly>
            <br><br>
            <label>Age: </label>
            <input type="text" name="age" value = "<?=$row->age?>" readonly>
            <br><br>
            <label>Civil Status: </label>
            <input type="text" name="cstatus" value = "<?=$row->cstatus?>" readonly>
        </div>
    </div>
<?php include "../app/views/adminpartials/footer.php"; ?>
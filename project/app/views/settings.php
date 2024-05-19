<?php include "../app/views/partials/header.php"; ?>

<div class="maincontent">
    <div class="editcontent">
        <h1>EDIT PROFILE</h1><br>
        <hr>
        <form method = "POST" class = "">
            <div class = "editprofilemain">
                <div class = "editimg">
                    
                    <?php if(empty($_SESSION['USER']->img)){?>
                        <img src="<?=ROOT ?>/assests/images/defaultprof.png" class = "editimgprof" alt="me">
                    <?php  }else{?> 
                        <img src="<?=ROOT ?>/assests/images/<?= $_SESSION['USER']->img ?>" class = "editimgprof" alt="me">

                    <?php } ?>
                    
                    <br>  
                    <input type="file" name = "image"><br><br>
                </div>
                    <label>Firstname:</label>
                    <input type="text" name = "fname" value="<?= $_SESSION['USER']->fname ?>">
                    <label>Lastname:</label>
                    <input type="text" name = "lname" value="<?= $_SESSION['USER']->lname ?>"><br><br>
                    <label>Birthday:</label>
                    <input type="date" name = "bday" value="<?= $_SESSION['USER']->bday ?>">
                    <label>Birthplace:</label>
                    <input type="text" name = "bplace" value="<?= $_SESSION['USER']->bplace ?>"><br><br>
                    <label>Address:</label>
                    <input type="text" name = "address" value="<?= $_SESSION['USER']->address ?>">
                    <label>Age:</label>
                    <input type="number" name = "age" value="<?= $_SESSION['USER']->age ?>"><br><br>
                    <label>Civil Status:</label>
                    <select name="cstatus" id="" >
                        <option value="" <?= ($_SESSION['USER']->cstatus == "")? "selected": "" ; ?>></option>
                        <option value="Single" <?= ($_SESSION['USER']->cstatus == "Single")? "selected": "" ; ?>>Single</option>
                        <option value="Maried" <?= ($_SESSION['USER']->cstatus == "Maried")? "selected": "" ; ?>>Maried</option>
                    </select>
                    <label>Email:</label>
                    <input type="email" name = "email" value="<?= $_SESSION['USER']->email ?>">
                    <br><br>
                    <button type="submit" name="submit" class="update_btn">Update</button>
            </div>
        </form>
       
    </div>
</div>

<?php include "../app/views/partials/footer.php"; ?>
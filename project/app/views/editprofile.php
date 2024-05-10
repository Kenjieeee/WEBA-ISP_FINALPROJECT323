<?php include "../app/views/partials/header.php"; ?>

<div class="maincontent">
    <div class="editcontent">
        <h1>EDIT PROFILE</h1>
        <form action="" method = "POST" class = "w-50 mt-5">
            <div class = "editprofilemain">
                <br><br><br>
                <div class = "editimg">
                        <img src="<?=ROOT ?>/assests/images/defaultprof.png" class = "user-img" alt="me">
                        
                        <input type="file"><br><br>
                    </div>
                    <label>Firstname:</label>
                    <input type="text" value="<?= $row->fname ?>">
                    <label>Lastname:</label>
                    <input type="text" value="<?= $row->lname ?>"><br><br>
                    <label>Birthday:</label>
                    <input type="date" value="<?= $row->bday ?>">
                    <label>Birthplace:</label>
                    <input type="text" value="<?= $row->bplace ?>"><br><br>
                    <label>Address:</label>
                    <input type="text" value="<?= $row->address ?>">
                    <label>Age:</label>
                    <input type="number" value="<?= $row->age ?>"><br><br>
                    <label>Civil Status:</label>
                    <select name="" id="" value="<?= $row->cstatus ?>">
                        <option value="">Status</option>
                        <option value="Single">Single</option>
                        <option value="Maried">Maried</option>
                    </select>
                    <label>Email:</label>
                    <input type="email" value="<?= $row->email ?>"><br><br>
                    <label>Username:</label>
                    <input type="text" value="<?= $row->password ?>">
                    
                    <br><br>
                    <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
       
    </div>
</div>

<?php include "../app/views/partials/footer.php"; ?>
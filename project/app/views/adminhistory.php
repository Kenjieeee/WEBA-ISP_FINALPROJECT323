<?php include "../app/views/adminpartials/header.php"; ?>
    <div class="maincontent">
        <div class = "admin_history">
            <h1>Admin History</h1>
            <br><hr><br><br>
            <table>
                <?php if(!empty($data)){ foreach($data as $row){?>
                    <tr>
                        <td><?= $row->fullname?><br><?= $row->datesubmit?></td>
                        <td><a href="<?=ROOT?>/adminhview/<?=$row->id?>" class = "viewbtn">View</a></td>
                    </tr>
                <?php } }?>
            </table>
        </div>
    </div>
<?php include "../app/views/adminpartials/footer.php"; ?>
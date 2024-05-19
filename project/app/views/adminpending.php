<?php include "../app/views/adminpartials/header.php"; ?>
    <div class="maincontent">
        <div class = "Pending_request">
            <h1>Admin Pending Request</h1>
            <br><hr><br><br>
            <table>

            <?php if(!empty($data)){ foreach($data as $row){?>
                <tr>
                    <td><?= $row->fullname?><br><?= $row->datesubmit?></td>
                    <td>
                        <a href="<?=ROOT?>/adminpview/<?=$row->id?>" class = "viewbtn">View</a>
                        <a href="<?=ROOT?>/adminpending/approve/<?=$row->id?>" class = "approvebtn">Approve</a>
                        <a href="<?=ROOT?>/adminpending/abort/" class = "abortbtn">Abort</a>
                    </td>
                </tr>
            <?php } }?>
            </table>

        </div>
    </div>
<?php include "../app/views/adminpartials/footer.php"; ?>
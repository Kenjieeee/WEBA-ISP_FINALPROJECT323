<?php include "../app/views/adminpartials/header.php"; ?>
    <div class="maincontent">
        <div class = "admin_spam">
            <h1>Admin Spam</h1>
            <br><hr><br><br>
            <table>
                <?php if(!empty($data)){ foreach($data as $row){?>
                    <tr>
                        <td><?= $row->fullname?><br><?= $row->datesubmit?></td>
                        <td>
                            <a href="" class = "reviewbtn">Review</a>
                            <a href="" class = "approvebtn">Approve</a>
                        </td>
                        
                    </tr>
                <?php } }?>
            </table>
        </div>
    </div>
<?php include "../app/views/adminpartials/footer.php"; ?>
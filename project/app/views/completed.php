<?php include "../app/views/partials/header.php"; ?>

    <div class = "maincontent">
        <div class = "completedcontent">
            <h1>COMPLETED ITOOOOOOOOOOOOOOO</h1>
            <br><hr><br><br>
            <table>
                <?php if(!empty($data)){ foreach($data as $row){?>
                    <tr>
                    <td><?= $row->fullname?><br><?= $row->datesubmit?></td>
                    <td><a href="<?=ROOT?>/Completedview/<?=$row->id?>" class = "viewbtn">View</a></td>
                    </tr>
                <?php } }?>
            </table>
        </div>
    </div>

<?php include "../app/views/partials/footer.php"; ?>
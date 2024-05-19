<?php include "../app/views/partials/header.php"; ?>

    <div class = "maincontent">
        <div class = "pendingcontent">
            <h1>PENDING/PROCESS ITOOOOOOOOOOOOOOO</h1>
            <br><hr><br><br>
            <table>
                <tr>
                    <?php if(!empty($data)){ foreach($data as $row){?>
                    <td><?= $row->fullname?><br><?= $row->datesubmit?></td>
                    <td><a href="" class = "cancelbtn">Cancel Request</a></td>
                
                </tr>
                    <?php } }?>
                </table>
        </div>
    </div>

<?php include "../app/views/partials/footer.php"; ?>
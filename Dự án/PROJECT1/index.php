<?php include_once "Layout/header.php" ?>
<?php require_once "DB/db.php"; ?>
<?php
$sql = "SELECT * FROM tbluser";
$tbluser = mysqli_query($conn, $sql);
?>
<div class="panel panel-info">
    <!-- Default panel contents -->
    <div class="panel-heading">User List</div>
    <div class="panel-body">
        <!-- Table -->
        <table class="table">
            <thead>
                <tr>
                    <td>
                        Id
                    </td>
                    <td>
                        Họ Tên
                    </td>
                    <td>
                        Chức Vụ
                    </td>
                    <td>
                        Password
                    </td>
                    <td>
                        Là Addmin
                    </td>
                    <td>
                        Action
                    </td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tbluser as $item) {
                    ?>
                    <tr>
                        <td><?= $item['fldId'] ?></td>
                        <td><?= $item['fldFullName'] ?></td>
                        <td><?= $item['fldUsername'] ?></td>
                        <td><?= $item['fldPassword'] ?></td>
                        <td><?= $item['fldRole'] ?></td>
                        <td>
                            <form action="actionUserDelete.php" method="POST" id="frmDeleteUser_<?= $item['fldId'] ?>"
                                style=" display: inline-block;">
                                <input name="frmDeleteId" type="hidden" value="<?= $item['fldId'] ?>" />
                                <i class="fa-solid fa-user-xmark" onclick="confirmDeleteUser(<?= $item['fldId'] ?>)"></i>
                            </form>

                            <form action="actionUserUpdate.php" method="POST" id="frmUpdateUser_<?= $item['fldId'] ?>"
                                style=" display: inline-block;">
                                <input name="frmUpdateId" type="hidden" value="<?= $item['fldId'] ?>" />
                                <i class="fa-solid fa-pen" onclick="confirmUpdateUser(<?= $item['fldId'] ?>)"></i>
                            </form>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <script>
        function confirmDeleteUser(userID) {
            if (confirm("Do you want to delete user?")) {
                document.getElementById("frmDeleteUser_" + userID).submit();
            }
        }
    </script>

    <script>
        function confirmUpdateUser(userID) {
            if (confirm("Do you want to update user?")) {
                document.getElementById("frmUpdateUser_" + userID).submit();
            }
        }
    </script>
</div>
<?php include_once "Layout/footer.php" ?>
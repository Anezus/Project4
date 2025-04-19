<?php include_once "Layout/header.php"; ?>
<div class="panel panel-info">
    <div class="panel-heading">Login</div>
    <?php
    if (isset($_SESSION['ErrorMessage'])) {
        echo "<div class='arlert alert-danger'>" .
            $_SESSION['ErrorMessage']
            .
            "</div>";
        unset($_SESSION['ErrorMessage']);
    }
    ?>
    <div class="panel-body">
        <form action="login_POST.php" method="POST">
            <div class="form-group">
                <label for="frmUsername">Tên Người Dùng</label>
                <input id="frmUsername" name="frmUsername" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="frmPass">Mật Khẩu</label>
                <input id="frmPass" name="frmPass" type="password" class="form-control">
            </div>
            <div class="form-group">
                <input id="frmsubmit" name="frmsubmit" type="Submit" value="Login"
                    class="btn btn-primary btn-bg-info bt">
            </div>
        </form>
    </div>
</div>
<?php include_once "Layout/footer.php"; ?>
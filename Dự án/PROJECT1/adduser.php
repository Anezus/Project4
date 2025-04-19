<?php include_once "Layout/header.php"; ?>
<div class="panel panel-info">
    <div class="panel-heading">Add once Player</div>
    <div class="panel-body">
        <form action="adduser_POST.php" method="POST">
            <div class="form-group">
                <label for="frmName">Họ Và Tên</label>
                <input id="frmName" name="frmName" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="frmUsername">Tên Người Dùng</label>
                <input id="frmUsername" name="frmUsername" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="frmPass">Mật Khẩu</label>
                <input id="frmPass" name="frmPass" type="password" class="form-control">
            </div>
            <div class="form-group">
                <label for="frmRole">Là Addmin hay Users</label>
                <input id="frmRole" name="frmRole" type="checkbox" text="là Quản Trị" value="Admin" class="btn-check">
            </div>
            <div class="form-group">
                <input id="frmsubmit" name="frmsubmit" type="Submit" value="Thêm Người Dùng Mới"
                    class="btn btn-primary btn-bg-info bt">
            </div>
        </form>
    </div>
</div>
<?php include_once "Layout/footer.php"; ?>
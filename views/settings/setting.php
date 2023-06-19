<?php
include('../layouts/boilerplate.php');
?>
<?php
if (!empty($_POST['treshold'])) {
    $t = $_POST['treshold'];
    if(is_numeric($t) && $t>0){
        $sql = "UPDATE `stock` SET `threshold`='$t' WHERE 1";
        mysqli_query($con, $sql);
    }
}

?>
<div class="page-header no-gutters has-tab">
    <h2 class="font-weight-normal">Setting</h2>
</div>
<div class="container">
    <div class="tab-content m-t-15">
        <div class="tab-pane fade show active" id="tab-account">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Setting Infomation</h4>
                </div>
                <div class="card-body">
                    <form id="myForm" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label class="font-weight-semibold" for="treshold">Treshold:</label>
                                <input type="number" class="form-control" id="treshold" name="treshold" placeholder="10" min="1" required>
                            </div>
                            <div class="form-group col-md-9">
                                <button id="trigger-loading-1" class="btn btn-primary m-t-30" onclick="submitForm()">
                                    <i class="anticon anticon-loading m-r-5"></i>
                                    <i class="anticon anticon-poweroff m-r-5"></i>
                                    <span>Update</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Change Password</h4>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label class="font-weight-semibold" for="oldPassword">Old Password:</label>
                                <input type="password" class="form-control" id="oldPassword" placeholder="Old Password">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="font-weight-semibold" for="newPassword">New Password:</label>
                                <input type="password" class="form-control" id="newPassword" placeholder="New Password">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="font-weight-semibold" for="confirmPassword">Confirm Password:</label>
                                <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password">
                            </div>
                            <div class="form-group col-md-3">
                                <button class="btn btn-primary m-t-30">Change</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('../layouts/boilerplate_footer.php');
?>
<script>
    function submitForm() {
        document.getElementById("myForm").submit();
    }
</script>
<script>
    $('#trigger-loading-1').on('click', function(e) {
        $(this).addClass("is-loading");
        setTimeout(function() {
            $("#trigger-loading-1").removeClass("is-loading");
        }, 1000);
        e.preventDefault();
    });
</script>
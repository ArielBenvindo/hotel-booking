<?php
require('inc/components/essentials.php');
require('db/db_conn.php');

session_start();
if ((isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] == true)) {
    redirect('dashboard.php');
}
?>
<?php include 'inc/components/menu.php'; ?>
<style>
    .login-form {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 400px;
    }
</style>
<div class="login-form rounded text-center bg-white overflow-hidden shadow">
    <form action="" autocomplete="off" method="post">
        <h4 class="mb-3 bg-dark text-white py-3">Admin Login Panel</h4>
        <div class="p-4">
            <div class="mb-3">
                <input type="text" required name="admin_name" class="form-control shadow-none text-center" placeholder="Admin Name">
            </div>
            <div class="mb-4">
                <input type="password" required name="admin_pass" class="form-control shadow-none text-center" placeholder="Password">
            </div>
            <div class="custom-bg">
                <button name="login" class="btn text-white shadow-none w-100">Login</button>
            </div>
        </div>
    </form>
</div>

<?php include 'inc/components/scripts.php'; ?>
</body>

</html>

<?php
if (isset($_POST['login'])) {

    $frm_data = filterData($_POST);

    $query = "SELECT * FROM  cms_user WHERE admin_name=? AND admin_pass=?";

    $values = [$frm_data['admin_name'], $frm_data['admin_pass']];


    $res = select($query, $values, "ss");

    if ($res->num_rows == 1) {
        $row = mysqli_fetch_assoc($res);
        $_SESSION['adminLogin'] = true;
        $_SESSION['adminId'] = $row['id'];

        redirect('dashboard.php');
    } else {
        alert('error', "Login falied - Invalid Credentials!");
    }
}
?>
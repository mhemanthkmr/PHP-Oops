<?php
$title = "Register";
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow">
                    <div class="card-header">
                        <h4 class="text-center">Register</h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                        <div class="form-floating mb-3">
                                <input type="name" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="username" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Username</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="cpassword" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Confirm Password</label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary" >Sign-in</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include('includes/footer.php');
?>

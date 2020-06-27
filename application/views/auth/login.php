<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("templates/header.php") ?>
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-md-7">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login Page</h1>
                                    </div>
                                    <?= $this->session->flashdata('message'); ?>
                                    <form class="user" action="<?= base_url('auth/login'); ?>" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="userEmail" name="userEmail" value="<?= set_value('userEmail'); ?>" placeholder="Enter Email Address...">
                                            <?= form_error('userEmail', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="userPassword" name="userPassword" placeholder="Password">
                                            <?= form_error('userPassword', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <!-- <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember Me</label>
                                            </div>
                                        </div> -->
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('auth/forgot'); ?>">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('auth/register'); ?>">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <?php $this->load->view("templates/footer.php") ?>

</body>

</html>
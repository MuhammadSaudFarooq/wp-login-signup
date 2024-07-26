<?php
/* 
    Template Name: Login Template
*/
get_header();
?>
<div class="container login-container">
    <div class="row d-flex align-items-center justify-content-center">
        <div class="col-6">
            <div class="col-12">
                <h1>Login</h1>
            </div>
            <div class="col-12">
                <form class="" action="#" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="mb-3">
                            <label for="<?= PLUGIN_PREFIX . '_email' ?>" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="<?= PLUGIN_PREFIX . '_email' ?>" name="<?= PLUGIN_PREFIX . '_email' ?>" placeholder="name@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="<?= PLUGIN_PREFIX . '_password' ?>" class="form-label">Password</label>
                            <input type="password" class="form-control" id="<?= PLUGIN_PREFIX . '_password' ?>" name="<?= PLUGIN_PREFIX . '_password' ?>" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-outline-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();

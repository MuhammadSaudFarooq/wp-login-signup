<?php
/* 
    Template Name: SignUp Template
*/
get_header();
?>
<div class="container signup-container">
    <div class="row d-flex align-items-center justify-content-center">
        <div class="col-6">
            <div class="col-12">
                <h1>Registration</h1>
            </div>
            <div class="col-12">
                <form id="wpls_signup" action="#" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="mb-3">
                            <label for="<?= PLUGIN_PREFIX . '_firstname' ?>" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="<?= PLUGIN_PREFIX . '_firstname' ?>" name="<?= PLUGIN_PREFIX . '_firstname' ?>" placeholder="First Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="<?= PLUGIN_PREFIX . '_lastname' ?>" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="<?= PLUGIN_PREFIX . '_lastname' ?>" name="<?= PLUGIN_PREFIX . '_lastname' ?>" placeholder="Last Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="<?= PLUGIN_PREFIX . '_email' ?>" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="<?= PLUGIN_PREFIX . '_email' ?>" name="<?= PLUGIN_PREFIX . '_email' ?>" placeholder="name@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="<?= PLUGIN_PREFIX . '_phone' ?>" class="form-label">Phone number</label>
                            <input type="tel" class="form-control" id="<?= PLUGIN_PREFIX . '_phone' ?>" name="<?= PLUGIN_PREFIX . '_phone' ?>" placeholder="Phone number" required>
                        </div>
                        <div class="mb-3">
                            <label for="<?= PLUGIN_PREFIX . '_password' ?>" class="form-label">Password</label>
                            <input type="password" class="form-control" id="<?= PLUGIN_PREFIX . '_password' ?>" name="<?= PLUGIN_PREFIX . '_password' ?>" placeholder="Password" required>
                        </div>
                        <div class="mb-3">
                            <label for="<?= PLUGIN_PREFIX . '_confirm_password' ?>" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="<?= PLUGIN_PREFIX . '_confirm_password' ?>" name="<?= PLUGIN_PREFIX . '_confirm_password' ?>" placeholder="Confirm Password" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-outline-primary">Sign in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();

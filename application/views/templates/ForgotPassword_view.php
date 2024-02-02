<br>
<div id="content">
    <div class="container">
        <div class="bg-white shadow-md rounded-7 p-4">
            <div class="row align-items-center">
                <div class="col-lg-7 HomeFormsImage p-5">
                    <img src="images/svg/HomeForgotPassword.svg" alt="Sign In" class="my-auto" style="width: 100%; max-height: 400px;">
                </div>
                <div class="col-sm-12 col-lg-5">
                    <div class="row">
                        <div class="col-11 col-md-10 mx-auto">
                            <div class="mb-3 d-flex align-items-center">
                                <span class="bg-primary" style="height: 45px; width: 3px;"></span>
                                <p class="text-7 fw-500 text-dark mb-0 mx-2">Forgot Password</p>
                            </div>
                            <form id="HomeForgotPasswordForm">
                            <input type="hidden" id="hiddenforgotpass" value="0" />
                                <div>
                                    <input type="text" class="form-control" name="ForgotPassword__Username_txt" id="ForgotPassword__Username_txt" placeholder="Enter an email or number">
                                </div>
                                <div class="text-danger text-2">Enter an email or phone number</div>
                            </form>
                            <div class="d-grid my-4">
                                <button class="btn btn-primary" type="button" onclick="Forgotpassword()">Submit</button>
                            </div>
                            <p class="text-center mb-0">
                                <a class="btn-link" href="Signin">Return to Sign In</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url()?>assest/Js/Auth/Signin.js"></script>
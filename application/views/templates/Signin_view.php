

<br>
<div id="content">
    <div class="container">
        <div class="bg-white shadow-md rounded-7 p-4">
            <div class="row align-items-center">
                <div class="col-lg-7 HomeFormsImage p-5">
                    <img src="images/svg/HomeSignIn.svg" alt="Sign In" class="my-auto" style="width: 100%; max-height: 400px;">
                </div>
                <div class="col-sm-12 col-lg-5">
                    <div class="row">
                        <div class="col-11 col-md-10 mx-auto">
                            <div class="mb-3 d-flex align-items-center">
                                <span class="bg-primary" style="height: 45px; width: 3px;"></span>
                                <p class="text-7 fw-500 text-dark mb-0 mx-2">Sign In</p>
                            </div>
                            <form id="HomeSignInForm">
                            <input type="hidden" id="whatbtndo" value="0" />
                                <div>
                                    <input type="text" class="form-control" name="Mobile_number_txt" id="Mobile_number_txt" placeholder="Enter an email or number">
                                </div>
                                <div class="text-danger text-2">Enter an email or phone number</div>
                                <div class="text-danger text-2">Couldn't find your Tradgo Account</div>
                                <div class="position-relative d-flex mt-3">
                                    <input type="password" class="form-control" id="password_txt" minlength="6" autocomplete="new-password" placeholder="Password" value="" name="password_txt">
                                    <i class="eye-icon far fa-eye" style="position: absolute; top: 50%; right: 10px; transform: translate(-50%, -50%);" id="signUp_showPassword"></i>
                                </div>
                                <div class="text-danger text-2">Enter a password</div>
                                <!-- <div class="mt-3 position-relative d-flex">
                                            <input type="password" class="form-control" required id="signUp_password"
                                                minlength="6" autocomplete="new-password" placeholder="Password"
                                                value="" name="password">
                                            <i class="eye-icon far fa-eye-slash"
                                                style="position: absolute; top: 50%; right: 10px; transform: translate(-50%, -50%);"
                                                id="signUp_showPassword"></i>
                                        </div> -->
                                <div class="row mt-2">
                                    <div class="col text-2 text-end">
                                        <a class="btn-link" href="ForgotPassword">Forgot Password?</a>
                                    </div>
                                </div>
                                <div class="d-grid my-2">
                                    <button class="btn btn-primary" type="button" onclick="Login()">Sign In</button>
                                </div>
                            </form>
                            <div class="mt-3">You don't have an account yet, but you can create one easily by
                                clicking on the
                                <a href="SignUp">Sign Up</a>.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url()?>assest/Js/Auth/Signin.js">

</script>
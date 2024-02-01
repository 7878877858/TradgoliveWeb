<br>
<div id="content">
    <div class="container">
        <div class="bg-white shadow-md rounded-7 p-4">
            <div class="row align-items-center">
                <div class="col-lg-7 HomeFormsImage p-5">
                    <img src="images/svg/HomeSignUp.svg" alt="Sign In" class="my-auto" style="width: 100%; max-height: 400px;">
                </div>
                <div class="col-sm-12 col-lg-5">
                    <div class="row">
                        <div class="col-11 col-md-10 mx-auto">
                            <div class="mb-3 d-flex align-items-center">
                                <span class="bg-primary" style="height: 45px; width: 3px;"></span>
                                <p class="text-7 fw-500 text-dark mb-0 mx-2">Sign Up</p>
                            </div>
                            <form id="HomeSignUpForm">
                            <input type="hidden" id="SignUpwhatbtndo" value="0" />
                                <div class="mt-3">
                                    <input type="tel" class="form-control" name="whatsapp_number" id="whatsapp_number" maxlength="10" placeholder="Enter Whatsapp Number">
                                </div>
                                <div class="text-danger text-2">Enter Mobile Number</div>
                                <div class="mt-3">
                                    <input type="email" class="form-control" name="SignUpEmailAddress" id="SignUpEmailAddress" placeholder="Email Id">
                                </div>
                                <div class="text-danger text-2">Enter Email Id</div>
                                <div class="mt-3">
                                    <input type="text" class="form-control" name="fullName" id="fullName" placeholder="Full Name">
                                </div>
                                <div class="text-danger text-2">Enter Full Name</div>
                                <div class="mt-3 position-relative d-flex">
                                    <input type="password" class="form-control" id="signUp_password" minlength="6" autocomplete="new-password" placeholder="Password" value="" name="signUp_password">
                                    <i class="eye-icon far fa-eye" style="position: absolute; top: 50%; right: 10px; transform: translate(-50%, -50%);" id="signUp_showPassword"></i>
                                </div>
                                <div class="mt-3 position-relative d-flex">
                                    <input type="password" class="form-control" id="signUp_ConfirmPassword" minlength="6" autocomplete="new-password" placeholder="Confirm Password" value="" name="signUp_ConfirmPassword">
                                    <i class="eye-icon far fa-eye" style="position: absolute; top: 50%; right: 10px; transform: translate(-50%, -50%);" id="signUp_showConfirmPassword"></i>
                                </div>
                                <div class="text-danger text-2">Passwords do not match. Please try again.</div>
                                <div class="mt-3">
                                    <input type="text" class="form-control" id="referralCode" placeholder="Enter Referral Code">
                                </div>
                            </form>
                            <a href="">
                                <div class="d-grid my-4">
                                    <button class="btn btn-primary" type="button" onclick="Registration()">Submit</button>
                                </div>
                            </a>
                            <div>You have an account. Please log in to access your account.
                                <a href="SignIn">Sign In</a>
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
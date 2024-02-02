<br>
<div id="content">
    <div class="container">
        <div class="bg-white shadow-md rounded-7 p-4">
            <div class="row align-items-center">
                <div class="col-lg-7 HomeFormsImage p-5">
                    <img src="images/svg/HomeOtp.svg" alt="Sign In" class="my-auto" style="width: 100%; max-height: 400px;">
                </div>
                <div class="col-sm-12 col-lg-5">
                    <div class="row">
                        <div class="col-11 col-md-10 mx-auto">
                            <div class="mb-3 d-flex align-items-center">
                                <span class="bg-primary" style="height: 45px; width: 3px;"></span>
                                <p class="text-7 fw-500 text-dark mb-0 mx-2">Two-Step Verification</p>
                            </div>
                            <p class="text-center"><img class="img-fluid" src="images/otp-icon.png" alt="verification"></p>
                            <p class="text-muted text-3 text-center">Please enter the OTP (one time password) to
                                verify your account. A Code has been sent to <span class="text-dark text-4" id="hidden_forgot_mobile_number"></span></p>
                            <form id="otp-screen" class="form-border">
                            <div class="row gx-3">
                                    <div class="col">
                                        <input type="text" name="fotp" id="fotp" class="form-control text-center text-6 px-0 py-2" maxlength="1" autocomplete="off">
                                    </div>
                                    <div class="col">
                                        <input type="text" name="fotp2" id="fotp2" class="form-control text-center text-6 px-0 py-2" maxlength="1" autocomplete="off">
                                    </div>
                                    <div class="col">
                                        <input type="text" name="fotp3" id="fotp3" class="form-control text-center text-6 px-0 py-2" maxlength="1" autocomplete="off">
                                    </div>
                                    <div class="col">
                                        <input type="text" name="fotp4" id="fotp4" class="form-control text-center text-6 px-0 py-2" maxlength="1" autocomplete="off">
                                    </div>
                                    <div class="col">
                                        <input type="text" name="fotp5" id="fotp5" class="form-control text-center text-6 px-0 py-2" maxlength="1" autocomplete="off">
                                    </div>
                                    <div class="col">
                                        <input type="text" name="fotp6" id="fotp6" class="form-control text-center text-6 px-0 py-2" maxlength="1" autocomplete="off">
                                    </div>
                                </div>
                                <div class="text-danger text-2">Invalid OTP. Please verify and try again.</div>
                                <div class="mt-3 position-relative d-flex">
                                    <input type="password" class="form-control" id="forgot_password_txt" minlength="6" autocomplete="new-password" placeholder="Password" value="" name="forgot_password_txt">
                                    <i class="eye-icon far fa-eye" style="position: absolute; top: 50%; right: 10px; transform: translate(-50%, -50%);" id="HomeOtp_showPassword"></i>
                                </div>
                                <div class="mt-3 position-relative d-flex">
                                    <input type="password" class="form-control" id="forgot_conpassword_txt" minlength="6" autocomplete="new-password" placeholder="Confirm Password" value="" name="forgot_conpassword_txt">
                                    <i class="eye-icon far fa-eye" style="position: absolute; top: 50%; right: 10px; transform: translate(-50%, -50%);" id="HomeOtp_showConfirmPassword"></i>
                                </div>
                                <div class="text-danger text-2">Passwords do not match. Please try again.</div>
                            </form>
                            <div class="d-grid my-4">
                                <button class="btn btn-primary" onclick="forgotverifyotp()">Verify</button>
                            </div>
                            <p class="text-2 text-center">Not received your code?
                                <a class="btn-link" href="#">Resend code</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="PasswordChangedSuccessfulModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Responce Massage</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">Password changed successfully. You can now log in securely.</div>
                    <div class="modal-footer">
                        <div data-bs-toggle="modal" data-bs-target="PasswordChangedSuccessfullModal">
                            <button type="button" class="btn border-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                        <!-- <a href="index-2.html"> -->
                        <a href="SignIn">
                            <div data-bs-toggle="modal" data-bs-target="PasswordChangedSuccessfullModal">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Continue</button>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
<script src="<?php echo base_url() ?>assest/Js/Auth/Signin.js"></script>
<script>
    const currentUrl = new URL(window.location.href);
    const urlParams = currentUrl.searchParams;
    const numberParam = urlParams.get('Forgot_Mobile_no');
    urlParams.delete('Forgot_Mobile_no');
    const newUrl = currentUrl.origin + currentUrl.pathname + '?' + urlParams.toString();
    history.replaceState(null, '', newUrl);

    if (numberParam !== null) {
        const numberString = numberParam.toString();
        const digitsToHide = Math.max(0, numberString.length - 5);
        const startPosition = Math.floor((numberString.length - digitsToHide) / 2);
        const hiddenPart = '*'.repeat(digitsToHide);
        const displayedNumber = "91" + numberString.slice(0, startPosition) + hiddenPart + numberString.slice(startPosition + digitsToHide);
        $('#hidden_forgot_mobile_number').text(displayedNumber);
        alert(displayedNumber);
    } else {
        console.error('The "number" parameter is not present in the URL.');
    }
</script>
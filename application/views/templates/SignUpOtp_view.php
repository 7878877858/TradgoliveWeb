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
                                verify your account. A Code has been sent to <span class="text-dark text-4" id="user_mobile_number"></span></p>
                            <form id="otp-screen" class="form-border">
                            <input type="hidden" id="SignUpotp" value="0" />
                                <div class="row gx-3">
                                    <div class="col">
                                        <input type="text" name="otp" id="otp" class="form-control text-center text-6 px-0 py-2" maxlength="1" autocomplete="off">
                                    </div>
                                    <div class="col">
                                        <input type="text" name="otp2" id="otp2" class="form-control text-center text-6 px-0 py-2" maxlength="1" autocomplete="off">
                                    </div>
                                    <div class="col">
                                        <input type="text" name="otp3" id="otp3" class="form-control text-center text-6 px-0 py-2" maxlength="1" autocomplete="off">
                                    </div>
                                    <div class="col">
                                        <input type="text" name="otp4" id="otp4" class="form-control text-center text-6 px-0 py-2" maxlength="1" autocomplete="off">
                                    </div>
                                    <div class="col">
                                        <input type="text" name="otp5" id="otp5" class="form-control text-center text-6 px-0 py-2" maxlength="1" autocomplete="off">
                                    </div>
                                    <div class="col">
                                        <input type="text" name="otp6" id="otp6" class="form-control text-center text-6 px-0 py-2" maxlength="1" autocomplete="off">
                                    </div>
                                </div>
                                <div class="text-danger text-2">Invalid OTP. Please verify and try again.</div>
                            </form>
                            <div class="d-grid my-4" data-bs-toggle="modal" data-bs-target="#RegistrationSuccessfulModal">
                                <button class="btn btn-primary" onclick="VerifyRegistrationOTP()">Verify</button>
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
<script src="<?php echo base_url()?>assest/Js/Auth/Signin.js"></script>
<script>
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const numberParam = urlParams.get('number');
    if (numberParam !== null) {
        const numberString = numberParam.toString();
        const digitsToHide = Math.max(0, numberString.length - 5);
        const startPosition = Math.floor((numberString.length - digitsToHide) / 2);
        const hiddenPart = '*'.repeat(digitsToHide);
        const displayedNumber = "91" + numberString.slice(0, startPosition) + hiddenPart + numberString.slice(startPosition + digitsToHide);
        $('#user_mobile_number').text(displayedNumber);
        alert(displayedNumber);
    } else {
        console.error('The "number" parameter is not present in the URL.');
    }
</script>
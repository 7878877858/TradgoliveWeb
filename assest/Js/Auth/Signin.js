
var base_url = "http://164.52.204.166/";

function showLoader() {
    $('#preloader').show();
}

function hideLoader() {
    $('#preloader').hide();
}
$(document).ready(function () {

});
//<--------Login Ajax Start------->
function Login() {
    event.preventDefault();
    var mobile_number = $('#Mobile_number_txt').val();
    var password = $('#password_txt').val();

    showLoader();
    $.ajax({
        url: base_url + 'v1/Login',
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        cache: false,
        data: JSON.stringify({
            Mobile: mobile_number,
            Password: password,
        }),

        success: function (response) {
            try {
                //console.log("response:", response);
                var json_data = JSON.parse(response);
                //alert(json_data.statuscode);
                var message = json_data.message;
                $('#whatbtndo').val(json_data.statuscode);
                if (json_data.statuscode == "TXN") {
                    Swal.fire({
                        icon: 'success',
                        text: message,
                    }).then((result) => {
                        if (result.value) {
                            var redirectTo = response.redirectTo || 'Dash';
                            window.location.href = redirectTo;
                        }
                    });
                }
                else if (json_data.statuscode === 'ERR') {
                    $('#whatbtndo').val("ERR");
                    Swal.fire({
                        icon: 'error',
                        text: message,
                    }).then((result) => {
                        if (result.value) {
                            var redirectTo = response.redirectTo || 'SignUp';
                            window.location.href = redirectTo;
                        }
                    });
                }
            } catch (error) {
                console.error("An error occurred:", error);

            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            hideLoader();
            console.error("AJAX Error:", textStatus, errorThrown);

        },
        complete: function () {
            hideLoader();
        },
    });

}
//<--------Login Ajax End------->

//<--------Registration Ajax Start------->
function getCurrentLocation(callback) {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
            function (position) {
                const latitude = position.coords.latitude;
                const longitude = position.coords.longitude;
                callback({ latitude, longitude });
            },
            function (error) {
                console.error('Error getting location:', error.message);
                alert('Error getting location. Please check your browser settings.');
            }
        );
    } else {
        alert('Geolocation is not supported by your browser.');
    }
}
// Now you can use latlog.latitude and latlog.longitude in your registration logic.

function Registration() {
    //alert('here');
    event.preventDefault();
    getCurrentLocation(function (latlog) {
        var whatsapp_no = $('#whatsapp_number').val();
        localStorage.setItem('whatsapp_no', whatsapp_no);
        var EmailAddress = $('#SignUpEmailAddress').val();
        var fullName = $('#fullName').val();
        var signUp_password = $('#signUp_password').val();
        var signUp_ConfirmPassword = $('#signUp_ConfirmPassword').val();
        var referralCode = $('#referralCode').val();

        showLoader();
        $.ajax({
            url: base_url + 'v1/Registration',
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            caches: false,
            data: JSON.stringify({
                Mobile: whatsapp_no,
                Username: fullName,
                Password: signUp_password,
                Email: EmailAddress,
                Long: latlog.latitude,
                Lat: latlog.longitude,
                RefferCode: referralCode,
            }),
            success: function (response) {
                try {
                    var json_data = JSON.parse(response);
                    var message = json_data.message;
                    var otp_token = json_data.otp_token;
                    localStorage.setItem('otp_token', otp_token);
                    $('#SignUpwhatbtndo').val(json_data.statuscode);
                    if (json_data.statuscode == 'TXN') {
                        Swal.fire({
                            icon: 'success',
                            text: message,
                        }).then((result) => {
                            if (result.value) {
                                var redirectTo = response.redirectTo || 'SignUpOtp';
                                //alert(redirectTo + "?number=" + whatsapp_no);
                                window.location.href = redirectTo + "?number=" + whatsapp_no;
                            }
                        });
                    }
                    else if (json_data.statuscode == 'ERR') {
                        $('#whatbtndo').val("ERR");
                        Swal.fire({
                            icon: 'error',
                            text: message,
                        })

                    }
                    console.log(response);
                } catch (error) {
                    console.error("An error occurred:", error);

                }
            }, error: function (jqXHR, textStatus, errorThrown) {
                hideLoader();
                console.error("AJAX Error:", textStatus, errorThrown);

            },
            complete: function () {
                hideLoader();
            },
        })

    });
}

async function VerifyRegistrationOTP() {
    var storedWhatsAppNo = localStorage.getItem('whatsapp_no');
    var storeotp_token = localStorage.getItem('otp_token');
    var { otp, otp2, otp3, otp4, otp5, otp6 } = await formToJson('otp-screen');
    const full_otp = `${otp}${otp2}${otp3}${otp4}${otp5}${otp6}`;
    showLoader();
    $.ajax({
        url: base_url + 'v1/Registration/Otp_verify',
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        cache: false,
        data: JSON.stringify({
            otp: full_otp,
            otp_token: storeotp_token,
            Mobile: storedWhatsAppNo,
        }),
        success: function (response) {
            try {
                var json_data = JSON.parse(response);
                var message = json_data.message;
                var username = json_data.username;
                var profilePic = json_data.profilePic;
                var user_balance = json_data.user_balance;
                var mobile_no = json_data.mobile_no;
                var token = json_data.token;
                localStorage.setItem('token', token);
                $('#SignUpotp').val(json_data.statuscode);
                if (json_data.statuscode == 'TXN') {
                    Swal.fire({
                        icon: 'success',
                        text: message,
                    }).then((result) => {
                        if (result.value) {
                            var redirectTo = response.redirectTo || 'Dash';
                            window.location.href = redirectTo;
                        }
                    });
                }
                else if (json_data.statuscode == 'ERR') {
                    $('#SignUpotp').val("ERR");
                    Swal.fire({
                        icon: 'error',
                        text: message,
                    })

                }
                console.log(response);
            } catch (error) {
                console.error("An error occurred:", error);

            }
        }, error: function (jqXHR, textStatus, errorThrown) {
            hideLoader();
            console.error("AJAX Error:", textStatus, errorThrown);

        },
        complete: function () {
            hideLoader();
        },

    })
}
async function formToJson(formId) {
    const form = document.getElementById(formId);
    const formData = new FormData(form);
    const jsonData = {};
    formData.forEach((value, key) => {
        jsonData[key] = value;
    });
    return jsonData;
}
//<--------Registration Ajax End------->

//<--------ForgotPassWord Ajax Start------->
function Forgotpassword() {
    var Forgot_Mobile_no = $('#ForgotPassword__Username_txt').val();
    localStorage.setItem('Forgot_Mobile_no', Forgot_Mobile_no);
    showLoader();
    $.ajax({
        url: base_url + 'v1/Forgetpass',
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        caches: false,
        data: JSON.stringify({
            Mobile: Forgot_Mobile_no
        }),
        success: function (response) {
            try {
                console.log(response);
                var json_data = JSON.parse(response);
                var message = json_data.message;
                var otp = json_data.otp;
                localStorage.setItem('Forgot_otp', otp);
                $('#hiddenforgotpass').val(json_data.statuscode);
                if (json_data.statuscode == 'TXN') {
                    Swal.fire({
                        icon: 'success',
                        text: message
                    }).then((result) => {
                        if (result.value) {
                            var redirectTo = response.redirectTo || 'ForgotPasswordOtp';
                            alert(redirectTo + "?Forgot_Mobile_no=" + Forgot_Mobile_no);
                            window.location.href = redirectTo + "?Forgot_Mobile_no=" + Forgot_Mobile_no;
                        }
                    })
                } else if (json_data.statuscode == 'ERR') {
                    Swal.fire({
                        icon: 'error',
                        text: message
                    })
                }

            } catch (error) {
                console.error("An error occurred:", error);
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.error("AJAX Error:", textStatus, errorThrown);
            hideLoader();

        },
        complete: function () {
            hideLoader();
        }
    })
}

async function forgotverifyotp() {
    var storedForgotMobileNo = localStorage.getItem('whatsapp_no');
    var storeForgototp = localStorage.getItem('Forgot_otp')
    var { fotp, fotp2, fotp3, fotp4, fotp5, fotp6 } = await formToJson('otp-screen');
    const full_otp = `${fotp}${fotp2}${fotp3}${fotp4}${fotp5}${fotp6}`;
    showLoader();
    $.ajax({
        url: base_url + 'Forgetpass/validate_otp',
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        caches: false,
        data: JSON.stringify({
            Mobile: storedForgotMobileNo,
            otp: full_otp,
            password: storeForgototp
        }),
        success: function (response) {
            try {
                console.log(response);
            } catch (error) {

            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.error("AJAX Error:", textStatus, errorThrown);
            hideLoader();

        },
        complete: function () {
            hideLoader();
        }
    })
}
//<--------ForgotPassWord Ajax End------->
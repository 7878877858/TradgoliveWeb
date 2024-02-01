<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
  <link href="images/TardgoLogo.png" rel="icon" />
  <title>Tradgo Recharge & Bill Payment</title>
  <meta name="description" content="Tradgo Recharge & Bill Payment">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/all.min.css" />
  <link rel="stylesheet" type="text/css" href="vendor/owl.carousel/assets/owl.carousel.min.css" />
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
  <link rel="stylesheet" type="text/css" href="css/extra.css" />
  <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
  <!-- <script src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js"></script> -->
</head>
<script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.10.4/dist/sweetalert2.all.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.10.4/dist/sweetalert2.min.css
" rel="stylesheet">
<body>
  <div id="preloader">
    <span class="ring">
      <span></span>
      <img src="images/TardgoLogo.png" alt="TardgoLogo">
    </span>
  </div>

  <div id="main-wrapper">
    <header id="header">
      <div class="container">
        <div class="header-row">
          <div class="header-column justify-content-start">

            <!-- Logo
          ============================================= -->
            <div class="logo me-2 me-lg-3">
              <a class="d-flex" href="Dash" title="Tradgo Recharge & Bill Payments">
                <svg class="tradgo_icon" viewBox="0 0 174 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M4.29785 10.5098V4.40625H13.6484V10.5098H19.8008V17.7852H13.6484V27.2578C13.6484 28.8854 14.2751 29.8945 15.5283 30.2852C16.6188 30.6758 18.043 30.7165 19.8008 30.4072V38.0488C18.0918 38.3092 16.277 38.4395 14.3564 38.4395C10.7594 38.4395 8.18783 37.5605 6.6416 35.8027C5.0791 34.0449 4.29785 31.3105 4.29785 27.5996V17.7852H0.977539V10.5098H4.29785ZM23.7314 38V10.5098H32.667L33.1064 13.5615C34.6201 11.234 37.4359 10.0622 41.5537 10.0459V17.9561C35.9222 17.9561 33.1064 20.0557 33.1064 24.2549V38H23.7314ZM55.0791 10.0215C57.0973 10.0215 58.847 10.3551 60.3281 11.0225C61.8255 11.6735 62.9079 12.5931 63.5752 13.7812L64.0146 10.5098H72.9502V38H64.0146L63.5752 34.7285C62.9404 35.9329 61.8825 36.8607 60.4014 37.5117C58.9202 38.1465 57.1462 38.4639 55.0791 38.4639C51.4984 38.4639 48.5036 37.1374 46.0947 34.4844C43.6859 31.8639 42.4814 28.4541 42.4814 24.2549C42.4814 20.0719 43.6859 16.654 46.0947 14.001C48.5036 11.348 51.4984 10.0215 55.0791 10.0215ZM53.541 28.8203C54.6478 29.9759 56.0394 30.5537 57.7158 30.5537C59.376 30.5537 60.7676 29.9759 61.8906 28.8203C63.0137 27.681 63.5752 26.1592 63.5752 24.2549C63.5752 22.3506 63.0137 20.8206 61.8906 19.665C60.7676 18.5257 59.376 17.9561 57.7158 17.9561C56.0231 17.9561 54.6315 18.5257 53.541 19.665C52.418 20.8206 51.8564 22.3506 51.8564 24.2549C51.8564 26.1592 52.418 27.681 53.541 28.8203ZM88.7217 10.0215C90.7399 10.0215 92.4896 10.3551 93.9707 11.0225C95.4681 11.6735 96.5505 12.5931 97.2178 13.7812V0.5H106.593V38H97.6572L97.2178 34.7285C96.583 35.9329 95.5251 36.8607 94.0439 37.5117C92.5628 38.1465 90.7887 38.4639 88.7217 38.4639C85.141 38.4639 82.1462 37.1374 79.7373 34.4844C77.3285 31.8639 76.124 28.4541 76.124 24.2549C76.124 20.0719 77.3285 16.654 79.7373 14.001C82.1462 11.348 85.141 10.0215 88.7217 10.0215ZM91.3584 30.5537C93.0186 30.5537 94.4102 29.9759 95.5332 28.8203C96.6562 27.681 97.2178 26.1592 97.2178 24.2549C97.2178 22.3506 96.6562 20.8206 95.5332 19.665C94.4102 18.5257 93.0186 17.9561 91.3584 17.9561C89.6657 17.9561 88.2741 18.5257 87.1836 19.665C86.0605 20.8206 85.499 22.3506 85.499 24.2549C85.499 26.1592 86.0687 27.681 87.208 28.8203C88.3311 29.9759 89.7145 30.5537 91.3584 30.5537Z" fill="#1B1464" />
                  <path d="M130.86 13.7812L131.3 10.5098H140.235V36.0469C140.235 38.6999 139.584 40.9867 138.282 42.9072C136.98 44.7952 135.239 46.195 133.058 47.1064C130.844 48.0179 128.329 48.4736 125.514 48.4736C119.801 48.4736 115.219 46.5531 111.769 42.7119L116.09 37.7559C118.124 39.9857 121.021 41.1006 124.781 41.1006C126.458 41.1006 127.89 40.6042 129.078 39.6113C130.266 38.6185 130.86 37.292 130.86 35.6318V33.6055C129.656 35.8353 126.824 36.9502 122.364 36.9502C120.623 36.9502 118.979 36.6328 117.433 35.998C115.886 35.3633 114.544 34.4681 113.404 33.3125C112.265 32.1569 111.37 30.7409 110.719 29.0645C110.084 27.388 109.767 25.5895 109.767 23.6689C109.767 19.7464 110.979 16.4831 113.404 13.8789C115.829 11.3073 118.816 10.0215 122.364 10.0215C124.382 10.0215 126.132 10.3551 127.613 11.0225C129.111 11.6735 130.193 12.5931 130.86 13.7812ZM125.001 29.4307C126.645 29.4307 128.036 28.8854 129.176 27.7949C130.299 26.6882 130.86 25.3128 130.86 23.6689C130.86 22.0251 130.299 20.6579 129.176 19.5674C128.036 18.4932 126.645 17.9561 125.001 17.9561C123.39 17.9561 122.006 18.4932 120.851 19.5674C119.711 20.6579 119.142 22.0251 119.142 23.6689C119.142 25.3291 119.711 26.7044 120.851 27.7949C121.99 28.8854 123.373 29.4307 125.001 29.4307ZM164.454 37.4873C162.647 38.1058 160.711 38.415 158.644 38.415C156.576 38.415 154.64 38.1058 152.833 37.4873C148.943 36.1527 146.217 33.752 144.654 30.2852C143.824 28.4785 143.409 26.4684 143.409 24.2549C143.409 22.0576 143.824 20.0394 144.654 18.2002C146.201 14.766 148.927 12.3652 152.833 10.998C154.64 10.3796 156.576 10.0703 158.644 10.0703C160.711 10.0703 162.647 10.3796 164.454 10.998C168.36 12.3652 171.095 14.766 172.657 18.2002C173.471 20.0557 173.878 22.0739 173.878 24.2549C173.878 26.4521 173.471 28.4622 172.657 30.2852C171.078 33.752 168.344 36.1527 164.454 37.4873ZM154.444 28.8203C155.567 29.9759 156.967 30.5537 158.644 30.5537C160.304 30.5537 161.695 29.9759 162.818 28.8203C163.941 27.681 164.503 26.1592 164.503 24.2549C164.503 22.3506 163.941 20.8206 162.818 19.665C161.695 18.5257 160.304 17.9561 158.644 17.9561C156.967 17.9561 155.567 18.5257 154.444 19.665C153.321 20.8206 152.76 22.3506 152.76 24.2549C152.76 26.1592 153.321 27.681 154.444 28.8203Z" fill="#20A7DB" />
                </svg>

              </a>
            </div>
            <!-- Logo end -->
          </div>
          <div class="header-column justify-content-end">
            <a href="#" class="notification" data-bs-toggle="offcanvas" data-bs-target="#notification_Div">
              <svg class="notificationIcon notification" style="margin: 0px 10px" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_1155_5641)">
                  <path d="M5 18H19V11.031C19 7.148 15.866 4 12 4C8.134 4 5 7.148 5 11.031V18ZM12 2C16.97 2 21 6.043 21 11.031V20H3V11.031C3 6.043 7.03 2 12 2ZM9.5 21H14.5C14.5 21.663 14.2366 22.2989 13.7678 22.7678C13.2989 23.2366 12.663 23.5 12 23.5C11.337 23.5 10.7011 23.2366 10.2322 22.7678C9.76339 22.2989 9.5 21.663 9.5 21Z" />
                </g>
                <defs>
                  <clipPath id="clip0_1155_5641">
                    <rect width="24" height="24" fill="white" />
                  </clipPath>
                </defs>
              </svg>
              <span class="badge"></span>
            </a>
            <a href="#" data-bs-toggle="offcanvas" data-bs-target="#supportAgent_Div">
              <svg class="supportAgent" style="margin: 0px 10px" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21 12.22C21 6.73 16.74 3 12 3C7.31 3 3 6.65 3 12.28C2.4 12.62 2 13.26 2 14V16C2 17.1 2.9 18 4 18H5V11.9C5 8.03 8.13 4.9 12 4.9C15.87 4.9 19 8.03 19 11.9V19H11V21H19C20.1 21 21 20.1 21 19V17.78C21.59 17.47 22 16.86 22 16.14V13.84C22 13.14 21.59 12.53 21 12.22Z" />
                <path d="M9 14C9.55228 14 10 13.5523 10 13C10 12.4477 9.55228 12 9 12C8.44772 12 8 12.4477 8 13C8 13.5523 8.44772 14 9 14Z" />
                <path d="M15 14C15.5523 14 16 13.5523 16 13C16 12.4477 15.5523 12 15 12C14.4477 12 14 12.4477 14 13C14 13.5523 14.4477 14 15 14Z" />
                <path d="M18 11.03C17.52 8.18 15.04 6 12.05 6C9.02 6 5.76 8.51 6.02 12.45C8.49 11.44 10.35 9.24 10.88 6.56C12.19 9.19 14.88 11 18 11.03Z" />
              </svg>
            </a>
            <!-- <a href="#" data-bs-toggle="modal" data-bs-target="#PaytmPaymentSuccessful_modal">
              <img src="" alt="Paytm">
            </a> -->
            <!-- Collapse Button
		  =============================== -->
            <div class="vr mx-2 h-25 my-auto"></div>
            <!-- Login Signup
		  =============================== -->
            <nav class="login-signup navbar navbar-expand">
              <ul class="navbar-nav">
                <li class="profile ">
                  <a class="pe-0 dropdown-toggle" href="Signin" title="My Profile">
                    <div class="UserNameAndIconContener UserNameAndIcon">
                      <span class="circle" aria-hidden="true">
                        <span class="user-icon"><i class="fas fa-user"></i></span>
                      </span>
                      <span class="button-text">Sign up</span>
                    </div>
                  </a>
              </li>

                <!-- <li class="profile dropdown active">
                  <a class="pe-0 dropdown-toggle" href="Signin" title="My Profile">
                    <div class="UserNameAndIconContener UserNameAndIcon">
                      <span class="circle" aria-hidden="true">
                        <span class="user-icon"><i class="fas fa-user"></i></span>
                      </span>
                      <span class="button-text">Sign up</span>
                    </div>
                  </a>

                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="index-2.html">
                        <div>
                          <div class="text-dark" style="font-size: 18px;">Keval Punani
                          </div>
                          <div class="text-primary" style="font-size: 14px;">1234567890
                          </div>
                        </div>
                        <h5></h5>
                        <h5 class="text-primary"></h5>
                        <h5 class="text-primary"></h5>
                      </a>
                    </li>
                    <li class="dropdown-divider mx-n3"></li>
                    <li>
                      <div class="container p-0">
                        <div class="d-flex align-items-center">
                          <div class="col-7">
                            <div class="d-flex flex-column justify-content-start">
                              <h6 style="font-size: 14px;">Wallet Balance</h6>
                              <div style="font-size: 20px;">₹ <span class="fw-600" style="font-size: 20px;">888888</span></div>
                            </div>
                          </div>
                          <div class="col-5 mx-0 px-0 add_money" data-bs-toggle="modal" data-bs-target="#Add_Money_modal">
                            <div class="add_money_btn">
                              <div class="svg-wrapper-1 d-flex">Add
                                <div class="svg-wrapper">
                                  <svg width="24" height="24" viewBox="0 0 76 76" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M75.5 38C75.5 58.7107 58.7107 75.5 38 75.5C17.2893 75.5 0.5 58.7107 0.5 38C0.5 17.2893 17.2893 0.5 38 0.5C58.7107 0.5 75.5 17.2893 75.5 38ZM38 62C36.3431 62 35 60.6569 35 59V41H17C15.3431 41 14 39.6569 14 38C14 36.3431 15.3431 35 17 35H35V17C35 15.3431 36.3431 14 38 14C39.6569 14 41 15.3431 41 17V35H59C60.6569 35 62 36.3431 62 38C62 39.6569 60.6569 41 59 41H41V59C41 60.6569 39.6569 62 38 62Z" />
                                  </svg>
                                </div>
                              </div>
                              <span></span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  
                    <li class="dropdown-divider mx-n3"></li>
                    <li>
                      <a class="dropdown-item" href="MyProfile.html"><img src="images/Home_dropdown/My Profile.png" alt="">My
                        Profile</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="ReportHistory.html"><img src="images/Home_dropdown/Reports.png" alt="">Reports</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="HelpAndSupport.html"><img src="images/Home_dropdown/24x7 Help & Support.png" alt="">24x7
                        Help & Support</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="OrderAndBooking.html"><img src="images/Home_dropdown/Order & Booking.png" alt="">Order
                        &
                        Booking</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="https://play.google.com/store/apps/details?id=com.tradgobusiness&pli=1" target="_blank"><img src="images/Home_dropdown/Your Business.png" alt="">Your
                        Business</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="Policies.html"><img src="images/Home_dropdown/Policies.png" alt="">Policies</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="ReferAndEarn.html"><img src="images/Home_dropdown/Refer & Earn.png" alt="">Refer
                        & Earn</a>
                    </li>
                    <li>
                      <a class="dropdown-item"><img src="images/Home_dropdown/Cashback & Offerrs.png" alt="">Cashback &
                        Offerrs</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="HelpTutorial.html"><img src="images/Home_dropdown/Help Tutorial.png" alt="">Help
                        Tutorial</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#RateReviewBottomOffcanvas">
                        <img src="images/Home_dropdown/Rate & Review.png" alt="">Rate
                        & Review</a>
                    </li>
                    <li>
                      <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#logout_check_modal" href="#">
                        <img src="images/Home_dropdown/Logout.png" alt="">Logout
                      </a>
                    </li>
                  </ul>

                </li> -->
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- Header end -->
    <?php echo $contents; ?>
    <!-- Footer
  ============================================= -->
    <footer id="footer">
      <section class="section bg-white shadow-md pt-4 pb-3">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-3">
              <div class="featured-box text-center">
                <div class="featured-box-icon"> <i class="fas fa-lock"></i> </div>
                <h4>100% Secure Payments</h4>
                <p>Moving your card details to a much more secured place.</p>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="featured-box text-center">
                <div class="featured-box-icon"> <i class="fas fa-thumbs-up"></i> </div>
                <h4>Trust pay</h4>
                <p>100% Payment Protection. Easy Return Policy.</p>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="featured-box text-center">
                <div class="featured-box-icon"> <i class="fas fa-bullhorn"></i> </div>
                <h4>Refer & Earn</h4>
                <p>Invite a friend to sign up and earn up to ₹150.</p>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="featured-box text-center">
                <div class="featured-box-icon"> <i class="far fa-life-ring"></i> </div>
                <h4>24X7 Support</h4>
                <p>We're here to help. Have a query and need help ? <a href="#">Click here</a></p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="container mt-4">
        <div class="row g-4">
          <div class="col-md-3">
            <p>Payment</p>
            <ul class="payments-types">
              <li>
                <a href="#"><img src="images/payment/visa-icon.svg" width="47px" alt="visa"></a>
              </li>
              <li>
                <a href="#"><img src="images/payment/master-card-icon.svg" width="47px" alt="Master Card"></a>
              </li>
              <li>
                <a href="#"><img src="images/payment/paytm-icon.svg" width="47px" alt="Paytm"></a>
              </li>
              <li>
                <a href="#"><img src="images/payment/phonepe-logo-icon.svg" width="47px" alt="Phonepe"></a>
              </li>
              <li>
                <a href="#"><img src="images/payment/upi-payment-icon.svg" width="47px" alt="UPI Payment"></a>
              </li>
            </ul>
          </div>
          <div class="col-md-6 text-center">
            <p>Subscribe</p>
            <p>Please do not share your Paytm Wallet password, Credit/Debit card pin, other confidential information
              with anyone even if he/she claims to be from Paytm. We advise our customers to completely ignore such
              communications & report to us at support@odmart.com. <span> <a href="#"> Read More</a></span></p>
          </div>
          <div class="col-md-3 d-flex align-items-md-end flex-column">
            <p>Keep in touch</p>
            <ul class="social-icons">
              <li class="social-icons-facebook"><a href="https://m.facebook.com/tradgoindia" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
              <li class="social-icons-twitter"><a href="https://twitter.com/Tradgo2" target="_blank"><i class="fab fa-twitter"></i></a></li>
              <li class="social-icons-youtube"><a href="https://www.youtube.com/@TradgoApp" target="_blank"><i class="fab fa-youtube"></i></a></li>
              <li class="social-icons-instagram"><a href="https://www.instagram.com/tradgo_app/" target="_blank"><i class="fab fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="footer-copyright">
          <ul class="nav justify-content-center">
            <li class="nav-item mb-2"> <a style="color: #252b33;" href="AboutUs">About Us</a> </li>
            <li class="nav-item mb-2"> <a style="color: #252b33;" href="Faq">Faq</a> </li>
            <li class="nav-item mb-2"> <a style="color: #252b33;" href="Contact">Contact</a> </li>
            <li class="nav-item mb-2"> <a style="color: #252b33;" href="RefundPolicy">Refund Policy</a> </li>
            <li class="nav-item mb-2"> <a style="color: #252b33;" href="TermsAndConditions">Terms & Conditions</a> </li>
            <li class="nav-item mb-2"> <a style="color: #252b33;" href="PrivacyPolicy">Privacy Policy</a> </li>
          </ul>
          <p class="copyright-text">Copyright © 2019 <a href="#">Tradgo</a>. All Rights Reserved.</p>
        </div>
      </div>
    </footer>
    <!-- Footer end -->
  </div>
  <!-- Document Wrapper end -->

  <!-- Back to Top
============================================= -->

  <!-- Add Money Modal
============================== -->
  <div id="Add_Money_modal" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content border-0">
        <div class="modal-body py-4 px-0">
          <button type="button" class="btn-close position-absolute top-0 end-0 mt-1 me-1 mt-sm-2 me-sm-2" data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="row">
            <div class="col-11 col-md-10 mx-auto">
              <h4 class="text-center mt-3 mb-4">Add Money to Wallet</h4>
              <h3 class="text-center">₹</h3>
              <div class="text-center">
                <input class="text-center mb-2" style="width: 100%; border: none; outline: none; font-size: 50px;" type="tel" placeholder="0" />
                <h6 style="color: #67727C;">Minimum: ₹10; Maximum: ₹50000</h6>
                <h5 class="mb-5">Select an option to pay</h5>
                <div class="d-flex align-items-center text-lg-start">
                  <div style="margin-right: 25px;">
                    <input style="scale:1.5;" type="radio" placeholder="UPI App">
                  </div>
                  <div>
                    <h5>UPI App</h5>
                    <h6 class="text-primary">Payment using selected UPI App</h6>
                  </div>
                </div>
                <div class="d-grid my-4">
                  <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AddMoney_TransactionSuccess">Continue</button>
                </div>
              </div>
            </div>
          </div>
          <!-- Add Money Form End -->
        </div>
      </div>
    </div>
  </div>

  <div id="AddMoney_TransactionFail" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content border-0">
        <div class="modal-body mx-3">
          <div class="modal-header">
            <h4 class="modal-title">Responce Massage</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="row mt-4">
            <svg width="50" height="50" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M77.0833 10.4165H85.4166C88.8684 10.4165 91.6666 13.2147 91.6666 16.6665V54.1665C91.6666 57.6183 88.8684 60.4165 85.4166 60.4165H77.0833V10.4165Z" fill="#E22425" />
              <path d="M22.9167 10.4165C20.6155 10.4165 18.75 12.282 18.75 14.5832V52.0832C18.75 57.8361 23.4137 62.4998 29.1667 62.4998H46.25L42.7704 74.0985C41.449 78.5031 42.6527 83.2776 45.9044 86.5292L49.2597 89.8845C50.1844 90.8092 51.7224 90.6633 52.4567 89.5812L69.3956 64.6186C70.3325 63.2379 70.8333 61.6079 70.8333 59.9394V14.5832C70.8333 12.282 68.9679 10.4165 66.6667 10.4165H22.9167Z" fill="#E22425" />
              <path d="M10.4167 35.4167C10.4167 29.6637 15.0804 25 20.8334 25H35.4167C41.1697 25 45.8334 29.6637 45.8334 35.4167C45.8334 41.1696 41.1697 45.8333 35.4167 45.8333H20.8334C15.0804 45.8333 10.4167 41.1696 10.4167 35.4167Z" fill="#E22425" />
              <path d="M8.33325 52.0832C8.33325 46.3302 12.997 41.6665 18.7499 41.6665H37.4999C43.2529 41.6665 47.9166 46.3302 47.9166 52.0832C47.9166 57.8361 43.2529 62.4998 37.4999 62.4998H18.7499C12.997 62.4998 8.33325 57.8361 8.33325 52.0832Z" fill="#E22425" />
            </svg>
            <p class="col-sm text-danger text-center text-8 mb-0 mb-sm-3">Fail</p>
          </div>
          <div class="row">
            <p class="col-sm text-muted mb-0 mb-sm-3">Transaction Amount:</p>
            <p class="col-sm text-sm-end fw-500">155.00</p>
          </div>
          <div class="row">
            <p class="col-sm text-muted mb-0 mb-sm-3">Transaction ID:</p>
            <p class="col-sm text-sm-end fw-500">-</p>
          </div>
          <div class="d-grid my-4">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AddMoney_TransactionFail">Continue</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="AddMoney_TransactionSuccess" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content border-0">
        <div class="modal-body mx-3">
          <div class="modal-header">
            <h4 class="modal-title">Responce Massage</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <div class="row mt-4">
              <svg width="50" height="50" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.9167 39.5835H14.5834C11.1316 39.5835 8.33342 42.3817 8.33342 45.8335V83.3335C8.33342 86.7853 11.1316 89.5835 14.5834 89.5835H22.9167V39.5835Z" fill="#11B84E" />
                <path d="M56.25 47.9167C56.25 42.1637 60.9137 37.5 66.6667 37.5H81.25C87.003 37.5 91.6667 42.1637 91.6667 47.9167C91.6667 53.6696 87.003 58.3333 81.25 58.3333H66.6667C60.9137 58.3333 56.25 53.6696 56.25 47.9167Z" fill="#11B84E" />
                <path d="M54.1667 64.5832C54.1667 58.8302 58.8304 54.1665 64.5834 54.1665H79.1667C84.9197 54.1665 89.5834 58.8302 89.5834 64.5832C89.5834 70.3361 84.9197 74.9998 79.1667 74.9998H64.5834C58.8304 74.9998 54.1667 70.3361 54.1667 64.5832Z" fill="#11B84E" />
                <path d="M29.1669 40.0603C29.1669 38.3918 29.6677 36.7618 30.6046 35.3811L47.5435 10.4185C48.2778 9.33641 49.8158 9.19047 50.7405 10.1152L54.0958 13.4705C57.3475 16.7221 58.5512 21.4965 57.2298 25.9011L53.7502 37.4998H70.8334C76.5864 37.4998 81.2501 42.1635 81.2501 47.9165V85.4165C81.2501 87.7177 79.3846 89.5832 77.0834 89.5832H33.3334C31.0322 89.5832 29.1667 87.7177 29.1667 85.4165L29.1669 40.0603Z" fill="#11B84E" />
              </svg>
              <p class="col-sm text-success text-center text-8 mb-0 mb-sm-3">Success</p>
            </div>
            <div class="row">
              <p class="col-sm text-muted mb-0 mb-sm-3">Transaction Amount:</p>
              <p class="col-sm text-sm-end fw-500">155.00</p>
            </div>
            <div class="row">
              <p class="col-sm text-muted mb-0 mb-sm-3">Transaction ID:</p>
              <p class="col-sm text-sm-end fw-500">98989898</p>
            </div>
            <div class="d-grid my-4">
              <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AddMoney_TransactionSuccess">Continue</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Add Money Modal End -->


  <!-- Notification_Div
============================================= -->
  <div class="offcanvas offcanvas-end" id="notification_Div">
    <div class="offcanvas-header">
      <h4 class="offcanvas-title">Notification</h4>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
      <div class="row mb-2 mx-3 border rounded-7" style="box-shadow: -5px 5px 2px 0px rgba(0, 0, 0, 0.25);">
        <div class="d-flex align-items-center rounded-7">
          <div class=" rounded-7">
            <img src="images/TardgoLogo.png" alt="TardgoLogo" width="50px">
          </div>
          <div class=" rounded-7 mx-2 p-2">
            <div class="text-4 fw-500">Message By Ajay Makwana</div>
            <div class="text-3">Hello Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae, repellendus?
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, qui!</div>
          </div>
          <div class=" rounded-7">09-Jan-2024; 13:59:34</div>
        </div>
      </div>
      <div class="row mb-2 mx-3 border rounded-7" style="box-shadow: -5px 5px 2px 0px rgba(0, 0, 0, 0.25);">
        <div class="d-flex align-items-center rounded-7">
          <div class=" rounded-7">
            <img src="images/TardgoLogo.png" alt="TardgoLogo" width="50px">
          </div>
          <div class=" rounded-7 mx-2 p-2">
            <div class="text-4 fw-500">Message By Ajay Makwana</div>
            <div class="text-3">Hello Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae, repellendus?
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, qui!</div>
          </div>
          <div class=" rounded-7">09-Jan-2024; 13:59:34</div>
        </div>
      </div>
      <div class="row mb-2 mx-3 border rounded-7" style="box-shadow: -5px 5px 2px 0px rgba(0, 0, 0, 0.25);">
        <div class="d-flex align-items-center rounded-7">
          <div class=" rounded-7">
            <img src="images/TardgoLogo.png" alt="TardgoLogo" width="50px">
          </div>
          <div class=" rounded-7 mx-2 p-2">
            <div class="text-4 fw-500">Message By Ajay Makwana</div>
            <div class="text-3">Hello Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae, repellendus?
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, qui!</div>
          </div>
          <div class=" rounded-7">09-Jan-2024; 13:59:34</div>
        </div>
      </div>
    </div>
  </div>
  <!-- Notification_Div end -->

  <!-- supportAgent_Div
============================================= -->
  <div class="offcanvas offcanvas-end" id="supportAgent_Div">
    <div class="offcanvas-header">
      <h4 class="offcanvas-title">Support Agent</h4>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
      <div class="row">
        <!-- <div class="col-sm-12 col-lg-5"> -->
        <div class="col-lg-12">
          <div class="d-flex flex-column align-items-center justify-content-center mb-2">
            <img class="mb-3" src="images/supportAgent/headset.svg" alt="TardgoLogo" width="75px">
            <div class="text-3 fw-500">How can we help you?</div>
          </div>
          <a href="tel:9861468509">
            <div class="row mb-2 mx-3 rounded-7 border-2 alert alert-info position-relative">
              <div class="d-flex align-items-center rounded-7">
                <div class="rounded-7">
                  <img src="images/supportAgent/support_agent.svg" alt="TardgoLogo" width="22px">
                </div>
                <div class="rounded-7 mx-2 p-2">
                  <div class="text-3">Call Support</div>
                  <!-- <div class="text-3">Description and instructions for Call Support...</div> -->
                </div>
                <div class="rounded-7 position-absolute end-0 me-3"> > </div>
              </div>
            </div>
          </a>
          <a href="https://api.whatsapp.com/send?phone=9861468509" target="_blank">
            <div class="row mb-2 mx-3 rounded-7 border-2 alert alert-success position-relative">
              <div class="d-flex align-items-center rounded-7">
                <div class=" rounded-7">
                  <img src="images/supportAgent/whats_app.svg" alt="TardgoLogo" width="22px">
                </div>
                <div class="rounded-7 mx-2 p-2">
                  <div class="text-3">WhatsApp Support</div>
                  <!-- <div class="text-3">WhatsApp support: In-app help for account, technical issues, and queries.</div> -->
                </div>
                <div class="rounded-7 position-absolute end-0 me-3"> > </div>
              </div>
            </div>
          </a>
          <div class="row mb-2 mx-3 rounded-7 border-2 alert alert-primary position-relative">
            <a data-bs-toggle="collapse" href="#Recharge_Bill_Payment_Issue">
              <div class="d-flex align-items-center rounded-7">
                <div class=" rounded-7">
                  <img src="images/supportAgent/customer_service.svg" alt="TardgoLogo" width="22px">
                </div>
                <div class=" rounded-7 mx-2 p-2">
                  <div class="text-3">Recharge Bill Payment Issue</div>
                </div>
                <div class="rounded-7 position-absolute end-0 me-3"> > </div>
              </div>
            </a>
          </div>
          <div id="Recharge_Bill_Payment_Issue" class="collapse rounded-7 mx-3 bg-white" style="border: 2px solid #B6D4FE;" data-bs-parent="#accordion">
            <div class="card-body">
              <div class="rounded p-lg-6 text-4 fw-500">
                <div class="row p-3">
                  <div class="mb-3 px-0">
                    <select class="form-select rounded-7" placeholder="Select Operator" required="">
                      <!-- <select id="select-state" class="rounded-7" required=""> -->
                      <!-- <option disabled>Select Operator</option> -->
                      <option>Broadband</option>
                      <option>CableTV</option>
                      <option>ClubsAndAssociations</option>
                      <option>CreditCard</option>
                      <option>DTH</option>
                      <option>DMT</option>
                      <option>EducationFees</option>
                      <option>Electricity</option>
                      <option>Gas</option>
                      <option>GooglePlay</option>
                      <option>HospitalAndPathology</option>
                      <option>HousingSociety</option>
                      <option>Insurance</option>
                      <option>Landline</option>
                      <option>LoanRepayment</option>
                      <option>Mobile</option>
                      <option>MunicipalServices</option>
                      <option>MunicipalTax</option>
                      <option>PipedGas</option>
                      <option>Postpaid</option>
                      <option>SubscriptionFees</option>
                      <option>Water</option>
                    </select>
                  </div>
                  <div class="form__div mb-3">
                    <input type="text" class="form__input" style="border: 2px solid #B6D4FE;" placeholder="Number (Required)*">
                    <label class="form__label">Number (Required)*</label>
                  </div>
                  <div class="row mx-0 px-0">
                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#Recharge_Bill_Payment_Issue" class="view-plans-link">Continue</a>
                  </div>
                </div>
                <!-- <div class="row">
                <div class="col-sm text-dark">BSNL Mobile Postpaid</div>
                <div class="col-sm text-sm-end text-success">0.2%</div>
              </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="col-lg-7 CallSupportImage">
      <img src="images/supportAgent/CallSupportImage.svg" alt="Call Support" class="my-auto"
        style="width: 100%; max-height: 400px;">
    </div> -->
    </div>

  </div>
  <!-- supportAgent_Div end -->

  <!-- Logout Check Modal
=========================== -->
  <div id="logout_check_modal" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content border-0">
        <div class="modal-body py-4 px-0">
          <div class="row">
            <div class="col-10 col-md-10 mx-auto">
              <br>
              <div class="d-flex justify-content-center">
                <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M58 82L9.5 90L9.5 10.5L58 18L58 82Z" fill="#8FD2EC" />
                  <path d="M75.0001 70.8335L91.6667 50.0002M91.6667 50.0002C91.6667 50.0002 81.5088 37.3028 75.0001 29.1668M91.6667 50.0002L37.0002 50.0002" stroke="#1B1464" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M58.3333 66.1168V79.9447C58.3333 81.563 58.3333 82.3722 57.8593 82.9317C57.3853 83.4912 56.5872 83.6242 54.9908 83.8902L15.3196 90.5021C12.0766 91.0426 10.455 91.3129 9.39413 90.4142C8.33325 89.5155 8.33325 87.8716 8.33325 84.5837L8.33325 15.4159C8.33325 12.1281 8.33325 10.4842 9.39413 9.58549C10.455 8.6868 12.0766 8.95705 15.3196 9.49757L54.9908 16.1094C56.5872 16.3755 57.3853 16.5085 57.8593 17.068C58.3333 17.6275 58.3333 18.4367 58.3333 20.055V33.0583" stroke="#1B1464" stroke-width="7" stroke-linecap="round" />
                </svg>
              </div>
              <br>
              <p class="text-4 fw-400 text-dark text-center mb-4">Oh no! You're leaving... <br> Are you sure?</p>
              <div class="d-grid my-4" data-bs-dismiss="modal">
                <button class="btn btn-secondary" type="submit" style="width: 100%;">Just Kidding</button>
              </div>
              <a href="Dash">
                <div class="d-grid my-4" data-bs-dismiss="modal">
                  <button class="btn bg-white border border-primary text-primary" type="submit" style="width: 100%;">Yes
                    Log Me Out</button>
                </div>
              </a>
            </div>
          </div>
          <!-- Logout Check Form End -->
        </div>
      </div>
    </div>
  </div>
  <!-- Logout Check Modal End -->

  <!-- Rate & Review
============================================= -->
  <div class="offcanvas offcanvas-bottom" id="RateReviewBottomOffcanvas">
    <div class="offcanvas-header">
      <h4 class="offcanvas-title">Rate & Review</h4>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
      <div class="d-flex align-items-center mb-2">
        <img src="images/TardgoLogo.png" alt="TardgoLogo" width="50px">
        <div class="mx-2">
          <div class="text-5 text-dark fw-500">Tardgo</div>
          <div class="text-3 text-dark fw-300">Reviews are public and include your account and device
            info.</div>
        </div>
      </div>
      <div class="rate" onclick="rateApp()">
        <input type="radio" id="star5" name="rate" value="5" data-bs-dismiss="offcanvas" />
        <label for="star5" title="text5">5 stars</label>
        <input type="radio" id="star4" name="rate" value="4" data-bs-dismiss="offcanvas" />
        <label for="star4" title="text4">4 stars</label>
        <input type="radio" id="star3" name="rate" value="3" />
        <label for="star3" title="text3">3 stars</label>
        <input type="radio" id="star2" name="rate" value="2" />
        <label for="star2" title="text2">2 stars</label>
        <input type="radio" id="star1" name="rate" value="1" />
        <label for="star1" title="text1">1 star</label>
      </div>
    </div>
  </div>
  <!-- Rate & Review end -->
  <!-- Document Wrapper end -->
  <!-- Login Modal
=========================== -->

  <!-- OTP Modal End -->

  <!-- Script -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="js/theme.js"></script>

  <script src="vendor/bootstrap/js/getbootstrap.min.js"></script>

</body>


</html>
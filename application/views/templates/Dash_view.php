
        <div id="content">
            <div class="pt-4 pb-5" style="background: linear-gradient(180deg, #1B1464, #1C3D85);box-shadow: 0px 6px 4px 0px rgba(30, 93, 159, 0.50) inset;">
                <!-- bg-secondary -->
                <div class="container">
                    <div class="section py-4">
                        <div class="container">
                            <ul class="nav secondary-nav alternate" id="myTab" role="tablist">
                                <li class="nav-item active">
                                    <a class="nav-link" id="mobile-recharge-tab" data-bs-toggle="tab" href="#mobile-recharge" aria-controls="mobile-recharge">
                                        <span><img src="../Recharge/images/recharge/Mobile.png" alt="" width="70px" height="70px"></span>Mobile
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="dth-recharge-tab" data-bs-toggle="tab" href="#dthpayment" aria-controls="dthpayment">
                                        <span><img src="../Recharge/images/recharge/DTH.png" alt="" width="70px" height="70px"></span> DTH
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="electricity-recharge-tab" data-bs-toggle="tab" href="#electricity" aria-controls="electricity">
                                        <span><img src="../Recharge/images/recharge/Electricity.png" alt="" width="70px" height="70px"></span> Electricity</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="GasCylinder-recharge-tab" data-bs-toggle="tab" href="#GasCylinder" aria-controls="GasCylinder">
                                        <span><img src="../Recharge/images/recharge/GasCylinder.png" alt="" width="70px" height="70px"></span> Gas Cylinder</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="RedeemCode-recharge-tab" data-bs-toggle="tab" href="#RedeemCode" aria-controls="RedeemCode">
                                        <span><img src="../Recharge/images/recharge/RedeemCode.png" alt="" width="70px" height="70px"></span> Redeem Code</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="PipedGas-recharge-tab" data-bs-toggle="tab" href="#PipedGas" aria-controls="PipedGas">
                                        <span><img src="../Recharge/images/recharge/PipedGas.png" alt="" width="70px" height="70px"></span>
                                        Piped GAS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Water-recharge-tab" data-bs-toggle="tab" href="#Water" aria-controls="Water">
                                        <span><img src="../Recharge/images/recharge/Water.png" alt="" width="70px" height="70px"></span>
                                        Water</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="FastTAG-recharge-tab" data-bs-toggle="tab" href="#FastTAG" aria-controls="FastTAG">
                                        <span><img src="../Recharge/images/recharge/FastTAG.png" alt="" width="70px" height="70px"></span>
                                        Fast TAG</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="More-recharge-tab" data-bs-toggle="tab" href="#More" aria-controls="More">
                                        <span><img src="../Recharge/images/recharge/More.png" alt="" width="70px" height="70px"></span>
                                        More
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content my-3" id="myTabContent">
                            <div class="tab-pane fade show active" id="mobile-recharge" role="tabpanel" aria-labelledby="mobile-recharge-tab">
                                <!-- Mobile Recharge-->
                                <div class="bg-white shadow-md rounded p-4">
                                    <h2 class="text-4 mb-3 d-flex align-items-center">Mobile Recharge or Bill Payment</h2>
                                    <form class="myForm" method="post">
                                        <div class="mb-2">
                                            <div class="form-check form-check-inline">
                                                <input id="prepaid" name="rechargeBillpayment" class="form-check-input" checked="" required type="radio">
                                                <label class="form-check-label" for="prepaid">Prepaid</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input id="postpaid" name="rechargeBillpayment" class="form-check-input" required type="radio">
                                                <label class="form-check-label" for="postpaid">Postpaid</label>
                                            </div>
                                        </div>
                                        <div class="row g-3">
                                            <div class="col-md-6 col-lg">
                                                <div class="form__div Mobile_Number">
                                                    <input type="text" class="form__input" maxlength="10" id="Recharge_Mobile_Number_txt" placeholder="Enter Mobile Number">
                                                    <label class="form__label">Enter Mobile Number</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg">
                                                <select class="form-select rounded-7" id="operator_drp" required="">
                                                    <option value="">Select Your Operator</option>
                                                    <option>1st Operator</option>
                                                    <option>2nd Operator</option>
                                                    <option>3rd Operator</option>
                                                    <option>4th Operator</option>
                                                    <option>5th Operator</option>
                                                    <option>6th Operator</option>
                                                    <option>7th Operator</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-lg">
                                                <div class="position-relative">
                                                    <a href="#" data-bs-target="#RechargeViewPlans" data-bs-toggle="modal" class="view-plans-link">View Plans</a>
                                                    <div class="form__div">
                                                        <input type="text" class="form__input" maxlength="5" placeholder="Enter Amount">
                                                        <label class="form__label">Enter Amount</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 col-xl-2 d-grid">
                                                <!-- Trigger the modal with a button -->
                                                <a class="btn btn-primary" data-bs-target="#MobileRecharge_Continue_Btn" data-bs-toggle="modal" class="view-plans-link">Continue</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div id="MobileRecharge_Continue_Btn" class="modal fade" role="dialog" aria-hidden="true">
                                    <!-- Your modal content -->
                                    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                                        <!-- ... (rest of your modal content) ... -->
                                        <div class="col-md-8 col-lg-7 col-xl-6 mx-auto dashboardServiceContinueModalContent">
                                            <div class="bg-white shadow-sm rounded text-3 p-3 pt-sm-4 pb-sm-5 px-sm-5 mb-0 mb-sm-4">
                                                <!-- Modal header and body -->
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Confirm Recharge Details</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row mt-4">
                                                        <p class="col-sm text-muted mb-0 mb-sm-3">Mobile Number:</p>
                                                        <p class="col-sm text-sm-end fw-500">(+91) 9898989898</p>
                                                    </div>
                                                    <div class="row">
                                                        <p class="col-sm text-muted mb-0 mb-sm-3">Operator/Circle:</p>
                                                        <p class="col-sm text-sm-end fw-500">Vodafone | Gujarat</p>
                                                    </div>
                                                    <div class="row">
                                                        <p class="col-sm text-muted mb-0 mb-sm-3">Plan:</p>
                                                        <p class="col-sm text-sm-end fw-500">Mobile top-up</p>
                                                    </div>
                                                    <div class="row">
                                                        <p class="col-sm text-muted mb-0 mb-sm-3">Validity:</p>
                                                        <p class="col-sm text-sm-end fw-500">Talktime</p>
                                                    </div>
                                                    <div class="row">
                                                        <p class="col-sm text-muted mb-0 mb-sm-3">Amount:</p>
                                                        <p class="col-sm text-sm-end fw-500">₹150</p>
                                                    </div>
                                                    <div class="row">
                                                        <p class="col-12 text-muted mb-0">Plan Description:</p>
                                                        <p class="col-12 text-1">Local calls free & STD calls free & Roaming Incoming &
                                                            Outgoing calls free &
                                                            300 Local & National SMS & 1 GB 3G/4G Data & Data Validity 28 day(s) & For 3G/4G
                                                            user - T&C apply</p>
                                                    </div>
                                                    <div class="bg-light-4 rounded p-3">
                                                        <div class="row">
                                                            <div class="col-sm text-3 fw-600">Payment Amount:</div>
                                                            <div class="col-sm text-sm-end text-5 fw-500">₹150</div>
                                                        </div>
                                                    </div>
                                                    <div class="d-grid mt-4">
                                                        <a href="" data-bs-target="#MobileRecharge_TransactionSuccess" data-bs-toggle="modal" class="btn btn-primary">Make Payment</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="MobileRecharge_TransactionSuccess" class="modal fade" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                                        <div class="col-md-8 col-lg-7 col-xl-6 mx-auto dashboardServiceContinueModalContent">
                                            <div class="bg-white shadow-sm rounded text-3 p-3 pt-sm-4 pb-sm-5 px-sm-5 mb-0 mb-sm-4">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Transaction Completed</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <svg width="158" height="158" viewBox="0 0 158 158" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g filter="url(#filter0_d_1543_930)">
                                                                <circle cx="79" cy="75" r="75" fill="white" />
                                                                <circle cx="78.9997" cy="74.9997" r="63.8298" fill="#23A26D" fill-opacity="0.12" />
                                                                <path d="M77.861 44.6055C61.1132 44.6055 47.4658 58.2529 47.4658 75.0006C47.4658 91.7483 61.1132 105.396 77.861 105.396C94.6087 105.396 108.256 91.7483 108.256 75.0006C108.256 58.2529 94.6087 44.6055 77.861 44.6055ZM92.3898 68.0097L75.1558 85.2438C74.7303 85.6693 74.1527 85.9125 73.5448 85.9125C72.9369 85.9125 72.3594 85.6693 71.9339 85.2438L63.3321 76.6419C62.4506 75.7605 62.4506 74.3015 63.3321 73.4201C64.2135 72.5386 65.6725 72.5386 66.554 73.4201L73.5448 80.4109L89.1679 64.7878C90.0494 63.9064 91.5084 63.9064 92.3898 64.7878C93.2713 65.6693 93.2713 67.0979 92.3898 68.0097Z" fill="#23A26D" />
                                                            </g>
                                                            <defs>
                                                                <filter id="filter0_d_1543_930" x="0" y="0" width="158" height="158" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                                    <feOffset dy="4" />
                                                                    <feGaussianBlur stdDeviation="2" />
                                                                    <feComposite in2="hardAlpha" operator="out" />
                                                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1543_930" />
                                                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1543_930" result="shape" />
                                                                </filter>
                                                            </defs>
                                                        </svg>
                                                        <p class="col-sm text-success text-center text-8 mb-0 mb-sm-3">Success</p>
                                                    </div>
                                                    <div class="row">
                                                        <p class="col-sm text-muted mb-0 mb-sm-3">Mobile Number:</p>
                                                        <p class="col-sm text-sm-end fw-500">(+91) 9898989898</p>
                                                    </div>
                                                    <div class="row">
                                                        <p class="col-sm text-muted mb-0 mb-sm-3">Operator:</p>
                                                        <p class="col-sm text-sm-end fw-500">Vodafone</p>
                                                    </div>
                                                    <div class="row">
                                                        <p class="col-sm text-muted mb-0 mb-sm-3">Transaction Amount:</p>
                                                        <p class="col-sm text-sm-end fw-500">155.00</p>
                                                    </div>
                                                    <div class="row">
                                                        <p class="col-sm text-muted mb-0 mb-sm-3">Transaction ID:</p>
                                                        <p class="col-sm text-sm-end fw-500">BR000AA1VLLW</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="MobileRecharge_TransactionFail" class="modal fade" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                                        <div class="col-md-8 col-lg-7 col-xl-6 mx-auto dashboardServiceContinueModalContent">
                                            <div class="bg-white shadow-sm rounded text-3 p-3 pt-sm-4 pb-sm-5 px-sm-5 mb-0 mb-sm-4">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Transaction Completed</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <svg width="158" height="158" viewBox="0 0 158 158" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g filter="url(#filter0_d_1543_939)">
                                                                <circle cx="79" cy="75" r="75" fill="white" />
                                                                <circle cx="78.9997" cy="74.9997" r="63.8298" fill="#E22425" fill-opacity="0.2" />
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M100.478 53.4924C112.348 65.3623 112.348 84.6074 100.478 96.4774C88.6075 108.347 69.3625 108.347 57.4925 96.4774C45.6225 84.6074 45.6225 65.3623 57.4925 53.4924C69.3625 41.6224 88.6075 41.6224 100.478 53.4924ZM92.7497 88.7495C91.9686 89.5306 90.7023 89.5306 89.9213 88.7495L79.3952 78.2235L68.869 88.7496C68.088 89.5307 66.8217 89.5307 66.0406 88.7496C65.2596 87.9686 65.2596 86.7022 66.0406 85.9212L76.5668 75.395L66.0407 64.869C65.2596 64.0879 65.2596 62.8216 66.0407 62.0405C66.8217 61.2595 68.0881 61.2595 68.8691 62.0405L79.3952 72.5666L89.9212 62.0406C90.7022 61.2596 91.9686 61.2596 92.7496 62.0406C93.5307 62.8217 93.5307 64.088 92.7496 64.869L82.2236 75.395L92.7497 85.9211C93.5307 86.7022 93.5307 87.9685 92.7497 88.7495Z" fill="#E22425" />
                                                            </g>
                                                            <defs>
                                                                <filter id="filter0_d_1543_939" x="0" y="0" width="158" height="158" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                                    <feOffset dy="4" />
                                                                    <feGaussianBlur stdDeviation="2" />
                                                                    <feComposite in2="hardAlpha" operator="out" />
                                                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1543_939" />
                                                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1543_939" result="shape" />
                                                                </filter>
                                                            </defs>
                                                        </svg>
                                                        <p class="col-sm text-danger text-center text-8 mb-0 mb-sm-3">Fail</p>
                                                    </div>
                                                    <div class="row">
                                                        <p class="col-sm text-muted mb-0 mb-sm-3">Mobile Number:</p>
                                                        <p class="col-sm text-sm-end fw-500">(+91) 9898989898</p>
                                                    </div>
                                                    <div class="row">
                                                        <p class="col-sm text-muted mb-0 mb-sm-3">Operator:</p>
                                                        <p class="col-sm text-sm-end fw-500">Vodafone</p>
                                                    </div>
                                                    <div class="row">
                                                        <p class="col-sm text-muted mb-0 mb-sm-3">Transaction Amount:</p>
                                                        <p class="col-sm text-sm-end fw-500">155.00</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Mobile Recharge end -->
                            </div>
                            <div class="tab-pane fade" id="dthpayment" role="tabpanel" aria-labelledby="dth-recharge-tab">
                                <!-- DTH Recharge-->
                                <div class="bg-white shadow-md rounded p-4">
                                    <h2 class="text-4 mb-3 d-flex align-items-center">DTH Recharge</h2>
                                    <form class="myForm" method="post">
                                        <div class="row g-3">
                                            <div class="col-md-6 col-lg">
                                                <select class="form-select rounded-7" required="">
                                                    <option value="">Select Your Operator</option>
                                                    <option>1st Operator</option>
                                                    <option>2nd Operator</option>
                                                    <option>3rd Operator</option>
                                                    <option>4th Operator</option>
                                                    <option>5th Operator</option>
                                                    <option>6th Operator</option>
                                                    <option>7th Operator</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-lg">
                                                <div class="form__div">
                                                    <input type="text" class="form__input" maxlength="10" placeholder="Mobile Number">
                                                    <label class="form__label">Mobile Number</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg">
                                                <ul class="nav d-flex justify-content-center">
                                                    <li class="nav-item" style="width: 100%;">
                                                        <a href="#" style="width: 100%;" class="btn btn-primary" id="DTHCustomerInfoContainerShow">
                                                            Customer Info
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6 col-lg">
                                                <div class="form__div">
                                                    <a href="#" data-bs-target="#DTHViewPlans" data-bs-toggle="modal" class="view-plans-link">View
                                                        Plans</a>
                                                    <input type="text" class="form__input" placeholder="Amount">
                                                    <label class="form__label">Amount</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 col-xl-2 d-grid">
                                                <!-- Trigger the modal with a button -->
                                                <a class="btn btn-primary" data-bs-target="#DTH" data-bs-toggle="modal" class="view-plans-link">Continue</a>
                                            </div>
                                        </div>
                                    </form>
                                    <div id="DTH_customer_info" class="collapse">
                                        <div class="bg-white shadow-md rounded mt-4 position-relative">
                                            <h4>Customer Info</h4>
                                            <button type="button" class="btn-close position-absolute top-0 end-0 mt-1 me-1 mt-sm-2 me-sm-2" id="DTHCustomerInfoContainerHide" aria-label="Close"></button>
                                            <div class="d-flex align-items-center">
                                                <img src="" alt="" height="40px" width="40px">
                                                <div class="px-3">
                                                    <h6 class="d-flex text-center mt-2">Videocon DTH TV</h6>
                                                    <!-- <h6 class="d-flex text-center mt-2">Videocon DTH TV</h6> -->
                                                    <h6 class="text-primary mt-2">Sanjay</h6>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="d-flex">
                                                <h6>Customer Id:- </h6>
                                                <h6 class="text-primary"> 12345678</h6>
                                            </div>
                                            <div class="d-flex">
                                                <h6>Monthly Recharge:- </h6>
                                                <h6 class="text-primary"> 179</h6>
                                            </div>
                                            <div class="d-flex">
                                                <h6>Balance:- </h6>
                                                <h6 class="text-primary"> 4.04</h6>
                                            </div>
                                            <div class="d-flex">
                                                <h6>Status:- </h6>
                                                <h6 class="text-primary"> Deactive</h6>
                                            </div>
                                            <div class="d-flex">
                                                <h6>Next Recharge Date:- </h6>
                                                <h6 class="text-primary"> 2023-07-28 T: 00:00:00</h6>
                                            </div>
                                            <div class="d-flex">
                                                <h6>Last Recharge Date:- </h6>
                                                <h6 class="text-primary"> </h6>
                                            </div>
                                            <div class="d-flex">
                                                <h6>Last Recharge Amount:- </h6>
                                                <h6 class="text-primary"> </h6>
                                            </div>
                                            <div class="d-flex">
                                                <h6>Plan:- </h6>
                                                <h6 class="text-primary"> Package-ABP Asmita, Cartoon Network, Pogo, Nick, Aaj Tak, Zee Cinema
                                                    HD, BST Rest of India (B).</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="DTH" class="modal fade" role="dialog" aria-hidden="true">
                                    <!-- Your modal content -->
                                    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                                        <!-- ... (rest of your modal content) ... -->
                                        <div class="col-md-8 col-lg-7 col-xl-6 mx-auto dashboardServiceContinueModalContent">
                                            <div class="bg-white shadow-sm rounded text-3 p-3 pt-sm-4 pb-sm-5 px-sm-5 mb-0 mb-sm-4">
                                                <!-- Modal header and body -->
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Confirm DTH Details</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row mt-4">
                                                        <p class="col-sm text-muted mb-0 mb-sm-3">Mobile Number:</p>
                                                        <p class="col-sm text-sm-end fw-500">(+91) 9898989898</p>
                                                    </div>
                                                    <div class="row">
                                                        <p class="col-sm text-muted mb-0 mb-sm-3">Operator/Circle:</p>
                                                        <p class="col-sm text-sm-end fw-500">Vodafone | Gujarat</p>
                                                    </div>
                                                    <div class="row">
                                                        <p class="col-sm text-muted mb-0 mb-sm-3">Plan:</p>
                                                        <p class="col-sm text-sm-end fw-500">Mobile top-up</p>
                                                    </div>
                                                    <div class="row">
                                                        <p class="col-sm text-muted mb-0 mb-sm-3">Validity:</p>
                                                        <p class="col-sm text-sm-end fw-500">Talktime</p>
                                                    </div>
                                                    <div class="row">
                                                        <p class="col-sm text-muted mb-0 mb-sm-3">Amount:</p>
                                                        <p class="col-sm text-sm-end fw-500">₹150</p>
                                                    </div>
                                                    <div class="row">
                                                        <p class="col-12 text-muted mb-0">Plan Description:</p>
                                                        <p class="col-12 text-1">Local calls free & STD calls free & Roaming Incoming &
                                                            Outgoing calls free &
                                                            300 Local & National SMS & 1 GB 3G/4G Data & Data Validity 28 day(s) & For 3G/4G
                                                            user - T&C apply</p>
                                                    </div>
                                                    <div class="bg-light-4 rounded p-3">
                                                        <div class="row">
                                                            <div class="col-sm text-3 fw-600">Payment Amount:</div>
                                                            <div class="col-sm text-sm-end text-5 fw-500">₹150</div>
                                                        </div>
                                                    </div>
                                                    <div class="d-grid mt-4">
                                                        <a href="" class="btn btn-primary">Make Payment</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- DTH Recharge end -->
                            </div>
                            <div class="tab-pane fade" id="electricity" role="tabpanel" aria-labelledby="electricity-recharge-tab">
                                <!-- Electricity Bill-->
                                <div class="bg-white shadow-md rounded p-4">
                                    <h2 class="text-4 mb-3 d-flex align-items-center">Pay your Electricity Bill
                                        <img src="images/Bharat_BillPay_logo.svg" alt="Bharat_BillPay_logo" style="height: 30px; margin-left: 10px;">
                                    </h2>
                                    <form class="myForm" method="post">
                                        <div class="row g-3">
                                            <div class="col-md-6 col-lg">
                                                <select class="form-select rounded-7" required="">
                                                    <option value="">Select Operator</option>
                                                    <option>1st Operator</option>
                                                    <option>2nd Operator</option>
                                                    <option>3rd Operator</option>
                                                    <option>4th Operator</option>
                                                    <option>5th Operator</option>
                                                    <option>6th Operator</option>
                                                    <option>7th Operator</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-lg">
                                                <div class="form__div">
                                                    <input type="text" class="form__input" placeholder="Service Number">
                                                    <label class="form__label">Service Number</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg">
                                                <ul class="nav d-flex justify-content-center">
                                                    <li class="nav-item" style="width: 100%;">
                                                        <a href="#" style="width: 100%;" class="btn btn-primary" id="ElectricityCustomerInfoContainerShow">
                                                            Customer Info
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6 col-lg">
                                                <div class="form__div">
                                                    <input type="text" class="form__input" placeholder="Amount">
                                                    <label class="form__label">Amount</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 col-xl-2 d-grid">
                                                <!-- Trigger the modal with a button -->
                                                <a class="btn btn-primary" data-bs-target="#dashboardServiceContinueBtn" data-bs-toggle="modal" class="view-plans-link">Continue</a>
                                            </div>
                                        </div>
                                    </form>
                                    <div id="Electricity_customer_info" class="collapse">
                                        <div class="bg-white shadow-md rounded mt-4 position-relative">
                                            <h4>Customer Info</h4>
                                            <button type="button" class="btn-close position-absolute top-0 end-0 mt-1 me-1 mt-sm-2 me-sm-2" id="ElectricityCustomerInfoContainerHide" aria-label="Close"></button>
                                            <div class="d-flex align-items-center">
                                                <img src="" alt="" height="40px" width="40px">
                                                <div class="px-3">
                                                    <h6 class="d-flex text-center mt-2">Torrent Power - Ahmedabad</h6>
                                                    <h6 class="text-primary mt-2">10038854</h6>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="d-flex">
                                                <h6>Customer Name:- </h6>
                                                <h6 class="text-primary">Ravikant Laxmanbhai Chavada</h6>
                                            </div>
                                            <div class="d-flex">
                                                <h6>Due Amount:- </h6>
                                                <h6 class="text-primary">₹ <span>1380</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Electricity Bill end -->
                            </div>
                            <div class="tab-pane fade" id="GasCylinder" role="tabpanel" aria-labelledby="GasCylinder-recharge-tab">
                                <!-- Gas Bill-->
                                <div class="bg-white shadow-md rounded p-4">
                                    <h2 class="text-4 mb-3 d-flex align-items-center">Pay Your Gas Bill<img src="images/Bharat_BillPay_logo.svg" alt="Bharat_BillPay_logo" style="height: 30px; margin-left: 10px;"></h2>
                                    <form class="myForm" method="post">
                                        <div class="row g-3">
                                            <div class="col-md-6 col-lg">
                                                <select class="form-select rounded-7" required="">
                                                    <option value="">Select Your Operator</option>
                                                    <option>1st Operator</option>
                                                    <option>2nd Operator</option>
                                                    <option>3rd Operator</option>
                                                    <option>4th Operator</option>
                                                    <option>5th Operator</option>
                                                    <option>6th Operator</option>
                                                    <option>7th Operator</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-lg">
                                                <div class="form__div">
                                                    <input type="text" class="form__input" placeholder="Consumer Number">
                                                    <label class="form__label">Consumer Number</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg">
                                                <ul class="nav d-flex justify-content-center">
                                                    <li class="nav-item" style="width: 100%;">
                                                        <a href="#" style="width: 100%;" class="btn btn-primary" id="GasCylinderCustomerInfoContainerShow">
                                                            Customer Info
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6 col-lg">
                                                <div class="form__div">
                                                    <input type="text" class="form__input" placeholder="Enter Amount">
                                                    <label class="form__label">Enter Amount</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 col-xl-2 d-grid">
                                                <!-- Trigger the modal with a button -->
                                                <a class="btn btn-primary" data-bs-target="#dashboardServiceContinueBtn" data-bs-toggle="modal" class="view-plans-link">Continue</a>
                                            </div>
                                        </div>
                                    </form>
                                    <div id="GasCylinder_customer_info" class="collapse">
                                        <div class="bg-white shadow-md rounded mt-4 position-relative">
                                            <h4>Customer Info</h4>
                                            <button type="button" class="btn-close position-absolute top-0 end-0 mt-1 me-1 mt-sm-2 me-sm-2" id="GasCylinderCustomerInfoContainerHide" aria-label="Close"></button>
                                            <div class="d-flex align-items-center">
                                                <img src="" alt="" height="40px" width="40px">
                                                <div class="px-3">
                                                    <h6 class="d-flex text-center mt-2">Bharat Gas (BPCL)</h6>
                                                    <h6 class="text-primary mt-2">9033337384</h6>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="d-flex">
                                                <h6>Customer Name:- </h6>
                                                <h6 class="text-primary">Mr.Hansaben A Dalvadi</h6>
                                            </div>
                                            <div class="d-flex">
                                                <h6>Due Amount:- </h6>
                                                <h6 class="text-primary">₹ <span>926.5</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Gas Bill end -->
                            </div>
                            <div class="tab-pane fade" id="RedeemCode" role="tabpanel" aria-labelledby="RedeemCode-recharge-tab">
                                <!-- Redeem Code Bill-->
                                <div class="bg-white shadow-md rounded p-4">
                                    <h2 class="text-4 mb-3 d-flex align-items-center">Pay Your Redeem Code Bill</h2>
                                    <form class="myForm" method="post">
                                        <div class="row g-3">
                                            <div class="col-md-6 col-lg">
                                                <div class="form__div">
                                                    <input type="text" class="form__input" maxlength="10" placeholder="Enter Mobile Number">
                                                    <label class="form__label">Enter Mobile Number</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg">
                                                <div class="form__div">
                                                    <input type="text" class="form__input" placeholder="Enter Amount">
                                                    <label class="form__label">Enter Amount</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 col-xl-2 d-grid">
                                                <!-- Trigger the modal with a button -->
                                                <a class="btn btn-primary" data-bs-target="#dashboardServiceContinueBtn" data-bs-toggle="modal" class="view-plans-link">Continue</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Redeem Code Bill end -->
                            </div>
                            <div class="tab-pane fade" id="PipedGas" role="tabpanel" aria-labelledby="PipedGas-recharge-tab">
                                <!-- Piped Gas Bill-->
                                <div class="bg-white shadow-md rounded p-4">
                                    <h2 class="text-4 mb-3 d-flex align-items-center">Pay Your Piped Gas Bill<img src="images/Bharat_BillPay_logo.svg" alt="Bharat_BillPay_logo" style="height: 30px; margin-left: 10px;"></h2>
                                    <form class="myForm" method="post">
                                        <div class="row g-3">
                                            <div class="col-md-6 col-lg">
                                                <select class="form-select rounded-7" required="">
                                                    <option value="">Select Your Operator</option>
                                                    <option>1st Operator</option>
                                                    <option>2nd Operator</option>
                                                    <option>3rd Operator</option>
                                                    <option>4th Operator</option>
                                                    <option>5th Operator</option>
                                                    <option>6th Operator</option>
                                                    <option>7th Operator</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-lg">
                                                <div class="form__div">
                                                    <input type="text" class="form__input" placeholder="Enter Consumer Id">
                                                    <label class="form__label">Enter Consumer Id</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg">
                                                <div class="form__div">
                                                    <input type="text" class="form__input" placeholder="Enter Amount">
                                                    <label class="form__label">Enter Amount</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 col-xl-2 d-grid">
                                                <!-- Trigger the modal with a button -->
                                                <a class="btn btn-primary" data-bs-target="#dashboardServiceContinueBtn" data-bs-toggle="modal" class="view-plans-link">Continue</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Piped Gas Bill end -->
                            </div>
                            <div class="tab-pane fade" id="Water" role="tabpanel" aria-labelledby="Water-recharge-tab">
                                <!-- Water Bill-->
                                <div class="bg-white shadow-md rounded p-4">
                                    <h2 class="text-4 mb-3 d-flex align-items-center">Pay Your Water Bill<img src="images/Bharat_BillPay_logo.svg" alt="Bharat_BillPay_logo" style="height: 30px; margin-left: 10px;"></h2>
                                    <form class="myForm" method="post">
                                        <div class="row g-3">
                                            <div class="col-md-6 col-lg">
                                                <select class="form-select rounded-7" required="">
                                                    <option value="">Select Your Operator</option>
                                                    <option>1st Operator</option>
                                                    <option>2nd Operator</option>
                                                    <option>3rd Operator</option>
                                                    <option>4th Operator</option>
                                                    <option>5th Operator</option>
                                                    <option>6th Operator</option>
                                                    <option>7th Operator</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-lg">
                                                <div class="form__div">
                                                    <input type="text" class="form__input" placeholder="Enter Connection Number">
                                                    <label class="form__label">Enter Connection Number</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg">
                                                <div class="form__div">
                                                    <input type="text" class="form__input" placeholder="Enter Amount">
                                                    <label class="form__label">Enter Amount</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 col-xl-2 d-grid">
                                                <!-- Trigger the modal with a button -->
                                                <a class="btn btn-primary" data-bs-target="#dashboardServiceContinueBtn" data-bs-toggle="modal" class="view-plans-link">Continue</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Water Bill end -->
                            </div>
                            <div class="tab-pane fade" id="FastTAG" role="tabpanel" aria-labelledby="FastTAG-recharge-tab">
                                <!-- Fast TAG Bill-->
                                <div class="bg-white shadow-md rounded p-4">
                                    <h2 class="text-4 mb-3 d-flex align-items-center">Pay Your Fast TAG Bill<img src="images/Bharat_BillPay_logo.svg" alt="Bharat_BillPay_logo" style="height: 30px; margin-left: 10px;"></h2>
                                    <form class="myForm" method="post">
                                        <div class="row g-3">
                                            <div class="col-md-6 col-lg">
                                                <select class="form-select rounded-7" required="">
                                                    <option value="">Select Your Operator</option>
                                                    <option>1st Operator</option>
                                                    <option>2nd Operator</option>
                                                    <option>3rd Operator</option>
                                                    <option>4th Operator</option>
                                                    <option>5th Operator</option>
                                                    <option>6th Operator</option>
                                                    <option>7th Operator</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-lg">
                                                <div class="form__div">
                                                    <input type="text" class="form__input" placeholder="Enter Vehicle Registration Number">
                                                    <label class="form__label">Enter Vehicle Registration Number</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 col-xl-3">
                                                <ul class="nav d-flex justify-content-center">
                                                    <li class="nav-item" style="width: 100%;">
                                                        <a href="#fastTAG_customer_info" style="width: 100%;" class="btn btn-primary" data-bs-toggle="collapse">
                                                            Customer Info
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6 col-lg-3 col-xl-2 d-grid">
                                                <!-- Trigger the modal with a button -->
                                                <a class="btn btn-primary" data-bs-target="#dashboardServiceContinueBtn" data-bs-toggle="modal" class="view-plans-link">Continue</a>
                                            </div>
                                        </div>
                                    </form>
                                    <div id="fastTAG_customer_info" class="collapse">
                                        <div class="bg-white shadow-md rounded mt-4">
                                            <div class="d-flex align-items-center">
                                                <img src="" alt="" height="40px" width="40px">
                                            </div>
                                            <hr>
                                            <div class="d-flex">
                                                <h6>Message:- </h6>
                                                <h6 class="text-primary"> BILL FETCH SUCCESSFUL</h6>
                                            </div>
                                            <div class="d-flex">
                                                <h6>Customer Name:- </h6>
                                                <h6 class="text-primary"> ABCD</h6>
                                            </div>
                                            <div class="d-flex">
                                                <h6>Due Amount:- </h6>
                                                <h6 class="text-primary"> 1</h6>
                                            </div>
                                            <div class="d-flex">
                                                <h6>DueDate:- </h6>
                                                <h6 class="text-primary"> 12345678</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fast TAG Bill end -->
                            </div>

                            <div class="tab-pane fade" id="More" role="tabpanel" aria-labelledby="More-recharge-tab">
                                <!-- More Button -->
                                <div class="bg-white shadow-md rounded p-4">
                                    <h2 class="text-4 mb-3">More Service</h2>
                                    <ul class="grid-container nav dashboard" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link" id="Postpaid-recharge-tab" data-bs-toggle="tab" href="#Postpaid-recharge" aria-controls="Postpaid-recharge">
                                                <div><img src="../Recharge/images/recharge/Postpaid.png" alt=""></div>
                                                Postpaid
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="LoneRepayment-recharge-tab" data-bs-toggle="tab" href="#LoneRepayment-recharge" aria-controls="LoneRepayment-recharge">
                                                <div><img src="../Recharge/images/recharge/LoneRepayment.png" alt=""></div>
                                                Lone Repayment
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="Landline-recharge-tab" data-bs-toggle="tab" href="#Landline-recharge" aria-controls="Landline-recharge">
                                                <div><img src="../Recharge/images/recharge/Landline.png" alt=""></div>
                                                Landline
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="Insurance-recharge-tab" data-bs-toggle="tab" href="#Insurance-recharge" aria-controls="Insurance-recharge">
                                                <div><img src="../Recharge/images/recharge/Insurance.png" alt=""></div>
                                                Insurance
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="CableTV-recharge-tab" data-bs-toggle="tab" href="#CableTV-recharge" aria-controls="CableTV-recharge">
                                                <div><img src="../Recharge/images/recharge/CableTV.png" alt=""></div>
                                                Cable TV
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="Broadband-recharge-tab" data-bs-toggle="tab" href="#Broadband-recharge" aria-controls="Broadband-recharge">
                                                <div><img src="../Recharge/images/recharge/Broadband.png" alt=""></div>
                                                Broadband
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="CreditCard-recharge-tab" data-bs-toggle="tab" href="#CreditCard-recharge" aria-controls="CreditCard-recharge">
                                                <div><img src="../Recharge/images/recharge/CreditCard.png" alt=""></div>
                                                Credit Card
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="MunicipalTax-recharge-tab" data-bs-toggle="tab" href="#MunicipalTax-recharge" aria-controls="MunicipalTax-recharge">
                                                <div><img src="../Recharge/images/recharge/MunicipalTax.png" alt=""></div>
                                                Municipal Tax
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="HousingSociety-recharge-tab" data-bs-toggle="tab" href="#HousingSociety-recharge" aria-controls="HousingSociety-recharge">
                                                <div><img src="../Recharge/images/recharge/HousingSociety.png" alt=""></div>
                                                Housing Society
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="Clubs_Associations-recharge-tab" data-bs-toggle="tab" href="#Clubs_Associations-recharge" aria-controls="Clubs_Associations-recharge">
                                                <div><img src="../Recharge/images/recharge/Clubs&Associations.png" alt=""></div>
                                                Clubs & Associations
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="EducationFees-recharge-tab" data-bs-toggle="tab" href="#EducationFees-recharge" aria-controls="EducationFees-recharge">
                                                <div><img src="../Recharge/images/recharge/EducationFees.png" alt=""></div>
                                                Education Fees
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="Hospital_Pathology-recharge-tab" data-bs-toggle="tab" href="#Hospital_Pathology-recharge" aria-controls="Hospital_Pathology-recharge">
                                                <div><img src="../Recharge/images/recharge/Hospital&Pathology.png" alt=""></div>
                                                Hospital & Pathology
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="SubscriptionFees-recharge-tab" data-bs-toggle="tab" href="#SubscriptionFees-recharge" aria-controls="SubscriptionFees-recharge">
                                                <div><img src="../Recharge/images/recharge/SubscriptionFees.png" alt=""></div>
                                                Subscription Fees
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- More Button end -->
                            </div>
                            <div class="tab-pane fade" id="Postpaid-recharge" role="tabpanel" aria-labelledby="Postpaid-recharge-tab">
                                <!-- Postpaid Recharge-->
                                <div class="bg-white shadow-md rounded p-4">
                                    <h2 class="text-4 mb-3 d-flex align-items-center">Pay Your Postpaid Bill<img src="images/Bharat_BillPay_logo.svg" alt="Bharat_BillPay_logo" style="height: 30px; margin-left: 10px;"></h2>
                                    <form class="myForm" method="post">
                                        <div class="row g-3">
                                            <div class="col-md-6 col-lg">
                                                <div class="form__div">
                                                    <input type="text" class="form__input" maxlength="10" placeholder="Enter Mobile Number">
                                                    <label class="form__label">Enter Mobile Number</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg">
                                                <select class="form-select rounded-7" required="">
                                                    <option value="">Select Your Operator</option>
                                                    <option>1st Operator</option>
                                                    <option>2nd Operator</option>
                                                    <option>3rd Operator</option>
                                                    <option>4th Operator</option>
                                                    <option>5th Operator</option>
                                                    <option>6th Operator</option>
                                                    <option>7th Operator</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-lg">
                                                <div class="position-relative">
                                                    <div class="form__div">
                                                        <input type="text" class="form__input" placeholder="Enter Amount">
                                                        <label class="form__label">Enter Amount</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 col-xl-2 d-grid">
                                                <!-- Trigger the modal with a button -->
                                                <a class="btn btn-primary" data-bs-target="#dashboardServiceContinueBtn" data-bs-toggle="modal" class="view-plans-link">Continue</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Postpaid Recharge end -->
                            </div>
                            <div class="tab-pane fade" id="LoneRepayment-recharge" role="tabpanel" aria-labelledby="LoneRepayment-recharge-tab">
                                <!-- Lone Repayment Recharge-->
                                <div class="bg-white shadow-md rounded p-4">
                                    <h2 class="text-4 mb-3 d-flex align-items-center">Pay Your Lone Repayment Bill<img src="images/Bharat_BillPay_logo.svg" alt="Bharat_BillPay_logo" style="height: 30px; margin-left: 10px;"></h2>
                                    <form class="myForm" method="post">
                                        <div class="row g-3">
                                            <div class="col-md-6 col-lg">
                                                <div class="form__div">
                                                    <input type="text" class="form__input" placeholder="Enter Lone Number">
                                                    <label class="form__label">Enter Lone Number</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg">
                                                <select class="form-select rounded-7" required="">
                                                    <option value="">Select Your Operator</option>
                                                    <option>1st Operator</option>
                                                    <option>2nd Operator</option>
                                                    <option>3rd Operator</option>
                                                    <option>4th Operator</option>
                                                    <option>5th Operator</option>
                                                    <option>6th Operator</option>
                                                    <option>7th Operator</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-lg">
                                                <div class="position-relative">
                                                    <div class="form__div">
                                                        <input type="text" class="form__input" placeholder="Enter Amount">
                                                        <label class="form__label">Enter Amount</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 col-xl-2 d-grid">
                                                <a class="btn btn-primary" data-bs-target="#dashboardServiceContinueBtn" data-bs-toggle="modal" class="view-plans-link">Continue</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Lone Repayment Recharge end -->
                            </div>
                            <div class="tab-pane fade" id="Landline-recharge" role="tabpanel" aria-labelledby="Landline-recharge-tab">
                                <!-- Landline Recharge-->
                                <div class="bg-white shadow-md rounded p-4">
                                    <h2 class="text-4 mb-3 d-flex align-items-center">Pay Your Landline Bill<img src="images/Bharat_BillPay_logo.svg" alt="Bharat_BillPay_logo" style="height: 30px; margin-left: 10px;"></h2>
                                    <form class="myForm" method="post">
                                        <div class="row g-3">
                                            <div class="col-md-6 col-lg">
                                                <div class="form__div">
                                                    <input type="text" class="form__input" placeholder="Enter Landline Number">
                                                    <label class="form__label">Enter Landline Number</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg">
                                                <select class="form-select rounded-7" required="">
                                                    <option value="">Select Your Operator</option>
                                                    <option>1st Operator</option>
                                                    <option>2nd Operator</option>
                                                    <option>3rd Operator</option>
                                                    <option>4th Operator</option>
                                                    <option>5th Operator</option>
                                                    <option>6th Operator</option>
                                                    <option>7th Operator</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-lg">
                                                <div class="position-relative">
                                                    <div class="form__div">
                                                        <input type="text" class="form__input" placeholder="Enter Amount">
                                                        <label class="form__label">Enter Amount</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 col-xl-2 d-grid">
                                                <a class="btn btn-primary" data-bs-target="#dashboardServiceContinueBtn" data-bs-toggle="modal" class="view-plans-link">Continue</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Landline Recharge end -->
                            </div>
                            <div class="tab-pane fade" id="Insurance-recharge" role="tabpanel" aria-labelledby="Insurance-recharge-tab">
                                <!-- Insurance Recharge-->
                                <div class="bg-white shadow-md rounded p-4">
                                    <h2 class="text-4 mb-3 d-flex align-items-center">Pay Your Insurance Bill<img src="images/Bharat_BillPay_logo.svg" alt="Bharat_BillPay_logo" style="height: 30px; margin-left: 10px;"></h2>
                                    <form class="myForm" method="post">
                                        <div class="row g-3">
                                            <div class="col-md-6 col-lg">
                                                <div class="form__div">
                                                    <input type="text" class="form__input" placeholder="DOB (YYYY-MM-DD)">
                                                    <label class="form__label">DOB (YYYY-MM-DD)</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg">
                                                <div class="form__div">
                                                    <input type="text" class="form__input" placeholder="Policy Number">
                                                    <label class="form__label">Policy Number</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg">
                                                <select class="form-select rounded-7" required="">
                                                    <option value="">Select Your Operator</option>
                                                    <option>1st Operator</option>
                                                    <option>2nd Operator</option>
                                                    <option>3rd Operator</option>
                                                    <option>4th Operator</option>
                                                    <option>5th Operator</option>
                                                    <option>6th Operator</option>
                                                    <option>7th Operator</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-lg">
                                                <div class="position-relative">
                                                    <div class="form__div">
                                                        <input type="text" class="form__input" placeholder="Enter Amount">
                                                        <label class="form__label">Enter Amount</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 col-xl-2 d-grid">
                                                <a class="btn btn-primary" data-bs-target="#dashboardServiceContinueBtn" data-bs-toggle="modal" class="view-plans-link">Continue</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Insurance Recharge end -->
                            </div>
                            <div class="tab-pane fade" id="CableTV-recharge" role="tabpanel" aria-labelledby="CableTV-recharge-tab">
                                <!-- Cable TV Recharge-->
                                <div class="bg-white shadow-md rounded p-4">
                                    <h2 class="text-4 mb-3 d-flex align-items-center">Pay Your Cable TV Bill<img src="images/Bharat_BillPay_logo.svg" alt="Bharat_BillPay_logo" style="height: 30px; margin-left: 10px;"></h2>
                                    <form class="myForm" method="post">
                                        <div class="row g-3">
                                            <div class="col-md-6 col-lg">
                                                <div class="form__div">
                                                    <input type="text" class="form__input" maxlength="10" placeholder="Enter Mobile Number">
                                                    <label class="form__label">Enter Mobile Number</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg">
                                                <select class="form-select rounded-7" required="">
                                                    <option value="">Select Your Operator</option>
                                                    <option>1st Operator</option>
                                                    <option>2nd Operator</option>
                                                    <option>3rd Operator</option>
                                                    <option>4th Operator</option>
                                                    <option>5th Operator</option>
                                                    <option>6th Operator</option>
                                                    <option>7th Operator</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-lg">
                                                <div class="position-relative">
                                                    <div class="form__div">
                                                        <input type="text" class="form__input" placeholder="Enter Amount">
                                                        <label class="form__label">Enter Amount</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 col-xl-2 d-grid">
                                                <a class="btn btn-primary" data-bs-target="#dashboardServiceContinueBtn" data-bs-toggle="modal" class="view-plans-link">Continue</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Cable TV Recharge end -->
                            </div>
                            <div class="tab-pane fade" id="Broadband-recharge" role="tabpanel" aria-labelledby="Broadband-recharge-tab">
                                <!-- Broadband Recharge-->
                                <div class="bg-white shadow-md rounded p-4">
                                    <h2 class="text-4 mb-3 d-flex align-items-center">Pay Your Broadband Bill<img src="images/Bharat_BillPay_logo.svg" alt="Bharat_BillPay_logo" style="height: 30px; margin-left: 10px;"></h2>
                                    <form class="myForm" method="post">
                                        <div class="row g-3">
                                            <div class="col-md-6 col-lg">
                                                <div class="form__div">
                                                    <input type="text" class="form__input" maxlength="10" placeholder="Enter Mobile Number">
                                                    <label class="form__label">Enter Mobile Number</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg">
                                                <select class="form-select rounded-7" required="">
                                                    <option value="">Select Your Operator</option>
                                                    <option>1st Operator</option>
                                                    <option>2nd Operator</option>
                                                    <option>3rd Operator</option>
                                                    <option>4th Operator</option>
                                                    <option>5th Operator</option>
                                                    <option>6th Operator</option>
                                                    <option>7th Operator</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-lg">
                                                <div class="position-relative">
                                                    <div class="form__div">
                                                        <input type="text" class="form__input" placeholder="Enter Amount">
                                                        <label class="form__label">Enter Amount</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 col-xl-2 d-grid">
                                                <a class="btn btn-primary" data-bs-target="#dashboardServiceContinueBtn" data-bs-toggle="modal" class="view-plans-link">Continue</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Broadband Recharge end -->
                            </div>
                            <div class="tab-pane fade" id="CreditCard-recharge" role="tabpanel" aria-labelledby="CreditCard-recharge-tab">
                                <!-- Credit Card Recharge-->
                                <div class="bg-white shadow-md rounded p-4">
                                    <h2 class="text-4 mb-3 d-flex align-items-center">Pay Your Credit Card Bill<img src="images/Bharat_BillPay_logo.svg" alt="Bharat_BillPay_logo" style="height: 30px; margin-left: 10px;"></h2>
                                    <form class="myForm" method="post">
                                        <div class="row g-3">
                                            <div class="col-md-6 col-lg">
                                                <div class="form__div">
                                                    <input type="text" class="form__input" maxlength="4" placeholder="Last 4 digits of Credit Card">
                                                    <label class="form__label">Last 4 digits of Credit Card</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg">
                                                <select class="form-select rounded-7" required="">
                                                    <option value="">Select Your Operator</option>
                                                    <option>1st Operator</option>
                                                    <option>2nd Operator</option>
                                                    <option>3rd Operator</option>
                                                    <option>4th Operator</option>
                                                    <option>5th Operator</option>
                                                    <option>6th Operator</option>
                                                    <option>7th Operator</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-lg">
                                                <div class="position-relative">
                                                    <div class="form__div">
                                                        <input type="text" class="form__input" placeholder="Enter Amount">
                                                        <label class="form__label">Enter Amount</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 col-xl-2 d-grid">
                                                <a class="btn btn-primary" data-bs-target="#dashboardServiceContinueBtn" data-bs-toggle="modal" class="view-plans-link">Continue</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Credit Card Recharge end -->
                            </div>
                            <div class="tab-pane fade" id="MunicipalTax-recharge" role="tabpanel" aria-labelledby="MunicipalTax-recharge-tab">
                                <!-- Municipal Tax Recharge-->
                                <div class="bg-white shadow-md rounded p-4">
                                    <h2 class="text-4 mb-3 d-flex align-items-center">Pay Your Municipal Tax Bill<img src="images/Bharat_BillPay_logo.svg" alt="Bharat_BillPay_logo" style="height: 30px; margin-left: 10px;"></h2>
                                    <form class="myForm" method="post">
                                        <div class="row g-3">
                                            <div class="col-md-6 col-lg">
                                                <div class="form__div">
                                                    <input type="text" class="form__input" maxlength="10" placeholder="Enter Mobile Number">
                                                    <label class="form__label">Enter Mobile Number</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg">
                                                <select class="form-select rounded-7" required="">
                                                    <option value="">Select Your Operator</option>
                                                    <option>1st Operator</option>
                                                    <option>2nd Operator</option>
                                                    <option>3rd Operator</option>
                                                    <option>4th Operator</option>
                                                    <option>5th Operator</option>
                                                    <option>6th Operator</option>
                                                    <option>7th Operator</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-lg">
                                                <div class="position-relative">
                                                    <div class="form__div">
                                                        <input type="text" class="form__input" placeholder="Enter Amount">
                                                        <label class="form__label">Enter Amount</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 col-xl-2 d-grid">
                                                <a class="btn btn-primary" data-bs-target="#dashboardServiceContinueBtn" data-bs-toggle="modal" class="view-plans-link">Continue</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Municipal Tax Recharge end -->
                            </div>
                            <div class="tab-pane fade" id="HousingSociety-recharge" role="tabpanel" aria-labelledby="HousingSociety-recharge-tab">
                                <!-- Housing Society Recharge-->
                                <div class="bg-white shadow-md rounded p-4">
                                    <h2 class="text-4 mb-3 d-flex align-items-center">Pay Your Housing Society Bill<img src="images/Bharat_BillPay_logo.svg" alt="Bharat_BillPay_logo" style="height: 30px; margin-left: 10px;"></h2>
                                    <form class="myForm" method="post">
                                        <div class="row g-3">
                                            <div class="col-md-6 col-lg">
                                                <div class="form__div">
                                                    <input type="text" class="form__input" maxlength="10" placeholder="Enter Mobile Number">
                                                    <label class="form__label">Enter Mobile Number</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg">
                                                <select class="form-select rounded-7" required="">
                                                    <option value="">Select Your Operator</option>
                                                    <option>1st Operator</option>
                                                    <option>2nd Operator</option>
                                                    <option>3rd Operator</option>
                                                    <option>4th Operator</option>
                                                    <option>5th Operator</option>
                                                    <option>6th Operator</option>
                                                    <option>7th Operator</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-lg">
                                                <div class="position-relative">
                                                    <div class="form__div">
                                                        <input type="text" class="form__input" placeholder="Enter Amount">
                                                        <label class="form__label">Enter Amount</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 col-xl-2 d-grid">
                                                <a class="btn btn-primary" data-bs-target="#dashboardServiceContinueBtn" data-bs-toggle="modal" class="view-plans-link">Continue</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Housing Society Recharge end -->
                            </div>
                            <div class="tab-pane fade" id="Clubs_Associations-recharge" role="tabpanel" aria-labelledby="Clubs_Associations-recharge-tab">
                                <!-- Clubs & Associations Recharge-->
                                <div class="bg-white shadow-md rounded p-4">
                                    <h2 class="text-4 mb-3 d-flex align-items-center">Pay Your Clubs & Associations Bill<img src="images/Bharat_BillPay_logo.svg" alt="Bharat_BillPay_logo" style="height: 30px; margin-left: 10px;"></h2>
                                    <form class="myForm" method="post">
                                        <div class="row g-3">
                                            <div class="col-md-6 col-lg">
                                                <div class="form__div">
                                                    <input type="text" class="form__input" maxlength="10" placeholder="Enter Mobile Number">
                                                    <label class="form__label">Enter Mobile Number</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg">
                                                <select class="form-select rounded-7" required="">
                                                    <option value="">Select Your Operator</option>
                                                    <option>1st Operator</option>
                                                    <option>2nd Operator</option>
                                                    <option>3rd Operator</option>
                                                    <option>4th Operator</option>
                                                    <option>5th Operator</option>
                                                    <option>6th Operator</option>
                                                    <option>7th Operator</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-lg">
                                                <div class="position-relative">
                                                    <div class="form__div">
                                                        <input type="text" class="form__input" placeholder="Enter Amount">
                                                        <label class="form__label">Enter Amount</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 col-xl-2 d-grid">
                                                <a class="btn btn-primary" data-bs-target="#dashboardServiceContinueBtn" data-bs-toggle="modal" class="view-plans-link">Continue</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Clubs & Associations Recharge end -->
                            </div>
                            <div class="tab-pane fade" id="EducationFees-recharge" role="tabpanel" aria-labelledby="EducationFees-recharge-tab">
                                <!-- Education Fees Recharge-->
                                <div class="bg-white shadow-md rounded p-4">
                                    <h2 class="text-4 mb-3 d-flex align-items-center">Pay Your Education Fees Bill<img src="images/Bharat_BillPay_logo.svg" alt="Bharat_BillPay_logo" style="height: 30px; margin-left: 10px;"></h2>
                                    <form class="myForm" method="post">
                                        <div class="row g-3">
                                            <div class="col-md-6 col-lg">
                                                <div class="form__div">
                                                    <input type="text" class="form__input" maxlength="10" placeholder="Enter Mobile Number">
                                                    <label class="form__label">Enter Mobile Number</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg">
                                                <select class="form-select rounded-7" required="">
                                                    <option value="">Select Your Operator</option>
                                                    <option>1st Operator</option>
                                                    <option>2nd Operator</option>
                                                    <option>3rd Operator</option>
                                                    <option>4th Operator</option>
                                                    <option>5th Operator</option>
                                                    <option>6th Operator</option>
                                                    <option>7th Operator</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-lg">
                                                <div class="position-relative">
                                                    <div class="form__div">
                                                        <input type="text" class="form__input" placeholder="Enter Amount">
                                                        <label class="form__label">Enter Amount</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 col-xl-2 d-grid">
                                                <a class="btn btn-primary" data-bs-target="#dashboardServiceContinueBtn" data-bs-toggle="modal" class="view-plans-link">Continue</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Education Fees Recharge end -->
                            </div>
                            <div class="tab-pane fade" id="Hospital_Pathology-recharge" role="tabpanel" aria-labelledby="Hospital_Pathology-recharge-tab">
                                <!-- Hospital & Pathology Recharge-->
                                <div class="bg-white shadow-md rounded p-4">
                                    <h2 class="text-4 mb-3 d-flex align-items-center">Pay Your Hospital & Pathology Bill<img src="images/Bharat_BillPay_logo.svg" alt="Bharat_BillPay_logo" style="height: 30px; margin-left: 10px;"></h2>
                                    <form class="myForm" method="post">
                                        <div class="row g-3">
                                            <div class="col-md-6 col-lg">
                                                <div class="form__div">
                                                    <input type="text" class="form__input" maxlength="10" placeholder="Enter Mobile Number">
                                                    <label class="form__label">Enter Mobile Number</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg">
                                                <select class="form-select rounded-7" required="">
                                                    <option value="">Select Your Operator</option>
                                                    <option>1st Operator</option>
                                                    <option>2nd Operator</option>
                                                    <option>3rd Operator</option>
                                                    <option>4th Operator</option>
                                                    <option>5th Operator</option>
                                                    <option>6th Operator</option>
                                                    <option>7th Operator</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-lg">
                                                <div class="position-relative">
                                                    <div class="form__div">
                                                        <input type="text" class="form__input" placeholder="Enter Amount">
                                                        <label class="form__label">Enter Amount</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 col-xl-2 d-grid">
                                                <a class="btn btn-primary" data-bs-target="#dashboardServiceContinueBtn" data-bs-toggle="modal" class="view-plans-link">Continue</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Hospital & Pathology Recharge end -->
                            </div>
                            <div class="tab-pane fade" id="SubscriptionFees-recharge" role="tabpanel" aria-labelledby="SubscriptionFees-recharge-tab">
                                <!-- Subscription Fees Recharge-->
                                <div class="bg-white shadow-md rounded p-4">
                                    <h2 class="text-4 mb-3 d-flex align-items-center">Pay Your Subscription Fees Bill<img src="images/Bharat_BillPay_logo.svg" alt="Bharat_BillPay_logo" style="height: 30px; margin-left: 10px;"></h2>
                                    <form class="myForm" method="post">
                                        <div class="row g-3">
                                            <div class="col-md-6 col-lg">
                                                <div class="form__div">
                                                    <input type="text" class="form__input" maxlength="10" placeholder="Enter Mobile Number">
                                                    <label class="form__label">Enter Mobile Number</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg">
                                                <select class="form-select rounded-7" required="">
                                                    <option value="">Select Your Operator</option>
                                                    <option>1st Operator</option>
                                                    <option>2nd Operator</option>
                                                    <option>3rd Operator</option>
                                                    <option>4th Operator</option>
                                                    <option>5th Operator</option>
                                                    <option>6th Operator</option>
                                                    <option>7th Operator</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-lg">
                                                <div class="position-relative">
                                                    <div class="form__div">
                                                        <input type="text" class="form__input" placeholder="Enter Amount">
                                                        <label class="form__label">Enter Amount</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 col-xl-2 d-grid">
                                                <a class="btn btn-primary" data-bs-target="#dashboardServiceContinueBtn" data-bs-toggle="modal" class="view-plans-link">Continue</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Subscription Fees Recharge end -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Banner
    ============================================= -->
        <div class="bg-white shadow-md py-5">
            <div class="container">
                <div class="owl-carousel owl-theme" data-autoplay="true" data-loop="true" data-nav="true" data-margin="30" data-items-xs="1" data-items-sm="2" data-items-md="2" data-items-lg="3"> <!-- Adjust data-items-lg to 6 -->
                    <div class="item"><a><img class="img-fluid rounded-7" src="images/slider/TG Banner/Bus_Booking_01.jpg" alt="banner" /></a></div>
                    <div class="item"><a><img class="img-fluid rounded-7" src="images/slider/TG Banner/Cashback_ Recharge_Banner_03.jpg" alt="banner" /></a></div>
                    <div class="item"><a><img class="img-fluid rounded-7" src="images/slider/TG Banner/Insta_banner_02.jpg" alt="banner" /></a></div>
                    <div class="item"><a><img class="img-fluid rounded-7" src="images/slider/TG Banner/Refer & Earn_ Banner_02.jpg" alt="banner" /></a></div>
                    <div class="item"><a><img class="img-fluid rounded-7" src="images/slider/TG Banner/Rectangle 48.png" alt="banner" /></a></div>
                    <div class="item"><a><img class="img-fluid rounded-7" src="images/slider/TG Banner/Youtube_banner_01.jpg" alt="banner" /></a></div>
                </div>
            </div>
        </div>
        <!-- Banner end -->

        <!-- Mobile App
    ============================================= -->
        <section class="section pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-center">
                        <img class="img-fluid" alt="" src="images/TG_phone_1.png">
                    </div>
                    <div class="col-lg-6 text-center text-lg-start">
                        <h2 class="text-9 fw-600 my-4">Download Our Tradgo<br class="d-none d-lg-inline-block">
                            Mobile App Now</h2>
                        <p class="lead">Download our app for the fastest, most convenient way to Recharge & Bill Payment, Booking
                            and more....</p>
                        <div class="pt-3">
                            <a class="me-4" href="">
                                <img alt="" src="images/app-store.png">
                            </a>
                            <a target="_blank" href="https://play.google.com/store/apps/details?id=com.tradgo&hl=en_IN&gl=US"><img alt="" src="images/google-play-store.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Mobile App end -->
        <!-- Content end -->

    </div>
    <!-- Document Wrapper end -->

    <!-- Back to Top
============================================= -->
    <a id="back-to-top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a>

    <!-- dashboard Service Continue Btn
============================================= -->
    <div id="dashboardServiceContinueBtn" class="modal fade" role="dialog" aria-hidden="true">
        <!-- Your modal content -->
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <!-- ... (rest of your modal content) ... -->
            <div class="col-md-8 col-lg-7 col-xl-6 mx-auto dashboardServiceContinueModalContent">
                <div class="bg-white shadow-sm rounded text-3 p-3 pt-sm-4 pb-sm-5 px-sm-5 mb-0 mb-sm-4">
                    <!-- Modal header and body -->
                    <div class="modal-header">
                        <h5 class="modal-title">Confirm Recharge Details Co</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row mt-4">
                            <p class="col-sm text-muted mb-0 mb-sm-3">Mobile Number:</p>
                            <p class="col-sm text-sm-end fw-500">(+91) 9898989898</p>
                        </div>
                        <div class="row">
                            <p class="col-sm text-muted mb-0 mb-sm-3">Operator/Circle:</p>
                            <p class="col-sm text-sm-end fw-500">Vodafone | Gujarat</p>
                        </div>
                        <div class="row">
                            <p class="col-sm text-muted mb-0 mb-sm-3">Plan:</p>
                            <p class="col-sm text-sm-end fw-500">Mobile top-up</p>
                        </div>
                        <div class="row">
                            <p class="col-sm text-muted mb-0 mb-sm-3">Validity:</p>
                            <p class="col-sm text-sm-end fw-500">Talktime</p>
                        </div>
                        <div class="row">
                            <p class="col-sm text-muted mb-0 mb-sm-3">Amount:</p>
                            <p class="col-sm text-sm-end fw-500">₹150</p>
                        </div>
                        <div class="row">
                            <p class="col-12 text-muted mb-0">Plan Description:</p>
                            <p class="col-12 text-1">Local calls free & STD calls free & Roaming Incoming &
                                Outgoing calls free &
                                300 Local & National SMS & 1 GB 3G/4G Data & Data Validity 28 day(s) & For 3G/4G
                                user - T&C apply</p>
                        </div>
                        <div class="bg-light-4 rounded p-3">
                            <div class="row">
                                <div class="col-sm text-3 fw-600">Payment Amount:</div>
                                <div class="col-sm text-sm-end text-5 fw-500">₹150</div>
                            </div>
                        </div>
                        <div class="d-grid mt-4">
                            <a href="" class="btn btn-primary">Make Payment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Dashboard Service Continue Btn end -->

    <!-- Modal Dialog - View Plans
============================================= -->
    <div id="RechargeViewPlans" class="modal fade" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Browse Plans</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3 mb-2" method="post">
                        <div class="col-12 col-sm-6 col-lg-4 d-flex align-items-center">
                            <select class="form-select rounded-7" required="">
                                <option value="">Select Your Operator</option>
                                <option>1st Operator</option>
                                <option>2nd Operator</option>
                                <option>3rd Operator</option>
                                <option>4th Operator</option>
                                <option>5th Operator</option>
                                <option>6th Operator</option>
                                <option>7th Operator</option>
                            </select>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4">
                            <select class="form-select rounded-7" required="">
                                <option value="">Select Your Circle</option>
                                <option>1st Circle</option>
                                <option>2nd Circle</option>
                                <option>3rd Circle</option>
                                <option>4th Circle</option>
                                <option>5th Circle</option>
                                <option>6th Circle</option>
                                <option>7th Circle</option>
                            </select>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 d-grid">
                            <button class="btn btn-primary" type="submit">View Plans</button>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <!-- Nav Link
        ============================================= -->
                        <ul class="nav nav-pills ViewPlans alternate flex-lg-column mb-3 mb-lg-0 sticky-top" role="tablist">
                            <li class="nav-item px-2">
                                <a class="nav-link px-1 py-2 active" data-bs-toggle="pill" href="#Talktime_ViewPlans">Talktime</a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link px-1 py-2" data-bs-toggle="pill" href="#Data_ViewPlans">Data</a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link px-1 py-2" data-bs-toggle="pill" href="#Unlimited_ViewPlans">Unlimited</a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link px-1 py-2" data-bs-toggle="pill" href="#5G_Upgrade_ViewPlans">5G Upgrade</a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link px-1 py-2" data-bs-toggle="pill" href="#IR_WiFi_Calling_ViewPlans">IR Wi-Fi
                                    Calling</a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link px-1 py-2" data-bs-toggle="pill" href="#JioPhone_ViewPlans">JioPhone</a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link px-1 py-2" data-bs-toggle="pill" href="#JioBharatPhone_ViewPlans">JioBharat Phone</a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link px-1 py-2" data-bs-toggle="pill" href="#EntertainmentPlans_ViewPlans">Entertainment
                                    Plans</a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link px-1 py-2" data-bs-toggle="pill" href="#Hotstar_ViewPlans">Hotstar</a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link px-1 py-2" data-bs-toggle="pill" href="#ISD_ViewPlans">ISD</a>
                            </li>
                            <!-- jio end -->
                            <li class="nav-item px-2">
                                <a class="nav-link px-1 py-2" data-bs-toggle="pill" href="#R_offer_ViewPlans">R-offer</a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link px-1 py-2" data-bs-toggle="pill" href="#IR_ViewPlans">IR</a>
                            </li>
                            <!-- airtel end -->
                            <li class="nav-item px-2">
                                <a class="nav-link px-1 py-2" data-bs-toggle="pill" href="#VAS_ViewPlans">VAS</a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link px-1 py-2" data-bs-toggle="pill" href="#Validity_ViewPlans">Validity</a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link px-1 py-2" data-bs-toggle="pill" href="#STV_ViewPlans">STV</a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link px-1 py-2" data-bs-toggle="pill" href="#SMS_ViewPlans">SMS</a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link px-1 py-2" data-bs-toggle="pill" href="#Fiber_ViewPlans">Fiber</a>
                            </li>
                            <!-- vodafone end -->
                        </ul>
                        <!-- Nav Link end -->
                    </div>
                    <div class="col-lg-9">
                        <div class="tab-content bg-white shadow-md rounded p-3">
                            <div id="Talktime_ViewPlans" class="container tab-pane active"><br>
                                <div class="plans">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-lg-2 text-5 text-primary text-center">₹10<span class="text-1 text-muted d-block">Amount</span></div>
                                        <div class="col-4 col-lg-2 text-3 text-center">8<span class="text-1 text-muted d-block">Talktime</span>
                                        </div>
                                        <div class="col-4 col-lg-2 text-3 text-center">7 Days<span class="text-1 text-muted d-block">Validity</span></div>
                                        <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Talktime ₹8 & 2 Local & National SMS &
                                            Free SMS
                                            valid for 2 day(s)</div>
                                        <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
                                            <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-lg-2 text-5 text-primary text-center">₹15<span class="text-1 text-muted d-block">Amount</span></div>
                                        <div class="col-4 col-lg-2 text-3 text-center">13<span class="text-1 text-muted d-block">Talktime</span>
                                        </div>
                                        <div class="col-4 col-lg-2 text-3 text-center">15 Days<span class="text-1 text-muted d-block">Validity</span></div>
                                        <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Regular Talktime</div>
                                        <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
                                            <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="Data_ViewPlans" class="container tab-pane"><br>
                                <div class="plans">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-lg-2 text-5 text-primary text-center">₹100<span class="text-1 text-muted d-block">Amount</span></div>
                                        <div class="col-4 col-lg-2 text-3 text-center">8<span class="text-1 text-muted d-block">Talktime</span>
                                        </div>
                                        <div class="col-4 col-lg-2 text-3 text-center">7 Days<span class="text-1 text-muted d-block">Validity</span></div>
                                        <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Talktime ₹8 & 2 Local & National SMS &
                                            Free SMS
                                            valid for 2 day(s)</div>
                                        <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
                                            <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-lg-2 text-5 text-primary text-center">₹1425<span class="text-1 text-muted d-block">Amount</span></div>
                                        <div class="col-4 col-lg-2 text-3 text-center">13<span class="text-1 text-muted d-block">Talktime</span>
                                        </div>
                                        <div class="col-4 col-lg-2 text-3 text-center">15 Days<span class="text-1 text-muted d-block">Validity</span></div>
                                        <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Regular Talktime</div>
                                        <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
                                            <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="Unlimited_ViewPlans" class="container tab-pane"><br>
                                <div class="plans">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-lg-2 text-5 text-primary text-center">₹104<span class="text-1 text-muted d-block">Amount</span></div>
                                        <div class="col-4 col-lg-2 text-3 text-center">8<span class="text-1 text-muted d-block">Talktime</span>
                                        </div>
                                        <div class="col-4 col-lg-2 text-3 text-center">7 Days<span class="text-1 text-muted d-block">Validity</span></div>
                                        <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Talktime ₹8 & 2 Local & National SMS &
                                            Free SMS
                                            valid for 2 day(s)</div>
                                        <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
                                            <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-lg-2 text-5 text-primary text-center">₹1875<span class="text-1 text-muted d-block">Amount</span></div>
                                        <div class="col-4 col-lg-2 text-3 text-center">13<span class="text-1 text-muted d-block">Talktime</span>
                                        </div>
                                        <div class="col-4 col-lg-2 text-3 text-center">15 Days<span class="text-1 text-muted d-block">Validity</span></div>
                                        <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Regular Talktime</div>
                                        <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
                                            <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="5G_Upgrade_ViewPlans" class="container tab-pane"><br>
                                <div class="plans">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-lg-2 text-5 text-primary text-center">₹710<span class="text-1 text-muted d-block">Amount</span></div>
                                        <div class="col-4 col-lg-2 text-3 text-center">8<span class="text-1 text-muted d-block">Talktime</span>
                                        </div>
                                        <div class="col-4 col-lg-2 text-3 text-center">7 Days<span class="text-1 text-muted d-block">Validity</span></div>
                                        <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Talktime ₹8 & 2 Local & National SMS &
                                            Free SMS
                                            valid for 2 day(s)</div>
                                        <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
                                            <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-lg-2 text-5 text-primary text-center">₹85<span class="text-1 text-muted d-block">Amount</span></div>
                                        <div class="col-4 col-lg-2 text-3 text-center">13<span class="text-1 text-muted d-block">Talktime</span>
                                        </div>
                                        <div class="col-4 col-lg-2 text-3 text-center">15 Days<span class="text-1 text-muted d-block">Validity</span></div>
                                        <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Regular Talktime</div>
                                        <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
                                            <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="IR_WiFi_Calling_ViewPlans" class="container tab-pane"><br>
                                <div class="plans">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-lg-2 text-5 text-primary text-center">₹10<span class="text-1 text-muted d-block">Amount</span></div>
                                        <div class="col-4 col-lg-2 text-3 text-center">8<span class="text-1 text-muted d-block">Talktime</span>
                                        </div>
                                        <div class="col-4 col-lg-2 text-3 text-center">7 Days<span class="text-1 text-muted d-block">Validity</span></div>
                                        <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Talktime ₹8 & 2 Local & National SMS &
                                            Free SMS
                                            valid for 2 day(s)</div>
                                        <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
                                            <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-lg-2 text-5 text-primary text-center">₹15<span class="text-1 text-muted d-block">Amount</span></div>
                                        <div class="col-4 col-lg-2 text-3 text-center">13<span class="text-1 text-muted d-block">Talktime</span>
                                        </div>
                                        <div class="col-4 col-lg-2 text-3 text-center">15 Days<span class="text-1 text-muted d-block">Validity</span></div>
                                        <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Regular Talktime</div>
                                        <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
                                            <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="JioPhone_ViewPlans" class="container tab-pane"><br>
                                <div class="plans">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-lg-2 text-5 text-primary text-center">₹10<span class="text-1 text-muted d-block">Amount</span></div>
                                        <div class="col-4 col-lg-2 text-3 text-center">8<span class="text-1 text-muted d-block">Talktime</span>
                                        </div>
                                        <div class="col-4 col-lg-2 text-3 text-center">7 Days<span class="text-1 text-muted d-block">Validity</span></div>
                                        <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Talktime ₹8 & 2 Local & National SMS &
                                            Free SMS
                                            valid for 2 day(s)</div>
                                        <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
                                            <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-lg-2 text-5 text-primary text-center">₹15<span class="text-1 text-muted d-block">Amount</span></div>
                                        <div class="col-4 col-lg-2 text-3 text-center">13<span class="text-1 text-muted d-block">Talktime</span>
                                        </div>
                                        <div class="col-4 col-lg-2 text-3 text-center">15 Days<span class="text-1 text-muted d-block">Validity</span></div>
                                        <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Regular Talktime</div>
                                        <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
                                            <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="JioBharatPhone_ViewPlans" class="container tab-pane"><br>
                                <div class="plans">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-lg-2 text-5 text-primary text-center">₹10<span class="text-1 text-muted d-block">Amount</span></div>
                                        <div class="col-4 col-lg-2 text-3 text-center">8<span class="text-1 text-muted d-block">Talktime</span>
                                        </div>
                                        <div class="col-4 col-lg-2 text-3 text-center">7 Days<span class="text-1 text-muted d-block">Validity</span></div>
                                        <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Talktime ₹8 & 2 Local & National SMS &
                                            Free SMS
                                            valid for 2 day(s)</div>
                                        <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
                                            <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-lg-2 text-5 text-primary text-center">₹15<span class="text-1 text-muted d-block">Amount</span></div>
                                        <div class="col-4 col-lg-2 text-3 text-center">13<span class="text-1 text-muted d-block">Talktime</span>
                                        </div>
                                        <div class="col-4 col-lg-2 text-3 text-center">15 Days<span class="text-1 text-muted d-block">Validity</span></div>
                                        <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Regular Talktime</div>
                                        <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
                                            <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="EntertainmentPlans_ViewPlans" class="container tab-pane"><br>
                                <div class="plans">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-lg-2 text-5 text-primary text-center">₹10<span class="text-1 text-muted d-block">Amount</span></div>
                                        <div class="col-4 col-lg-2 text-3 text-center">8<span class="text-1 text-muted d-block">Talktime</span>
                                        </div>
                                        <div class="col-4 col-lg-2 text-3 text-center">7 Days<span class="text-1 text-muted d-block">Validity</span></div>
                                        <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Talktime ₹8 & 2 Local & National SMS &
                                            Free SMS
                                            valid for 2 day(s)</div>
                                        <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
                                            <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-lg-2 text-5 text-primary text-center">₹15<span class="text-1 text-muted d-block">Amount</span></div>
                                        <div class="col-4 col-lg-2 text-3 text-center">13<span class="text-1 text-muted d-block">Talktime</span>
                                        </div>
                                        <div class="col-4 col-lg-2 text-3 text-center">15 Days<span class="text-1 text-muted d-block">Validity</span></div>
                                        <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Regular Talktime</div>
                                        <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
                                            <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="ISD_ViewPlans" class="container tab-pane"><br>
                                <div class="plans">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-lg-2 text-5 text-primary text-center">₹10<span class="text-1 text-muted d-block">Amount</span></div>
                                        <div class="col-4 col-lg-2 text-3 text-center">8<span class="text-1 text-muted d-block">Talktime</span>
                                        </div>
                                        <div class="col-4 col-lg-2 text-3 text-center">7 Days<span class="text-1 text-muted d-block">Validity</span></div>
                                        <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Talktime ₹8 & 2 Local & National SMS &
                                            Free SMS
                                            valid for 2 day(s)</div>
                                        <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
                                            <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-lg-2 text-5 text-primary text-center">₹15<span class="text-1 text-muted d-block">Amount</span></div>
                                        <div class="col-4 col-lg-2 text-3 text-center">13<span class="text-1 text-muted d-block">Talktime</span>
                                        </div>
                                        <div class="col-4 col-lg-2 text-3 text-center">15 Days<span class="text-1 text-muted d-block">Validity</span></div>
                                        <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Regular Talktime</div>
                                        <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
                                            <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="IR_ViewPlans" class="container tab-pane"><br>
                                <div class="plans">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-lg-2 text-5 text-primary text-center">₹10<span class="text-1 text-muted d-block">Amount</span></div>
                                        <div class="col-4 col-lg-2 text-3 text-center">8<span class="text-1 text-muted d-block">Talktime</span>
                                        </div>
                                        <div class="col-4 col-lg-2 text-3 text-center">7 Days<span class="text-1 text-muted d-block">Validity</span></div>
                                        <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Talktime ₹8 & 2 Local & National SMS &
                                            Free SMS
                                            valid for 2 day(s)</div>
                                        <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
                                            <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-lg-2 text-5 text-primary text-center">₹15<span class="text-1 text-muted d-block">Amount</span></div>
                                        <div class="col-4 col-lg-2 text-3 text-center">13<span class="text-1 text-muted d-block">Talktime</span>
                                        </div>
                                        <div class="col-4 col-lg-2 text-3 text-center">15 Days<span class="text-1 text-muted d-block">Validity</span></div>
                                        <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Regular Talktime</div>
                                        <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
                                            <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="VAS_ViewPlans" class="container tab-pane"><br>
                                <div class="plans">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-lg-2 text-5 text-primary text-center">₹10<span class="text-1 text-muted d-block">Amount</span></div>
                                        <div class="col-4 col-lg-2 text-3 text-center">8<span class="text-1 text-muted d-block">Talktime</span>
                                        </div>
                                        <div class="col-4 col-lg-2 text-3 text-center">7 Days<span class="text-1 text-muted d-block">Validity</span></div>
                                        <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Talktime ₹8 & 2 Local & National SMS &
                                            Free SMS
                                            valid for 2 day(s)</div>
                                        <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
                                            <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-lg-2 text-5 text-primary text-center">₹15<span class="text-1 text-muted d-block">Amount</span></div>
                                        <div class="col-4 col-lg-2 text-3 text-center">13<span class="text-1 text-muted d-block">Talktime</span>
                                        </div>
                                        <div class="col-4 col-lg-2 text-3 text-center">15 Days<span class="text-1 text-muted d-block">Validity</span></div>
                                        <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Regular Talktime</div>
                                        <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
                                            <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="Validity_ViewPlans" class="container tab-pane"><br>
                                <div class="plans">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-lg-2 text-5 text-primary text-center">₹10<span class="text-1 text-muted d-block">Amount</span></div>
                                        <div class="col-4 col-lg-2 text-3 text-center">8<span class="text-1 text-muted d-block">Talktime</span>
                                        </div>
                                        <div class="col-4 col-lg-2 text-3 text-center">7 Days<span class="text-1 text-muted d-block">Validity</span></div>
                                        <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Talktime ₹8 & 2 Local & National SMS &
                                            Free SMS
                                            valid for 2 day(s)</div>
                                        <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
                                            <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-lg-2 text-5 text-primary text-center">₹15<span class="text-1 text-muted d-block">Amount</span></div>
                                        <div class="col-4 col-lg-2 text-3 text-center">13<span class="text-1 text-muted d-block">Talktime</span>
                                        </div>
                                        <div class="col-4 col-lg-2 text-3 text-center">15 Days<span class="text-1 text-muted d-block">Validity</span></div>
                                        <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Regular Talktime</div>
                                        <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
                                            <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="STV_ViewPlans" class="container tab-pane"><br>
                                <div class="plans">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-lg-2 text-5 text-primary text-center">₹10<span class="text-1 text-muted d-block">Amount</span></div>
                                        <div class="col-4 col-lg-2 text-3 text-center">8<span class="text-1 text-muted d-block">Talktime</span>
                                        </div>
                                        <div class="col-4 col-lg-2 text-3 text-center">7 Days<span class="text-1 text-muted d-block">Validity</span></div>
                                        <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Talktime ₹8 & 2 Local & National SMS &
                                            Free SMS
                                            valid for 2 day(s)</div>
                                        <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
                                            <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-lg-2 text-5 text-primary text-center">₹15<span class="text-1 text-muted d-block">Amount</span></div>
                                        <div class="col-4 col-lg-2 text-3 text-center">13<span class="text-1 text-muted d-block">Talktime</span>
                                        </div>
                                        <div class="col-4 col-lg-2 text-3 text-center">15 Days<span class="text-1 text-muted d-block">Validity</span></div>
                                        <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Regular Talktime</div>
                                        <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
                                            <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="SMS_ViewPlans" class="container tab-pane"><br>
                                <div class="plans">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-lg-2 text-5 text-primary text-center">₹10<span class="text-1 text-muted d-block">Amount</span></div>
                                        <div class="col-4 col-lg-2 text-3 text-center">8<span class="text-1 text-muted d-block">Talktime</span>
                                        </div>
                                        <div class="col-4 col-lg-2 text-3 text-center">7 Days<span class="text-1 text-muted d-block">Validity</span></div>
                                        <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Talktime ₹8 & 2 Local & National SMS &
                                            Free SMS
                                            valid for 2 day(s)</div>
                                        <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
                                            <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-lg-2 text-5 text-primary text-center">₹15<span class="text-1 text-muted d-block">Amount</span></div>
                                        <div class="col-4 col-lg-2 text-3 text-center">13<span class="text-1 text-muted d-block">Talktime</span>
                                        </div>
                                        <div class="col-4 col-lg-2 text-3 text-center">15 Days<span class="text-1 text-muted d-block">Validity</span></div>
                                        <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Regular Talktime</div>
                                        <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
                                            <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="Fiber_ViewPlans" class="container tab-pane"><br>
                                <div class="plans">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-lg-2 text-5 text-primary text-center">₹10<span class="text-1 text-muted d-block">Amount</span></div>
                                        <div class="col-4 col-lg-2 text-3 text-center">8<span class="text-1 text-muted d-block">Talktime</span>
                                        </div>
                                        <div class="col-4 col-lg-2 text-3 text-center">7 Days<span class="text-1 text-muted d-block">Validity</span></div>
                                        <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Talktime ₹8 & 2 Local & National SMS &
                                            Free SMS
                                            valid for 2 day(s)</div>
                                        <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
                                            <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-lg-2 text-5 text-primary text-center">₹15<span class="text-1 text-muted d-block">Amount</span></div>
                                        <div class="col-4 col-lg-2 text-3 text-center">13<span class="text-1 text-muted d-block">Talktime</span>
                                        </div>
                                        <div class="col-4 col-lg-2 text-3 text-center">15 Days<span class="text-1 text-muted d-block">Validity</span></div>
                                        <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Regular Talktime</div>
                                        <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
                                            <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Dialog - View Plans end -->

    <!-- DTH - View Plans
============================================= -->
    <div id="DTHViewPlans" class="modal fade" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Browse Plans</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3 mb-2" method="post">
                        <div class="col-12 col-sm-6 col-lg-4">
                            <select class="form-select rounded-7" required="">
                                <option value="">Select Your Operator</option>
                                <option>1st Operator</option>
                                <option>2nd Operator</option>
                                <option>3rd Operator</option>
                                <option>4th Operator</option>
                                <option>5th Operator</option>
                                <option>6th Operator</option>
                                <option>7th Operator</option>
                            </select>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4">
                            <select class="form-select rounded-7" required="">
                                <option value="">Select Your Circle</option>
                                <option>1st Circle</option>
                                <option>2nd Circle</option>
                                <option>3rd Circle</option>
                                <option>4th Circle</option>
                                <option>5th Circle</option>
                                <option>6th Circle</option>
                                <option>7th Circle</option>
                            </select>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 d-grid">
                            <button class="btn btn-primary" type="submit">View Plans</button>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <!-- Nav Link
      ============================================= -->
                        <ul class="nav nav-pills ViewPlans alternate flex-lg-column mb-3 mb-lg-0 sticky-top" role="tablist">
                            <li class="nav-item px-2">
                                <a class="nav-link px-1 py-2 active" data-bs-toggle="pill" href="#Monthly_DTH_ViewPlans">Monthly
                                    Packs</a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link px-1 py-2" data-bs-toggle="pill" href="#ThreeMonths_DTH_ViewPlans">Three Months
                                    Oacks</a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link px-1 py-2" data-bs-toggle="pill" href="#HalfYearly_DTH_ViewPlans">Half Yearly
                                    Packs</a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link px-1 py-2" data-bs-toggle="pill" href="#Yearly_DTH_ViewPlans">Yearly Packs</a>
                            </li>
                        </ul>
                        <!-- Nav Link end -->
                    </div>
                    <div class="col-lg-9">
                        <div class="tab-content bg-white shadow-md rounded p-3">
                            <div id="Monthly_DTH_ViewPlans" class="container tab-pane active"><br>
                                <div class="plans">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-lg-2 text-5 text-primary text-center">₹10<span class="text-1 text-muted d-block">Amount</span></div>
                                        <div class="col-4 col-lg-2 text-3 text-center">8<span class="text-1 text-muted d-block">Talktime</span>
                                        </div>
                                        <div class="col-4 col-lg-2 text-3 text-center">7 Days<span class="text-1 text-muted d-block">Validity</span></div>
                                        <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Talktime ₹8 & 2 Local & National SMS &
                                            Free SMS
                                            valid for 2 day(s)</div>
                                        <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
                                            <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-lg-2 text-5 text-primary text-center">₹10<span class="text-1 text-muted d-block">Amount</span></div>
                                        <div class="col-4 col-lg-2 text-3 text-center">8<span class="text-1 text-muted d-block">Talktime</span>
                                        </div>
                                        <div class="col-4 col-lg-2 text-3 text-center">7 Days<span class="text-1 text-muted d-block">Validity</span></div>
                                        <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Talktime ₹8 & 2 Local & National SMS &
                                            Free SMS
                                            valid for 2 day(s)</div>
                                        <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
                                            <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-lg-2 text-5 text-primary text-center">₹10<span class="text-1 text-muted d-block">Amount</span></div>
                                        <div class="col-4 col-lg-2 text-3 text-center">8<span class="text-1 text-muted d-block">Talktime</span>
                                        </div>
                                        <div class="col-4 col-lg-2 text-3 text-center">7 Days<span class="text-1 text-muted d-block">Validity</span></div>
                                        <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Talktime ₹8 & 2 Local & National SMS &
                                            Free SMS
                                            valid for 2 day(s)</div>
                                        <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
                                            <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-lg-2 text-5 text-primary text-center">₹15<span class="text-1 text-muted d-block">Amount</span></div>
                                        <div class="col-4 col-lg-2 text-3 text-center">13<span class="text-1 text-muted d-block">Talktime</span>
                                        </div>
                                        <div class="col-4 col-lg-2 text-3 text-center">15 Days<span class="text-1 text-muted d-block">Validity</span></div>
                                        <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Regular Talktime</div>
                                        <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
                                            <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="ThreeMonths_DTH_ViewPlans" class="container tab-pane"><br>
                                <div class="plans">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-lg-2 text-5 text-primary text-center">₹100<span class="text-1 text-muted d-block">Amount</span></div>
                                        <div class="col-4 col-lg-2 text-3 text-center">8<span class="text-1 text-muted d-block">Talktime</span>
                                        </div>
                                        <div class="col-4 col-lg-2 text-3 text-center">7 Days<span class="text-1 text-muted d-block">Validity</span></div>
                                        <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Talktime ₹8 & 2 Local & National SMS &
                                            Free SMS
                                            valid for 2 day(s)</div>
                                        <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
                                            <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-lg-2 text-5 text-primary text-center">₹1425<span class="text-1 text-muted d-block">Amount</span></div>
                                        <div class="col-4 col-lg-2 text-3 text-center">13<span class="text-1 text-muted d-block">Talktime</span>
                                        </div>
                                        <div class="col-4 col-lg-2 text-3 text-center">15 Days<span class="text-1 text-muted d-block">Validity</span></div>
                                        <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Regular Talktime</div>
                                        <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
                                            <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="HalfYearly_DTH_ViewPlans" class="container tab-pane"><br>
                                <div class="plans">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-lg-2 text-5 text-primary text-center">₹104<span class="text-1 text-muted d-block">Amount</span></div>
                                        <div class="col-4 col-lg-2 text-3 text-center">8<span class="text-1 text-muted d-block">Talktime</span>
                                        </div>
                                        <div class="col-4 col-lg-2 text-3 text-center">7 Days<span class="text-1 text-muted d-block">Validity</span></div>
                                        <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Talktime ₹8 & 2 Local & National SMS &
                                            Free SMS
                                            valid for 2 day(s)</div>
                                        <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
                                            <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-lg-2 text-5 text-primary text-center">₹1875<span class="text-1 text-muted d-block">Amount</span></div>
                                        <div class="col-4 col-lg-2 text-3 text-center">13<span class="text-1 text-muted d-block">Talktime</span>
                                        </div>
                                        <div class="col-4 col-lg-2 text-3 text-center">15 Days<span class="text-1 text-muted d-block">Validity</span></div>
                                        <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Regular Talktime</div>
                                        <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
                                            <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="Yearly_DTH_ViewPlans" class="container tab-pane"><br>
                                <div class="plans">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-lg-2 text-5 text-primary text-center">₹710<span class="text-1 text-muted d-block">Amount</span></div>
                                        <div class="col-4 col-lg-2 text-3 text-center">8<span class="text-1 text-muted d-block">Talktime</span>
                                        </div>
                                        <div class="col-4 col-lg-2 text-3 text-center">7 Days<span class="text-1 text-muted d-block">Validity</span></div>
                                        <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Talktime ₹8 & 2 Local & National SMS &
                                            Free SMS
                                            valid for 2 day(s)</div>
                                        <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
                                            <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-lg-2 text-5 text-primary text-center">₹85<span class="text-1 text-muted d-block">Amount</span></div>
                                        <div class="col-4 col-lg-2 text-3 text-center">13<span class="text-1 text-muted d-block">Talktime</span>
                                        </div>
                                        <div class="col-4 col-lg-2 text-3 text-center">15 Days<span class="text-1 text-muted d-block">Validity</span></div>
                                        <div class="col-7 col-lg-3 my-2 my-lg-0 text-1 text-muted">Regular Talktime</div>
                                        <div class="col-5 col-lg-3 my-2 my-lg-0 text-end text-lg-center">
                                            <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- DTH - View Plans end -->

    <!-- Add Money Modal
============================== -->
    <div id="Add_Money_modal" class="modal fade" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0">
                <div class="modal-body py-4 px-0">
                    <button type="button" class="btn-close position-absolute top-0 end-0 mt-1 me-1 mt-sm-2 me-sm-2" data-bs-dismiss="modal" aria-label="Close"></button>
                    <!-- Add Money Form
    =========================== -->
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

    <!-- Paytm Payment Successful Modal PaytmPaymentSuccessful_modal 11B84E
============================== -->
    <div id="PaytmPaymentSuccessful_modal" class="modal fade" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document" style="width: fit-content; scale: 0.7;">
            <div class="modal-content rounded-7">
                <div class="modal-body p-0">
                    <!-- Paytm Payment Successful Form
=========================== -->
                    <div class="rounded-7 mx-auto" style="width: 390px; ">
                        <div class="rounded-7" style="width: 390px; height: 540px; position: relative; background: #11B84E">
                            <div style="width: 365px; height: 472px; left: 12px; top: 20px; position: absolute">
                                <div style="width: 345px; height: 472px; left: 10px; top: 0px; position: absolute">
                                    <div style="width: 345px; height: 340px; left: 0px; top: 47px; position: absolute; background: white; border-radius: 12px">
                                    </div>
                                    <div style="width: 94px; height: 94px; left: 125px; top: 0px; position: absolute">
                                        <img src="images/Paytm_Payment_Successful.svg" alt="">
                                    </div>
                                    <div style="left: 113.50px; top: 113px; position: absolute; text-align: center; color: #11B84E; font-size: 20px; font-family: Poppins; font-weight: 500;">
                                        You’ve Paid</div>
                                    <div style="left: 106px; top: 158px; position: absolute; text-align: center; color: #606D71; font-size: 60px">
                                        ₹100</div>
                                    <div style="width: 345px; padding: 25px 20px 15px 20px; left: 0px; top: 230px; position: absolute; background: #F5F7FA; border-radius: 12px; border-top-right-radius: 12px; border-top: 1px #E6E6E6 dotted; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 10px; display: inline-flex">
                                        <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 9px; display: flex; font-size: 20px;">
                                            <div style="text-align: start">
                                                <span style="color: #606D71;">Order ID : </span>
                                                <span style="color: #606D71;">12345684</span>
                                            </div>
                                            <div style="text-align: start">
                                                <span style="color: #606D71;">Date: </span>
                                                <span style="color: #606D71;">11-01-2024</span>
                                            </div>
                                            <div style="text-align: start">
                                                <div style="color: #606D71;">Status: </div>
                                                <div style="color: #606D71;">TXN_ERROR</div>
                                            </div>
                                            <div style="text-align: start">
                                                <div style="color: #606D71;">Response Message: </div>
                                                <div style="color: #606D71;">Transaction status is failure</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="width: 20px; height: 20px; left: 0px; top: 221px; position: absolute; background: #11B84E; border-radius: 9999px">
                                </div>
                                <div style="width: 20px; height: 20px; left: 345px; top: 221px; position: absolute; background: #11B84E; border-radius: 9999px">
                                </div>
                                <div data-bs-dismiss="modal" style="width: 330px; padding: 20px 18px;; left: 16px; top: 445px; position: absolute; background: #FFFFFF; border-radius: 25px; overflow: hidden; border: 1px white solid; justify-content: center; align-items: center; gap: 9px; display: inline-flex">
                                    <div style="color: #11B84E; font-size: 17px;">
                                        OK</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Paytm Payment Successful Form End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Paytm Payment Successful Modal End -->

    <!-- Paytm Payment Fail Modal
============================== -->
    <div id="PaytmPaymentFail_modal" class="modal fade" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document" style="width: fit-content; scale: 0.7;">
            <div class="modal-content rounded-7">
                <div class="modal-body p-0">
                    <!-- Paytm Payment Fail Form
=========================== -->
                    <div class="rounded-7 mx-auto" style="width: 390px;">
                        <div class="rounded-7" style="width: 390px; height: 515px; position: relative; background: #E22425">
                            <div style="width: 365px; height: 472px; left: 12px; top: 20px; position: absolute">
                                <div style="width: 345px; height: 472px; left: 10px; top: 0px; position: absolute">
                                    <div style="width: 345px; height: 340px; left: 0px; top: 47px; position: absolute; background: white; border-radius: 12px">
                                    </div>
                                    <div style="width: 94px; height: 94px; left: 125px; top: 0px; position: absolute">
                                        <img src="images/Paytm_Payment_Fail.svg" alt="">
                                    </div>
                                    <div style="left: 113.50px; top: 113px; position: absolute; text-align: center; color: #E22425; font-size: 20px; font-family: Poppins; font-weight: 500;">
                                        You’ve Paid</div>
                                    <div style="left: 106px; top: 158px; position: absolute; text-align: center; color: #606D71; font-size: 60px">
                                        ₹100</div>
                                    <!-- <div
                  style="width: 345px; height: 76px; padding-left: 10px; padding-right: 10px; padding-top: 20px; padding-bottom: 20px; left: 0px; top: 231px; position: absolute; border-top: 1px #E6E6E6 solid; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
                  <div
                    style="text-align: center; color: #20A7DB; font-size: 30px; font-weight: 500;">
                    Rahul.RRG
                  </div>
                </div> -->
                                    <div style="width: 345px; padding: 25px 20px 15px 20px; left: 0px; top: 230px; position: absolute; background: #F5F7FA; border-radius: 12px; border-top-right-radius: 12px; border-top: 1px #E6E6E6 dotted; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 10px; display: inline-flex">
                                        <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 9px; display: flex; font-size: 20px;">
                                            <div style="text-align: start">
                                                <div style="color: #606D71;">Status: </div>
                                                <div style="color: #606D71;">TXN_ERROR</div>
                                            </div>
                                            <div style="text-align: start">
                                                <div style="color: #606D71;">Response Message: </div>
                                                <div style="color: #606D71;">Transaction status is failure</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div
                style="width: 20px; height: 20px; left: 0px; top: 313px; position: absolute; background: #E22425; border-radius: 9999px">
              </div>
              <div
                style="width: 20px; height: 20px; left: 345px; top: 313px; position: absolute; background: #E22425; border-radius: 9999px">
              </div> -->
                                <div data-bs-dismiss="modal" style="width: 330px;padding: 20px 18px; left: 16px; top: 410px; position: absolute; background: #FFFFFF; border-radius: 25px; overflow: hidden; border: 1px white solid; justify-content: center; align-items: center; gap: 9px; display: inline-flex">
                                    <div style="color: #E22425; font-size: 17px;">OK</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Paytm Payment Fail Form End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Paytm Payment Fail Modal End -->

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

    <!-- Login Check Modal
=========================== -->
    <div id="login-check-modal" class="modal fade" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0">
                <div class="modal-body py-4 px-0">
                    <button type="button" class="btn-close position-absolute top-0 end-0 mt-1 me-1 mt-sm-2 me-sm-2" data-bs-dismiss="modal" aria-label="Close"></button>
                    <!-- Login Check Form
      ====================== -->
                    <div class="row">
                        <div class="col-11 col-md-10 mx-auto">
                            <br>
                            <div class="d-flex justify-content-center">
                                <svg width="150px" viewBox="0 0 174 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.29785 10.5098V4.40625H13.6484V10.5098H19.8008V17.7852H13.6484V27.2578C13.6484 28.8854 14.2751 29.8945 15.5283 30.2852C16.6188 30.6758 18.043 30.7165 19.8008 30.4072V38.0488C18.0918 38.3092 16.277 38.4395 14.3564 38.4395C10.7594 38.4395 8.18783 37.5605 6.6416 35.8027C5.0791 34.0449 4.29785 31.3105 4.29785 27.5996V17.7852H0.977539V10.5098H4.29785ZM23.7314 38V10.5098H32.667L33.1064 13.5615C34.6201 11.234 37.4359 10.0622 41.5537 10.0459V17.9561C35.9222 17.9561 33.1064 20.0557 33.1064 24.2549V38H23.7314ZM55.0791 10.0215C57.0973 10.0215 58.847 10.3551 60.3281 11.0225C61.8255 11.6735 62.9079 12.5931 63.5752 13.7812L64.0146 10.5098H72.9502V38H64.0146L63.5752 34.7285C62.9404 35.9329 61.8825 36.8607 60.4014 37.5117C58.9202 38.1465 57.1462 38.4639 55.0791 38.4639C51.4984 38.4639 48.5036 37.1374 46.0947 34.4844C43.6859 31.8639 42.4814 28.4541 42.4814 24.2549C42.4814 20.0719 43.6859 16.654 46.0947 14.001C48.5036 11.348 51.4984 10.0215 55.0791 10.0215ZM53.541 28.8203C54.6478 29.9759 56.0394 30.5537 57.7158 30.5537C59.376 30.5537 60.7676 29.9759 61.8906 28.8203C63.0137 27.681 63.5752 26.1592 63.5752 24.2549C63.5752 22.3506 63.0137 20.8206 61.8906 19.665C60.7676 18.5257 59.376 17.9561 57.7158 17.9561C56.0231 17.9561 54.6315 18.5257 53.541 19.665C52.418 20.8206 51.8564 22.3506 51.8564 24.2549C51.8564 26.1592 52.418 27.681 53.541 28.8203ZM88.7217 10.0215C90.7399 10.0215 92.4896 10.3551 93.9707 11.0225C95.4681 11.6735 96.5505 12.5931 97.2178 13.7812V0.5H106.593V38H97.6572L97.2178 34.7285C96.583 35.9329 95.5251 36.8607 94.0439 37.5117C92.5628 38.1465 90.7887 38.4639 88.7217 38.4639C85.141 38.4639 82.1462 37.1374 79.7373 34.4844C77.3285 31.8639 76.124 28.4541 76.124 24.2549C76.124 20.0719 77.3285 16.654 79.7373 14.001C82.1462 11.348 85.141 10.0215 88.7217 10.0215ZM91.3584 30.5537C93.0186 30.5537 94.4102 29.9759 95.5332 28.8203C96.6562 27.681 97.2178 26.1592 97.2178 24.2549C97.2178 22.3506 96.6562 20.8206 95.5332 19.665C94.4102 18.5257 93.0186 17.9561 91.3584 17.9561C89.6657 17.9561 88.2741 18.5257 87.1836 19.665C86.0605 20.8206 85.499 22.3506 85.499 24.2549C85.499 26.1592 86.0687 27.681 87.208 28.8203C88.3311 29.9759 89.7145 30.5537 91.3584 30.5537Z" fill="#1B1464" />
                                    <path d="M130.86 13.7812L131.3 10.5098H140.235V36.0469C140.235 38.6999 139.584 40.9867 138.282 42.9072C136.98 44.7952 135.239 46.195 133.058 47.1064C130.844 48.0179 128.329 48.4736 125.514 48.4736C119.801 48.4736 115.219 46.5531 111.769 42.7119L116.09 37.7559C118.124 39.9857 121.021 41.1006 124.781 41.1006C126.458 41.1006 127.89 40.6042 129.078 39.6113C130.266 38.6185 130.86 37.292 130.86 35.6318V33.6055C129.656 35.8353 126.824 36.9502 122.364 36.9502C120.623 36.9502 118.979 36.6328 117.433 35.998C115.886 35.3633 114.544 34.4681 113.404 33.3125C112.265 32.1569 111.37 30.7409 110.719 29.0645C110.084 27.388 109.767 25.5895 109.767 23.6689C109.767 19.7464 110.979 16.4831 113.404 13.8789C115.829 11.3073 118.816 10.0215 122.364 10.0215C124.382 10.0215 126.132 10.3551 127.613 11.0225C129.111 11.6735 130.193 12.5931 130.86 13.7812ZM125.001 29.4307C126.645 29.4307 128.036 28.8854 129.176 27.7949C130.299 26.6882 130.86 25.3128 130.86 23.6689C130.86 22.0251 130.299 20.6579 129.176 19.5674C128.036 18.4932 126.645 17.9561 125.001 17.9561C123.39 17.9561 122.006 18.4932 120.851 19.5674C119.711 20.6579 119.142 22.0251 119.142 23.6689C119.142 25.3291 119.711 26.7044 120.851 27.7949C121.99 28.8854 123.373 29.4307 125.001 29.4307ZM164.454 37.4873C162.647 38.1058 160.711 38.415 158.644 38.415C156.576 38.415 154.64 38.1058 152.833 37.4873C148.943 36.1527 146.217 33.752 144.654 30.2852C143.824 28.4785 143.409 26.4684 143.409 24.2549C143.409 22.0576 143.824 20.0394 144.654 18.2002C146.201 14.766 148.927 12.3652 152.833 10.998C154.64 10.3796 156.576 10.0703 158.644 10.0703C160.711 10.0703 162.647 10.3796 164.454 10.998C168.36 12.3652 171.095 14.766 172.657 18.2002C173.471 20.0557 173.878 22.0739 173.878 24.2549C173.878 26.4521 173.471 28.4622 172.657 30.2852C171.078 33.752 168.344 36.1527 164.454 37.4873ZM154.444 28.8203C155.567 29.9759 156.967 30.5537 158.644 30.5537C160.304 30.5537 161.695 29.9759 162.818 28.8203C163.941 27.681 164.503 26.1592 164.503 24.2549C164.503 22.3506 163.941 20.8206 162.818 19.665C161.695 18.5257 160.304 17.9561 158.644 17.9561C156.967 17.9561 155.567 18.5257 154.444 19.665C153.321 20.8206 152.76 22.3506 152.76 24.2549C152.76 26.1592 153.321 27.681 154.444 28.8203Z" fill="#20A7DB" />
                                </svg>
                            </div>
                            <br>
                            <p class="text-4 fw-300 text-muted text-center mb-4">Please Sign in to Continue</p>
                            <form id="loginCheckForm" method="post">
                                <div class="mb-3">
                                    <input type="tel" class="form-control" id="LoginCheckEmailAddress" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required placeholder="Entrt Mobile Number (Required)*">
                                </div>
                                <div class="d-grid my-4">
                                    <a class="btn-link" href="" data-bs-toggle="modal" data-bs-target="#login-new-modal" data-bs-dismiss="modal">
                                        <button class="btn btn-primary" type="submit" style="width: 100%;">Login</button>
                                    </a>
                                </div>
                            </form>
                            <p class="text-2 text-center mb-0">New to Tradgo? <a class="btn-link" href="" data-bs-toggle="modal" data-bs-target="#signup-modal" data-bs-dismiss="modal">Sign Up</a></p>
                        </div>
                    </div>
                    <!-- Login Check Form End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Login Check Modal End -->

    <!-- Login Modal
=========================== -->
    <div id="login-new-modal" class="modal fade" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0">
                <div class="modal-body py-4 px-0">
                    <button type="button" class="btn-close position-absolute top-0 end-0 mt-1 me-1 mt-sm-2 me-sm-2" data-bs-dismiss="modal" aria-label="Close"></button>
                    <!-- Login Form
        ====================== -->
                    <div class="row">
                        <div class="col-11 col-md-10 mx-auto"><br>
                            <div class="d-flex justify-content-center">
                                <svg width="150px" viewBox="0 0 174 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.29785 10.5098V4.40625H13.6484V10.5098H19.8008V17.7852H13.6484V27.2578C13.6484 28.8854 14.2751 29.8945 15.5283 30.2852C16.6188 30.6758 18.043 30.7165 19.8008 30.4072V38.0488C18.0918 38.3092 16.277 38.4395 14.3564 38.4395C10.7594 38.4395 8.18783 37.5605 6.6416 35.8027C5.0791 34.0449 4.29785 31.3105 4.29785 27.5996V17.7852H0.977539V10.5098H4.29785ZM23.7314 38V10.5098H32.667L33.1064 13.5615C34.6201 11.234 37.4359 10.0622 41.5537 10.0459V17.9561C35.9222 17.9561 33.1064 20.0557 33.1064 24.2549V38H23.7314ZM55.0791 10.0215C57.0973 10.0215 58.847 10.3551 60.3281 11.0225C61.8255 11.6735 62.9079 12.5931 63.5752 13.7812L64.0146 10.5098H72.9502V38H64.0146L63.5752 34.7285C62.9404 35.9329 61.8825 36.8607 60.4014 37.5117C58.9202 38.1465 57.1462 38.4639 55.0791 38.4639C51.4984 38.4639 48.5036 37.1374 46.0947 34.4844C43.6859 31.8639 42.4814 28.4541 42.4814 24.2549C42.4814 20.0719 43.6859 16.654 46.0947 14.001C48.5036 11.348 51.4984 10.0215 55.0791 10.0215ZM53.541 28.8203C54.6478 29.9759 56.0394 30.5537 57.7158 30.5537C59.376 30.5537 60.7676 29.9759 61.8906 28.8203C63.0137 27.681 63.5752 26.1592 63.5752 24.2549C63.5752 22.3506 63.0137 20.8206 61.8906 19.665C60.7676 18.5257 59.376 17.9561 57.7158 17.9561C56.0231 17.9561 54.6315 18.5257 53.541 19.665C52.418 20.8206 51.8564 22.3506 51.8564 24.2549C51.8564 26.1592 52.418 27.681 53.541 28.8203ZM88.7217 10.0215C90.7399 10.0215 92.4896 10.3551 93.9707 11.0225C95.4681 11.6735 96.5505 12.5931 97.2178 13.7812V0.5H106.593V38H97.6572L97.2178 34.7285C96.583 35.9329 95.5251 36.8607 94.0439 37.5117C92.5628 38.1465 90.7887 38.4639 88.7217 38.4639C85.141 38.4639 82.1462 37.1374 79.7373 34.4844C77.3285 31.8639 76.124 28.4541 76.124 24.2549C76.124 20.0719 77.3285 16.654 79.7373 14.001C82.1462 11.348 85.141 10.0215 88.7217 10.0215ZM91.3584 30.5537C93.0186 30.5537 94.4102 29.9759 95.5332 28.8203C96.6562 27.681 97.2178 26.1592 97.2178 24.2549C97.2178 22.3506 96.6562 20.8206 95.5332 19.665C94.4102 18.5257 93.0186 17.9561 91.3584 17.9561C89.6657 17.9561 88.2741 18.5257 87.1836 19.665C86.0605 20.8206 85.499 22.3506 85.499 24.2549C85.499 26.1592 86.0687 27.681 87.208 28.8203C88.3311 29.9759 89.7145 30.5537 91.3584 30.5537Z" fill="#1B1464" />
                                    <path d="M130.86 13.7812L131.3 10.5098H140.235V36.0469C140.235 38.6999 139.584 40.9867 138.282 42.9072C136.98 44.7952 135.239 46.195 133.058 47.1064C130.844 48.0179 128.329 48.4736 125.514 48.4736C119.801 48.4736 115.219 46.5531 111.769 42.7119L116.09 37.7559C118.124 39.9857 121.021 41.1006 124.781 41.1006C126.458 41.1006 127.89 40.6042 129.078 39.6113C130.266 38.6185 130.86 37.292 130.86 35.6318V33.6055C129.656 35.8353 126.824 36.9502 122.364 36.9502C120.623 36.9502 118.979 36.6328 117.433 35.998C115.886 35.3633 114.544 34.4681 113.404 33.3125C112.265 32.1569 111.37 30.7409 110.719 29.0645C110.084 27.388 109.767 25.5895 109.767 23.6689C109.767 19.7464 110.979 16.4831 113.404 13.8789C115.829 11.3073 118.816 10.0215 122.364 10.0215C124.382 10.0215 126.132 10.3551 127.613 11.0225C129.111 11.6735 130.193 12.5931 130.86 13.7812ZM125.001 29.4307C126.645 29.4307 128.036 28.8854 129.176 27.7949C130.299 26.6882 130.86 25.3128 130.86 23.6689C130.86 22.0251 130.299 20.6579 129.176 19.5674C128.036 18.4932 126.645 17.9561 125.001 17.9561C123.39 17.9561 122.006 18.4932 120.851 19.5674C119.711 20.6579 119.142 22.0251 119.142 23.6689C119.142 25.3291 119.711 26.7044 120.851 27.7949C121.99 28.8854 123.373 29.4307 125.001 29.4307ZM164.454 37.4873C162.647 38.1058 160.711 38.415 158.644 38.415C156.576 38.415 154.64 38.1058 152.833 37.4873C148.943 36.1527 146.217 33.752 144.654 30.2852C143.824 28.4785 143.409 26.4684 143.409 24.2549C143.409 22.0576 143.824 20.0394 144.654 18.2002C146.201 14.766 148.927 12.3652 152.833 10.998C154.64 10.3796 156.576 10.0703 158.644 10.0703C160.711 10.0703 162.647 10.3796 164.454 10.998C168.36 12.3652 171.095 14.766 172.657 18.2002C173.471 20.0557 173.878 22.0739 173.878 24.2549C173.878 26.4521 173.471 28.4622 172.657 30.2852C171.078 33.752 168.344 36.1527 164.454 37.4873ZM154.444 28.8203C155.567 29.9759 156.967 30.5537 158.644 30.5537C160.304 30.5537 161.695 29.9759 162.818 28.8203C163.941 27.681 164.503 26.1592 164.503 24.2549C164.503 22.3506 163.941 20.8206 162.818 19.665C161.695 18.5257 160.304 17.9561 158.644 17.9561C156.967 17.9561 155.567 18.5257 154.444 19.665C153.321 20.8206 152.76 22.3506 152.76 24.2549C152.76 26.1592 153.321 27.681 154.444 28.8203Z" fill="#20A7DB" />
                                </svg>
                            </div>
                            <br>
                            <p class="text-4 fw-300 text-muted text-center mb-4">Please Sign in to Continue</p>
                            <form id="loginForm" method="post">
                                <div class="mb-3">
                                    <input type="tel" class="form-control" id="LoginEmailAddress" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required placeholder="Entrt Mobile Number (Required)*">
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" id="loginPassword" required placeholder="Password">
                                </div>
                                <div class="row my-4">
                                    <div class="col">
                                    </div>
                                    <div class="col text-2 text-end"><a class="btn-link" href="" data-bs-toggle="modal" data-bs-target="#forgot-password-modal" data-bs-dismiss="modal">Forgot Password ?</a></div>
                                </div>
                                <div class="d-grid my-4">
                                    <button class="btn btn-primary" type="submit">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Login Form End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Login Modal End -->

    <!-- Sign Up Modal
=========================== -->
    <div id="signup-modal" class="modal fade" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0">
                <div class="modal-body py-4 px-0">
                    <button type="button" class="btn-close position-absolute top-0 end-0 mt-1 me-1 mt-sm-2 me-sm-2" data-bs-dismiss="modal" aria-label="Close"></button>
                    <!-- Sign Up Form
        ====================== -->
                    <div class="row">
                        <div class="col-11 col-md-10 mx-auto">
                            <div class="d-flex justify-content-start">
                                <svg width="150px" viewBox="0 0 174 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.29785 10.5098V4.40625H13.6484V10.5098H19.8008V17.7852H13.6484V27.2578C13.6484 28.8854 14.2751 29.8945 15.5283 30.2852C16.6188 30.6758 18.043 30.7165 19.8008 30.4072V38.0488C18.0918 38.3092 16.277 38.4395 14.3564 38.4395C10.7594 38.4395 8.18783 37.5605 6.6416 35.8027C5.0791 34.0449 4.29785 31.3105 4.29785 27.5996V17.7852H0.977539V10.5098H4.29785ZM23.7314 38V10.5098H32.667L33.1064 13.5615C34.6201 11.234 37.4359 10.0622 41.5537 10.0459V17.9561C35.9222 17.9561 33.1064 20.0557 33.1064 24.2549V38H23.7314ZM55.0791 10.0215C57.0973 10.0215 58.847 10.3551 60.3281 11.0225C61.8255 11.6735 62.9079 12.5931 63.5752 13.7812L64.0146 10.5098H72.9502V38H64.0146L63.5752 34.7285C62.9404 35.9329 61.8825 36.8607 60.4014 37.5117C58.9202 38.1465 57.1462 38.4639 55.0791 38.4639C51.4984 38.4639 48.5036 37.1374 46.0947 34.4844C43.6859 31.8639 42.4814 28.4541 42.4814 24.2549C42.4814 20.0719 43.6859 16.654 46.0947 14.001C48.5036 11.348 51.4984 10.0215 55.0791 10.0215ZM53.541 28.8203C54.6478 29.9759 56.0394 30.5537 57.7158 30.5537C59.376 30.5537 60.7676 29.9759 61.8906 28.8203C63.0137 27.681 63.5752 26.1592 63.5752 24.2549C63.5752 22.3506 63.0137 20.8206 61.8906 19.665C60.7676 18.5257 59.376 17.9561 57.7158 17.9561C56.0231 17.9561 54.6315 18.5257 53.541 19.665C52.418 20.8206 51.8564 22.3506 51.8564 24.2549C51.8564 26.1592 52.418 27.681 53.541 28.8203ZM88.7217 10.0215C90.7399 10.0215 92.4896 10.3551 93.9707 11.0225C95.4681 11.6735 96.5505 12.5931 97.2178 13.7812V0.5H106.593V38H97.6572L97.2178 34.7285C96.583 35.9329 95.5251 36.8607 94.0439 37.5117C92.5628 38.1465 90.7887 38.4639 88.7217 38.4639C85.141 38.4639 82.1462 37.1374 79.7373 34.4844C77.3285 31.8639 76.124 28.4541 76.124 24.2549C76.124 20.0719 77.3285 16.654 79.7373 14.001C82.1462 11.348 85.141 10.0215 88.7217 10.0215ZM91.3584 30.5537C93.0186 30.5537 94.4102 29.9759 95.5332 28.8203C96.6562 27.681 97.2178 26.1592 97.2178 24.2549C97.2178 22.3506 96.6562 20.8206 95.5332 19.665C94.4102 18.5257 93.0186 17.9561 91.3584 17.9561C89.6657 17.9561 88.2741 18.5257 87.1836 19.665C86.0605 20.8206 85.499 22.3506 85.499 24.2549C85.499 26.1592 86.0687 27.681 87.208 28.8203C88.3311 29.9759 89.7145 30.5537 91.3584 30.5537Z" fill="#1B1464" />
                                    <path d="M130.86 13.7812L131.3 10.5098H140.235V36.0469C140.235 38.6999 139.584 40.9867 138.282 42.9072C136.98 44.7952 135.239 46.195 133.058 47.1064C130.844 48.0179 128.329 48.4736 125.514 48.4736C119.801 48.4736 115.219 46.5531 111.769 42.7119L116.09 37.7559C118.124 39.9857 121.021 41.1006 124.781 41.1006C126.458 41.1006 127.89 40.6042 129.078 39.6113C130.266 38.6185 130.86 37.292 130.86 35.6318V33.6055C129.656 35.8353 126.824 36.9502 122.364 36.9502C120.623 36.9502 118.979 36.6328 117.433 35.998C115.886 35.3633 114.544 34.4681 113.404 33.3125C112.265 32.1569 111.37 30.7409 110.719 29.0645C110.084 27.388 109.767 25.5895 109.767 23.6689C109.767 19.7464 110.979 16.4831 113.404 13.8789C115.829 11.3073 118.816 10.0215 122.364 10.0215C124.382 10.0215 126.132 10.3551 127.613 11.0225C129.111 11.6735 130.193 12.5931 130.86 13.7812ZM125.001 29.4307C126.645 29.4307 128.036 28.8854 129.176 27.7949C130.299 26.6882 130.86 25.3128 130.86 23.6689C130.86 22.0251 130.299 20.6579 129.176 19.5674C128.036 18.4932 126.645 17.9561 125.001 17.9561C123.39 17.9561 122.006 18.4932 120.851 19.5674C119.711 20.6579 119.142 22.0251 119.142 23.6689C119.142 25.3291 119.711 26.7044 120.851 27.7949C121.99 28.8854 123.373 29.4307 125.001 29.4307ZM164.454 37.4873C162.647 38.1058 160.711 38.415 158.644 38.415C156.576 38.415 154.64 38.1058 152.833 37.4873C148.943 36.1527 146.217 33.752 144.654 30.2852C143.824 28.4785 143.409 26.4684 143.409 24.2549C143.409 22.0576 143.824 20.0394 144.654 18.2002C146.201 14.766 148.927 12.3652 152.833 10.998C154.64 10.3796 156.576 10.0703 158.644 10.0703C160.711 10.0703 162.647 10.3796 164.454 10.998C168.36 12.3652 171.095 14.766 172.657 18.2002C173.471 20.0557 173.878 22.0739 173.878 24.2549C173.878 26.4521 173.471 28.4622 172.657 30.2852C171.078 33.752 168.344 36.1527 164.454 37.4873ZM154.444 28.8203C155.567 29.9759 156.967 30.5537 158.644 30.5537C160.304 30.5537 161.695 29.9759 162.818 28.8203C163.941 27.681 164.503 26.1592 164.503 24.2549C164.503 22.3506 163.941 20.8206 162.818 19.665C161.695 18.5257 160.304 17.9561 158.644 17.9561C156.967 17.9561 155.567 18.5257 154.444 19.665C153.321 20.8206 152.76 22.3506 152.76 24.2549C152.76 26.1592 153.321 27.681 154.444 28.8203Z" fill="#20A7DB" />
                                </svg>
                            </div>
                            <br>
                            <h6 class="">Let's get you details</h6>
                            <form id="signupForm" method="post">
                                <div class="mb-3">
                                    <input type="tel" class="form-control" id="whatsapp_number" maxlength="10" required placeholder="Enter Whatsapp Number">
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" id="SignUpEmailAddress" required placeholder="Email Id">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="fullName" required placeholder="Full Name">
                                </div>
                                <div class="mb-3 position-relative d-flex">
                                    <input type="password" class="form-control" required id="signUp_password" minlength="6" autocomplete="new-password" placeholder="Password" value="" name="password">
                                    <i class="eye-icon far fa-eye" style="position: absolute; top: 50%; right: 10px; transform: translate(-50%, -50%);" id="signUp_showPassword"></i>
                                </div>
                                <div class="mb-3 position-relative d-flex">
                                    <input type="password" class="form-control" required id="signUp_ConfirmPassword" minlength="6" autocomplete="new-password" placeholder="Confirm Password" value="" name="password">
                                    <i class="eye-icon far fa-eye" style="position: absolute; top: 50%; right: 10px; transform: translate(-50%, -50%);" id="signUp_showConfirmPassword"></i>
                                </div>
                                <input type="text" class="form-control" id="referralCode" placeholder="Enter Referral Code">
                                <div class="d-grid my-4">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Sign Up Form End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Sign Up Modal End -->

    <!-- Forgot Password Modal
============================== -->
    <div id="forgot-password-modal" class="modal fade" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0">
                <div class="modal-body py-4 px-0">
                    <button type="button" class="btn-close position-absolute top-0 end-0 mt-1 me-1 mt-sm-2 me-sm-2" data-bs-dismiss="modal" aria-label="Close"></button>
                    <!-- Forgot Password Form
        =========================== -->
                    <div class="row">
                        <div class="col-11 col-md-10 mx-auto">
                            <h3 class="text-center mt-3 mb-4">Forgot your password?</h3>
                            <p class="text-center text-3 text-muted">Enter your Email or Mobile and we’ll help you reset your
                                password.</p>
                            <form id="forgotForm" class="form-border" method="post">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="ForgotPasswordEmailAddress" required placeholder="Enter Email or Mobile Number">
                                </div>
                                <div class="d-grid my-4">
                                    <button class="btn btn-primary" type="submit">Continue</button>
                                </div>
                            </form>
                            <p class="text-center mb-0"><a class="btn-link" href="#login-new-modal" data-bs-toggle="modal" data-bs-target="#login-new-modal" data-bs-dismiss="modal">Return to Log In</a> <span class="text-muted mx-3">|</span> <a class="btn-link" href="#Confirm-otp-modal" data-bs-toggle="modal" data-bs-target="#Confirm-otp-modal" data-bs-dismiss="modal">Request OTP</a>
                            </p>
                        </div>
                    </div>
                    <!-- Forgot Password Form End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Forgot Password Modal End -->

    <!-- OTP Modal
============================== -->
    <div id="otp-modal" class="modal fade" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0">
                <div class="modal-body py-4 px-0">
                    <button type="button" class="btn-close position-absolute top-0 end-0 mt-1 me-1 mt-sm-2 me-sm-2" data-bs-dismiss="modal" aria-label="Close"></button>
                    <!-- OTP Form
        =========================== -->
                    <div class="row">
                        <div class="col-11 col-md-10 mx-auto">
                            <h3 class="text-center mt-3 mb-4">Two-Step Verification</h3>
                            <p class="text-center"><img class="img-fluid" src="images/otp-icon.png" alt="verification"></p>
                            <p class="text-muted text-3 text-center">Please enter the OTP (one time password) to verify your
                                account.
                                A Code has been sent to <span class="text-dark text-4">+1*******179</span></p>
                            <form id="otp-screen" class="form-border" method="post">
                                <div class="row gx-3">
                                    <div class="col">
                                        <input type="text" class="form-control text-center text-6 px-0 py-2" maxlength="1" required autocomplete="off">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control text-center text-6 px-0 py-2" maxlength="1" required autocomplete="off">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control text-center text-6 px-0 py-2" maxlength="1" required autocomplete="off">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control text-center text-6 px-0 py-2" maxlength="1" required autocomplete="off">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control text-center text-6 px-0 py-2" maxlength="1" required autocomplete="off">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control text-center text-6 px-0 py-2" maxlength="1" required autocomplete="off">
                                    </div>
                                </div>
                                <div class="d-grid my-4">
                                    <button class="btn btn-primary" type="submit">Verify</button>
                                </div>
                            </form>
                            <p class="text-2 text-center">Not received your code? <a class="btn-link" href="#">Resend code</a></p>
                        </div>
                    </div>
                    <!-- OTP Form End -->
                </div>
            </div>
        </div>
    </div>
    <!-- OTP Modal End -->

    <!-- Confirm OTP Modal
============================== -->
    <div id="Confirm-otp-modal" class="modal fade" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0">
                <div class="modal-body py-4 px-0">
                    <button type="button" class="btn-close position-absolute top-0 end-0 mt-1 me-1 mt-sm-2 me-sm-2" data-bs-dismiss="modal" aria-label="Close"></button>
                    <!-- OTP Form
      =========================== -->
                    <div class="row">
                        <div class="col-11 col-md-10 mx-auto">
                            <h3 class="text-center mt-3 mb-4">Two-Step Verification</h3>
                            <p class="text-center"><img class="img-fluid" src="images/otp-icon.png" alt="verification"></p>
                            <p class="text-muted text-3 text-center">Please enter the OTP (one time password) to verify your
                                account. A Code has been sent to <span class="text-dark text-4">+1*******179</span></p>
                            <form id="Confirm-otp-screen" class="form-border" method="post">
                                <div class="row gx-3">
                                    <div class="col">
                                        <input type="text" class="form-control text-center text-6 px-0 py-2" maxlength="1" required autocomplete="off">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control text-center text-6 px-0 py-2" maxlength="1" required autocomplete="off">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control text-center text-6 px-0 py-2" maxlength="1" required autocomplete="off">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control text-center text-6 px-0 py-2" maxlength="1" required autocomplete="off">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control text-center text-6 px-0 py-2" maxlength="1" required autocomplete="off">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control text-center text-6 px-0 py-2" maxlength="1" required autocomplete="off">
                                    </div>
                                </div>
                                <br>
                                <div class="mb-3 position-relative d-flex">
                                    <input type="password" class="form-control" required id="ConfirmOTP_password" minlength="6" autocomplete="new-password" placeholder="Password" value="" name="password">
                                    <i class="eye-icon far fa-eye" style="position: absolute; top: 50%; right: 10px; transform: translate(-50%, -50%);" id="ConfirmOTP_showPassword"></i>
                                </div>
                                <div class="mb-3 position-relative d-flex">
                                    <input type="password" class="form-control" required id="ConfirmOTP_ConfirmPassword" minlength="6" autocomplete="new-password" placeholder="Confirm Password" value="" name="password">
                                    <i class="eye-icon far fa-eye" style="position: absolute; top: 50%; right: 10px; transform: translate(-50%, -50%);" id="ConfirmOTP_showConfirmPassword"></i>
                                </div>
                                <div class="d-grid my-4">
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ValidOtpModal">Verify</button>
                                </div>
                            </form>
                            <p class="text-2 text-center">Not received your code? <a class="btn-link" href="#">Resend code</a></p>
                            <!-- <p class="text-2 text-center mb-0"><a class="btn-link" href="#">Call me</a></p> -->
                        </div>
                    </div>
                    <!-- OTP Form End -->
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="InvalidOtpModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Responce Massage</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">Invalid OTP</div>
                <div class="modal-footer">
                    <div data-bs-toggle="modal" data-bs-target="#Confirm-otp-modal">
                        <button type="button" class="btn border-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                    <div data-bs-toggle="modal" data-bs-target="#Confirm-otp-modal">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Continue</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="ValidOtpModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Responce Massage</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">Password Changed Successfully</div>
                <div class="modal-footer">
                    <div data-bs-toggle="modal" data-bs-target="#Confirm-otp-modal">
                        <button type="button" class="btn border-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                    <div data-bs-toggle="modal" data-bs-target="#login-new-modal">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Continue</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Confirm OTP Modal End -->

    <!-- Logout Check Modal
=========================== -->
    <div id="logout_check_modal" class="modal fade" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0">
                <div class="modal-body py-4 px-0">
                    <!-- Logout Check Form
    ====================== -->
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
                            <a href="index-2.html">
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
  
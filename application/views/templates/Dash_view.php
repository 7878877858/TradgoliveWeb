<div id="content">
  <div style="background: linear-gradient(180deg, #1B1464, #1C3D85);box-shadow: 0px 6px 4px 0px rgba(30, 93, 159, 0.50) inset;">
  <!-- <div class="pt-4 pb-5" style="background: linear-gradient(180deg, #1B1464, #1C3D85);box-shadow: 0px 6px 4px 0px rgba(30, 93, 159, 0.50) inset;"> -->
    <!-- bg-secondary -->
    <div class="container">
      <div class="section px-0 py-3">
      <!-- <div class="section py-4"> -->
        <div class="container">
          <ul class="nav secondary-nav alternate" id="myTab" role="tablist">
            <li class="nav-item active">
              <a class="nav-link" id="mobile-recharge-tab" data-bs-toggle="tab" href="#mobile-recharge" aria-controls="mobile-recharge">
                <span><img src="images/recharge/Mobile.png" alt="" width="70px" height="70px"></span>Mobile
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="dth-recharge-tab" data-bs-toggle="tab" href="#dthpayment" aria-controls="dthpayment">
                <span><img src="images/recharge/DTH.png" alt="" width="70px" height="70px"></span> DTH
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="electricity-recharge-tab" data-bs-toggle="tab" href="#electricity" aria-controls="electricity">
                <span><img src="images/recharge/Electricity.png" alt="" width="70px" height="70px"></span>
                Electricity</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="GasCylinder-recharge-tab" data-bs-toggle="tab" href="#GasCylinder" aria-controls="GasCylinder">
                <span><img src="images/recharge/GasCylinder.png" alt="" width="70px" height="70px"></span> Gas
                Cylinder</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="RedeemCode-recharge-tab" data-bs-toggle="tab" href="#RedeemCode" aria-controls="RedeemCode">
                <span><img src="images/recharge/RedeemCode.png" alt="" width="70px" height="70px"></span> Redeem
                Code</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="PipedGas-recharge-tab" data-bs-toggle="tab" href="#PipedGas" aria-controls="PipedGas">
                <span><img src="images/recharge/PipedGas.png" alt="" width="70px" height="70px"></span>
                Piped GAS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="Water-recharge-tab" data-bs-toggle="tab" href="#Water" aria-controls="Water">
                <span><img src="images/recharge/Water.png" alt="" width="70px" height="70px"></span>
                Water</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="FastTAG-recharge-tab" data-bs-toggle="tab" href="#FastTAG" aria-controls="FastTAG">
                <span><img src="images/recharge/FastTAG.png" alt="" width="70px" height="70px"></span>
                Fast TAG</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="More-recharge-tab" data-bs-toggle="tab" href="#More" aria-controls="More">
                <span><img src="images/recharge/More.png" alt="" width="70px" height="70px"></span>
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
              <ul class="grid-container nav dashboard" style="font-size: 14px;" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link" id="Postpaid-recharge-tab" data-bs-toggle="tab" href="#Postpaid-recharge" aria-controls="Postpaid-recharge">
                    <div><img src="images/recharge/Postpaid.png" alt=""></div>
                    Postpaid
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="LoneRepayment-recharge-tab" data-bs-toggle="tab" href="#LoneRepayment-recharge" aria-controls="LoneRepayment-recharge">
                    <div><img src="images/recharge/LoneRepayment.png" alt=""></div>
                    Lone Repayment
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="Landline-recharge-tab" data-bs-toggle="tab" href="#Landline-recharge" aria-controls="Landline-recharge">
                    <div><img src="images/recharge/Landline.png" alt=""></div>
                    Landline
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="Insurance-recharge-tab" data-bs-toggle="tab" href="#Insurance-recharge" aria-controls="Insurance-recharge">
                    <div><img src="images/recharge/Insurance.png" alt=""></div>
                    Insurance
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="CableTV-recharge-tab" data-bs-toggle="tab" href="#CableTV-recharge" aria-controls="CableTV-recharge">
                    <div><img src="images/recharge/CableTV.png" alt=""></div>
                    Cable TV
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="Broadband-recharge-tab" data-bs-toggle="tab" href="#Broadband-recharge" aria-controls="Broadband-recharge">
                    <div><img src="images/recharge/Broadband.png" alt=""></div>
                    Broadband
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="CreditCard-recharge-tab" data-bs-toggle="tab" href="#CreditCard-recharge" aria-controls="CreditCard-recharge">
                    <div><img src="images/recharge/CreditCard.png" alt=""></div>
                    Credit Card
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="MunicipalTax-recharge-tab" data-bs-toggle="tab" href="#MunicipalTax-recharge" aria-controls="MunicipalTax-recharge">
                    <div><img src="images/recharge/MunicipalTax.png" alt=""></div>
                    Municipal Tax
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="HousingSociety-recharge-tab" data-bs-toggle="tab" href="#HousingSociety-recharge" aria-controls="HousingSociety-recharge">
                    <div><img src="images/recharge/HousingSociety.png" alt=""></div>
                    Housing Society
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="Clubs_Associations-recharge-tab" data-bs-toggle="tab" href="#Clubs_Associations-recharge" aria-controls="Clubs_Associations-recharge">
                    <div><img src="images/recharge/Clubs&Associations.png" alt=""></div>
                    Clubs & Associations
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="EducationFees-recharge-tab" data-bs-toggle="tab" href="#EducationFees-recharge" aria-controls="EducationFees-recharge">
                    <div><img src="images/recharge/EducationFees.png" alt=""></div>
                    Education Fees
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="Hospital_Pathology-recharge-tab" data-bs-toggle="tab" href="#Hospital_Pathology-recharge" aria-controls="Hospital_Pathology-recharge">
                    <div><img src="images/recharge/Hospital&Pathology.png" alt=""></div>
                    Hospital & Pathology
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="SubscriptionFees-recharge-tab" data-bs-toggle="tab" href="#SubscriptionFees-recharge" aria-controls="SubscriptionFees-recharge">
                    <div><img src="images/recharge/SubscriptionFees.png" alt=""></div>
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
        <div class="owl-carousel owl-theme" data-autoplay="true" data-loop="true" data-nav="true" data-margin="30"
          data-items-xs="1" data-items-sm="2" data-items-md="2" data-items-lg="3"> <!-- Adjust data-items-lg to 6 -->
          <div class="item"><a><img class="img-fluid rounded-7" src="images/slider/TG Banner/Bus_Booking_01.jpg"
                alt="banner" /></a></div>
          <div class="item"><a><img class="img-fluid rounded-7"
                src="images/slider/TG Banner/Cashback_ Recharge_Banner_03.jpg" alt="banner" /></a></div>
          <div class="item"><a><img class="img-fluid rounded-7" src="images/slider/TG Banner/Insta_banner_02.jpg"
                alt="banner" /></a></div>
          <div class="item"><a><img class="img-fluid rounded-7"
                src="images/slider/TG Banner/Refer & Earn_ Banner_02.jpg" alt="banner" /></a></div>
          <div class="item"><a><img class="img-fluid rounded-7" src="images/slider/TG Banner/Rectangle 48.png"
                alt="banner" /></a></div>
          
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
<!-- Document Wrapper end -->
<!-- Back to Top
============================================= -->
<a id="back-to-top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a>



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

<!-- Paytm Payment Successful Modal PaytmPaymentSuccessful_modal 11B84E
============================== -->
<div id="PaytmPaymentSuccessful_modal" class="modal fade" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document" style="width: fit-content; scale: 0.7;">
    <div class="modal-content rounded-7">
      <div class="modal-body p-0">
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
<script src="js/extra.js"></script>
<!doctype html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>GlobalFashion</title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.icon">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('dashassets/css/phoenix.min.css') }}" rel="stylesheet" id="style-default">
    <link href="{{ asset('dashassets/css/user.min.css') }}" rel="stylesheet" id="user-style-default">
    <style>
      body {
        opacity: 0;
      }
    </style>
  </head>

  <body>
    <main class="main" id="top">
      <div class="container-fluid px-0">
        
   
        @include('inc.admin.sidebar')
        
        @include('inc.admin.nav')


        <div class="content">
          <div class="pb-5">
            <div class="row g-5">
          
               
            <div> 

              <h2 class="mb-2">Efashion Dashboard</h2> 
                <h5 class="text-700 fw-semi-bold">Here’s what’s going on at your business right now</h5>
                </div>
                <div class="row align-items-center g-4">
                  <div class="col-12 col-md-auto">
                    <div class="d-flex align-items-center"><img src="{{ asset('dashassets/img/icons/illustrations/4.png') }}" alt="" height="46" width="46">
                      <div class="ms-3">
                        <h4 class="mb-0">57 new orders</h4>
                        <p class="text-800 fs--1 mb-0">Awating processing</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-auto">
                    <div class="d-flex align-items-center"><img src="{{ asset('dashassets/img/icons/illustrations/2.png') }}" alt="" height="46" width="46">
                      <div class="ms-3">
                        <h4 class="mb-0">5 orders</h4>
                        <p class="text-800 fs--1 mb-0">On hold</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-auto">
                    <div class="d-flex align-items-center"><img src="{{ asset('dashassets/img/icons/illustrations/3.png') }}" alt="" height="46" width="46">
                      <div class="ms-3">
                        <h4 class="mb-0">15 products</h4>
                        <p class="text-800 fs--1 mb-0">Out of stock</p>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="bg-200 mb-6 mt-4">
                <div class="row flex-between-center mb-4 g-3">
                  <div class="col-auto">
                    <h3>Total sells</h3>
                    <p class="text-700 lh-sm mb-0">Payment received across all channels</p>
                  </div>
                  <div class="col-8 col-sm-4"><select class="form-select form-select-sm mt-2" id="select-gross-revenue-month">
                      <option>June 6 - 30, 2022</option>
                      <option>April 8 - 30, 2022</option>
                      <option>May 1 - 31, 2022</option>
                    </select></div>
                </div>
                <div class="echart-total-sales-chart" style="min-height:320px;width:100%"></div>
              </div>
              <div class="col-12 col-xxl-6">
                <div class="row g-3">
                  <div class="col-12 col-md-6">
                    <div class="card border border-200 shadow-none h-100">
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
                          <div>
                            <h5 class="mb-1">Total orders<span class="badge badge-light-warning rounded-pill fs--1 ms-2">-6.8%</span></h5>
                            <h6 class="text-700">Last 7 days</h6>
                          </div>
                          <h4>16,247</h4>
                        </div>
                        <div class="d-flex justify-content-center px-4 py-6">
                          <div class="echart-total-orders" style="height:85px;width:115px" data-echarts='{"tooltip":{"show":false},"series":[{"type":"bar","barWidth":"5px","data":[120,200,150,80,70,110,120],"showBackground":true,"symbol":"none","itemStyle":{"borderRadius":10},"backgroundStyle":{"borderRadius":10}}],"grid":{"right":10,"left":10,"bottom":0,"top":0}}'></div>
                        </div>
                        <div class="mt-2">
                          <div class="d-flex align-items-center mb-2">
                            <div class="bullet-item bg-primary me-2"></div>
                            <h6 class="text-900 fw-semi-bold flex-1 mb-0">Completed</h6>
                            <h6 class="text-900 fw-semi-bold mb-0">52%</h6>
                          </div>
                          <div class="d-flex align-items-center">
                            <div class="bullet-item bg-light-primary me-2"></div>
                            <h6 class="text-900 fw-semi-bold flex-1 mb-0">Pending payment</h6>
                            <h6 class="text-900 fw-semi-bold mb-0">48%</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="card border border-200 shadow-none h-100">
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
                          <div>
                            <h5 class="mb-1">New customers<span class="badge badge-light-warning rounded-pill fs--1 ms-2">+26.5%</span></h5>
                            <h6 class="text-700">Last 7 days</h6>
                          </div>
                          <h4>356</h4>
                        </div>
                        <div class="pb-0 pt-4">
                          <div class="echarts-new-customers" style="height:180px;width:100%;"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="card border border-200 shadow-none h-100">
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
                          <div>
                            <h5 class="mb-2">Top coupons</h5>
                            <h6 class="text-700">Last 7 days</h6>
                          </div>
                        </div>
                        <div class="pb-4 pt-3">
                          <div class="echart-top-coupons" style="height:115px;width:100%;"></div>
                        </div>
                        <div>
                          <div class="d-flex align-items-center mb-2">
                            <div class="bullet-item bg-primary me-2"></div>
                            <h6 class="text-900 fw-semi-bold flex-1 mb-0">Percentage discount</h6>
                            <h6 class="text-900 fw-semi-bold mb-0">72%</h6>
                          </div>
                          <div class="d-flex align-items-center mb-2">
                            <div class="bullet-item bg-primary-200 me-2"></div>
                            <h6 class="text-900 fw-semi-bold flex-1 mb-0">Fixed card discount</h6>
                            <h6 class="text-900 fw-semi-bold mb-0">18%</h6>
                          </div>
                          <div class="d-flex align-items-center">
                            <div class="bullet-item bg-info me-2"></div>
                            <h6 class="text-900 fw-semi-bold flex-1 mb-0">Fixed product discount</h6>
                            <h6 class="text-900 fw-semi-bold mb-0">10%</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="card border border-200 shadow-none h-100">
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
                          <div>
                            <h5 class="mb-2">Paying vs non paying</h5>
                            <h6 class="text-700">Last 7 days</h6>
                          </div>
                        </div>
                        <div class="d-flex justify-content-center pt-3">
                          <div style="height:145px;width:140px"><canvas id="payingCustomerChart"></canvas></div>
                        </div>
                        <div class="mt-3">
                          <div class="d-flex align-items-center mb-2">
                            <div class="bullet-item bg-primary me-2"></div>
                            <h6 class="text-900 fw-semi-bold flex-1 mb-0">Paying customer</h6>
                            <h6 class="text-900 fw-semi-bold mb-0">30%</h6>
                          </div>
                          <div class="d-flex align-items-center">
                            <div class="bullet-item bg-light-primary me-2"></div>
                            <h6 class="text-900 fw-semi-bold flex-1 mb-0">Non-paying customer</h6>
                            <h6 class="text-900 fw-semi-bold mb-0">70%</h6>
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
          </div>
          
          <footer class="footer">
            <div class="row g-0 justify-content-between align-items-center h-100 mb-3">
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-900">Thank you for creating with GlobalFashion<span class="d-none d-sm-inline-block"></span><span class="mx-1">|</span><br class="d-sm-none">2022 &copy; <a href="https://themewagon.com">Themewagon</a></p>
              </div>
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">v1.1.0</p>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </main>
    <script src="{{ asset('dashassets/js/phoenix.js') }}"></script>
    <script src="{{ asset('dashassets/js/ecommerce-dashboard.js') }}"></script>
  </body>

</html>
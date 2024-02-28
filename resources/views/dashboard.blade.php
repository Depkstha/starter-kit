<x-app-layout>
  <div class="page-content">
    <div class="container-fluid">
      <!-- start page title -->
      <div class="row">
        <div class="col-12">
          <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Projects</h4>

            <div class="page-title-right">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                <li class="breadcrumb-item active">Projects</li>
              </ol>
            </div>

          </div>
        </div>
      </div>
      <!-- end page title -->

      <div class="row project-wrapper">
        <div class="col-xxl-8">
          <div class="row">
            <div class="col-xl-4">
              <div class="card card-animate">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="avatar-sm flex-shrink-0">
                      <span class="avatar-title bg-primary-subtle text-primary rounded-2 fs-2">
                        <i data-feather="briefcase" class="text-primary"></i>
                      </span>
                    </div>
                    <div class="flex-grow-1 ms-3 overflow-hidden">
                      <p class="text-uppercase fw-medium text-muted text-truncate mb-3">Active Projects</p>
                      <div class="d-flex align-items-center mb-3">
                        <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="825">0</span></h4>
                      </div>
                      <p class="text-muted text-truncate mb-0">Total projects</p>
                    </div>
                  </div>
                </div><!-- end card body -->
              </div>
            </div><!-- end col -->

            <div class="col-xl-4">
              <div class="card card-animate">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="avatar-sm flex-shrink-0">
                      <span class="avatar-title bg-warning-subtle text-warning rounded-2 fs-2">
                        <i data-feather="award" class="text-warning"></i>
                      </span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <p class="text-uppercase fw-medium text-muted mb-3">New Leads</p>
                      <div class="d-flex align-items-center mb-3">
                        <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="7522">0</span></h4>
                      </div>
                      <p class="text-muted mb-0">Total leads</p>
                    </div>
                  </div>
                </div><!-- end card body -->
              </div>
            </div><!-- end col -->

            <div class="col-xl-4">
              <div class="card card-animate">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="avatar-sm flex-shrink-0">
                      <span class="avatar-title bg-info-subtle text-info rounded-2 fs-2">
                        <i data-feather="clock" class="text-info"></i>
                      </span>
                    </div>
                    <div class="flex-grow-1 ms-3 overflow-hidden">
                      <p class="text-uppercase fw-medium text-muted text-truncate mb-3">Total Hours</p>
                      <div class="d-flex align-items-center mb-3">
                        <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="168">0</span>h <span
                            class="counter-value" data-target="40">0</span>m
                        </h4>
                      </div>
                      <p class="text-muted text-truncate mb-0">Total work</p>
                    </div>
                  </div>
                </div><!-- end card body -->
              </div>
            </div><!-- end col -->
          </div><!-- end row -->
        </div><!-- end col -->
      </div><!-- end row -->

      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header border-0">
              <h4 class="card-title mb-0">Upcoming Schedules</h4>
            </div><!-- end cardheader -->
            <div class="card-body pt-0">
              <div class="upcoming-scheduled">
                <input type="text" class="form-control" data-provider="flatpickr" data-date-format="d M, Y"
                  data-deafult-date="today" data-inline-date="true">
              </div>

              <h6 class="text-uppercase fw-semibold text-muted mb-3 mt-4">Events:</h6>
              <div class="mini-stats-wid d-flex align-items-center mt-3">
                <div class="avatar-sm flex-shrink-0">
                  <span class="mini-stat-icon avatar-title rounded-circle text-success bg-success-subtle fs-4">
                    09
                  </span>
                </div>
                <div class="flex-grow-1 ms-3">
                  <h6 class="mb-1">Development planning</h6>
                  <p class="text-muted mb-0">iTest Factory </p>
                </div>
                <div class="flex-shrink-0">
                  <p class="text-muted mb-0">9:20 <span class="text-uppercase">am</span></p>
                </div>
              </div><!-- end -->
              <div class="mini-stats-wid d-flex align-items-center mt-3">
                <div class="avatar-sm flex-shrink-0">
                  <span class="mini-stat-icon avatar-title rounded-circle text-success bg-success-subtle fs-4">
                    12
                  </span>
                </div>
                <div class="flex-grow-1 ms-3">
                  <h6 class="mb-1">Design new UI and check sales</h6>
                  <p class="text-muted mb-0">Meta4Systems</p>
                </div>
                <div class="flex-shrink-0">
                  <p class="text-muted mb-0">11:30 <span class="text-uppercase">am</span></p>
                </div>
              </div><!-- end -->
              <div class="mini-stats-wid d-flex align-items-center mt-3">
                <div class="avatar-sm flex-shrink-0">
                  <span class="mini-stat-icon avatar-title rounded-circle text-success bg-success-subtle fs-4">
                    25
                  </span>
                </div>
                <div class="flex-grow-1 ms-3">
                  <h6 class="mb-1">Weekly catch-up </h6>
                  <p class="text-muted mb-0">Nesta Technologies</p>
                </div>
                <div class="flex-shrink-0">
                  <p class="text-muted mb-0">02:00 <span class="text-uppercase">pm</span></p>
                </div>
              </div><!-- end -->
              <div class="mini-stats-wid d-flex align-items-center mt-3">
                <div class="avatar-sm flex-shrink-0">
                  <span class="mini-stat-icon avatar-title rounded-circle text-success bg-success-subtle fs-4">
                    27
                  </span>
                </div>
                <div class="flex-grow-1 ms-3">
                  <h6 class="mb-1">James Bangs (Client) Meeting</h6>
                  <p class="text-muted mb-0">Nesta Technologies</p>
                </div>
                <div class="flex-shrink-0">
                  <p class="text-muted mb-0">03:45 <span class="text-uppercase">pm</span></p>
                </div>
              </div><!-- end -->

              <div class="mt-3 text-center">
                <a href="javascript:void(0);" class="text-muted text-decoration-underline">View all Events</a>
              </div>

            </div><!-- end cardbody -->
          </div><!-- end card -->
        </div><!-- end col -->
        <div class="col-md-6">
          <div class="card card-height-100">
            <div class="card-header align-items-center d-flex">
              <h4 class="card-title flex-grow-1 mb-0">Team Members</h4>
              <div class="flex-shrink-0">
                <div class="dropdown card-header-dropdown">
                  <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <span class="fw-semibold text-uppercase fs-12">Sort by: </span><span class="text-muted">Last
                      30 Days<i class="mdi mdi-chevron-down ms-1"></i></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="#">Today</a>
                    <a class="dropdown-item" href="#">Yesterday</a>
                    <a class="dropdown-item" href="#">Last 7 Days</a>
                    <a class="dropdown-item" href="#">Last 30 Days</a>
                    <a class="dropdown-item" href="#">This Month</a>
                    <a class="dropdown-item" href="#">Last Month</a>
                  </div>
                </div>
              </div>
            </div><!-- end card header -->

            <div class="card-body">

              <div class="table-responsive table-card">
                <table class="table-borderless table-nowrap mb-0 table align-middle">
                  <thead class="table-light text-muted">
                    <tr>
                      <th scope="col">Member</th>
                      <th scope="col">Hours</th>
                      <th scope="col">Tasks</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="d-flex">
                        <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-xs rounded-3 me-2">
                        <div>
                          <h5 class="fs-13 mb-0">Donald Risher</h5>
                          <p class="fs-12 text-muted mb-0">Product Manager</p>
                        </div>
                      </td>
                      <td>
                        <h6 class="mb-0">110h : <span class="text-muted">150h</span></h6>
                      </td>
                      <td>
                        258
                      </td>
                      <td style="width:5%;">
                        <div id="radialBar_chart_1" data-colors='["--vz-primary"]' data-chart-series="50"
                          class="apex-charts" dir="ltr"></div>
                      </td>
                    </tr><!-- end tr -->
                    <tr>
                      <td class="d-flex">
                        <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-3 me-2">
                        <div>
                          <h5 class="fs-13 mb-0">Jansh Brown</h5>
                          <p class="fs-12 text-muted mb-0">Lead Developer</p>
                        </div>
                      </td>
                      <td>
                        <h6 class="mb-0">83h : <span class="text-muted">150h</span></h6>
                      </td>
                      <td>
                        105
                      </td>
                      <td>
                        <div id="radialBar_chart_2" data-colors='["--vz-primary"]' data-chart-series="45"
                          class="apex-charts" dir="ltr"></div>
                      </td>
                    </tr><!-- end tr -->
                    <tr>
                      <td class="d-flex">
                        <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-xs rounded-3 me-2">
                        <div>
                          <h5 class="fs-13 mb-0">Carroll Adams</h5>
                          <p class="fs-12 text-muted mb-0">Lead Designer</p>
                        </div>
                      </td>
                      <td>
                        <h6 class="mb-0">58h : <span class="text-muted">150h</span></h6>
                      </td>
                      <td>
                        75
                      </td>
                      <td>
                        <div id="radialBar_chart_3" data-colors='["--vz-primary"]' data-chart-series="75"
                          class="apex-charts" dir="ltr"></div>
                      </td>
                    </tr><!-- end tr -->
                    <tr>
                      <td class="d-flex">
                        <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-xs rounded-3 me-2">
                        <div>
                          <h5 class="fs-13 mb-0">William Pinto</h5>
                          <p class="fs-12 text-muted mb-0">UI/UX Designer</p>
                        </div>
                      </td>
                      <td>
                        <h6 class="mb-0">96h : <span class="text-muted">150h</span></h6>
                      </td>
                      <td>
                        85
                      </td>
                      <td>
                        <div id="radialBar_chart_4" data-colors='["--vz-warning"]' data-chart-series="25"
                          class="apex-charts" dir="ltr"></div>
                      </td>
                    </tr><!-- end tr -->
                    <tr>
                      <td class="d-flex">
                        <img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-3 me-2">
                        <div>
                          <h5 class="fs-13 mb-0">Garry Fournier</h5>
                          <p class="fs-12 text-muted mb-0">Web Designer</p>
                        </div>
                      </td>
                      <td>
                        <h6 class="mb-0">76h : <span class="text-muted">150h</span></h6>
                      </td>
                      <td>
                        69
                      </td>
                      <td>
                        <div id="radialBar_chart_5" data-colors='["--vz-primary"]' data-chart-series="60"
                          class="apex-charts" dir="ltr"></div>
                      </td>
                    </tr><!-- end tr -->
                    <tr>
                      <td class="d-flex">
                        <img src="assets/images/users/avatar-5.jpg" alt="" class="avatar-xs rounded-3 me-2">
                        <div>
                          <h5 class="fs-13 mb-0">Susan Denton</h5>
                          <p class="fs-12 text-muted mb-0">Lead Designer</p>
                        </div>
                      </td>

                      <td>
                        <h6 class="mb-0">123h : <span class="text-muted">150h</span></h6>
                      </td>
                      <td>
                        658
                      </td>
                      <td>
                        <div id="radialBar_chart_6" data-colors='["--vz-success"]' data-chart-series="85"
                          class="apex-charts" dir="ltr"></div>
                      </td>
                    </tr><!-- end tr -->
                    <tr>
                      <td class="d-flex">
                        <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-3 me-2">
                        <div>
                          <h5 class="fs-13 mb-0">Joseph Jackson</h5>
                          <p class="fs-12 text-muted mb-0">React Developer</p>
                        </div>
                      </td>
                      <td>
                        <h6 class="mb-0">117h : <span class="text-muted">150h</span></h6>
                      </td>
                      <td>
                        125
                      </td>
                      <td>
                        <div id="radialBar_chart_7" data-colors='["--vz-primary"]' data-chart-series="70"
                          class="apex-charts" dir="ltr"></div>
                      </td>
                    </tr><!-- end tr -->
                  </tbody><!-- end tbody -->
                </table><!-- end table -->
              </div>
            </div><!-- end cardbody -->
          </div><!-- end card -->
        </div><!-- end col -->
      </div><!-- end row -->

    </div>
    <!-- container-fluid -->
  </div>
</x-app-layout>

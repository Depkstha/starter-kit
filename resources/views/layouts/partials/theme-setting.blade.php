<div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-settings-offcanvas">
  <div class="d-flex align-items-center bg-primary bg-gradient offcanvas-header p-3">
    <h5 class="m-0 me-2 text-white">Theme Customizer</h5>

    <button type="button" class="btn-close btn-close-white ms-auto" id="customizerclose-btn" data-bs-dismiss="offcanvas"
      aria-label="Close"></button>
  </div>
  <div class="offcanvas-body p-0">
    <div data-simplebar class="h-100">
      <div class="p-4">
        <h6 class="fw-semibold text-uppercase mb-0">Layout</h6>
        <p class="text-muted">Choose your layout</p>

        <div class="row gy-3">
          <div class="col-4">
            <div class="form-check card-radio">
              <input id="customizer-layout01" name="data-layout" type="radio" value="vertical"
                class="form-check-input">
              <label class="form-check-label avatar-md w-100 p-0" for="customizer-layout01">
                <span class="d-flex h-100 gap-1">
                  <span class="flex-shrink-0">
                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                      <span class="d-block bg-primary-subtle mb-2 rounded p-1 px-2"></span>
                      <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                      <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                      <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                    </span>
                  </span>
                  <span class="flex-grow-1">
                    <span class="d-flex h-100 flex-column">
                      <span class="bg-light d-block p-1"></span>
                      <span class="bg-light d-block mt-auto p-1"></span>
                    </span>
                  </span>
                </span>
              </label>
            </div>
            <h5 class="fs-13 mt-2 text-center">Vertical</h5>
          </div>
          <div class="col-4">
            <div class="form-check card-radio">
              <input id="customizer-layout02" name="data-layout" type="radio" value="horizontal"
                class="form-check-input">
              <label class="form-check-label avatar-md w-100 p-0" for="customizer-layout02">
                <span class="d-flex h-100 flex-column gap-1">
                  <span class="bg-light d-flex align-items-center gap-1 p-1">
                    <span class="d-block bg-primary-subtle me-1 rounded p-1"></span>
                    <span class="d-block bg-primary-subtle ms-auto p-1 px-2 pb-0"></span>
                    <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                  </span>
                  <span class="bg-light d-block p-1"></span>
                  <span class="bg-light d-block mt-auto p-1"></span>
                </span>
              </label>
            </div>
            <h5 class="fs-13 mt-2 text-center">Horizontal</h5>
          </div>
          <div class="col-4">
            <div class="form-check card-radio">
              <input id="customizer-layout03" name="data-layout" type="radio" value="twocolumn"
                class="form-check-input">
              <label class="form-check-label avatar-md w-100 p-0" for="customizer-layout03">
                <span class="d-flex h-100 gap-1">
                  <span class="flex-shrink-0">
                    <span class="bg-light d-flex h-100 flex-column gap-1">
                      <span class="d-block bg-primary-subtle mb-2 p-1"></span>
                      <span class="d-block bg-primary-subtle p-1 pb-0"></span>
                      <span class="d-block bg-primary-subtle p-1 pb-0"></span>
                      <span class="d-block bg-primary-subtle p-1 pb-0"></span>
                    </span>
                  </span>
                  <span class="flex-shrink-0">
                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                      <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                      <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                      <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                      <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                    </span>
                  </span>
                  <span class="flex-grow-1">
                    <span class="d-flex h-100 flex-column">
                      <span class="bg-light d-block p-1"></span>
                      <span class="bg-light d-block mt-auto p-1"></span>
                    </span>
                  </span>
                </span>
              </label>
            </div>
            <h5 class="fs-13 mt-2 text-center">Two Column</h5>
          </div>
          <!-- end col -->

          <div class="col-4">
            <div class="form-check card-radio">
              <input id="customizer-layout04" name="data-layout" type="radio" value="semibox"
                class="form-check-input">
              <label class="form-check-label avatar-md w-100 p-0" for="customizer-layout04">
                <span class="d-flex h-100 gap-1">
                  <span class="flex-shrink-0 p-1">
                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                      <span class="d-block bg-primary-subtle mb-2 rounded p-1 px-2"></span>
                      <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                      <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                      <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                    </span>
                  </span>
                  <span class="flex-grow-1">
                    <span class="d-flex h-100 flex-column pe-2 pt-1">
                      <span class="bg-light d-block p-1"></span>
                      <span class="bg-light d-block mt-auto p-1"></span>
                    </span>
                  </span>
                </span>
              </label>
            </div>
            <h5 class="fs-13 mt-2 text-center">Semi Box</h5>
          </div>
          <!-- end col -->
        </div>

        <h6 class="fw-semibold text-uppercase mb-0 mt-4">Color Scheme</h6>
        <p class="text-muted">Choose Light or Dark Scheme.</p>

        <div class="colorscheme-cardradio">
          <div class="row">
            <div class="col-4">
              <div class="form-check card-radio">
                <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-mode-light"
                  value="light">
                <label class="form-check-label avatar-md w-100 p-0" for="layout-mode-light">
                  <span class="d-flex h-100 gap-1">
                    <span class="flex-shrink-0">
                      <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                        <span class="d-block bg-primary-subtle mb-2 rounded p-1 px-2"></span>
                        <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                        <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                        <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                      </span>
                    </span>
                    <span class="flex-grow-1">
                      <span class="d-flex h-100 flex-column">
                        <span class="bg-light d-block p-1"></span>
                        <span class="bg-light d-block mt-auto p-1"></span>
                      </span>
                    </span>
                  </span>
                </label>
              </div>
              <h5 class="fs-13 mt-2 text-center">Light</h5>
            </div>

            <div class="col-4">
              <div class="form-check card-radio dark">
                <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-mode-dark"
                  value="dark">
                <label class="form-check-label avatar-md w-100 bg-dark p-0" for="layout-mode-dark">
                  <span class="d-flex h-100 gap-1">
                    <span class="flex-shrink-0">
                      <span class="d-flex h-100 flex-column gap-1 bg-white bg-opacity-10 p-1">
                        <span class="d-block mb-2 rounded bg-white bg-opacity-10 p-1 px-2"></span>
                        <span class="d-block bg-white bg-opacity-10 p-1 px-2 pb-0"></span>
                        <span class="d-block bg-white bg-opacity-10 p-1 px-2 pb-0"></span>
                        <span class="d-block bg-white bg-opacity-10 p-1 px-2 pb-0"></span>
                      </span>
                    </span>
                    <span class="flex-grow-1">
                      <span class="d-flex h-100 flex-column">
                        <span class="d-block bg-white bg-opacity-10 p-1"></span>
                        <span class="d-block mt-auto bg-white bg-opacity-10 p-1"></span>
                      </span>
                    </span>
                  </span>
                </label>
              </div>
              <h5 class="fs-13 mt-2 text-center">Dark</h5>
            </div>
          </div>
        </div>

        <div id="sidebar-visibility">
          <h6 class="fw-semibold text-uppercase mb-0 mt-4">Sidebar Visibility</h6>
          <p class="text-muted">Choose show or Hidden sidebar.</p>

          <div class="row">
            <div class="col-4">
              <div class="form-check card-radio">
                <input class="form-check-input" type="radio" name="data-sidebar-visibility"
                  id="sidebar-visibility-show" value="show">
                <label class="form-check-label avatar-md w-100 p-0" for="sidebar-visibility-show">
                  <span class="d-flex h-100 gap-1">
                    <span class="flex-shrink-0 p-1">
                      <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                        <span class="d-block bg-primary-subtle mb-2 rounded p-1 px-2"></span>
                        <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                        <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                        <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                      </span>
                    </span>
                    <span class="flex-grow-1">
                      <span class="d-flex h-100 flex-column pe-2 pt-1">
                        <span class="bg-light d-block p-1"></span>
                        <span class="bg-light d-block mt-auto p-1"></span>
                      </span>
                    </span>
                  </span>
                </label>
              </div>
              <h5 class="fs-13 mt-2 text-center">Show</h5>
            </div>
            <div class="col-4">
              <div class="form-check card-radio">
                <input class="form-check-input" type="radio" name="data-sidebar-visibility"
                  id="sidebar-visibility-hidden" value="hidden">
                <label class="form-check-label avatar-md w-100 p-0 px-2" for="sidebar-visibility-hidden">
                  <span class="d-flex h-100 gap-1">
                    <span class="flex-grow-1">
                      <span class="d-flex h-100 flex-column px-2 pt-1">
                        <span class="bg-light d-block p-1"></span>
                        <span class="bg-light d-block mt-auto p-1"></span>
                      </span>
                    </span>
                  </span>
                </label>
              </div>
              <h5 class="fs-13 mt-2 text-center">Hidden</h5>
            </div>
          </div>
        </div>

        <div id="layout-width">
          <h6 class="fw-semibold text-uppercase mb-0 mt-4">Layout Width</h6>
          <p class="text-muted">Choose Fluid or Boxed layout.</p>

          <div class="row">
            <div class="col-4">
              <div class="form-check card-radio">
                <input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-fluid"
                  value="fluid">
                <label class="form-check-label avatar-md w-100 p-0" for="layout-width-fluid">
                  <span class="d-flex h-100 gap-1">
                    <span class="flex-shrink-0">
                      <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                        <span class="d-block bg-primary-subtle mb-2 rounded p-1 px-2"></span>
                        <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                        <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                        <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                      </span>
                    </span>
                    <span class="flex-grow-1">
                      <span class="d-flex h-100 flex-column">
                        <span class="bg-light d-block p-1"></span>
                        <span class="bg-light d-block mt-auto p-1"></span>
                      </span>
                    </span>
                  </span>
                </label>
              </div>
              <h5 class="fs-13 mt-2 text-center">Fluid</h5>
            </div>
            <div class="col-4">
              <div class="form-check card-radio">
                <input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-boxed"
                  value="boxed">
                <label class="form-check-label avatar-md w-100 p-0 px-2" for="layout-width-boxed">
                  <span class="d-flex h-100 border-start border-end gap-1">
                    <span class="flex-shrink-0">
                      <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                        <span class="d-block bg-primary-subtle mb-2 rounded p-1 px-2"></span>
                        <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                        <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                        <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                      </span>
                    </span>
                    <span class="flex-grow-1">
                      <span class="d-flex h-100 flex-column">
                        <span class="bg-light d-block p-1"></span>
                        <span class="bg-light d-block mt-auto p-1"></span>
                      </span>
                    </span>
                  </span>
                </label>
              </div>
              <h5 class="fs-13 mt-2 text-center">Boxed</h5>
            </div>
          </div>
        </div>

        <div id="layout-position">
          <h6 class="fw-semibold text-uppercase mb-0 mt-4">Layout Position</h6>
          <p class="text-muted">Choose Fixed or Scrollable Layout Position.</p>

          <div class="btn-group radio" role="group">
            <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed"
              value="fixed">
            <label class="btn btn-light w-sm" for="layout-position-fixed">Fixed</label>

            <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-scrollable"
              value="scrollable">
            <label class="btn btn-light w-sm ms-0" for="layout-position-scrollable">Scrollable</label>
          </div>
        </div>
        <h6 class="fw-semibold text-uppercase mb-0 mt-4">Topbar Color</h6>
        <p class="text-muted">Choose Light or Dark Topbar Color.</p>

        <div class="row">
          <div class="col-4">
            <div class="form-check card-radio">
              <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-light"
                value="light">
              <label class="form-check-label avatar-md w-100 p-0" for="topbar-color-light">
                <span class="d-flex h-100 gap-1">
                  <span class="flex-shrink-0">
                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                      <span class="d-block bg-primary-subtle mb-2 rounded p-1 px-2"></span>
                      <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                      <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                      <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                    </span>
                  </span>
                  <span class="flex-grow-1">
                    <span class="d-flex h-100 flex-column">
                      <span class="bg-light d-block p-1"></span>
                      <span class="bg-light d-block mt-auto p-1"></span>
                    </span>
                  </span>
                </span>
              </label>
            </div>
            <h5 class="fs-13 mt-2 text-center">Light</h5>
          </div>
          <div class="col-4">
            <div class="form-check card-radio">
              <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-dark"
                value="dark">
              <label class="form-check-label avatar-md w-100 p-0" for="topbar-color-dark">
                <span class="d-flex h-100 gap-1">
                  <span class="flex-shrink-0">
                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                      <span class="d-block bg-primary-subtle mb-2 rounded p-1 px-2"></span>
                      <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                      <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                      <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                    </span>
                  </span>
                  <span class="flex-grow-1">
                    <span class="d-flex h-100 flex-column">
                      <span class="bg-primary d-block p-1"></span>
                      <span class="bg-light d-block mt-auto p-1"></span>
                    </span>
                  </span>
                </span>
              </label>
            </div>
            <h5 class="fs-13 mt-2 text-center">Dark</h5>
          </div>
        </div>

        <div id="sidebar-size">
          <h6 class="fw-semibold text-uppercase mb-0 mt-4">Sidebar Size</h6>
          <p class="text-muted">Choose a size of Sidebar.</p>

          <div class="row">
            <div class="col-4">
              <div class="form-check sidebar-setting card-radio">
                <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-default"
                  value="lg">
                <label class="form-check-label avatar-md w-100 p-0" for="sidebar-size-default">
                  <span class="d-flex h-100 gap-1">
                    <span class="flex-shrink-0">
                      <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                        <span class="d-block bg-primary-subtle mb-2 rounded p-1 px-2"></span>
                        <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                        <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                        <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                      </span>
                    </span>
                    <span class="flex-grow-1">
                      <span class="d-flex h-100 flex-column">
                        <span class="bg-light d-block p-1"></span>
                        <span class="bg-light d-block mt-auto p-1"></span>
                      </span>
                    </span>
                  </span>
                </label>
              </div>
              <h5 class="fs-13 mt-2 text-center">Default</h5>
            </div>

            <div class="col-4">
              <div class="form-check sidebar-setting card-radio">
                <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-compact"
                  value="md">
                <label class="form-check-label avatar-md w-100 p-0" for="sidebar-size-compact">
                  <span class="d-flex h-100 gap-1">
                    <span class="flex-shrink-0">
                      <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                        <span class="d-block bg-primary-subtle mb-2 rounded p-1"></span>
                        <span class="d-block bg-primary-subtle p-1 pb-0"></span>
                        <span class="d-block bg-primary-subtle p-1 pb-0"></span>
                        <span class="d-block bg-primary-subtle p-1 pb-0"></span>
                      </span>
                    </span>
                    <span class="flex-grow-1">
                      <span class="d-flex h-100 flex-column">
                        <span class="bg-light d-block p-1"></span>
                        <span class="bg-light d-block mt-auto p-1"></span>
                      </span>
                    </span>
                  </span>
                </label>
              </div>
              <h5 class="fs-13 mt-2 text-center">Compact</h5>
            </div>

            <div class="col-4">
              <div class="form-check sidebar-setting card-radio">
                <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-small"
                  value="sm">
                <label class="form-check-label avatar-md w-100 p-0" for="sidebar-size-small">
                  <span class="d-flex h-100 gap-1">
                    <span class="flex-shrink-0">
                      <span class="bg-light d-flex h-100 flex-column gap-1">
                        <span class="d-block bg-primary-subtle mb-2 p-1"></span>
                        <span class="d-block bg-primary-subtle p-1 pb-0"></span>
                        <span class="d-block bg-primary-subtle p-1 pb-0"></span>
                        <span class="d-block bg-primary-subtle p-1 pb-0"></span>
                      </span>
                    </span>
                    <span class="flex-grow-1">
                      <span class="d-flex h-100 flex-column">
                        <span class="bg-light d-block p-1"></span>
                        <span class="bg-light d-block mt-auto p-1"></span>
                      </span>
                    </span>
                  </span>
                </label>
              </div>
              <h5 class="fs-13 mt-2 text-center">Small (Icon View)</h5>
            </div>

            <div class="col-4">
              <div class="form-check sidebar-setting card-radio">
                <input class="form-check-input" type="radio" name="data-sidebar-size"
                  id="sidebar-size-small-hover" value="sm-hover">
                <label class="form-check-label avatar-md w-100 p-0" for="sidebar-size-small-hover">
                  <span class="d-flex h-100 gap-1">
                    <span class="flex-shrink-0">
                      <span class="bg-light d-flex h-100 flex-column gap-1">
                        <span class="d-block bg-primary-subtle mb-2 p-1"></span>
                        <span class="d-block bg-primary-subtle p-1 pb-0"></span>
                        <span class="d-block bg-primary-subtle p-1 pb-0"></span>
                        <span class="d-block bg-primary-subtle p-1 pb-0"></span>
                      </span>
                    </span>
                    <span class="flex-grow-1">
                      <span class="d-flex h-100 flex-column">
                        <span class="bg-light d-block p-1"></span>
                        <span class="bg-light d-block mt-auto p-1"></span>
                      </span>
                    </span>
                  </span>
                </label>
              </div>
              <h5 class="fs-13 mt-2 text-center">Small Hover View</h5>
            </div>
          </div>
        </div>

        <div id="sidebar-view">
          <h6 class="fw-semibold text-uppercase mb-0 mt-4">Sidebar View</h6>
          <p class="text-muted">Choose Default or Detached Sidebar view.</p>

          <div class="row">
            <div class="col-4">
              <div class="form-check sidebar-setting card-radio">
                <input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-default"
                  value="default">
                <label class="form-check-label avatar-md w-100 p-0" for="sidebar-view-default">
                  <span class="d-flex h-100 gap-1">
                    <span class="flex-shrink-0">
                      <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                        <span class="d-block bg-primary-subtle mb-2 rounded p-1 px-2"></span>
                        <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                        <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                        <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                      </span>
                    </span>
                    <span class="flex-grow-1">
                      <span class="d-flex h-100 flex-column">
                        <span class="bg-light d-block p-1"></span>
                        <span class="bg-light d-block mt-auto p-1"></span>
                      </span>
                    </span>
                  </span>
                </label>
              </div>
              <h5 class="fs-13 mt-2 text-center">Default</h5>
            </div>
            <div class="col-4">
              <div class="form-check sidebar-setting card-radio">
                <input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-detached"
                  value="detached">
                <label class="form-check-label avatar-md w-100 p-0" for="sidebar-view-detached">
                  <span class="d-flex h-100 flex-column">
                    <span class="bg-light d-flex align-items-center gap-1 p-1 px-2">
                      <span class="d-block bg-primary-subtle me-1 rounded p-1"></span>
                      <span class="d-block bg-primary-subtle ms-auto p-1 px-2 pb-0"></span>
                      <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                    </span>
                    <span class="d-flex h-100 gap-1 p-1 px-2">
                      <span class="flex-shrink-0">
                        <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                          <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                          <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                          <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                        </span>
                      </span>
                    </span>
                    <span class="bg-light d-block mt-auto p-1 px-2"></span>
                  </span>
                </label>
              </div>
              <h5 class="fs-13 mt-2 text-center">Detached</h5>
            </div>
          </div>
        </div>
        <div id="sidebar-color">
          <h6 class="fw-semibold text-uppercase mb-0 mt-4">Sidebar Color</h6>
          <p class="text-muted">Choose a color of Sidebar.</p>

          <div class="row">
            <div class="col-4">
              <div class="form-check sidebar-setting card-radio" data-bs-toggle="collapse"
                data-bs-target="#collapseBgGradient.show">
                <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-light"
                  value="light">
                <label class="form-check-label avatar-md w-100 p-0" for="sidebar-color-light">
                  <span class="d-flex h-100 gap-1">
                    <span class="flex-shrink-0">
                      <span class="border-end d-flex h-100 flex-column gap-1 bg-white p-1">
                        <span class="d-block bg-primary-subtle mb-2 rounded p-1 px-2"></span>
                        <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                        <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                        <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                      </span>
                    </span>
                    <span class="flex-grow-1">
                      <span class="d-flex h-100 flex-column">
                        <span class="bg-light d-block p-1"></span>
                        <span class="bg-light d-block mt-auto p-1"></span>
                      </span>
                    </span>
                  </span>
                </label>
              </div>
              <h5 class="fs-13 mt-2 text-center">Light</h5>
            </div>
            <div class="col-4">
              <div class="form-check sidebar-setting card-radio" data-bs-toggle="collapse"
                data-bs-target="#collapseBgGradient.show">
                <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-dark"
                  value="dark">
                <label class="form-check-label avatar-md w-100 p-0" for="sidebar-color-dark">
                  <span class="d-flex h-100 gap-1">
                    <span class="flex-shrink-0">
                      <span class="bg-primary d-flex h-100 flex-column gap-1 p-1">
                        <span class="d-block mb-2 rounded bg-white bg-opacity-10 p-1 px-2"></span>
                        <span class="d-block bg-white bg-opacity-10 p-1 px-2 pb-0"></span>
                        <span class="d-block bg-white bg-opacity-10 p-1 px-2 pb-0"></span>
                        <span class="d-block bg-white bg-opacity-10 p-1 px-2 pb-0"></span>
                      </span>
                    </span>
                    <span class="flex-grow-1">
                      <span class="d-flex h-100 flex-column">
                        <span class="bg-light d-block p-1"></span>
                        <span class="bg-light d-block mt-auto p-1"></span>
                      </span>
                    </span>
                  </span>
                </label>
              </div>
              <h5 class="fs-13 mt-2 text-center">Dark</h5>
            </div>
            <div class="col-4">
              <button class="btn btn-link avatar-md w-100 collapsed overflow-hidden border p-0" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapseBgGradient" aria-expanded="false"
                aria-controls="collapseBgGradient">
                <span class="d-flex h-100 gap-1">
                  <span class="flex-shrink-0">
                    <span class="bg-vertical-gradient d-flex h-100 flex-column gap-1 p-1">
                      <span class="d-block mb-2 rounded bg-white bg-opacity-10 p-1 px-2"></span>
                      <span class="d-block bg-white bg-opacity-10 p-1 px-2 pb-0"></span>
                      <span class="d-block bg-white bg-opacity-10 p-1 px-2 pb-0"></span>
                      <span class="d-block bg-white bg-opacity-10 p-1 px-2 pb-0"></span>
                    </span>
                  </span>
                  <span class="flex-grow-1">
                    <span class="d-flex h-100 flex-column">
                      <span class="bg-light d-block p-1"></span>
                      <span class="bg-light d-block mt-auto p-1"></span>
                    </span>
                  </span>
                </span>
              </button>
              <h5 class="fs-13 mt-2 text-center">Gradient</h5>
            </div>
          </div>
          <!-- end row -->

          <div class="collapse" id="collapseBgGradient">
            <div class="d-flex img-switch bg-light flex-wrap gap-2 rounded p-2 px-3">

              <div class="form-check sidebar-setting card-radio">
                <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient"
                  value="gradient">
                <label class="form-check-label avatar-xs rounded-circle p-0" for="sidebar-color-gradient">
                  <span class="avatar-title rounded-circle bg-vertical-gradient"></span>
                </label>
              </div>
              <div class="form-check sidebar-setting card-radio">
                <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-2"
                  value="gradient-2">
                <label class="form-check-label avatar-xs rounded-circle p-0" for="sidebar-color-gradient-2">
                  <span class="avatar-title rounded-circle bg-vertical-gradient-2"></span>
                </label>
              </div>
              <div class="form-check sidebar-setting card-radio">
                <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-3"
                  value="gradient-3">
                <label class="form-check-label avatar-xs rounded-circle p-0" for="sidebar-color-gradient-3">
                  <span class="avatar-title rounded-circle bg-vertical-gradient-3"></span>
                </label>
              </div>
              <div class="form-check sidebar-setting card-radio">
                <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-4"
                  value="gradient-4">
                <label class="form-check-label avatar-xs rounded-circle p-0" for="sidebar-color-gradient-4">
                  <span class="avatar-title rounded-circle bg-vertical-gradient-4"></span>
                </label>
              </div>
            </div>
          </div>
        </div>

        <div id="sidebar-img">
          <h6 class="fw-semibold text-uppercase mb-0 mt-4">Sidebar Images</h6>
          <p class="text-muted">Choose a image of Sidebar.</p>

          <div class="d-flex img-switch flex-wrap gap-2">
            <div class="form-check sidebar-setting card-radio">
              <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-none"
                value="none">
              <label class="form-check-label avatar-sm h-auto p-0" for="sidebarimg-none">
                <span class="avatar-md bg-light d-flex align-items-center justify-content-center w-auto">
                  <i class="ri-close-fill fs-20"></i>
                </span>
              </label>
            </div>

            <div class="form-check sidebar-setting card-radio">
              <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-01"
                value="img-1">
              <label class="form-check-label avatar-sm h-auto p-0" for="sidebarimg-01">
                <img src="{{ asset('assets/images/sidebar/img-1.jpg') }}" alt=""
                  class="avatar-md object-fit-cover w-auto">
              </label>
            </div>

            <div class="form-check sidebar-setting card-radio">
              <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-02"
                value="img-2">
              <label class="form-check-label avatar-sm h-auto p-0" for="sidebarimg-02">
                <img src="{{ asset('assets/images/sidebar/img-2.jpg') }}" alt=""
                  class="avatar-md object-fit-cover w-auto">
              </label>
            </div>
            <div class="form-check sidebar-setting card-radio">
              <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-03"
                value="img-3">
              <label class="form-check-label avatar-sm h-auto p-0" for="sidebarimg-03">
                <img src="{{ asset('assets/images/sidebar/img-3.jpg') }}" alt=""
                  class="avatar-md object-fit-cover w-auto">
              </label>
            </div>
            <div class="form-check sidebar-setting card-radio">
              <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-04"
                value="img-4">
              <label class="form-check-label avatar-sm h-auto p-0" for="sidebarimg-04">
                <img src="{{ asset('assets/images/sidebar/img-4.jpg') }}" alt=""
                  class="avatar-md object-fit-cover w-auto">
              </label>
            </div>
          </div>
        </div>

        <div id="preloader-menu">
          <h6 class="fw-semibold text-uppercase mb-0 mt-4">Preloader</h6>
          <p class="text-muted">Choose a preloader.</p>

          <div class="row">
            <div class="col-4">
              <div class="form-check sidebar-setting card-radio">
                <input class="form-check-input" type="radio" name="data-preloader" id="preloader-view-custom"
                  value="enable">
                <label class="form-check-label avatar-md w-100 p-0" for="preloader-view-custom">
                  <span class="d-flex h-100 gap-1">
                    <span class="flex-shrink-0">
                      <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                        <span class="d-block bg-primary-subtle mb-2 rounded p-1 px-2"></span>
                        <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                        <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                        <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                      </span>
                    </span>
                    <span class="flex-grow-1">
                      <span class="d-flex h-100 flex-column">
                        <span class="bg-light d-block p-1"></span>
                        <span class="bg-light d-block mt-auto p-1"></span>
                      </span>
                    </span>
                  </span>
                  <!-- <div id="preloader"> -->
                  <div id="status" class="d-flex align-items-center justify-content-center">
                    <div class="spinner-border text-primary avatar-xxs m-auto" role="status">
                      <span class="visually-hidden">Loading...</span>
                    </div>
                  </div>
                  <!-- </div> -->
                </label>
              </div>
              <h5 class="fs-13 mt-2 text-center">Enable</h5>
            </div>
            <div class="col-4">
              <div class="form-check sidebar-setting card-radio">
                <input class="form-check-input" type="radio" name="data-preloader" id="preloader-view-none"
                  value="disable">
                <label class="form-check-label avatar-md w-100 p-0" for="preloader-view-none">
                  <span class="d-flex h-100 gap-1">
                    <span class="flex-shrink-0">
                      <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                        <span class="d-block bg-primary-subtle mb-2 rounded p-1 px-2"></span>
                        <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                        <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                        <span class="d-block bg-primary-subtle p-1 px-2 pb-0"></span>
                      </span>
                    </span>
                    <span class="flex-grow-1">
                      <span class="d-flex h-100 flex-column">
                        <span class="bg-light d-block p-1"></span>
                        <span class="bg-light d-block mt-auto p-1"></span>
                      </span>
                    </span>
                  </span>
                </label>
              </div>
              <h5 class="fs-13 mt-2 text-center">Disable</h5>
            </div>
          </div>

        </div>
        <!-- end preloader-menu -->

      </div>
    </div>

  </div>
  <div class="offcanvas-footer border-top p-3 text-center">
    <div class="row">
      <div class="col-6">
        <button type="button" class="btn btn-light w-100" id="reset-layout">Reset</button>
      </div>
    </div>
  </div>
</div>

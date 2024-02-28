<x-app-layout>
  <div class="page-content">
    <div class="container-fluid">
      <!-- start page title -->
      <div class="row">
        <div class="col-12">
          <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Sliders</h4>

            <div class="page-title-right">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                <li class="breadcrumb-item active">Add Slider</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <!-- end page title -->

      <div class="row project-wrapper">
        @include('backend.sliders.form')
      </div>
    </div>
  </div>
</x-app-layout>

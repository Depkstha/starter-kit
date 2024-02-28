<form id="storeUpdateForm" action="{{ isset($slider) ? route('sliders.update', $slider->id) : route('sliders.store') }}"
  enctype="multipart/form-data" method="{{ isset($slider) ? 'PUT' : 'POST' }}">
  @csrf
  <div class="row">
    <div class="col-md-9">
      <div class="card card-animate">
        <div class="card-header align-items-center d-flex">
          <h4 class="card-title flex-grow-1 mb-0">Add Slider</h4>
        </div><!-- end card header -->
        <div class="card-body">
          <div class="live-preview">
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" name="title" id="title" placeholder="Enter slider title">
            </div>
            <div class="mb-3">
              <label for="subtitle" class="form-label">Sub Title</label>
              <input type="text" class="form-control" name="subtitle" id="subtitle" placeholder="Enter sub title">
            </div>

            <div class="mb-3">
              <label for="btn_url" class="form-label">Button URL</label>
              <input type="text" class="form-control" name="btn_url" id="btn_url" placeholder="Enter url">
            </div>

            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <textarea class="form-control ckeditor-classic" id="description" name="description" rows="3"
                placeholder="Enter slider description"></textarea>
            </div>
            <div class="text-end">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title mb-0">Status</h4>
        </div><!-- end card header -->

        <div class="card-body">
          <p class="text-muted">show or hide</p>

          <div class="form-check form-switch form-switch-lg" dir="ltr">
            <input type="checkbox" class="form-check-input" id="customSwitchsizelg" checked="">
            <label class="form-check-label" for="customSwitchsizelg">Active</label>
          </div>
        </div>
        <!-- end card body -->
      </div>
      <!-- end card -->
      <div class="card">
        <div class="card-header">
          <h4 class="card-title mb-0">Image Upload</h4>
        </div><!-- end card header -->

        <div class="card-body">
          <p class="text-muted">Thumb Image</p>
          <input type="file" class="filepond filepond-input-multiple" multiple name="thumb"
            data-allow-reorder="true" data-max-file-size="3MB" data-max-files="3">
        </div>
        <!-- end card body -->
      </div>
      <!-- end card -->
    </div>
  </div>
</form>

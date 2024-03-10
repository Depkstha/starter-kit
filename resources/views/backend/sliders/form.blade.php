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
              <x-dynamic-input type="text" name="title" title="Title" id="title"
                placeholder="Enter slider title" />
            </div>

            <div class="mb-3">
              <x-dynamic-input type="text" name="subTitle" title="Sub Title" id="subTitle"
                placeholder="Enter sub title" />
            </div>

            <div class="mb-3">
              <x-dynamic-input type="text" labelClass="form-label" title="Nepali date" name="date" id="date"
                placeholder="Enter Nepali Date" inputClass="form-control date-piker" />
            </div>

            <div class="mb-3">
              <x-dynamic-input id="btnUrl" title="Button URL" type="text" name="btnUrl"
                placeholder="Enter url" />
            </div>

            <div class="mb-3">
              <x-dynamic-textarea id="description" name="description" title="description"
                placeholder="Enter slider description" textareaClass="form-control ckeditor-classic" rows="3" />
            </div>
            <div class="text-end">
              <button type="submit" class="btn btn-primary">Submit</button>
              <a href="{{ route('sliders.index') }}" class="btn btn-danger">Cancel</a>
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
            <input type="checkbox" class="form-check-input" name="status" id="customSwitchsizelg" checked>
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
          <p class="text-muted">Images</p>
          <input type="file" class="filepond filepond-input-multiple" multiple name="thumb[]"
            data-allow-reorder="true" data-max-file-size="3MB" data-max-files="3">
        </div>
        <!-- end card body -->
      </div>
      <!-- end card -->
    </div>
  </div>
</form>

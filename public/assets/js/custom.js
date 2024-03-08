//initialize ckeditor
document.querySelectorAll('.ckeditor-classic').forEach(editor => {
    console.log(editor);
    ClassicEditor
    .create(editor)
    .catch(error => {
        console.error(error);
    });

  });

$('.date-picker').nepaliDatePicker({
    // dateFormat: '%D, %M %d, %y',
     dateFormat: '%y-%m-%d',
    closeOnDateSelect: true,
  });

    // initialize filepond
    const inputElement = document.querySelector('.filepond');
    console.log(inputElement);
    FilePond.registerPlugin(FilePondPluginImagePreview);
    const pond = FilePond.create(inputElement);
    FilePond.setOptions({
        server:{
            process:'/upload',
            revert: '/delete',
            headers:{
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
        }
    });


//ajax form submit
document.addEventListener('DOMContentLoaded', function () {
    let form = document.getElementById('storeUpdateForm');

    let action = form.getAttribute('action');

    let method = form.getAttribute('method');

    toastr.options = {
                'closeButton': true,
                'debug': false,
                'newestOnTop': true,
                'progressBar': true,
                'positionClass': 'toast-top-right',
                'preventDuplicates': true,
                'showDuration': '1000',
                'hideDuration': '1000',
                'timeOut': '5000',
                'extendedTimeOut': '1000',
                'showEasing': 'swing',
                'hideEasing': 'linear',
                'showMethod': 'fadeIn',
                'hideMethod': 'fadeOut',
            }

    form.addEventListener('submit', function (e) {
      e.preventDefault();

      let formData = new FormData(form);

      fetch(action, {
        method: method,
        body: formData,
        headers: {
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
      })
      .then(response => {
        if (response.ok) {
            response.json().then(data=>{
                toastr['success'](data.message);
            })
        } else {
          response.json().then(data => {
            if (data.errors) {
              for (const [key, message] of Object.entries(data.errors)) {
                let errorDiv = document.createElement('div');
                errorDiv.innerHTML = `<span class="text-danger">${message}</span>`;
                document.getElementById(key).parentNode.appendChild(errorDiv);
              }
            }
          })
          .catch(error => {
            console.error('Error parsing JSON:', error);
          });
        }
      })
      .catch(error => {
        console.error('Error during fetch:', error);
      });
    });

});


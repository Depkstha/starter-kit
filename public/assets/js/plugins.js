// (document.querySelectorAll("[toast-list]")||document.querySelectorAll("[data-choices]")||document.querySelectorAll("[data-provider]"))&&(document.writeln("<script type='text/javascript' src='/assets/libs/tostify/toastify-js.js'><\/script>"),document.writeln("<script type='text/javascript' src='/assets/libs/choices.js/choices.min.js'><\/script>"),document.writeln("<script type='text/javascript' src='/assets/libs/flatpickr/flatpickr.min.js'><\/script>"));

// Check if any of the specified selectors exist in the document
if (document.querySelectorAll("[toast-list]") || document.querySelectorAll("[data-choices]") || document.querySelectorAll("[data-provider]")) {
    // Create script elements for each library and set their src attributes
    var toastifyScript = document.createElement('script');
    toastifyScript.type = 'text/javascript';
    toastifyScript.src = '/assets/libs/tostify/toastify-js.js';

    var choicesScript = document.createElement('script');
    choicesScript.type = 'text/javascript';
    choicesScript.src = '/assets/libs/choices.js/choices.min.js';

    var flatpickrScript = document.createElement('script');
    flatpickrScript.type = 'text/javascript';
    flatpickrScript.src = '/assets/libs/flatpickr/flatpickr.min.js';

    // Append the script elements to the document's head
    document.head.appendChild(toastifyScript);
    document.head.appendChild(choicesScript);
    document.head.appendChild(flatpickrScript);
}

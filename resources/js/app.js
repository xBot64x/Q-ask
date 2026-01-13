import './bootstrap';

window.ShowImage = function (input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('profile-picture').src = e.target.result;
        };
        reader.readAsDataURL(input.files[0]);
    }
}


// var droppedFiles = false;

// $form.on('drag dragstart dragend dragover dragenter dragleave drop', function (e) {
//     e.preventDefault();
//     e.stopPropagation();
// })
//     .on('dragover dragenter', function () {
//         $form.addClass('is-dragover');
//     })
//     .on('dragleave dragend drop', function () {
//         $form.removeClass('is-dragover');
//     })
//     .on('drop', function (e) {
//         droppedFiles = e.originalEvent.dataTransfer.files;
//     });

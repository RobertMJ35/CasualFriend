$("#lang").on("change", function () {
    window.location = $(this).val();
});

$("#lang-button").on("click", function () {
    $('#lang-popup').modal('show');
});

$(document).ready(function() {
    $("#change-button").on("click", function () {
        var selected = $('#lang-select option:selected').val();
        window.location = selected;
    });
});

var profilePreview = function(event) {
    var preview = document.getElementById('profile-preview');
    preview.src = URL.createObjectURL(event.target.files[0]);
    preview.onload = function() {
      URL.revokeObjectURL(output.src);
    }
};


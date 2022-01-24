var loadFile = function (event) {
    var reader = new FileReader();
    reader.onload = function () {
        var output = document.getElementById('photoPreview');
        output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
};
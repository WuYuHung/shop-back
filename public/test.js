function readURL(input){

    if(input.files && input.files[0]){

        var imageTagID = input.getAttribute("targetID");

        var reader = new FileReader();

        reader.onload = function (e) {
            var img = document.getElementById(imageTagID);
            img.setAttribute("src", e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}


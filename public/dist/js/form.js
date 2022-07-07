$(document).ready(function (){
    $('#male').hide();
    $('#female').hide();

    $('#selectSex').on('change', function (){
        if(this.value == 'Male'){
            $('#male').show();
            $('#female').hide();
        }else if(this.value == 'Female'){
            $('#male').hide();
            $('#female').show();
        }else{
            $('#male').hide();
            $('#female').hide();
        }
    })
})



const chooseFile = document.getElementById("image");
const imgPreview = document.getElementById("img-preview");
const placeHolder = document.getElementById("placeholder");

chooseFile.addEventListener("change", function () {
    getImgData();
});

function getImgData() {
    const files = chooseFile.files[0];
    if (files) {
        const fileReader = new FileReader();
        fileReader.readAsDataURL(files);
        fileReader.addEventListener("load", function () {
            imgPreview.style.maxWidth = "100%";
            imgPreview.style.height = "auto";
            imgPreview.style.display = "block";
            placeHolder.style.display = "none";
            imgPreview.innerHTML = '<img src="' + this.result + '" />';
        });
    }
}

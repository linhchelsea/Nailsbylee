function viewAvatar(img) {
    var fileReader = new FileReader;
    fileReader.onload = function(img) {
        var avartarShow = document.getElementById("avartar-img-show");

        avartarShow.src = img.target.result
    }, fileReader.readAsDataURL(img.files[0])
}
function viewImg(img) {
    console.log(img);
    var fileReader = new FileReader;
    fileReader.onload = function(img) {
        console.log(img);
        var avartarShow = document.getElementById("indexImage-show");
        avartarShow.src = img.target.result
    }, fileReader.readAsDataURL(img.files[0]);

}
function viewImage(img) {
    var fileReader = new FileReader;
    fileReader.onload = function(img) {
        var avartarShow = document.getElementById("image-show");

        avartarShow.src = img.target.result
    }, fileReader.readAsDataURL(img.files[0])
}

function uploadPhoto() {
    var fakePath = $('#upload-file-selector').val();
    var arr_path = fakePath.split('/');
    var filename = arr_path[arr_path.length - 1];
    var filename = filename.split('.');
    var type = filename[filename.length - 1];
    if(type == 'jpg' || type == 'png' || type == 'jpeg' || type =='gif'){
        $('#form-upload-photo').submit();
    }else{
        alert('Tập tin không đúng định dạng ảnh!');
    }
}

function delImage(id){
    if(confirm("Bạn muốn xóa ảnh này?")){
        $.ajax({
            url: "/admin/delfurnitureimage",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: 'post',
            cache: false,
            data: {
                'id': id
            },
            success: function (data) {
                $('.feature_image').html('<input type=\"file\" name=\"upload\" id=\"upload\" value=\"upload\">');
            },
            error: function () {
                alert("error while delete image");
            }
        });
    }
}

function delPhongThuyImage(id){
    if(confirm("Bạn muốn xóa ảnh này?")){
        $.ajax({
            url: "/admin/delphongthuyimage",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: 'post',
            cache: false,
            data: {
                'id': id
            },
            success: function (data) {
                $('.feature_image').html('<input type=\"file\" name=\"upload\" id=\"upload\" value=\"upload\">');
            },
            error: function () {
                alert("error while delete image");
            }
        });
    }
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
function setCat() {
    var value = $("#parentcat :selected").val();
    if (value == 0) {
        $('#categoryform').html("<div class=\"col-sm-12\"><label for=\"category\">Chọn tiểu mục:</label><label for=\"category\" class=\"form-control\"><span style=\"color: #9f191f\">BẠN CHƯA CHỌN DANH MỤC</span></label></div><div class=\"clearfix\"></div>");
    } else {
        $.ajax({
            url: "/admin/setCategories",
            type: 'POST',
            cache: false,
            data: {
                'id_parent': value
            },
            success: function(data){
                $('#categoryform').html(data);
            },
            error: function (){
            }
        });
    }
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
function deleteImage(id){
    $.ajax({
        url: "/admin/deleteimage",
        type: 'post',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: {
            'idimage': id
        },
        success: function (data) {
            $('.picture-' + data).remove();
        },
        error: function () {
        }
    });
}
const fullToolbar = [
    [
      {
        font: []
      },
      {
        size: []
      }
    ],
    ['bold', 'italic', 'underline', 'strike'],
    [
      {
        color: []
      },
      {
        background: []
      }
    ],
    [
      {
        script: 'super'
      },
      {
        script: 'sub'
      }
    ],
    [
      {
        header: '1'
      },
      {
        header: '2'
      },
      'blockquote',
      'code-block'
    ],
    [
      {
        list: 'ordered'
      },
      {
        list: 'bullet'
      },
      {
        indent: '-1'
      },
      {
        indent: '+1'
      }
    ],
    [
      'direction',
      {
        align: []
      }
    ],
    ['link', 'image', 'video', 'formula'],
    ['clean']
  ];

var fullEditor_page
if ($('#txtContent').length) {
fullEditor_page = new Quill('#txtContent', {
bounds: '#txtContent',
placeholder: 'Type Something...',
modules: {
  formula: true,
  toolbar: fullToolbar,
},

theme: 'snow'
});
}

var content = {
    save_category(){
        $('.form-control').removeClass('is-invalid')
        if($('#txtCatname').val() == ''){
            $('#txtCatname').addClass('is-invalid')
            return ;
        }
        preload.show()
        var param = {
            cat_name: $('#txtCatname').val()
        }
        var jxr = $.post(api + 'content?stage=save_category', param, function(){}, 'json')
                   .always(function(snap){
                        console.log(snap);
                        if(snap.status == 'Success'){
                            window.location = 'app-category-list'
                        }else{
                            preload.hide()
                            Swal.fire({
                                icon: "error",
                                title: 'ขออภัย',
                                text: 'ไม่สามารถบันทึกได้',
                                confirmButtonClass: 'btn btn-danger',
                                confirmButtonText: "ลองใหม่"
                            })
                        }
                   })
        return ;
    },
    delete_category(cat_id){
        Swal.fire({
            title: 'ยืนยันการลบ',
            text: "หากลบแล้วจะไม่สามารถนำหมวดหมู่นี้กลับมาได้อีก",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ยืนยัน',
            cancelButtonText: 'ยกเลิก',
            confirmButtonClass: 'btn btn-danger mr-1',
            cancelButtonClass: 'btn btn-secondary',
            allowOutsideClick: false,
            buttonsStyling: false,
        }).then(function (result) {
            if (result.value) {
                preload.show()
                var param = {
                    cat_id: cat_id
                }
                var jxr = $.post(api + 'content?stage=delete_category', param, function(){}, 'json')
                        .always(function(snap){
                                console.log(snap);
                                if(snap.status == 'Success'){
                                    window.location.reload()
                                }else{
                                    preload.hide()
                                    Swal.fire({
                                        icon: "error",
                                        title: 'ขออภัย',
                                        text: 'ไม่สามารถดำเนินการได้',
                                        confirmButtonClass: 'btn btn-danger',
                                        confirmButtonText: "ลองใหม่"
                                    })
                                }
                        })
                return ;
            }
        })
    },
    save_page(){
        $check = 0;
        $('.form-control').removeClass('is-invalid')
        if($('#txtPosttype').val() == ''){
            Swal.fire({
                icon: "error",
                title: 'ขออภัย',
                text: 'กรุณาเลือกประเภทเนื้อหา',
                confirmButtonClass: 'btn btn-danger',
                confirmButtonText: "รับทราบ"
            })
            return ;
        }

        if($('#txtPosttype').val() == 'page'){
            if($('#txtTitle').val() == ''){
                $('#txtTitle').addClass('is-invalid')
                Swal.fire({
                    icon: "error",
                    title: 'ขออภัย',
                    text: 'กรุณากระบุข้อมูลในช่องที่มีเครื่องหมาย * ให้ครบถ้วน',
                    confirmButtonClass: 'btn btn-danger',
                    confirmButtonText: "รับทราบ"
                })
                return ;
            }

            // preload.show()

            $tage = ''
            if($('#txtTag').val() != ''){
                $tage = JSON.parse($('#txtTag').val())
            }

            var param = {
                title: $('#txtTitle').val(),
                content: fullEditor_page.root.innerHTML,
                menu_id: $("#txtMenu").val(),
                tags: $tage
            }

            console.log(param);
        }

        if($('#txtPosttype').val() == 'post'){
            
        }

        return ;
    }
}
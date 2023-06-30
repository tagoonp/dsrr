var user = {
    toggleRole(id, key){

        var param = {
            uid: id,
            param_key: key
        }

        preload.show()

        var xhr = $.post(api + 'user?stage=toggle_param', param, function(){}, 'json')
                   .always(function(snap){
                        if(snap.status == 'Success'){
                            preload.hide()
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

    },
    toggleCommitee(id, key){
        var param = {
            uid: id,
            param_key: key
        }

        preload.show()

        var xhr = $.post(api + 'user?stage=toggle_commitee', param, function(){}, 'json')
                   .always(function(snap){
                        if(snap.status == 'Success'){
                            preload.hide()
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
    }
}

$(function(){
    
})

function updateExtraSetup(id){
    $('#modalUpdateDp').modal('show')
    $('#txtUdbId').val(id)
    preload.show()
    var param = {
        udb_id: id
    }
    var jxr = $.post(api + 'user?stage=get_dp_info', param, function(){}, 'json')
               .always(function(snap){
                    preload.hide()
                    if(snap.status == 'Success'){
                        $('#txtUFname').val(snap.data.dp_fullname)
                        $('#txtUEmail').val(snap.data.dp_email)
                        $('#txtUPosition').val(snap.data.dp_position)
                        $('#txtUFigure').val(snap.data.dp_profile)
                    }else{
                        $('#modalUpdateDp').modal('hide')
                        Swal.fire({
                            icon: "error",
                            title: 'ขออภัย',
                            text: 'ไม่พบข้อมูล',
                            confirmButtonClass: 'btn btn-danger',
                            confirmButtonText: "ลองใหม่"
                        })
                    }
               })
}

function saveExtra(){
    $check = 0;
    $('.form-control').removeClass('is-invalid')
    if($('#txtFname').val() == ''){ $check++ ; $('#txtFname').addClass('is-invalid') }
    if($('#txtGroup').val() == ''){ $check++ ; $('#txtGroup').addClass('is-invalid') }

    if($check != 0){
        return ;
    }

    preload.show()
    var param = {
        udb_fullname: $('#txtFname').val(),
        udb_email: $('#txtEmail').val(),
        udb_position: $('#txtPosition').val(),
        udb_figure: $('#txtFigure').val(),
        udb_group: $('#txtGroup').val(),
    }
    var jxr = $.post(api + 'user?stage=save_dp_info', param, function(){}, 'json')
               .always(function(snap){
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
}

function updateExtra(){
    $('#modalUpdateDp').modal('hide')
    preload.show()
    var param = {
        udb_id: $('#txtUdbId').val(),
        udb_fullname: $('#txtUFname').val(),
        udb_email: $('#txtUEmail').val(),
        udb_position: $('#txtUPosition').val(),
        udb_figure: $('#txtUFigure').val(),
    }
    var jxr = $.post(api + 'user?stage=update_dp_info', param, function(){}, 'json')
               .always(function(snap){
                    preload.hide()
                    if(snap.status == 'Success'){
                        window.location.reload()
                    }else{
                        Swal.fire({
                            icon: "error",
                            title: 'ขออภัย',
                            text: 'ไม่สามารถดำเนินการได้',
                            confirmButtonClass: 'btn btn-danger',
                            confirmButtonText: "ลองใหม่"
                        })
                    }
               })
}

function deleteExtra(id){
    Swal.fire({
        title: 'ยืนยันการลบ',
        text: "หากลบแล้วจะไม่สามารถนำกลับมาได้อีก",
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
            var param = {
                udb_id: id
            }
            var jxr = $.post(api + 'user?stage=delete_dp_info', param, function(){}, 'json')
                       .always(function(snap){
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
        }
    })
}
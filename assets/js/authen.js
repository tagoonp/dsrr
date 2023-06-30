var authen = {
    signin(){
        console.log('Signing in');
        $c = 0;
        $('.form-control').removeClass('is-invalid')

        if($('#txtUsername').val() == ''){ $c++; $('#txtUsername').addClass('is-invalid')}
        if($('#txtPassword').val() == ''){ $c++; $('#txtPassword').addClass('is-invalid')}

        if($c != 0){
            Swal.fire({
                icon: "error",
                title: 'ขออภัย',
                text: 'กรุณากรอกข้อมูลให้ครบถ้วน',
                confirmButtonClass: 'btn btn-danger',
                confirmButtonText: "ลองใหม่"
            })
            return ;
        }

        var param = {
            username: $('#txtUsername').val(),
            password: $('#txtPassword').val()
        }

        console.log(param);
        preload.show()

        var xhr = $.post(api + 'authen?stage=signin', param, function(){}, 'json')
                   .always(function(snap){
                        console.log(snap);
                        if(snap.status == 'Success'){
                            window.location = './'
                        }else{
                            preload.hide()
                            Swal.fire({
                                icon: "error",
                                title: 'ขออภัย',
                                text: 'ไม่พบบัญชีผู้ใช้งานระบบ',
                                confirmButtonClass: 'btn btn-danger',
                                confirmButtonText: "ลองใหม่"
                            })
                        }
                   })

    },
    signup(){
        console.log('Signing up');
        $c = 0;
        $('.form-control').removeClass('is-invalid')
        if($('#txtFname').val() == ''){ $c++; $('#txtFname').addClass('is-invalid')}
        if($('#txtLname').val() == ''){ $c++; $('#txtLname').addClass('is-invalid')}
        if($('#txtEmail').val() == ''){ $c++; $('#txtEmail').addClass('is-invalid')}
        if($('#txtPassword1').val() == ''){ $c++; $('#txtPassword1').addClass('is-invalid')}
        if($('#txtPassword2').val() == ''){ $c++; $('#txtPassword2').addClass('is-invalid')}

        if($('#txtPassword1').val() != $('#txtPassword2').val()){ 
            $c++; $('#txtPassword2').addClass('is-invalid')
            Swal.fire({
                icon: "error",
                title: 'ขออภัย',
                text: 'รหัสผ่านที่กรอกไม่ตรงกัน',
                confirmButtonClass: 'btn btn-danger',
                confirmButtonText: "ลองใหม่"
            })
            return ;
        }
        
        if($c != 0){
            Swal.fire({
                icon: "error",
                title: 'ขออภัย',
                text: 'กรุณากรอกข้อมูลให้ครบถ้วน',
                confirmButtonClass: 'btn btn-danger',
                confirmButtonText: "ลองใหม่"
            })
            return ;
        }

        var param = {
            fname: $('#txtFname').val(),
            lname: $('#txtLname').val(),
            password: $('#txtPassword1').val(),
            email: $('#txtEmail').val()
        }

        console.log(param);
        preload.show()

        var xhr = $.post(api + 'authen?stage=signup', param, function(){}, 'json')
                   .always(function(snap){
                        console.log(snap);
                        preload.hide()
                        if(snap.status == 'Success'){
                            alert('ลงทะเบียนสำเร็จ กรุณารอการยืนยันการใช้งานจากผู้ดูแลระบบ');
                            window.location.reload();
                        }else{
                            alert('เกิดข้อผิดพลาด')
                        }
                   })
    }
}

$(function(){
    
})
var authen = {
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
            return ;
        }

        var param = {
            fname: $('#txtFname').val(),
            lname: $('#txtLname').val(),
            password: $('#txtPassword1').val(),
            email: $('#txtEmail').val()
        }

        console.log(param);
    }
}

$(function(){
    
})
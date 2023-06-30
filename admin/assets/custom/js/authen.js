var authen = {
    psupassport(){
        var param = {
            'redirect_uri' : api + 'php/auth',
            'responses' : 'uid,name,surname,studentId,email',
            'redirect_mode' : true
        };
        param.option = 'psupassport';
        popupLogin(param);
    },
    signout(){
        var param = {
            uid: $('#txtUid').val(), 
            sid: $('#txtSid').val(), 
            role: $('#txtRole').val()
        }
        var jxr = $.post(api + 'authen?stage=signout', param, function(){}, 'json')
        window.location = '../../'
    },
    switchrole(torole){
        var param = {
            uid: $('#txtUid').val(), 
            sid: $('#txtSid').val(), 
            role: torole
        }
        var jxr = $.post(api + 'authen?stage=switchrole', param, function(){}, 'json')
                   .always(function(snap){
                    if(snap.status == 'Success'){
                        window.location.reload()
                    }else{
                        alert('Error')
                    }
                   })
    }
}
$("#user_login_form").submit(function(e) {
    e.preventDefault();
    if ($(this).parsley().isValid()) {
        var base_url=$("#path").val();
        $.ajax({
            url:$(this).attr("action"),
            method:"POST",
            dataType: 'json',
            data:$(this).serialize(),
            success:function(json){
                if (json.status==200) {
                    triggerAlert(json.msg,'success');
                    window.location.replace(base_url+"dashboard");
                } else {
                    triggerAlert(json.msg,'error');
                }
            }
        })
    }
});

$("#register_user_form").submit(function(e) {
    e.preventDefault();
    var base_url=$("#path").val();
    if ($(this).parsley().isValid()) {
        $.ajax({
            url:$(this).attr("action"),
            method:"POST",
            dataType: 'json',
            data:$(this).serialize(),
            success:function(json){
                if (json.status==200) {
                    triggerAlert(json.msg,'success');
                    window.location.replace(base_url);
                } else {
                    triggerAlert(json.msg,'error');
                }
            }
        })
    }
});

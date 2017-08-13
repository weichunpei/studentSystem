//注册页面==========
$(function(){
    $("#inputname2").focus(function(){
        $("#inp2").html('');
    })
    $("#inputname2").blur(function(){
        //if($(this).val().length<6){
        //    $("#inp2").html('用户名不能少于5位').css('color','red');
        //}
        var code=$("#inputname2").val();
        $.ajax({
            url:'register.php',
            type:'get',
            data:{code:code},
            dataType:'text',
            success:function(data){
                if(data.flag==0){
                    $("#inp2").html('您输入的用户名不可用,请重新输入');
                }else{
                    $("#inp2").html('用户名可用')
                }
            }

        })
    });
})
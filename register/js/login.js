//注册页面==========
$(function(){
    $("#inputname2").focus(function(){
        $("#inp2").html('');
    })
    $("#inputname2").blur(function(){
        if($(this).val().length<2){
            $("#inp2").html('用户名不能少于2位').css('color','red');
        }else{
        var code=$("#inputname2").val();
        $.ajax({
            url:'register.php',
            type:'get',
            data:{username:code},
            dataType:'text',
            success:function(data){
                if(data==1){
                    $("#inp2").html('请重新输入').css('color','red');
                }else if(data==0){
                    $("#inp2").html('用户名可用').css('color','green');
                }
            }

        })
        }
    });
    //密码输入是否一致
     $("#inputPassword3").focus(function(){
        $("#pwInfo").html('');
     })
    $("#inputPassword3").blur(function(){
        console.log(1);
        if($(this).val()!=$("#inputPassword2").val()){
            console.log(2);
            $("#pwInfo").html('密码不一致').css('color','red')
        }
    })

    // $("#submit_btn").click(function(){
    //     var codeName=$("#inputname1").val();
    //     var codePw=$("#inputPassword1").val();
    //     $.ajax({
    //         url:'login.php',
    //         type:'get',
    //         data:{username:codeName,password:codePw},
    //         dataType:'text',
    //         success:function(dat){
    //             if(dat==1){
    //                 $('#reMes').html("登录成功");
    //                 location.href='../../student/layout-index.php';
    //             }else if (dat==0) {
    //                 $('#reMes').html("登录失败");
    //             }
    //         }

    //     })

    // })
})
$(function(){

  var isFault = new Array();
      isFault['username'] = true;
      isFault['password'] = true;
      isFault['password2'] = true;
  var allowSubmit = false;
  function checkFinish(){
    if(isFault['username'] || isFault['password']  || isFault['password2']){

    }else{
      allowSubmit = true;
      $("#registerbtn").css("background-color","#B7FFFC");
    }
  }
  $("img[id='code']").click(function(){

    $code = $("img[id='code']");
    var $index =  $code.attr("src").lastIndexOf("/");
    $src = $code.attr("src").substring(0, $index);
      $code.attr("src",$src+"/code?"+Math.random());
	});

  $("input[name='username']").blur(function() {
    var $username = $("input[name='username']").val();

    $.get('/thinkmessage/index.php/Register/checkName', {'username': $username}, function (data) {
      if (data == 1) {
        $("label[for='username']").css("border", "red 1px solid");
        $("label[for='username']").html(" 该用户名已经存在:(");
        isFault["username"] = true;

      } else {
        //var usernamePattern = /^[\u4e00-\u9fa5]{3,8}$/;
        //if(!usernamePattern.test($username)){
        //  $("label[for='username']").css("border", "red 1px solid");
        //  $("label[for='username']").html("中文字符，长度3－8个:(");
        //}else{
        //  $("label[for='username']").css("border", "green 1px solid");
        //  $("label[for='username']").html(" 该用户名可以使用:)");
        //  isFault["username"] = false;
        //  checkFinish();
        //}
        if($username.length >= 3 &&$username.length <= 8){
            $("label[for='username']").css("border", "green 1px solid");
            $("label[for='username']").html(" 该用户名可以使用:)");
            isFault["username"] = false;
            checkFinish();

        }else{
            $("label[for='username']").css("border", "red 1px solid");
            $("label[for='username']").html("字符长度3－8个:(");
        }
      }
    });
  } );
    $("input[name='password']").blur(function(){
        var $password = $("input[name='password']").val();
      var passwordPattern = /^\w{3,8}$/;
        //alert ("PASSWORD");
      if(!passwordPattern.test($password)){
        $("label[for='password']").css("border","red 1px solid");
        $("label[for='password']").html("字符长度3－8个");
        isFault["password"] = true;
      }else{
        $("label[for='password']").css("border","green 1px solid");
        $("label[for='password']").html("密码格式填写正确");
        if($("input[name= 'password']").val() == $("input[name='password2']").val()){
          isFault["password2"] = false;
          $("label[for='password']").css("border","green 1px solid");
          $("label[for='password2']").css("border","green 1px solid");
          $("label[for='password']").html("两次密码填写一致");
          $("label[for='password2']").html("密码格式填写正确");
          checkFinish();
        } else if($("input[name='password2']").val() != ""){
          $("label[for='password2']").css("border","red 1px solid");
          $("label[for='password2']").html("两次密码填写不一致");
          isFault["password2"] = true;
        }

        isFault["password"] = false;
        checkFinish();
      }
    });
    $("input[name='password2']").blur(function () {
      if($("input[name='password2']").val().length < 3){
        $("label[for='password2']").css("border","red 1px solid");
        $("label[for='password2']").html("密码长度不正确");
        return;
      }
        if($("input[name= 'password']").val() == $("input[name='password2']").val()){
          isFault["password2"] = false;
          $("label[for='password2']").css("border","green 1px solid");
          $("label[for='password2']").html("两次密码填写一致");
          checkFinish();
        } else{
          $("label[for='password2']").css("border","red 1px solid");
          $("label[for='password2']").html("两次密码填写不一致");
          isFault["password2"] = true;
        }
    });
  $("#registerbtn").click(function(){

    //if(allowSubmit){
    if(true){
      alert("success");
      $("#regform").submit();

    }else{
      alert("isfaultdffe");
    }
  });

  //   $("table").find('tr').each(function() {
  //  $(this).find("td").eq(2).css('background-color','green');
  $("#resetbtn").click(function(){
    window.location = "/thinkmessage/index.php/Register/reg";
  });
  });


$(function(){

  $("img[id='code']").click(function(){

    $code = $("img[id='code']");
    var $index =  $code.attr("src").lastIndexOf("/");
    $src = $code.attr("src").substring(0, $index);
      $code.attr("src",$src+"/code?"+Math.random());
	});
  $("#login").click(function(){
    $("form").submit();
  });
  //   $("table").find('tr').each(function() {
  //  $(this).find("td").eq(2).css('background-color','green');
  $("#register").click(function(){
      window.location = "../../index.php/Register/reg";
  });
});

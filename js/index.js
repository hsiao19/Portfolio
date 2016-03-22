$(document).ready(function(){

  $("#select_all").click(function(){
    $(".item").hide();
    $(".item").show();
  });

  $("#select_product").click(function(){
    $(".item").hide();
    $(".product").show();
  });

  $("#select_ui").click(function(){
    $(".item").hide();
    $(".ui").show();
  });

  $("#select_design").click(function(){
    $(".item").hide();
    $(".design").show();
  });

  $("#select_digital").click(function(){
    $(".item").hide();
    $(".digital").show();
  });

  $("#select_draw").click(function(){
    $(".item").hide();
    $(".draw").show();
  });

  $("#select_code").click(function(){
    $(".item").hide();
    $(".code").show();
  });

});
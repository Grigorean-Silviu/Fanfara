$(document).ready(function (){

    $("#ajaxform").submit(function (event){
      var postdata = $("#ajaxform").serialize();
        return false;
    })

});
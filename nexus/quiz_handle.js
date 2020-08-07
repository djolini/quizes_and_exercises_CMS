// AJAX HANDLES THE MESAGING PART ON THE FRONT
$(document).ready(function() {
  $(".myForm").submit(function(e) {
    $("#message").empty();
      e.preventDefault();

      $.ajax( {
        url: 'quiz_handle.php',
        type : 'POST',
        data: $(".myForm").serialize(),

        success: function(data){
          console.log(data);
          var obj = JSON.parse(data);
          if(obj.status==true) {
            $("#message").append("<div class='alert alert-success'><b>" + obj.message+"</b></div>");
          } else {
            $("#message").append("<div class='alert alert-danger'><b>" + obj.message+"</b></div>");
          }
        }
      })
      })

})

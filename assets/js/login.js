$(document).ready(function (){
    
    $("#login_form").submit(function (e) {
        e.preventDefault();
        
        var form_data = $(this).serialize();
        
        $.post({
           url: "controller/login.php",
           data: form_data,
           success: function(data){
               //alert(data);
               if(data == "emailError"){
                   $('#emailError').html("Incorrect Email/Password");
               }else{
                   window.location = "index.php";
               }
           }
        });
        
    });
    
});
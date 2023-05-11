$(document).ready(function(){
    $("#token").hide();
    $("#send").click(function(){
        
// data
        $.ajax({
            url: "cadastrar.php",
            type: "POST",
            dataType: "html",

            data:{
                name: $("#name").val(),
                email: $("#email").val(),
                pass: $("#pass").val(),
                token: $("#token").val()
            },
            success: (resposta)=>{
                $("#return").html(resposta);
            }

        }).fail(function(jqXHR, textStatus ) {
            console.log("Request failed: " + textStatus);

        }).always(function() {
            console.log("");
        }); 

  

    });

// sending email API
    $("#enterKey").click(function(){

        Email.send({
            Host : "your.host",
            Username : "your.username",
            Password : "your.pass",
            To : $("#sendEmail").val(),
            From : "your.email",
            Subject : "Testando api",
            Body : "This is your token " + $("#sendToken").val()
        }).then(
          message => window.location.href="code.php"
        );  



    });
    
  
// comparing to
    $("#compare").click(function(){
        $.ajax({
            url: "confirmar.php",
            type: "POST",
            dataType: "html",

            data:{
                key: $("#key").val()
            },
            success: (resposta)=>{
                $(".panel").html(resposta);
            }

        }).fail(function(jqXHR, textStatus ) {
            console.log("Request failed: " + textStatus);

        }).always(function() {
            console.log("");
        }); 
    });

    $("#reSend").click(function(){
        $.ajax({
            url: "update.php",
            type: "POST",
            dataType: "html",

            data:{
                newKey: $("#newKey").val()
            },
            success: (resposta)=>{
                $(".panel").html(resposta);
            }

        }).fail(function(jqXHR, textStatus ) {
            console.log("Request failed: " + textStatus);

        }).always(function() {
            console.log("");
        }); 
    });

});
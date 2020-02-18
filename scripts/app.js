$(document).ready(function(){

     $("#signup").click(function(){
        const name = $("#name").val();
        const email = $("#email").val();
        const password = $("#password").val();
        if(name.length == ""){
            $(".name").addClass("is-invalid");
        } else {
            $(".name").removeClass("is-invalid");
        }

        if(email.length == ""){
            $(".email").addClass("is-invalid");
        } else {
            $(".email").removeClass("is-invalid");
        }

        if(password.length == ""){
            $(".password").addClass("is-invalid");
        } else {
            $(".password").removeClass("is-invalid");
        }

        if(name.length != "" && email.length != "" && password.length != ""){
            $.ajax({
              type: "POST",
              url : "signup.php",
              data : {"name": name, "email": email, 'password': password},
              dataType: 'JSON',
              success : function(feedback){
                  if(feedback.status === "error"){
                      $(".email").addClass("is-invalid");
                      $(".emailError").html(feedback.message);
                  } else if(feedback.status === "success"){
                       window.location = "../php/login.php";
                  }
              }
            })
        }
    })


     $("#login").click(function(){
        const email = $("#email").val();
        const password = $("#password").val();
        if(email.length == ""){
            $(".email").addClass("is-invalid");
        } else {
            $(".email").removeClass("is-invalid");
        }

        if(password.length == ""){
            $(".password").addClass("is-invalid");
        } else {
            $(".password").removeClass("is-invalid");
        }

        if(email.length != "" && password.length != ""){
            $.ajax({
                type : 'POST',
                url  : 'userLogin.php',
                data : {'email': email, 'password': password},
                dataType : 'JSON',
                success : function(feedback){
                    if(feedback.status === "success"){
                        console.log(feedback)
                        window.location = "../php/profile.php";
                    } else if(feedback.status === "passwordError"){
                        $(".password").addClass("is-invalid");
                        $(".passwordError").html(feedback.message);
                        $(".email").removeClass("is-invalid");
                        $(".emailError").html("");
                    } else if(feedback.status === "emailError"){
                        $(".password").removeClass("is-invalid");
                        $(".passwordError").html("");
                        $(".email").addClass("is-invalid");
                        $(".emailError").html(feedback.message);
                    }
                }
            })
        }
    })


     $("#update").click(function(){
        const name = $("#name").val();
        const dob = $("#DOB").val();
        const phone = $("#phone").val();
        const address = $("#address").val();
        if(1){
            $.ajax({
              type: "POST",
              url : "updateUser.php",
              data : {"name": name, "DOB": dob, "phone": phone, "address": address},
              dataType: 'JSON',
              success : function(feedback){
                  if(feedback.status === "updated"){
                       window.location = "../php/profile.php";
                  }
              }
            })
        }
    })


})
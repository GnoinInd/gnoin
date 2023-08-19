 

$(function() {

  function send(form){
     $.post($(form).attr('action'),
            $("form#my_form").serialize(),
            function(json){              
              $("input[type=text],input[type=email], textarea").val("");
              $("#exampleModal").modal();
                /*your success code*/
            }, "json");   
  }

    // Setup form validation on the #register-form element
    $("#my_form").validate({

        // Specify the validation rules
        rules: {
            name: "required",
            message: "required",
            phone: "required",
            budget: "required",
            
            subject:{
                required: true,
                
            },  
            email: {
                required: true,
                email: true
            },
            project_brief: {
                required: true,
                minlength: 5
            },
            subject: "required"
        },

        // Specify the validation error messages
        messages: {
            firstname: "Please enter your first name",
            lastname: "Please enter your last name",

            project_brief: {
                required: "Please provide a project_brief",
                minlength: "Your password must be at least 5 characters long"
            },
            email: "Please enter a valid email address",
            agree: "Please accept our policy"
        },

        submitHandler: function(form) {
          //  form.submit();
          send(form)
        }
    });

  });




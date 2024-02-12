

$(function () {

    function send(form) {
        $.post($(form).attr('action'),
            $("form#my_form").serialize(),
            function (json) {
                $("input[type=text],input[type=email], textarea").val("");
                $("#exampleModal").modal();
                /*your success code*/
            }, "json");
    }

    // Setup form validation on the #register-form element
    // $("#my_form").validate({

    //     // Specify the validation rules
    //     rules: {
    //         name: "required",
    //         message: "required",
    //         phone: "required",
    //         budget: "required",

    //         subject:{
    //             required: true,

    //         },  
    //         email: {
    //             required: true,
    //             email: true
    //         },
    //         project_brief: {
    //             required: true,
    //             minlength: 5
    //         },
    //         subject: "required"
    //     },

    //     // Specify the validation error messages
    //     messages: {
    //         firstname: "Please enter your first name",
    //         lastname: "Please enter your last name",

    //         project_brief: {
    //             required: "Please provide a project_brief",
    //             minlength: "Your password must be at least 5 characters long"
    //         },
    //         email: "Please enter a valid email address",
    //         agree: "Please accept our policy"
    //     },

    //     submitHandler: function(form) {
    //       //  form.submit();
    //       send(form)
    //     }
    // });
})
$(document).ready(function () {
    $.validator.addMethod("stringCheck", function(value) {
        return typeof value === 'string';
    }, "Please enter string value");
    $("#JobForm").validate({
        rules: {
            FirstName: {
                required: true,
                stringCheck: true
            },
            MIddleName: {
                required: true,
                stringCheck: true
            },
            LastName: {
                required: true,
                stringCheck: true
            },
            CurrentAddress: {
                required: true,
                stringCheck: true
            },
            HIghestQualification: {
                required: true,
                stringCheck: true
            },
            PassingYear: "required",
            Dob: "required",
            EmployeeIn: {
                required: true,
                stringCheck: true
            },
            Experience: {
                required: true,
                stringCheck: true
            },
            JobTitle: {
                required: true,
                stringCheck: true
            },
            Language: {
                required: true,
                stringCheck: true
            },
            ImmediateJoiner: {
                required: true,
                stringCheck: true
            },
            uploadResume: "required",
            uploadPanCard: "required",
            uploadAadhar: "required",
            NonFreshersExperience: {
                required: "#FresherChoice2:checked",
                stringCheck: true
            },
            exampleRadios: {
                required: "#FresherChoice2:checked",
                stringCheck: true
            },
            TotalExperience: {
                required: "#FresherChoice2:checked",
                stringCheck: true
            },
            CurrentCompany: {
                required: "#FresherChoice2:checked",
            },
            CurrentDesignation: {
                required: "#FresherChoice2:checked",
                stringCheck: true
            },
            currency: {
                required: "#FresherChoice2:checked",
                stringCheck: true
            },
            Price: {
                required: "#FresherChoice2:checked",
                stringCheck: true
            },
            NoticePeriod: {
                required: "#FresherChoice2:checked",
                
            },
        }


    });
    $(document).ready(function () {
    var fresherChoiceRadio = $("input[name='FresherChoice']");
    var hiddenSection = $("#NonFresher");

    // Set the "Yes" option as checked by default
    $("#FresherChoice1").prop("checked", true);

    // Trigger the change event to handle the initial state
    fresherChoiceRadio.trigger("change");

    fresherChoiceRadio.change(function () {
        var selectedValue = $("input[name='FresherChoice']:checked").val();

        if (selectedValue === "yes") {
            hiddenSection.find("input, select").prop("required", false);
            hiddenSection.addClass("hide");
        } else {
            hiddenSection.find("input, select").prop("required", true);
            hiddenSection.removeClass("hide");
        }
    });
});


});

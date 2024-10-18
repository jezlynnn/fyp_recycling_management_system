$(function () {
    $("form[name='login']").validate({
        rules: {
            email: {
                required: true,
                email: true,
            },
            password: {
                required: true,
            },
        },
        messages: {
            email: "Please enter a valid email address",

            password: {
                required: "Please enter password",
            },
        },
        submitHandler: function (form) {
            form.submit();
        },
    });
});

$(function () {
    $("form[name='registration']").validate({
        rules: {
            email: {
                required: true,
                email: true,
            },
            password: {
                required: true,
                minlength: 5,
            },
            fullname: {
                required: true,
                minlength: 2,
            },
            contact: {
                required: true,
                digits: true,
                minlength: 10,
                maxlength: 15,
            },
        },
        messages: {
            email: "Please enter a valid email address",
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long",
            },
            fullname: {
                required: "Please enter your full name",
                minlength: "Full name must be at least 2 characters long",
            },
            contact: {
                required: "Please provide a contact number",
                digits: "Only numbers are allowed for the contact number",
                minlength: "Your contact number must be at least 10 digits",
                maxlength: "Your contact number can't exceed 15 digits",
            },
        },
        submitHandler: function (form) {
            form.submit();
        },
    });
});

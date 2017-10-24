$( document ).ready( function () {
    $( ".userForm" ).validate( {
        rules: {
            name: {
                required: true,
                minlength: 2,
                maxlength: 32,
            },
            email: {
                required: true,
                minlength: 7,
                maxlength: 200,
            },
			password:{
            	required: true,
				minlenght: 6,
				maxlenght:32
			},
            password_confirmation:{
            	required: true,
				minlenght: 6,
				maxlenght:32
			},
			fullname: {
            	required: true,
				minlength: 2,
				maxlenght: 100
			}
        },
        messages: {
            name: {
                required: "Please enter username",
                minlength: "Please enter at least 2 characters.",
                maxlength: "Please enter no more than 32 characters.",
            },
            email: {
                required: "Please enter email",
                minlength: "Please enter at least 7 characters.",
                maxlength: "Please enter no more than 200 characters.",
            },
            password:{
                required: "Please enter password",
                minlength: "Please enter at least 6 characters.",
                maxlength: "Please enter no more than 32 characters.",
            },
            password_confirmation:{
                required: "Please enter password confirmation",
                minlength: "Please enter at least 6 characters.",
                maxlength: "Please enter no more than 32 characters.",
            },
            fullname: {
                required: "Please enter fullname",
                minlength: "Please enter at least 2 characters.",
                maxlength: "Please enter no more than 100 characters.",
            }
        }
    });
});
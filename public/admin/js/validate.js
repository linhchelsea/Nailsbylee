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
			},
            level: {
                required: true,
                min : 0,
                max : 1
            }
        }
    });

    $( ".userUpdateForm" ).validate( {
        rules: {
            fullname: {
                required: true,
                minlength: 2,
                maxlenght: 100
            }
        }
    });

    $( ".service-detailForm" ).validate( {
        rules: {
            name: {
                required: true,
                minlength: 2,
                maxlength: 32,
            },
            price: {
                required: true,
                minlength: 1,
                maxlength: 20,
            },
            time:{
                required: true,
                minlenght: 2,
            },
            description:{
                required: true,
                minlenght: 6,
            }
        }
    });


    $( ".serviceForm" ).validate( {
        rules: {
            name: {
                required: true,
                minlength: 6,
                maxlength: 32,
            },
            preview: {
                required: true,
                minlength: 6,
                maxlength: 200,
            },
            description:{
                required: true,
                minlenght: 6,
            }
        }
    });

    $( ".polishBrandForm" ).validate( {
        rules: {
            name: {
                required: true,
                minlength: 6,
                maxlength: 32,
            },
            price: {
                required: true,
                minlength: 1,
                maxlength: 20,
            },
            description:{
                required: true,
                minlenght: 6,
            }
        }
    });
    $( ".informationForm" ).validate( {
        rules: {
            name: {
                required: true,
                minlength: 6,
                maxlength: 32,
            },
            email: {
                required: true,
                minlength: 10,
                maxlength: 200,
            },
            phone: {
                required: true,
                minlength: 3,
                maxlength: 20,
            },
            facebook: {
                required: true,
                minlength: 20,
                maxlength: 300,
            },
            twitter: {
                required: true,
                minlength: 20,
                maxlength: 300,
            },
            instagram: {
                required: true,
                minlength: 20,
                maxlength: 300,
            },
            address:{
                required: true,
                minlenght: 6,
            }
        }
    });

    $( ".reviewForm" ).validate( {
        rules: {
            fullname: {
                required: true,
                minlength: 2,
                maxlenght: 100
            },
            reviewContent:{
                required: true,
                minlenght: 6,
            },
        }
    });
    $( ".galleryForm" ).validate( {
        rules: {
            title: {
                required: true,
                minlength: 2,
                maxlenght: 200
            }
        }
    });
    $( ".giftCardForm" ).validate( {
        rules: {
            title: {
                required: true,
                minlength: 2,
                maxlenght: 200
            }
        }
    });
    $( ".homeImageForm" ).validate( {
        rules: {
            title: {
                required: true,
                minlength: 2,
                maxlenght: 200
            }
        }
    });
});
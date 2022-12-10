"use strict";

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

// Class Definition
var KTLogin = function() {
    var _login;

    var _showForm = function(form) {
        var cls = 'login-' + form + '-on';
        var form = 'kt_login_' + form + '_form';

        _login.removeClass('login-forgot-on');
        _login.removeClass('login-signin-on');
        _login.removeClass('login-signup-on');

        _login.addClass(cls);

        KTUtil.animateClass(KTUtil.getById(form), 'animate__animated animate__backInUp');
    }

    var _handleSignInForm = function() {
        var validation;
		const form = document.getElementById('kt_login_signin_form');
        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validation = FormValidation.formValidation(
			KTUtil.getById('kt_login_signin_form'),
			{
				data: {
					type: 'remote',
					source: HOST_URL + 'data-login'
				},
				fields: {
					email: {
						validators: {
							notEmpty: {
								message: 'Email is required'
							},
							callback: {
								message: 'Email address is not found',
								callback: function (input) {
									const value = input.value;
									if (value === '') {
										return true;
									}
									return (
										FormValidation.validators.emailAddress().validate({
											value: value,
										}).valid &&
										FormValidation.validators.regexp().validate({
											value: value,
											options: {
												regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
											},
										}).valid
									);
								},
							},
						}
					},
					password: {
						validators: {
							notEmpty: {
								message: 'Password is required'
							},
							stringLength: {
								min: 8,
								message: 'Password must minimum 8'
							}
						}
					}
				},
				plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    submitButton: new FormValidation.plugins.SubmitButton(),
                    //defaultSubmit: new FormValidation.plugins.DefaultSubmit(), // Uncomment this line to enable normal button submit after form validation
					bootstrap: new FormValidation.plugins.Bootstrap()
				}
			}
		);

        $('#kt_login_signin_submit').on('click', function (e) {
            e.preventDefault();
			var formData = {
				email: $("#email").val(),
				password: $("#password").val(),
			}		
            validation.validate().then(function(status) {
		        if(status == 'Valid'){
					$.ajax({
						url: "post-login",
						type: "post",
						data: formData,
						dataType: 'json',
						success: function(response){
							if(response.success){
								window.location.href = "/"
							}else if(response.status){
								// alert('berhasil')
								window.location.href = "/admin"
							}
						},
						error: function (){
							swal.fire({
								text: "Email or password is wrong, please check again.",
								icon: "error",
								buttonsStyling: false,
								confirmButtonText: "Oke!",
								customClass: {
									confirmButton: "btn font-weight-bold btn-light-primary"
								}
							}).then(function() {
								KTUtil.scrollTop();
							});
						}
					});
				} else {
					swal.fire({
		                text: "Data is invalid, please check again.",
		                icon: "error",
		                buttonsStyling: false,
		                confirmButtonText: "Oke!",
                        customClass: {
    						confirmButton: "btn font-weight-bold btn-light-primary"
    					}
		            }).then(function() {
						KTUtil.scrollTop();
					});
				}
		    });
        });

        // Handle forgot button
        $('#kt_login_forgot').on('click', function (e) {
            e.preventDefault();
            _showForm('forgot');
        });

        // Handle signup
        $('#kt_login_signup').on('click', function (e) {
            e.preventDefault();
            _showForm('signup');
        });
    }

    var _handleSignUpForm = function(e) {
        var validation;
        var form = KTUtil.getById('kt_login_signup_form');

        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validation = FormValidation.formValidation(
			form,
			{
				fields: {
					name: {
						validators: {
							notEmpty: {
								message: 'Username is required'
							}
						}
					},
					email: {
                        validators: {
							notEmpty: {
								message: 'Email address is required'
							},
							callback: {
                                    message: 'Email address not found',
                                    callback: function (input) {
                                        const value = input.value;
                                        if (value === '') {
                                            return true;
                                        }
                                        return (
                                            FormValidation.validators.emailAddress().validate({
                                                value: value,
                                            }).valid &&
                                            FormValidation.validators.regexp().validate({
                                                value: value,
                                                options: {
                                                    regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
                                                },
                                            }).valid
                                        );
                                    },
                                },
						}
					},
                    password: {
                        validators: {
                            notEmpty: {
                                message: 'The password is required'
                            },
							stringLength: {
								min: 8,
								message: 'Password must have 8'
							}
                        }
                    },
                    cpassword: {
                        validators: {
                            notEmpty: {
                                message: 'The password confirmation is required'
                            },
                            identical: {
                                compare: function() {
                                    return form.querySelector('[name="password"]').value;
                                },
                                message: 'Confirm password not the same'
                            }
                        }
                    },
                    agree: {
                        validators: {
                            notEmpty: {
                                message: 'You must accept the terms and conditions'
                            }
                        }
                    },
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					bootstrap: new FormValidation.plugins.Bootstrap()
				}
			}
		);

        $('#kt_login_signup_submit').on('click', function (e) {
            e.preventDefault();
			var formData = {
				name: $("#name").val(),
				email: $("#email_register").val(),
				password: $("#password_register").val(),
			}		
            validation.validate().then(function(status) {
		        if (status == 'Valid') {
                    $.ajax({
						url: "register",
						type: "post",
						data: formData,
						dataType: 'json',
						success: function(data){
							swal.fire({
								text: "Register success, please wait until you redirect login.",
								icon: "success",
								buttonsStyling: false,
								timer: 2000,
								confirmButtonText: "Ok, got it!",
								customClass: {
									confirmButton: "btn font-weight-bold btn-light-primary"
								}
							})
							location.reload();
						},
						error: function(data){
							swal.fire({
								text: "Email address is duplicate, please change.",
								icon: "error",
								buttonsStyling: false,
								confirmButtonText: "Oke!",
								customClass: {
									confirmButton: "btn font-weight-bold btn-light-primary"
								}
							}).then(function() {
								KTUtil.scrollTop();
							});
						}
					});
				} else {
					swal.fire({
		                text: "Data is invalid, please check again.",
		                icon: "error",
		                buttonsStyling: false,
		                confirmButtonText: "Oke!",
                        customClass: {
    						confirmButton: "btn font-weight-bold btn-light-primary"
    					}
		            }).then(function() {
						KTUtil.scrollTop();
					});
				}
		    });
        });

        // Handle cancel button
        $('#kt_login_signup_cancel').on('click', function (e) {
            e.preventDefault();

            _showForm('signin');
        });
    }

    var _handleForgotForm = function(e) {
        var validation;

        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validation = FormValidation.formValidation(
			KTUtil.getById('kt_login_forgot_form'),
			{
				fields: {
					email: {
						validators: {
							notEmpty: {
								message: 'Email address is required'
							},
                            callback: {
								message: 'Alamat email tidak terdaftar dimanapun',
								callback: function (input) {
									const value = input.value;
									if (value === '') {
										return true;
									}
									return (
										FormValidation.validators.emailAddress().validate({
											value: value,
										}).valid &&
										FormValidation.validators.regexp().validate({
											value: value,
											options: {
												regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
											},
										}).valid
									);
								},
							},
						}
					}
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					bootstrap: new FormValidation.plugins.Bootstrap()
				}
			}
		);

        // Handle submit button
        $('#kt_login_forgot_submit').on('click', function (e) {
            e.preventDefault();
			var formData = {
				email: $('#email_lupa').val(),
				token: $('#token').val()
			}
            validation.validate().then(function(status) {
		        if (status == 'Valid') {
                    $.ajax({
						url: "lupa-password",
						type: "post",
						data: formData,
						dataType: 'json',
						success: function(response){
							swal.fire({
								text: "Token telah dikirimkan ke alamat email.",
								icon: "success",
								buttonsStyling: false,
								timer: 2000,
								confirmButtonText: "Ok, got it!",
								customClass: {
									confirmButton: "btn font-weight-bold btn-light-primary"
								}
							})
							window.location.href = "masuk-token"
						},
						error: function(){
							swal.fire({
								text: "Alamat email tidak ditemukan, silahkan ganti alamat email.",
								icon: "error",
								buttonsStyling: false,
								confirmButtonText: "Oke!",
								customClass: {
									confirmButton: "btn font-weight-bold btn-light-primary"
								}
							}).then(function() {
								KTUtil.scrollTop();
							});
						}
					});
				} else {
					swal.fire({
		                text: "Sorry, looks like there are some errors detected, please try again.",
		                icon: "error",
		                buttonsStyling: false,
		                confirmButtonText: "Ok, got it!",
                        customClass: {
    						confirmButton: "btn font-weight-bold btn-light-primary"
    					}
		            }).then(function() {
						KTUtil.scrollTop();
					});
				}
		    });
        });

        // Handle cancel button
        $('#kt_login_forgot_cancel').on('click', function (e) {
            e.preventDefault();

            _showForm('signin');
        });
    }

    // Public Functions
    return {
        // public functions
        init: function() {
            _login = $('#kt_login');

            _handleSignInForm();
            _handleSignUpForm();
            _handleForgotForm();
        }
    };
}();

// Class Initialization
jQuery(document).ready(function() {
    KTLogin.init();
});

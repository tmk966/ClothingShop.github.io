$(document).ready(function () {
    $('#form-dk').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {

            sdt: {
                validators: {
                    notEmpty: {
                        message: 'Vui lòng nhập số điện thoại!'
                    },
                    stringLength: {
                        min: 9,
                        max: 12,
                        message: 'Số điện thoại phải có ít nhất 9 số và tối đa 12 số'
                    },
                    numeric: {
                        message: 'Trường phải là số'
                    },
                }
            },

            email: {
                validators: {

                    notEmpty: {
                        message: 'Vui lòng nhập Email'
                    },
                    emailAddress: {
                        message: 'Vui lòng nhập đúng định dạng email'
                    },
                    stringLength: {

                        max: 30,
                        message: 'Email có tối đa 30 ký tự!'
                    },


                }
            },
            password: {
                validators: {

                    notEmpty: {
                        message: 'Vui lòng nhập mật khẩu'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'Độ dài mật khẩu ít nhất 6 ký tự và tối đa 30 ký tự!'
                    },
                }
            },
            confirmPassword: {
                validators: {
                    notEmpty: {
                        message: 'Không thể để trống'
                    },
                    identical: {
                        field: 'password',
                        message: 'Mật khẩu xác nhận không chính xác'
                    }
                }
            },
            name: {
                validators: {

                    notEmpty: {
                        message: 'Vui lòng nhập Họ và Tên'
                    },
                    stringLength: {
                        min: 5,
                        max: 30,
                        message: 'Họ và tên ít nhất 5 ký tự và tối đa 30 ký tự!'
                    },
                }
            }
        }
    })
        .on('success.form.bv', function (e) {

            $('#form-dk').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function (result) {
                console.log(result);
            }, 'json');
        });
});
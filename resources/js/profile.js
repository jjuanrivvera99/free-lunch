"use strict";

// Class Definition
let KTProfile = function () {

    let handleProfileFormSubmit = function () {
        $('#profileSubmitBtn').click(function (e) {
            e.preventDefault();
            var btn = $(this);
            var form = $(this).closest('form');
            var id = $('#user_id').val();

            form.validate({
                rules: {
                    name: {
                        required: true
                    },
                    last_name: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    phone: {
                        required: true
                    },
                    photo: {
                        //required: true,
                        accept: "image/jpeg, image/pjpeg, image/png"
                    },
                    location: {
                        required: true
                    }
                }
            });

            if (!form.valid()) {
                return;
            }

            form.submit();
            /*form.ajaxSubmit({
                url: `/users/${id}/update`,
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response, status, xhr, $form) {
                    toastr['success']('Your profile has been updated successfully');
                },
                error: function (response, status, xhr, $form) {
                    toastr['error']('Yo have errors');
                }
            });*/
        });
    }

    // Public Functions
    return {
        // public functions
        init: function () {
            handleProfileFormSubmit();
        }
    };
}();

// Class Initialization
jQuery(document).ready(function () {
    KTProfile.init();
});

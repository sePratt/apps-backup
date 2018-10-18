jQuery(document).ready(function ($) {


    $('.navmenu-toggler-open').on("click", function () {
        $('.hfeed.home.blog').addClass("noScroll");
    })

    $('.navmenu-toggler-close').on("click", function () {
        $('.hfeed.home.blog').removeClass("noScroll");
    })

    $('#appSubmit').on("click", function (event) {
        event.preventDefault();


        var firstName = $('#appFirstName').val();
        var lastName = $('#appLastName').val();
        var phone = $('#appPhone').val();
        var email = $('#appEmail').val();

        var valid = preSubmitValidate(firstName, lastName, phone, email);
        
        if (!valid) {
            $('.error-missing-fields').removeClass('d-none');
            setTimeout(function(){$('.error-missing-fields').addClass('d-none')},3000);
        }
        else{
            var jason = { firstName: firstName, lastName: lastName, phone: phone, email: email };

            var settings = {
                "async": true,
                "crossDomain": true,
                "url": "https://xifwcohci3.execute-api.us-east-2.amazonaws.com/testing/apply",
                "method": "POST",
                "dataType": "json",
                "processData": false,
                "contentType": "application/json",
                "mimeType": "multipart/form-data",
                "data": JSON.stringify(jason),
                error: function (xhr, status) {
                    console.log("ERROR: ")
                    console.log(xhr)
                    console.log(status)

                    if (xhr.responseJSON.hasOwnProperty('code') && xhr.responseJSON.code === 2) {
                        $('.error-missing-fields').removeClass('d-none');
                    }
                    else {
                        $('.error-feedback').innerHtml = "ERROR";
                    }
                }
            };

            $.ajax(settings).success(function (response) {
                clearApplication()

                var $this = $(this);
                $this.addClass("btn-submitted");
                $this.removeClass("btn-green");
                $('.btn-submit .submit').addClass("d-none");
                $('.btn-submit .fa-check').removeClass("d-none");

                setTimeout(function () {
                    $this.removeClass("btn-submitted");
                    $this.addClass("btn-green");
                    $('.btn-submit .submit').removeClass("d-none");
                    $('.btn-submit .fa-check').addClass("d-none");
                }, 2200);
            });
        }
    });

    function preSubmitValidate(first, last, phone, email) {
        var valid = false;

        if (first !== "" && last !== "" && (phone !== "" || email !== "")) {
            valid = true;
        }

        return valid;
    }

    function clearApplication() {
        $('#appFirstName').val("");
        $('#appLastName').val("");
        $('#appPhone').val("");
        $('#appEmail').val("");
    }

    $(window).load(function () {
        getBackgroundRatio();

        function getBackgroundRatio() {
            var bg = $('.header-container').css('background-image');
            bg = bg.replace('url(', '').replace(')', '').replace(/\"/gi, "");
            var img = new Image();
            img.src = bg;

            var ratio = ((img.height / img.width) * 100) / 4;

            $('.header-container').css('padding-bottom', Math.ceil(ratio).toString() + "%");
            $('.header.container-fluid').css('margin-top', 0);


        }
    });
});

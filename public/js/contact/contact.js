$(function () {
    // console.log('coucou');

    var btn =$('.submit_btn');


    function callInscription (email) {
        console.log ('callInscription');
        var xhr;
        xhr = $.ajax({
            url:'/?r=inscription_s',
            type: 'POST',
            dataType: 'json',
            async: true,
            data: {
                email: email
            }
        });

        xhr.done(function (json) {
            console.log ('xhr done');
            console.log (json);
            //display ok message.
            //test si success=true
            $('.a').html('Consultez votre boîte mail pour valider votre inscription.');

            //else message false.
        });
    }

    btn.click(function(){
        console.log ('hello btn');
        var emailInput = $('.email_input'),
            emailInputVal = emailInput.val(),
            reg = new RegExp('^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$', 'i'),
            inscription = $('.inscription'),
            desinscription = $('.desinscription');


        console.log (emailInput.val());

        if (!emailInputVal) {
            // display an error message.
            return;
        }

        if (!reg.test(emailInputVal)) {
            console.log ('wrong');
            return;
        }



        if (inscription.is(':checked')) {
            callInscription(emailInputVal);
        }



    });
});

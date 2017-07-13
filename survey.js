(function() {

    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }

    $('#submit').click(function() {
        checked = $("input[type=checkbox]:checked").length;

        if (!checked) {
            bootbox.alert("Виберіть принаймі один з варіантів препаратів, що ви купуєте для домашньої аптечки?");
            return false;
        }

        if (!isEmail($('#email').val())) {
            bootbox.alert("Будь-ласка, залиште дійсну адресу, щоб ми мали змогу зв'язатись з вами в разі виграшу");
            return false;
        }
        
        var postdata = $('#smektaSurvey').serialize();
        $.ajax({
            type: 'POST',
            url: '/php/feedback.php',
            data: postdata,
            datatype: 'json',
            success: function(json) {
                console.log('Email was sent succesfully');
            }
        });

    });
    $("#MedicineCheckboxes-6").change(function() {
        if (this.checked) {
            $("#MedicineCheckboxes-0").attr('checked', false);
            $("#MedicineCheckboxes-1").attr('checked', false);
            $("#MedicineCheckboxes-2").attr('checked', false);
            $("#MedicineCheckboxes-3").attr('checked', false);
            $("#MedicineCheckboxes-4").attr('checked', false);
            $("#MedicineCheckboxes-5").attr('checked', false);

            $("#MedicineCheckboxes-0").prop('disabled', true);
            $("#MedicineCheckboxes-1").prop('disabled', true);
            $("#MedicineCheckboxes-2").prop('disabled', true);
            $("#MedicineCheckboxes-3").prop('disabled', true);
            $("#MedicineCheckboxes-4").prop('disabled', true);
            $("#MedicineCheckboxes-5").prop('disabled', true);

            $('#otherMedicineText').show();
        } else {
            $('#otherMedicineText').hide();

            $("#MedicineCheckboxes-0").prop('disabled', false);
            $("#MedicineCheckboxes-1").prop('disabled', false);
            $("#MedicineCheckboxes-2").prop('disabled', false);
            $("#MedicineCheckboxes-3").prop('disabled', false);
            $("#MedicineCheckboxes-4").prop('disabled', false);
            $("#MedicineCheckboxes-5").prop('disabled', false);
        }
    });

})()
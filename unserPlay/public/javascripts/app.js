$(document).ready(function(){

    $('#timepicker1').timepicker({
        minuteStep: 1,
        template: 'modal',
        showSeconds: false,
        showMeridian: false,
        defaultTime: false
    });


    $('#datetimepicker1').datetimepicker({
        pickTime: false
    });

    $('#timepicker2').timepicker({
        minuteStep: 1,
        template: 'modal',
        showSeconds: false,
        showMeridian: false,
        defaultTime: false
    });


    $('#datetimepicker2').datetimepicker({
        pickTime: false
    });

})
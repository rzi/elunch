$(document).ready(function ( ){


$('#sandbox-container .input-group.date').datepicker({
    format: "yy-",
    weekStart: 1,
    daysOfWeekDisabled: "1",
    daysOfWeekHighlighted: "1",
    calendarWeeks: true,
    autoclose: true,
    todayHighlight: true,
    beforeShowDay: function(date){
                  if (date.getMonth() == (new Date()).getMonth())
                    switch (date.getDate()){
                      case 4:
                        return {
                          tooltip: 'Example tooltip',
                          classes: 'active'
                        };
                      case 8:
                        return false;
                      case 12:
                        return "green";
                  }
                }
});



}); /*Klamra zamykająca $(document).ready(function(){*/

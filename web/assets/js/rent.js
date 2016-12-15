/**
 * Created by anjatomovska on 12/14/16.
 */
$(document).ready(function(){

    $( "#date_end" ).datepicker();
    $( "#date_start" ).datepicker();

 $("#my_chosen").chosen({
    disable_search_threshold: 10,
    no_results_text: "Oops, nothing found!",
    width: "95%"
});
}) ;
$(document).ready(function() {

    $("#fab_date").datepicker({
            format: "yyyy",
            viewMode: "years", 
            minViewMode: "years",
            language: "es",
            autoclose: true,
            todayHighlight: true
    });   

    $("#begin_date").datepicker({
            format: "yyyy-mm-dd",
            language: "es",
            autoclose: true,
            todayHighlight: true
    });        

    $("#end_date").datepicker({
        format: "yyyy-mm-dd",
        language: "es",
        autoclose: true,
        todayHighlight: true
    });            


    var inputStartDate = $('#begin_date').children(".input-date");
    inputStartDate.change(function() {        
        var valueInputStart = $(this).val();
        $('#end_date').datepicker('setStartDate', valueInputStart);
        $('#end_date').datepicker('setDate', valueInputStart);
    });





    var activeSystemClass = $('.list-group-item.active');

    //something is entered in search form
    $('#quote-search').keyup( function() {
       var that = this;
        // affect all table rows on in systems table
        var tableBody = $('.table-list-search tbody');
        var tableRowsClass = $('.table-list-search tbody tr');
        $('.search-sf').remove();
        tableRowsClass.each( function(i, val) {
        
            //Lower text for case insensitive
            var rowText = $(val).text().toLowerCase();
            var inputText = $(that).val().toLowerCase();
            if(inputText != '')
            {
                $('.search-query-sf').remove();
                tableBody.prepend('<tr class="search-query-sf"><td colspan="6"><strong>Buscando: "'
                    + $(that).val()
                    + '"</strong></td></tr>');
            }
            else
            {
                $('.search-query-sf').remove();
            }

            if( rowText.indexOf( inputText ) == -1 )
            {
                //hide rows
                tableRowsClass.eq(i).hide();
                
            }
            else
            {
                $('.search-sf').remove();
                tableRowsClass.eq(i).show();
            }
        });
        //all tr elements are hidden
        if(tableRowsClass.children(':visible').length == 0)
        {
            tableBody.append('<tr class="search-sf"><td class="text-muted" colspan="6">No se encontraron resultados.</td></tr>');
        }
    });



});
$(document).ready(function()  {

    globalfun()
    countries_fun()

})

function globalfun(){

    $.ajax( {
        url: 'includes/global.php',
        method: 'GET',
        //dataType: 'JSON',
        success: function(data){
          $('#table').html(data);  
        }
    })
}

function countries_fun(){

    $.ajax( {
        url: 'includes/countries.php',
        method: 'GET',
        //dataType: 'JSON',
        success: function(data){
          $('#countries-table').html(data);  
        }
    })
}
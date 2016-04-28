var rootSwapi = {"people":"http://swapi.co/api/people/","planets":"http://swapi.co/api/planets/","films":"http://swapi.co/api/films/","species":"http://swapi.co/api/species/","vehicles":"http://swapi.co/api/vehicles/","starships":"http://swapi.co/api/starships/"};
//console.log(rootSwapi);

listMovies();



function listMovies() {
  var swApi = "http://swapi.co/api/films/";
  
  $.getJSON( swApi, {
    format: "json"
  })
    .done(function( data ) {
    //console.log('results: ',data.results);
        $('#sw-listing').prepend("<h1>Movie listing: </h1>");
        $('#sw-listing').empty();
        $(data.results).each(function(index, Element) {
        $butn =   $('<button/>')
            .text(Element.title)
            .addClass('btn btn-default')
            .click(function () { showMovie(Element.url);}
            );            
            
            $("<li />").html($butn).addClass('list-group-item').appendTo($('#sw-listing'));
        });

    });    
    
}

function showMovie(movieId) {
   var swApi = movieId;
   var swApiObjects = ['cast','planets','starships','vehicles','species'];
   
    $.getJSON( swApi, {
    format: "json"
  })
    .done(function( data ) {
        $.each( data, function( key, value ) {
            console.log(key, value );
            
            //Fill content
            $idNode = 'swapi-film-' +key;
            $('#' +$idNode).html(value);
            $("label[for='" +$idNode + "']").html(key +": ");
            
        });        
        
        $('#titlecontent').html(data.opening_crawl);
        
        $('#swapi-detail').show(); 
                
                
        // console.log(data.title, data.episode_id, data.director, data.producer, data.release_date);
        /* 
        $("#swapi-film-title").text(data.title);
         $("#episode_id").text(data.episode_id);
         $("#director").text(data.director);
         */
         
         //characters
         
         
         
 
         

        /*
        $.each( data, function( key, value ) {
        $content = "<strong style='color:yellow;'> " +key +": </strong>" +value;
        $("<div />").html($content).appendTo($('#swapi-detail'));          
         $('#swapi-detail').slideDown(); 
        });
        */


    });   
}

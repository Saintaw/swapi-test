var rootSwapi = {"people":"http://swapi.co/api/people/","planets":"http://swapi.co/api/planets/","films":"http://swapi.co/api/films/","species":"http://swapi.co/api/species/","vehicles":"http://swapi.co/api/vehicles/","starships":"http://swapi.co/api/starships/"};
//console.log(rootSwapi);

listMovies();



function listMovies() {
  var swApi = "http://swapi.co/api/films/";
  $("#temp-loader").show();
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
    $("#temp-loader").hide();
    });    
    
}

function showMovie(movieId) {
   var swApi = movieId;
   var swApiObjects = ['characters','planets','starships','vehicles','species'];
   var swApiHidden = ['title','opening_crawl','episode_id','created','edited'];
    $('#swapi-detail').hide();
   
    $.getJSON( swApi, {
    format: "json"
  })
    .done(function( data ) {
        $("#swapi-film-title").html(data.title);
        //loop json main object
        $.each( data, function( key, value ) {
            var $div = $("<div/>")
                .attr("id", "swapi-film-" +key);
            var $localUl = $( "<ul />" )
                .attr("class" , "list-group");
           
            var a = swApiObjects.indexOf(key); //matching a swapi object
            var b = swApiHidden.indexOf(key); //matching an unwanted
            $str = "<strong>" + key + ": </strong>";

            if (a < 0) { //Fill content with strings
                $("<li/>")
                .attr("class", "list-group-item")
                .html($str +value).appendTo($localUl);
            }
            else {//get object details
               
               console.log('obj section: ' ,key);
               $("<li/>")
               .attr("class", "list-group-item")
               .html($str).appendTo($localUl);
       
               $.each( value, function( nkey, val ) {
                  var det_url = val;
                    $.getJSON( det_url, {format: "json"})
                        .done(function( detdata ) {
                            if (detdata.name != undefined)
                                {
                                //console.log(key,detdata.name);
                                    $("<li/>")
                                    .attr("class", "list-group-item")
                                    .html(detdata.name).appendTo($localUl);                                

                                }
                            });                   
                        });
                        

            }
        if (b < 0) {
            //append the full list to the section
            $div.html($localUl);
            $div.appendTo($("#film-view"));            
            }

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

  
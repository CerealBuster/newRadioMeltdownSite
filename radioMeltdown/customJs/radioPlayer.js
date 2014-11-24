var sourcePlayer = $("#radioSource");
var playing = false;

$(document).ready(function(){ 
     $('#loadedContent').load("load/home.php");
    
    $("#playPauseButton").on('click', function() {
          
        if(playing == false){
            sourcePlayer.get(0).play();
            $("#playPauseButton").html('<span class="glyphicon glyphicon-stop" aria-hidden="true"></span>');
            playing = true;
            
        }
        else{
            sourcePlayer.get(0).pause();
            $("#playPauseButton").html('<span class="glyphicon glyphicon-play" aria-hidden="true"></span>');
            playing = false;
        }

    });
    $('#home').on('click', function(){    
        $('#loadedContent').load("load/home.php");
    });
    
    $('#meltdown').on('click', function(){
        $('#loadedContent').load("load/meltdown.php");
        
    });
    $('#programm').on('click', function(){
        $('#loadedContent').load("load/programm.php");
    });
    $('#live-Shows').on('click', function(){
        $('#loadedContent').load("load/live-Shows.php");
       
    });
    $('#events').on('click', function(){
        $('#loadedContent').load("load/events.php");
        
    });
    $('#team').on('click', function(){
        $('#loadedContent').load("load/team.php");
        
    });
    $('#supporter').on('click', function(){
        $('#loadedContent').load("load/supporter.php");
        
    });
    $('#download').on('click', function(){
        $('#loadedContent').load("load/download.php");
        
    });
    $('#kontakt').on('click', function(){
        $('#loadedContent').load("load/kontakt.php");
        
    });
    $('#newsletter').on('click', function(){
        $('#loadedContent').load("load/newsletter.php");
        
    });
});

    /*
    var sourcePlayer = document.getElementById("radioSource"); 
  alert("plays");
        sourcePlayer.get(0).play();
var playButton = document.getElementById("playRadio").addEventListener("click", playRadio());*/
// Variables

var TimerToHidePageLoad = 5000;
var TimerToHide = 2000;
var TimeOutAnimaion;
var BarIsLoaded = false;
var IsButChange = false;
var IsPlayed = false;
var VolumeValue = 10;

var CurrentStream;
var CurrentLogo;

$(document).ready(function()
{
	//// Evènements en fonction d'actions
	
	// Afficher barre après chargement de la page
	setTimeout('$("#PB_HoverZone").height(0); $("#PB_Zone").animate({top: "0px"}, "slow");', 2000)
	
	// Afficher la barre
	$("#PB_HoverZone").mouseenter(function(){
		if(BarIsLoaded == true)
		{
	    	clearTimeout(TimeOutAnimaion);
			$("#PB_HoverZone").height(0);
			$("#PB_Zone").animate({top: "0px"}, "fast");	
		}
	});
	
	$("#PB_Zone").mouseenter(function(){
		if(BarIsLoaded == true)
		{
	    	clearTimeout(TimeOutAnimaion);
			$("#PB_HoverZone").height(0);
			$("#PB_Zone").animate({top: "0px"}, "fast");	
		}
	});
	
	// Cacher la barre
	$("#PB_Zone").mouseleave(function(){
		if(BarIsLoaded == true)
		{
			TimeOutAnimaion = setTimeout('$("#PB_Zone").animate({top: "-50px"}, "slow"); $("#PB_HoverZone").height(30);', TimerToHide);
		}
    });
	
	// Fade Bouton Play/Stop
	
	$("#PB_PlayStop").hover(function(){
    	$(this).fadeTo("fast", 0.7);
    }, function(){
    	$(this).fadeTo("fast", 1.0);
    });
	
	// Slider pour le volume
	
	fdSlider.createSlider(
	{
        inp:document.getElementById("VolSlider"),
        step:0.05, 
        maxStep:0.5,
        min:0,
        max:100,
        animation:"tween",
        forceValue:true,
        callbacks:
		{
                "change":[updateVol]
        }
    });
	
	// Choix de la radio
	
	$("#PB_RadioList").focusin(function() 
	{
  		BarIsLoaded = false;
	});
	
	$("#PB_RadioList").focusout(function() 
	{
  		BarIsLoaded = true;
	});
	
	$("#PB_RadioList").change(function() 
	{
		var DropDownValue;
		BarIsLoaded = true;
		DropDownValue = $(this).val();
		var DataSplited = DropDownValue.split('::');
		
		if(DropDownValue != "NoValue")
		{
			CurrentLogo = DataSplited[0];
			CurrentStream = DataSplited[1];
			
			if(CurrentLogo == "")
			{
				CurrentLogo = "https://www.tonchat.fr/tonchatapp/playerbar/logos/default.png";
			}
		
			var ButPlayStop = document.getElementById("PB_LogoRadio"); 
    		if (ButPlayStop == typeof('undefined')) return;
    		ButPlayStop.src = CurrentLogo;
		
			stopStream();
			playStream();
		}
	});
	
	// Click bouton Play/Stop
	
	$("#PB_PlayStop").click(function()
	{
		if(IsPlayed == true)
		{
	    	stopStream(); 
			IsPlayed = false;
		}
		else
		{
			playStream();
		}
	});
	
	//// Evènements "automatiques"
	
	// Cacher la barre après X secondes	
	setTimeout('$("#PB_Zone").animate({top: "-50px"}, "slow"); BarIsLoaded = true;', TimerToHidePageLoad);
	
	// Charger la liste des radios
	var CounterResult = 0;
	
	$.ajax({
		type: "GET",
		url: "playerbar/RadioList.xml",
		dataType: "xml",
		success: function(xml) 
		{
			$(xml).find('Radio').each(function()
			{
				var Nom = $(this).find('Nom').text();
				var Logo = $(this).find('Logo').text();
				var Stream = $(this).find('Stream').text();
				
				if(CounterResult == 0)
				{
					$('#PB_RadioList').append('<option value='+ Logo + '::' + Stream +' selected>'+ Nom +'</option>');
					
					CurrentStream = Stream;
					CurrentLogo = Logo;
					
					if(CurrentLogo == "")
					{
						CurrentLogo = "https://www.tonchat.fr/tonchatapp/playerbar/logos/default.png";
					}
					
					var ButPlayStop = document.getElementById("PB_LogoRadio"); 
    				if (ButPlayStop == typeof('undefined')) return;
    				ButPlayStop.src = Logo;
				}
				else
				{
					$('#PB_RadioList').append('<option value='+ Logo + '::' + Stream +'>'+ Nom +'</option>');
				}
				
				preload(Logo);
				
				CounterResult++;
						
			});
		}
	});
	
	// Lancer la lecture de la première radio
	
	soundManager.url = 'playerbar/swf/';
	soundManager.debugMode = false;
	soundManager.onload = function() 
	{
		soundManager.createSound(
		{
			id : "PBPlayer",
			url : CurrentStream,
			stream: true,
			whileplaying : function() 
			{
				if(IsButChange == false)
				{
					var ButPlayStop = document.getElementById("PB_PlayStop"); 
    				if (ButPlayStop == typeof('undefined')) return;
    				ButPlayStop.src = "playerbar/img/stop_bar.png";
					IsButChange = true;
					IsPlayed = true;
				}
			},
			bufferTime: 5,
			volume: 10
		});
		soundManager.play("PBPlayer");
	}
	soundManager.onError = function() 
	{
		//$("#statutconnexion").html('Une erreur est survenue durant le chargement.');
	}
	soundManager.onbufferchange = function() 
	{
		//$("#statutconnexion").html('Lecture en cours. Bonne ecoute !');
	}
	
});

//// Fonction du player

function updateVol(cbObj) 
{
	soundManager.setVolume("PBPlayer", cbObj.value);
	VolumeValue = cbObj.value;
}

function playStream()
{
	soundManager.createSound(
	{
		id : "PBPlayer",
		url : CurrentStream,
		stream: true,
		volume: VolumeValue
	});
	soundManager.play("PBPlayer");
	IsPlayed = true;
	
	var ButPlayStop = document.getElementById("PB_PlayStop"); 
    if (ButPlayStop == typeof('undefined')) return;
    ButPlayStop.src = "playerbar/img/stop_bar.png";
	IsButChange = true;
}

function stopStream()
{
	soundManager.destroySound('PBPlayer');
	IsPlayed = false;
	
	var ButPlayStop = document.getElementById("PB_PlayStop"); 
    if (ButPlayStop == typeof('undefined')) return;
    ButPlayStop.src = "playerbar/img/play_bar.png";
	IsButChange = false;
}

// Chargement des images

function preload(images) {
    if (document.images) {
        var i = 0;
        var imageArray = new Array();
        imageArray = images.split(',');
        var imageObj = new Image();
        for(i=0; i<=imageArray.length-1; i++) {
            imageObj.src=images[i];
        }
    }
}
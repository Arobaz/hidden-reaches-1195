// JavaScript Document

(function($){$.fn.tipTip=function(options){var defaults={activation:"hover",keepAlive:false,maxWidth:"200px",edgeOffset:3,defaultPosition:"bottom",delay:400,fadeIn:200,fadeOut:200,attribute:"title",content:false,enter:function(){},exit:function(){}};var opts=$.extend(defaults,options);if($("#tiptip_holder").length<=0){var tiptip_holder=$('<div id="tiptip_holder" style="max-width:'+opts.maxWidth+';"></div>');var tiptip_content=$('<div id="tiptip_content"></div>');var tiptip_arrow=$('<div id="tiptip_arrow"></div>');$("body").append(tiptip_holder.html(tiptip_content).prepend(tiptip_arrow.html('<div id="tiptip_arrow_inner"></div>')))}else{var tiptip_holder=$("#tiptip_holder");var tiptip_content=$("#tiptip_content");var tiptip_arrow=$("#tiptip_arrow")}return this.each(function(){var org_elem=$(this);if(opts.content){var org_title=opts.content}else{var org_title=org_elem.attr(opts.attribute)}if(org_title!=""){if(!opts.content){org_elem.removeAttr(opts.attribute)}var timeout=false;if(opts.activation=="hover"){org_elem.hover(function(){active_tiptip()},function(){if(!opts.keepAlive){deactive_tiptip()}});if(opts.keepAlive){tiptip_holder.hover(function(){},function(){deactive_tiptip()})}}else if(opts.activation=="focus"){org_elem.focus(function(){active_tiptip()}).blur(function(){deactive_tiptip()})}else if(opts.activation=="click"){org_elem.click(function(){active_tiptip();return false}).hover(function(){},function(){if(!opts.keepAlive){deactive_tiptip()}});if(opts.keepAlive){tiptip_holder.hover(function(){},function(){deactive_tiptip()})}}function active_tiptip(){opts.enter.call(this);tiptip_content.html(org_title);tiptip_holder.hide().removeAttr("class").css("margin","0");tiptip_arrow.removeAttr("style");var top=parseInt(org_elem.offset()['top']);var left=parseInt(org_elem.offset()['left']);var org_width=parseInt(org_elem.outerWidth());var org_height=parseInt(org_elem.outerHeight());var tip_w=tiptip_holder.outerWidth();var tip_h=tiptip_holder.outerHeight();var w_compare=Math.round((org_width-tip_w)/2);var h_compare=Math.round((org_height-tip_h)/2);var marg_left=Math.round(left+w_compare);var marg_top=Math.round(top+org_height+opts.edgeOffset);var t_class="";var arrow_top="";var arrow_left=Math.round(tip_w-12)/2;if(opts.defaultPosition=="bottom"){t_class="_bottom"}else if(opts.defaultPosition=="top"){t_class="_top"}else if(opts.defaultPosition=="left"){t_class="_left"}else if(opts.defaultPosition=="right"){t_class="_right"}var right_compare=(w_compare+left)<parseInt($(window).scrollLeft());var left_compare=(tip_w+left)>parseInt($(window).width());if((right_compare&&w_compare<0)||(t_class=="_right"&&!left_compare)||(t_class=="_left"&&left<(tip_w+opts.edgeOffset+5))){t_class="_right";arrow_top=Math.round(tip_h-13)/2;arrow_left=-12;marg_left=Math.round(left+org_width+opts.edgeOffset);marg_top=Math.round(top+h_compare)}else if((left_compare&&w_compare<0)||(t_class=="_left"&&!right_compare)){t_class="_left";arrow_top=Math.round(tip_h-13)/2;arrow_left=Math.round(tip_w);marg_left=Math.round(left-(tip_w+opts.edgeOffset+5));marg_top=Math.round(top+h_compare)}var top_compare=(top+org_height+opts.edgeOffset+tip_h+8)>parseInt($(window).height()+$(window).scrollTop());var bottom_compare=((top+org_height)-(opts.edgeOffset+tip_h+8))<0;if(top_compare||(t_class=="_bottom"&&top_compare)||(t_class=="_top"&&!bottom_compare)){if(t_class=="_top"||t_class=="_bottom"){t_class="_top"}else{t_class=t_class+"_top"}arrow_top=tip_h;marg_top=Math.round(top-(tip_h+5+opts.edgeOffset))}else if(bottom_compare|(t_class=="_top"&&bottom_compare)||(t_class=="_bottom"&&!top_compare)){if(t_class=="_top"||t_class=="_bottom"){t_class="_bottom"}else{t_class=t_class+"_bottom"}arrow_top=-12;marg_top=Math.round(top+org_height+opts.edgeOffset)}if(t_class=="_right_top"||t_class=="_left_top"){marg_top=marg_top+5}else if(t_class=="_right_bottom"||t_class=="_left_bottom"){marg_top=marg_top-5}if(t_class=="_left_top"||t_class=="_left_bottom"){marg_left=marg_left+5}tiptip_arrow.css({"margin-left":arrow_left+"px","margin-top":arrow_top+"px"});tiptip_holder.css({"margin-left":marg_left+"px","margin-top":marg_top+"px"}).attr("class","tip"+t_class);if(timeout){clearTimeout(timeout)}timeout=setTimeout(function(){tiptip_holder.stop(true,true).fadeIn(opts.fadeIn)},opts.delay)}function deactive_tiptip(){opts.exit.call(this);if(timeout){clearTimeout(timeout)}tiptip_holder.fadeOut(opts.fadeOut)}}})}})(jQuery);

var volencin = 0;
var interfade;
var VolumeAct = 100;
function FadeInVol()
{
	if(volencin < VolumeAct)
	{
		volencin++;
		soundManager.setVolume("HitOneStream", volencin);
	}
	else
	{
		clearInterval(interfade);
	}
}

var IsPlayed = 1;
$(document).ready(function()
{
	GetBlocTitre();
	//Redimensionner(500,323);
	//Chargement images Slider
	var imgList = ["slider-disabled.png", "slider-disabled-1.png", "slider.png", "slider-1.png"];
	var preloadImg = []
	for(var i = 0, imgSrc; imgSrc = imgList[i]; i++) {
     	   preloadImg[i] = new Image();
     	   preloadImg[i].src = "./" + imgSrc;
	};
		PlayStreamD();
	// Fondu icone Play
	$(".TooltipC").tipTip({defaultPosition:"top", delay:100});
    $("#ico_play").hover(function(){
    $(this).fadeTo("fast", 0.7);
    }, function(){
    $(this).fadeTo("fast", 1.0);
    });
	
});

var volencout = VolumeAct;
var outterfade;
function FadeOutVol()
{
	if(volencout > 0)
	{
		volencout--;
		soundManager.setVolume("HitOneStream", volencout);
	}
	else
	{
		clearInterval(outterfade);
		var ButPlayStop = document.getElementById("ico_play"); 
    	if (ButPlayStop == typeof('undefined')) return;
    	ButPlayStop.src = "http://www.hitone.be/v2/player/images/ico_play.png";
		$("#loaderimg").fadeOut(500);
		$("#ico_play").fadeIn(500);
	}
}
function StopStream()
{
	IsPlayed = 0;
    $("#ico_play").fadeOut(500);
	$("#loaderimg").fadeIn(500);
	volencout = VolumeAct;
	outterfade = setInterval('FadeOutVol();', 5);
	$("#FlashAnim").fadeOut(1000);
	
}

var myObject = function() {

        this.callback = function(cbObj) {
		if(IsPlayed == 1)
		{
				soundManager.setVolume("HitOneStream", cbObj.value);
		}
				VolumeAct = cbObj.value;
        };

        return this;

}();

function PlayStream()
{
	$("#ico_play").fadeOut(500, function() { 
	var ButPlayStop = document.getElementById("ico_play"); 
    if (ButPlayStop == typeof('undefined')) return;
    ButPlayStop.src = "http://www.hitone.be/v2/player/images/ico_pause.png"; });
	$("#loaderimg").fadeIn(500);
	IsPlayed = 1;
	volencin = 0;
	interfade = setInterval('FadeInVol();', 30);
	$("#FlashAnim").fadeIn(2000);
	$("#loaderimg").fadeOut(500);
	$("#ico_play").fadeIn(500);
}
function PlayStreamD()
{
	$("#ico_play").fadeOut(500, function() { 
	var ButPlayStop = document.getElementById("ico_play"); 
    if (ButPlayStop == typeof('undefined')) return;
    ButPlayStop.src = "http://www.hitone.be/v2/player/images/ico_pause.png"; });
	$("#loaderimg").fadeIn(500);
	IsPlayed = 1;
	volencin = 0;
	soundManager.url = 'swf/';
	soundManager.debugMode = false;
	soundManager.onload = function() {
		soundManager.createSound(
			{
				id : "HitOneStream",
				url : "http://178.33.46.186/;stream.nsv", // Attention pas de virgule ici !
				stream: true,
				whileplaying : function() { // Pendant le chargement :
					//$("#statutconnexion").html('<b>Tu écoutes Zenith Habbo</b>');
					if(IsPlayed == 1)
					{
					interfade = setInterval('FadeInVol();', 30);
					$("#FlashAnim").fadeIn(2000);
					$("#loaderimg").fadeOut(500);
					$("#ico_play").fadeIn(500);
					}
				},
				bufferTime: 8,
				volume: 0
			});
			soundManager.play("HitOneStream");
		}
	soundManager.onError = function() {
			//$("#statutconnexion").html('Une erreur est survenue durant le chargement. Utilise une des icônes sur ta droite ou réactualise la page.');
	}
	soundManager.onbufferchange = function() {
			//$("#statutconnexion").html('<b>Tu écoutes Zenith Habbo</b>');
	}
}

function Redimensionner(Longueur, Hauteur) 
{
        this._system = new System;
        if (this._system.os != System.MAC_OS_X && this._system.os != System.OTHER && this._system.navigator == System.IE) 
		{
            window.resizeTo(Longueur + 20, Longueur + 94);
        } 
		else 
		{
			var LongueurIP;
			var HauteurIP;
			
			var LongueurF;
			var HauteurF;
			
            if (window.innerHeight)
			{
                LongueurIP = window.innerWidth;
                HauteurIP = window.innerHeight;
            } 
			else if (document.body && document.body.offsetHeight) 
			{
                LongueurIP = document.body.offsetWidth;
                HauteurIP = document.body.offsetHeight;
            }
            LongueurF = Longueur - LongueurIP;
            HauteurF = Hauteur - HauteurIP;
            window.resizeBy(LongueurF, HauteurF);
        }
}

var TitreEntierOld = "";
function PochChange(PochEnc)
{
    var poch = document.getElementById("PochIMG"); 
    if (poch == typeof('undefined')) return;
    poch.src = PochEnc;
}
function GetBlocTitre()
{
	jQuery(function($){
		$.ajax({
			type: "GET",
			url: "http://www.hitone.be/includes/titre.php",
			dataType: "xml",
			success : function(xml) {

				$(xml).find('titrage').each(function(){
					
					var Titre = $(this).find('titre').text();
					var Artiste = $(this).find('artiste').text();
					var Poch = $(this).find('urlpoch').text();
					
					var TitreEntier = Artiste + " - " + Titre;
					if(TitreEntier != TitreEntierOld)
					{
						TitreEntierOld = TitreEntier;
			            $("#PochIMG").fadeOut(1000);
						$(".votezone").fadeOut(1000);
					    $(".artiste").hide("drop", { direction: "right" }, 1000);
					    $('.titre').hide("drop", { direction: "left" }, 1000, function(){	
						PochChange(Poch);
						$(".titre").empty().append(Titre);
						$(".artiste").empty().append(Artiste);
						$("#PochIMG").load(function(){														
						$("#PochIMG").fadeIn(1000);
						$(".votezone").fadeIn(1000);
					    });
						$(".titre").show("drop", { direction: "left" }, 1000);
						$(".artiste").show("drop", { direction: "right" }, 1000);
						$.ajax({
						type: "GET",
						url: "http://www.hitone.be/v2/hist_music/last_pl.php",
						dataType: "html",
						success : function(datah) { 
						$(".lastrefresh").fadeOut(1000, function() { $(".lastrefresh").empty().append(datah);$(".lastrefresh").fadeIn(1000);  $(".TooltipCL").tipTip({defaultPosition:"bottom", delay:100});     $(".lastrefresh img").hover(function(){
        $(this).fadeTo("fast", 0.8);
        }, function(){
        $(this).fadeTo("fast", 1.0);
        }); });
						}
						});
				        });
					}
              setTimeout("GetBlocTitre()", 5000);
			}); 		
		}});
	});
}				  

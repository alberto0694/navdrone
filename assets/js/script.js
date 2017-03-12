var $ = jQuery.noConflict();


// Page Loader
$(document).ready(function(){
    $("<hr>").insertAfter(".lista-areas li");
        
});

$(window).load(function () {
    "use strict";
	$('#loader').fadeOut();
    
    $('.search-panel .dropdown-menu').find('a').click(function(e) {
        e.preventDefault();
        var param = $(this).attr("href").replace("#","");
        var concept = $(this).text();
        $('.search-panel span#search_concept').text(concept);
        $('.input-group #search_param').val(param);
    });  

    $(".back-midia").click(function(){
        $("#img-big-size-port").attr("src", "");
        $(".play-file").fadeOut(function(){
            $(".intro-album .row").fadeIn();
            $(".midia-video, .midia-imagem").hide();
        });
    });    

    var $easyzoom = $('.easyzoom').easyZoom();

    // Get an instance API
    var api = $easyzoom.data('easyZoom');
});


function chamaMidia($cod_midia, $path){
    $(".intro-album .row").fadeOut(function(){
        $(".play-file").fadeIn(function(){
            if($cod_midia == 'V'){
                $(".midia-video").fadeIn(function(){
                    $("#video-port").attr("src", $path.toString());
                    $("body, html").scrollTop($('.intro-album').offset().top);
                });
            }else{
                $(".midia-imagem").fadeIn(function(){
                    $("#img-big-size-port").attr("src", $path.toString());
                    $("body, html").scrollTop($('.intro-album').offset().top);
                });
            }  
        });

    });

}

function callModal(titulo, conteudoObj, pathImg)
{
    if(pathImg == ''){
        pathImg = 'assets/images/navdrone-logo-medium.png';
    }
    $('.message-info').html('');
    $('.modal-content input').val('');
    //$(".content").height($(conteudoObj).height());
    //$("#areas-atuacao .content").html(   $(conteudoObj).html()   );
    $("#modal-icon").attr("src", pathImg.toString());
    $(".modal-title").html(titulo);
    $("#areas-atuacao").modal();
}

function emailNavdrone(assunto, nome, telefone, email, mensagem, modal = false){

    var assunto_var = '';

    if(modal){
        assunto_var = $(assunto).html();
    }else{
        assunto_var = $(assunto).val();
    }

    $.ajax({
        type: 'POST',
        url: 'assets/data/email-cliente.php',            
        data:{  assunto_param:assunto_var,
                nome_param:$(nome).val(),
                telefone_param:$(telefone).val(),
                email_param:$(email).val(),
                mensagem_param:$(mensagem).val()
        },                                                 
        success: function(data) { 
            $("textarea, input").val('');
            $("textarea").val('');
            if(modal){
                    $('.contact_email .message-info').html('<div class="alert alert-success"><strong>Obrigado!</strong> Recebemos o seu contato, lhe retornaremos o mais breve possível.</div>');
            }else{
                    $('#contact .message-info').html('<div class="alert alert-success"><strong>Obrigado!</strong> Recebemos o seu contato, lhe retornaremos o mais breve possível.</div>');
            }
        },
        error: function(reason){
        }
    }); 
  
}




// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function () {
    "use strict";
    $('a.page-scroll').bind('click', function (event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});




// Highlight the top nav as scrolling occurs
$('body').scrollspy({
    target: '.navbar-fixed-top'
});

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function () {
    "use strict";
    
    $('.navbar-toggle:visible').click();
});
    
    

    
    /*--------------------------------------------------*/
    /* Counter*/
    /*--------------------------------------------------*/ 
        $(document).ready(function () {

                $('.timer').countTo();

                $('.counter-item').appear(function() {
                    $('.timer').countTo();
                },{accY: -100});
            
        });
            
        





	

////------- Testimonial Section

$(document).ready(function() {
 
  $(".testimonial-section").owlCarousel({
        pagination: false,
        navigation : true,
        slideSpeed : 2500,
		stopOnHover: true,
    	autoPlay: 3000,
    	singleItem:false,
        itemsMobile : [550,1],
        itemsDesktopSmall : [991,2],
        items: 3,
		transitionStyle : "fade",
		navigationText: ['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>']
  });
 
});




////------- Partner/CLients

$(document).ready(function() {
 
  $(".clients").owlCarousel({
        pagination: false,
        navigation : true,
        slideSpeed : 2500,
		stopOnHover: true,
    	autoPlay: 3000,
    	singleItem:false,
        itemsMobile : [550,1],
        itemsDesktopSmall : [991,2],
        items: 5,
		transitionStyle : "fade",
		navigationText: ['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>']
  });
 
});






// Progress Bar

$(document).ready(function ($) {
    "use strict";
    
    // skills animation
    $('#skill-section').waypoint({
        handler: function(event, direction) {
            $(this).find('.singel-hr-inner').each(function(){
                var height = $(this).data('height');
                $(this).css('height', height);
            });
        },
        offset: '60%'
    });        
        
});


$ ( function () {

	$(".video").fitVids();
	
});
	
	
	
	
	
	
/* ------------------------------------------------------*/
// Start Sidenav Section 
/* ------------------------------------------------------ */

(function () {
    
    "use strict";
	var bodyEl = document.body,
		content = document.querySelector('.content-wrap'),
		openbtn = document.getElementById('open-button'),
		closebtn = document.getElementById('close-button'),
		isOpen = false;

	function init() {
		initEvents();
	}

	function initEvents() {
		openbtn.addEventListener('click', toggleMenu);
		if (closebtn) {
			closebtn.addEventListener('click', toggleMenu);
		}

		
	}

	function toggleMenu() {
		if (isOpen) {
			classie.remove(bodyEl, 'show-menu');
		}
		    else {
                classie.add(bodyEl, 'show-menu');
		    }
        
		isOpen = !isOpen;
	}

	init();

})();



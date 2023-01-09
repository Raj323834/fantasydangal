/*!
* Start Bootstrap - Agency v7.0.5 (https://startbootstrap.com/theme/agency)
* Copyright 2013-2021 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-agency/blob/master/LICENSE)
*/
//
// Scripts
// 

/*$(function(){
				$("#mainNav").load('header.html');
				$("#footer").load('footer.html');
				
});*/

$(function(){	
				$("#mainNav").load('header.html');
				$("#footer").load('footer.html');				
});

window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }

    };

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Activate Bootstrap scrollspy on the main nav element
    //const mainNav = document.body.querySelector('#mainNav');
    //if (mainNav) {
    //    new bootstrap.ScrollSpy(document.body, {
    //        target: '#mainNav',
    //        offset: 74,
    //    });
    //};

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

	
});
/****for scroll icon****/
$(document).scroll(function() {
        let y = $(this).scrollTop();
        if (y >= 100) {
        $('.btn-social-min').fadeIn()
         
        } else {
          
          $('.btn-social-min').fadeOut();
        }
});

/****end of scroll ****/

/***dropdown on hover****/
/*$(document).ready(function() {
	$('.dropdown').hover(function() {
					$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
				  }, function() {
					$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
});*/

/****end of dropdown hover ****/
/***downloading sdk***/
const config = new SingularConfig('dangal_games_af1b5efa', '3f6e40491a26c4578474cc5d8cf66cce', 'com.fantasydangal');
singularSdk.init(config);

function Lead() {
    singularSdk.event("Download Button Click Initiated");
    let anvalue = "";
    let pcnvalue = "";
    var query = window.location.search.substring(1);
    var vars = query.split('&');
    for (var i = 0; i < vars.length; i++) {
        var pair = vars[i].split('=');
        if (decodeURIComponent(pair[0]) == "_wpsrc" || decodeURIComponent(pair[0]) == "wpsrc" || decodeURIComponent(pair[0]) == "utm_source") {
            anvalue = decodeURIComponent(pair[1]);
        }
        if (decodeURIComponent(pair[0]) == "pcn") {
            pcnvalue = decodeURIComponent(pair[1]);
        }
    }
    fullUrl = "https://fantasydangal.sng.link/D6gtj/bisk?an=" + anvalue + "&pcn=" + pcnvalue;
    console.log(fullUrl);
    var webToAppLink = singularSdk.buildWebToAppLink(fullUrl);
    var linkElement = document.getElementById('singularWebToAppLink');
    if (!linkElement) {
        linkElement = document.createElement("a");
    }
    linkElement.id = 'singularWebToAppLink';
	//console.log(webToAppLink+"XYZ");
    linkElement.href = webToAppLink;
		
    linkElement.click();
    singularSdk.event("Download Button Clicked");
}
/****end of downloadingsdk ****/
(function($) {
    "use strict";
    var WEA = {};
    var plugin_track = 'assets/vendor/';
    $.fn.exists = function() {
        return this.length > 0;
    };



    /*--------------------
        * Menu Close
    ----------------------*/
    WEA.MenuClose = function() {
        $(".toggler-menu").on('click', function() {
            $(this).toggleClass('open');
            $('.header-left-fixed, .header-top-fixed').stop().toggleClass('menu-open menu-open-desk');
        });
        $('.header-left-fixed a, .header-top-fixed a').on('click', function() {
            var toggle = $('.toggler-menu').is(':visible');
            if (toggle) {
                $('.header-left-fixed, .header-top-fixed').removeClass('menu-open');
                $('.toggler-menu').removeClass('open');
            }
        });

        $('.navbar-nav a').on('click', function() {
            var toggle = $('.navbar-toggler').is(':visible');
            if (toggle) {
                $('.navbar-collapse').collapse('hide');
            }
        });
    }


    /* ---------------------------------------------- /*
     * Header Fixed
    /* ---------------------------------------------- */
    WEA.HeaderFixd = function() {
        var HscrollTop = $(window).scrollTop();
        if (HscrollTop >= 100) {
            $('body').addClass('fixed-header');
        } else {
            $('body').removeClass('fixed-header');
        }
    }


    /*--------------------
    * OwlSlider
    ----------------------*/
    WEA.Owl = function() {
        var owlslider = $("div.owl-carousel");
        if (owlslider.length > 0) {
            loadScript(plugin_track + 'owl-carousel/js/owl.carousel.min.js', function() {
                owlslider.each(function() {
                    var $this = $(this),
                        $items = ($this.data('items')) ? $this.data('items') : 1,
                        $loop = ($this.attr('data-loop')) ? $this.data('loop') : true,
                        $navdots = ($this.data('nav-dots')) ? $this.data('nav-dots') : false,
                        $navarrow = ($this.data('nav-arrow')) ? $this.data('nav-arrow') : false,
                        $autoplay = ($this.attr('data-autoplay')) ? $this.data('autoplay') : true,
                        $autospeed = ($this.attr('data-autospeed')) ? $this.data('autospeed') : 5000,
                        $smartspeed = ($this.attr('data-smartspeed')) ? $this.data('smartspeed') : 1000,
                        $autohgt = ($this.data('autoheight')) ? $this.data('autoheight') : false,
                        $CenterSlider = ($this.data('center')) ? $this.data('center') : false,
                        $space = ($this.attr('data-space')) ? $this.data('space') : 30;

                    $(this).owlCarousel({
                        loop: $loop,
                        items: $items,
                        responsive: {
                            0: { items: $this.data('xs-items') ? $this.data('xs-items') : 1 },
                            480: { items: $this.data('sm-items') ? $this.data('sm-items') : 1 },
                            768: { items: $this.data('md-items') ? $this.data('md-items') : 1 },
                            980: { items: $this.data('lg-items') ? $this.data('lg-items') : 1 },
                            1200: { items: $items }
                        },
                        dots: $navdots,
                        autoplayTimeout: $autospeed,
                        smartSpeed: $smartspeed,
                        autoHeight: $autohgt,
                        center: $CenterSlider,
                        margin: $space,
                        nav: $navarrow,
                        navText: ["<i class='bi-chevron-left'></i>", "<i class='bi-chevron-right'></i>"],
                        autoplay: $autoplay,
                        autoplayHoverPause: true
                    });
                });
            });
        }
    }

    /*--------------------
        * Type It
    ----------------------*/
    WEA.mTypeIt = function() {
        if ($("#type-it").exists()) {
            loadScript(plugin_track + 'typeit-master/typeit.js', function() {
                new TypeIt('#type-it', {
                    speed: 200,
                    loop: true,
                    strings: [
                        'Full Stack Developer',
                        'Backend',
                        'Frontend ',
                    ],
                    breakLines: false
                });
            });
        }
    }
    WEA.one_page = function() {
        //var HHeight = $('.navbar').outerHeight();
        var $one_page_nav = $('.one-page-nav');
        if ($one_page_nav.length > 0) {
            $one_page_nav.each(function() {
                $.scrollIt({
                    upKey: 38, // key code to navigate to the next section
                    downKey: 40, // key code to navigate to the previous section
                    easing: 'linear', // the easing function for animation
                    scrollTime: 600, // how long (in ms) the animation takes
                    activeClass: 'active', // class given to the active nav element
                    onPageChange: null, // function(pageIndex) that is called when page is changed
                    topOffset: -40 // offste (in px) for fixed top navigation
                });
            });
        }
    }

    /* ---------------------------------------------- /*
     * All Functions
    /* ---------------------------------------------- */
    // loadScript
    var _arr = {};

    function loadScript(scriptName, callback) {
        if (!_arr[scriptName]) {
            _arr[scriptName] = true;
            var body = document.getElementsByTagName('body')[0];
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.src = scriptName;
            // WEAn bind WEA event to WEA callback function
            // WEAre are several events for cross browser compatibility
            // script.onreadystatechange = callback;
            script.onload = callback;
            // fire WEA loading
            body.appendChild(script);
        } else if (callback) {
            callback();
        }
    };

    // Window on Load
    // Document on Ready
    $(document).ready(function() {
        WEA.HeaderFixd();
        WEA.MenuClose();
        WEA.mTypeIt();
        WEA.one_page();
        WEA.Owl();
    });

    // Document on Scrool
    $(window).on("scroll", function() {
        WEA.HeaderFixd();
    });

    // Window on Resize
    $(window).on("resize", function() {});


})(jQuery);


(function() {
    var form = document.getElementById('contact-form');
    if (!form) return;
    var statusEl = document.getElementById('form-status');
    var loader = document.getElementById('loader');
    var btn = document.getElementById('send-btn');
    var fields = ['name', 'email', 'subject', 'message'];
    document.getElementById('form-ts').value = Date.now();

    function showStatus(type, text) {
        statusEl.className = 'form-status ' + type;
        statusEl.textContent = text;
    }

    function clearErrors() {
        statusEl.className = 'form-status d-none';
        form.querySelectorAll('.field-error').forEach(function(n) { n.remove(); });
        form.querySelectorAll('.is-invalid').forEach(function(n) { n.classList.remove('is-invalid'); });
    }

    function validate() {
        var ok = true;
        fields.forEach(function(id) {
            var el = document.getElementById(id);
            if (el.value.trim() === '' || !el.checkValidity()) {
                var msg = el.validity.typeMismatch ? 'Please enter a valid email address.'
                    : el.validity.tooShort ? 'Please write a little more.'
                    : 'This field is required.';
                el.classList.add('is-invalid');
                var err = document.createElement('span');
                err.className = 'field-error';
                err.textContent = msg;
                el.parentNode.appendChild(err);
                ok = false;
            }
        });
        return ok;
    }

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        clearErrors();
        if (!validate()) {
            form.querySelector('.is-invalid').focus();
            return;
        }
        btn.disabled = true;
        loader.classList.remove('d-none');

        fetch(form.getAttribute('action'), {
            method: 'POST',
            body: new FormData(form),
            headers: { 'Accept': 'application/json' }
        }).then(function(res) {
            if (!res.ok) throw new Error('HTTP ' + res.status);
            form.reset();
            document.getElementById('form-ts').value = Date.now();
            showStatus('success', 'Thanks! Your message was sent and I will get back to you soon.');
        }).catch(function() {
            showStatus('error', 'Sorry, your message could not be sent. Please try again or email me directly.');
        }).finally(function() {
            loader.classList.add('d-none');
            btn.disabled = false;
        });
    });
})();

function hideBanner() {
    document.getElementById('cookie-consent-banner').style.display = 'none';
}

if(localStorage.getItem('consentMode') === null) {

    document.getElementById('btn-accept-all').addEventListener('click', function() {
        setConsent({
            necessary: true,
            analytics: true,
            preferences: true,
            marketing: true
        });
        hideBanner();
    });
    document.getElementById('btn-accept-some').addEventListener('click', function() {
        setConsent({
            necessary: true,
            analytics: document.getElementById('consent-analytics').checked,
            preferences: document.getElementById('consent-preferences').checked,
            marketing: document.getElementById('consent-marketing').checked
        });
        hideBanner();
    });
    document.getElementById('btn-reject-all').addEventListener('click', function() {
        setConsent({
            necessary: false,
            analytics: false,
            preferences: false,
            marketing: false
        });
        hideBanner();
    });
    document.getElementById('cookie-consent-banner').style.display = 'block';
}else{

    hideBanner();
}

function setConsent(consent) {
    const consentMode = {
        'functionality_storage': consent.necessary ? 'granted' : 'denied',
        'security_storage': consent.necessary ? 'granted' : 'denied',
        'ad_storage': consent.marketing ? 'granted' : 'denied',
        'analytics_storage': consent.analytics ? 'granted' : 'denied',
        'personalization': consent.preferences ? 'granted' : 'denied',
    };
    gtag('consent', 'update', consentMode);
    localStorage.setItem('consentMode', JSON.stringify(consentMode));
}

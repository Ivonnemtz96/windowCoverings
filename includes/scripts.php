<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fa fa-angle-up"></span>
</button>





<script src="/assets/js/jquery.js"></script>
<script src="/assets/js/aos.js"></script>
<script src="/assets/js/appear.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/bootstrap-select.min.js"></script>
<script src="/assets/js/isotope.js"></script>
<script src="/assets/js/jquery.bootstrap-touchspin.js"></script>
<script src="/assets/js/jquery.countdown.min.js"></script>
<script src="/assets/js/jquery.countTo.js"></script>
<script src="/assets/js/jquery.easing.min.js"></script>
<script src="/assets/js/jquery.enllax.min.js"></script>
<script src="/assets/js/jquery.fancybox.js"></script>
<script src="/assets/js/jquery.mixitup.min.js"></script>
<script src="/assets/js/jquery.paroller.min.js"></script>
<script src="/assets/js/jquery.polyglot.language.switcher.js"></script>
<script src="/assets/js/map-script.js"></script>
<script src="/assets/js/nouislider.js"></script>
<script src="/assets/js/owl.js"></script>
<script src="/assets/js/timePicker.js"></script>
<script src="/assets/js/validation.js"></script>
<script src="/assets/js/wow.js"></script>
<script src="/assets/js/jquery.magnific-popup.min.js"></script>
<script src="/assets/js/slick.js"></script>
<script src="/assets/js/lazyload.js"></script>
<script src="/assets/js/scrollbar.js"></script>
<script src="/assets/js/tilt.jquery.js"></script>
<script src="/assets/js/jquery.bxslider.min.js"></script>
<script src="/assets/js/jquery-ui.js"></script>
<script src="/assets/js/parallax.min.js"></script>
<script src="/assets/js/jquery.tinyscrollbar.js"></script>
<script src="/assets/js/jQuery.style.switcher.min.js"></script>
<!-- thm custom script -->
<script src="/assets/js/custom.js"></script>

<script src="/assets/js/app.js"></script>
<script src="/assets/js/item.js"></script>

<!-- icons de redes sociales -->
<script src="https://kit.fontawesome.com/a66c8c86d9.js" crossorigin="anonymous"></script>

<!-- Descargar archivos -->
<script>
function descargar() {
    var link = document.createElement('a');
    link.href = '/assets/images/CATALALOGO ENROLLABLE SHEER SENZ.pdf';
    link.download = 'CATALALOGO ENROLLABLE SHEER SENZ.pdf';
    link.click();
}
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.0/jquery.cookie.js"></script>

<script>
jQuery(document).ready(function() {

    function openFancybox() {
        setTimeout(function() {
            jQuery('#popuplink').trigger('click');
        }, 500);
    };

    var visited = jQuery.cookie('visited');
    if (visited == 'yes') {
        // second page load, cookie active
    } else {
        openFancybox(); // first page load, launch fancybox
    }
    jQuery.cookie('visited', 'yes', {
        expires: 1 // the number of days cookie  will be effective
    });
    jQuery("#popuplink").fancybox({
        modal: true,
        maxWidth: 1000,
        overlay: {
            closeClick: true
        }
    });
});
</script>
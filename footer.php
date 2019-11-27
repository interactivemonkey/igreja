<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// $container = get_theme_mod( 'understrap_container_type' );
?>

<?php // get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<footer style="margin-top:50px; background: linear-gradient( rgba(0, 0, 0, 0.0) 100%, rgba(0, 0, 0, 0.0)100%), url(<?php echo get_template_directory_uri() ?>/img/rodape.png); background-position: center center; background-repeat: no-repeat;background-attachment: fixed; background-size: cover; height:420px; background-color:#464646;">
    <div class="container">
    	      <div class="row">
    	      	      <div class="col-4">
    	      	      	      <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/img/logo_igreja.png" width="50%"/>
    	      	      </div>
    	      	      <div class="col-4">
    	      	      	    <div class="row">
    	      	      	      <h3 style="color:#ff9900">Endereço</h3>
    	      	      	      <p style="color:#fff">Rua Major Martinho Mourão, 75 <br/>
                               Jardim Cascatinha, Poços de Caldas MG</p>
                            <h1>(35) 3721-7757</h1>
                          </div>
                          <div class="row" style="margin-top: 30px">
                          	    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="48" height="48"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ff9900"><path d="M86,3.58333c-31.53333,0 -64.44625,25.04033 -64.5,60.91667c-0.0645,42.93192 64.5,107.5 64.5,107.5c0,0 64.56808,-64.4785 64.5,-107.5c-0.05733,-35.82258 -32.96667,-60.91667 -64.5,-60.91667zM86,93.16667c-15.83117,0 -28.66667,-12.8355 -28.66667,-28.66667c0,-15.83117 12.8355,-28.66667 28.66667,-28.66667c15.83117,0 28.66667,12.8355 28.66667,28.66667c0,15.83117 -12.8355,28.66667 -28.66667,28.66667z"></path></g></g></svg>
                                 <p  style="color:#fff; margin-top:15px">  Ver no google Maps</p>
                          </div>
    	      	      </div>

                    <div class="col-4">

                       <div class="row">
    	      	      	      <h3 style="color:#ff9900; width:100%">Siga nas redes sociais</h3>
                           <p>
    	      	      	      <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="50" height="50"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M86,6.88c-43.62608,0 -79.12,35.49048 -79.12,79.12c0,43.62952 35.49392,79.12 79.12,79.12c43.62952,0 79.12,-35.49048 79.12,-79.12c0,-43.62952 -35.49048,-79.12 -79.12,-79.12zM110.08,55.04h-11.3176c-6.66672,0 -9.3224,1.5652 -9.3224,6.21264v10.98736h20.64l-3.44,17.2h-17.2v44.72h-20.64v-44.72h-10.32v-17.2h10.32v-9.54256c0,-14.534 5.79984,-24.85744 22.63864,-24.85744c9.01968,0 18.64136,3.44 18.64136,3.44z"></path></g></g></svg>


                     <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="50" height="50"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M30.96,13.76c-9.4944,0 -17.2,7.7056 -17.2,17.2v110.08c0,9.4944 7.7056,17.2 17.2,17.2h110.08c9.4944,0 17.2,-7.7056 17.2,-17.2v-110.08c0,-9.4944 -7.7056,-17.2 -17.2,-17.2zM51.6,27.52h8.25735l5.50265,13.76l5.50265,-13.76h8.25735l-10.32,24.08v13.76h-6.88v-13.7936c-2.064,-5.5384 -8.9096,-20.572 -10.32,-24.0464zM86,37.84c3.0616,0 6.08907,0.92611 8.01547,3.26531c1.4792,1.6856 2.30453,4.40427 2.30453,7.98187v5.02563c0,3.5776 -0.68505,6.0544 -2.12985,7.74c-1.9264,2.3048 -5.12855,3.50719 -8.19015,3.50719c-3.0616,0 -6.18985,-1.20239 -8.11625,-3.50719c-1.4792,-1.6856 -2.20375,-4.1624 -2.20375,-7.74v-4.99203c0,-3.5776 0.79093,-6.32987 2.30453,-8.01547c1.9264,-2.3392 4.54107,-3.26531 8.01547,-3.26531zM99.76,37.84h6.88v20.64c0.172,0.9288 1.16745,1.34375 2.09625,1.34375c1.4104,0 3.20135,-1.6504 4.78375,-3.4736v-18.51015h6.88v27.52h-6.88v-4.75015c-2.7864,2.7176 -5.16054,4.75257 -8.29094,4.64937c-2.2704,-0.0688 -3.85146,-0.8952 -4.64266,-2.5464c-0.4816,-0.9632 -0.8264,-2.51335 -0.8264,-4.78375zM86,43.40985c-0.473,0 -0.92585,0.10374 -1.33703,0.28219c-0.41119,0.17845 -0.7834,0.4343 -1.09515,0.7525c-0.31175,0.3182 -0.56438,0.69606 -0.73906,1.11531c-0.17469,0.41925 -0.26875,0.8823 -0.26875,1.3639v9.66156c0,0.9632 0.38431,1.84282 1.00781,2.47922c0.31175,0.3182 0.68397,0.57405 1.09515,0.7525c0.41119,0.17845 0.86403,0.28219 1.33703,0.28219c0.473,0 0.92585,-0.10374 1.33703,-0.28219c1.23356,-0.53535 2.10297,-1.78692 2.10297,-3.23172v-9.66156c0,-1.9264 -1.548,-3.5139 -3.44,-3.5139zM85.9664,75.68h0.06719c0,0 23.08052,0.00107 38.49172,1.10187c2.1672,0.2408 6.84882,0.27547 11.04562,4.57547c3.3024,3.2336 4.36719,10.66265 4.36719,10.66265c0,0 1.10187,5.26508 1.10187,13.96828v8.14985c0,8.7032 -1.10187,13.96828 -1.10187,13.96828c0,0 -1.06479,7.42906 -4.36719,10.66266c-4.1968,4.3 -8.87842,4.33467 -11.04562,4.57547c-15.4112,1.1008 -38.52531,1.13547 -38.52531,1.13547c0,0 -28.62375,-0.27627 -37.43015,-1.10187c-2.4424,-0.4472 -7.94398,-0.30987 -12.14078,-4.57547c-3.3024,-3.268 -4.36719,-10.69625 -4.36719,-10.69625c0,0 -1.10187,-5.26508 -1.10187,-13.96828v-8.14985c0,-8.7032 1.10187,-13.96828 1.10187,-13.96828c0,0 1.06479,-7.42905 4.36719,-10.66265c4.1968,-4.3 8.87842,-4.33467 11.04562,-4.57547c15.4112,-1.1008 38.49172,-1.10187 38.49172,-1.10187zM41.28,89.44v6.8061h6.88v34.4739h6.88v-34.4739h6.88v-6.8061zM86,89.44v41.28h6.88v-4.3c2.17064,2.68664 4.99832,4.3 7.31,4.3c2.58688,0 4.84406,-1.39212 5.71094,-4.05813c0.40936,-1.44136 0.71154,-2.78747 0.73906,-5.83187v-9.46c0,-3.39872 -0.46016,-5.95926 -0.8936,-7.40406c-0.86688,-2.68664 -2.96608,-4.18874 -5.5564,-4.20594c-3.3712,-0.02408 -4.73,1.72 -7.31,4.73v-15.05zM61.92,99.76v22.99828c0,2.48368 0.34561,4.15014 0.79281,5.24062c0.7568,1.76816 2.29996,2.7211 4.50156,2.7211c2.5112,0 5.74803,-1.76896 8.46563,-4.6964v4.6964h6.88v-30.96h-6.88v21.56719c-1.5136,2.00896 -3.71681,3.50719 -5.09281,3.50719c-0.8944,0 -1.61519,-0.37662 -1.78719,-1.3639v-23.71047zM120.50078,99.76c-3.46752,0 -6.1756,1.09054 -8.13641,3.1511c-1.4448,1.52048 -2.28437,4.00609 -2.28437,7.22937v10.54844c0,3.20264 0.92364,5.44391 2.365,6.94719c1.96424,2.06056 4.66695,3.0839 8.21703,3.0839c3.54664,0 6.33879,-1.07747 8.21703,-3.26531c0.8256,-0.96664 1.35514,-2.05443 1.58562,-3.26531c0.06192,-0.54696 0.25531,-2.03153 0.25531,-3.78937h-6.88v2.74797c0,1.59616 -1.54112,2.88906 -3.44,2.88906c-1.89888,0 -3.44,-1.29634 -3.44,-2.88906v-6.18797h13.76v-1.98203v-4.97187c0,-3.2164 -0.78975,-5.57108 -2.21047,-7.095c-1.90232,-2.06056 -4.60315,-3.1511 -8.00875,-3.1511zM120.4,104.7386c1.89888,0 3.44,1.29634 3.44,2.88906v4.56875h-6.88v-4.56875c0,-1.59616 1.54112,-2.88906 3.44,-2.88906zM97.07922,105.76656c1.8748,0 2.68078,1.15208 2.68078,4.74344v9.46c0,3.59136 -0.80598,4.83078 -2.68078,4.83078c-1.06984,0 -3.11218,-0.73374 -4.19922,-1.82078v-15.05c1.08704,-1.07328 3.12938,-2.16344 4.19922,-2.16344z"></path></g></g></svg>
                                 </p>
                         </div>

    	      	      </div>

    	      </div>
    </div>
</footer><!-- #colophon -->
<div class="container-fluid" style="background-color:#222">
	     <div class="container" style="padding-top:10px">
	     	      <p style="color:#f5f5f5; font-size: 12px">2019 - Adbelem | Todos os direitos reservados</p>
	     </div>
</div>

<?php wp_footer(); ?>

</body>


  <script>
	var element	= 	$('.navbar');
	$(window).on("scroll", function () {
		if ($(this).scrollTop() > 300) {
			$(element).addClass( 'navbar-light' );
			$(element).removeClass( 'navbar-transparant' );
			$(element).addClass( 'fadeInDown' );
		} else {
			$(element).removeClass( 'navbar-light' );
			$(element).addClass( 'navbar-transparant' );
			$(element).removeClass( 'fadeInDown' );
		}
	});



</script>
  <script>
   /* Demo purposes only */
$(".hover").mouseleave(
  function() {
    $(this).removeClass("hover");
  }
);
</script>

</html>


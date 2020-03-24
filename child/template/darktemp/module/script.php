<script src="<?php print $data["config"]["path"]["assets"]; ?>/lib/jquery/dist/jquery.js"></script>
<script src="<?php print $data["config"]["path"]["assets"]; ?>/lib/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php print $data["config"]["path"]["assets"]; ?>/lib/wow/dist/wow.js"></script>
<script src="<?php print $data["config"]["path"]["assets"]; ?>/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
<script src="<?php print $data["config"]["path"]["assets"]; ?>/lib/isotope/dist/isotope.pkgd.js"></script>
<script src="<?php print $data["config"]["path"]["assets"]; ?>/lib/imagesloaded/imagesloaded.pkgd.js"></script>
<script src="<?php print $data["config"]["path"]["assets"]; ?>/lib/flexslider/jquery.flexslider.js"></script>
<script src="<?php print $data["config"]["path"]["assets"]; ?>/lib/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="<?php print $data["config"]["path"]["assets"]; ?>/lib/smoothscroll.js"></script>
<script src="<?php print $data["config"]["path"]["assets"]; ?>/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
<script src="<?php print $data["config"]["path"]["assets"]; ?>/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
<script src="<?php print $data["config"]["path"]["assets"]; ?>/js/plugins.js"></script>
<script src="<?php print $data["config"]["path"]["assets"]; ?>/js/main.js"></script>
<script>
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});

function send(var0)
{
	$.ajax({
        type: "POST",
        url: $("#" + var0).attr("action"),
        data: $("#" + var0).serialize(),
        dataType: "json",
        success: function(a)
        {
			console.log(a);
			$("#" + var0 + "-result").html("<div class='result-message mb-3 btn btn-" + a.response.status + "'>" + a.response.message + "</div>")
			setTimeout(function(){ $(".result-message").fadeOut() }, 1000);
			
			if (a.response.redirect!=-1)
			{
				setTimeout(function(){ window.location.href=a.response.redirect; }, 1300);
			}
		},
		error: function(a)
		{
			console.log(a);
			$("#" + var0 + "-result").html("<div class='result-message mb-3 btn btn-danger'><?php print $data["word"]["your-form-cannot-be-submited"]; ?></div>")
			setTimeout(function(){ $(".result-message").fadeOut() }, 3000);
		}
	});
}
</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=<?php print $data["measurement"]["google"]; ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '<?php print $data["measurement"]["google"]; ?>');
</script>
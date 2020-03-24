<script src="<?php print $data["config"]["path"]["assets"]; ?>/js/assets/vendor/jquery-1.12.4.min.js"></script>
<script src="<?php print $data["config"]["path"]["assets"]; ?>/js/assets/popper.min.js"></script>
<script src="<?php print $data["config"]["path"]["assets"]; ?>/js/assets/bootstrap.min.js"></script>
<script src="<?php print $data["config"]["path"]["assets"]; ?>/js/assets/wow.min.js"></script>
<script src="<?php print $data["config"]["path"]["assets"]; ?>/js/assets/owl.carousel.min.js"></script>
<script src="<?php print $data["config"]["path"]["assets"]; ?>/js/assets/moment.min.js"></script>
<script src="<?php print $data["config"]["path"]["assets"]; ?>/js/assets/tempusdominus-bootstrap-4.min.js"></script>
<script src="<?php print $data["config"]["path"]["assets"]; ?>/js/assets/isotope.pkgd.min.js"></script>
<script src="<?php print $data["config"]["path"]["assets"]; ?>/js/assets/magnific-popup.min.js"></script>
<script src="<?php print $data["config"]["path"]["assets"]; ?>/js/assets/counterup.min.js"></script>
<script src="<?php print $data["config"]["path"]["assets"]; ?>/js/assets/waypoints.min.js"></script>
<script src="<?php print $data["config"]["path"]["assets"]; ?>/js/assets/smooth-scroll.js"></script>
<script src="<?php print $data["config"]["path"]["assets"]; ?>/js/assets/jquery.syotimer.min.js"></script>
<script src="<?php print $data["config"]["path"]["assets"]; ?>/js/assets/jquery.meanmenu.min.js"></script>
<script src="<?php print $data["config"]["path"]["assets"]; ?>/js/assets/form.js"></script>
<script src="<?php print $data["config"]["path"]["assets"]; ?>/js/plugins.js"></script>
<script src="<?php print $data["config"]["path"]["assets"]; ?>/js/custom.js"></script>

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
            items:3
        }
    }
});

$('.owl-one').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

$('.owl-nav-one').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    },
    navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
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
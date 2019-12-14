<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
<script type="text/javascript">
$('.gokhun').owlCarousel({
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

$('.gorevler').owlCarousel({
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
            items:3
        }
    }
})
	
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
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="http://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript" charset="utf8" ></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>

<script>
$(function() 
{
    $(".datepicker").datepicker();
    $(".datepicker").datepicker("option", "dateFormat", "yy-mm-dd");
});
</script>

<script type="text/javascript">
$(document).ready( function () {
    $('#table_id').DataTable();
	$('#summernote').summernote({tabsize: 2, height: 250});
});
</script>

<script type="text/javascript">
function send(var0)
{
	var form = $("#" + var0)[0];
	var var1 = new FormData(form);
	
	$.ajax({
        type: "POST",
        url: $("#" + var0).attr("action"),
		enctype: "multipart/form-data",
		processData: false,
		contentType: false,
		cache: false,
        data: var1,
		timeout: 600000,
        dataType: "json",
        success: function(a)
        {
			console.log(a);
			$("#" + var0 + "-result").html("<div class='result-message mb-3 btn btn-" + a.response.status + "'>" + a.response.message + "</div>")
			setTimeout(function(){ $(".result-message").fadeOut() }, 3000);
			
			if (a.response.redirect!=-1)
			{
				setTimeout(function(){ window.location.href=a.response.redirect; }, 1000);
			}
		},
		error: function(a)
		{
			console.log(a);
			$("#" + var0 + "-result").html("<div class='result-message mb-3 btn btn-danger'><?php print $data["word"]["your-form-cannot-be-submited"]; ?></div>")
			setTimeout(function(){ $(".result-message").fadeOut() }, 3000);
			
			if (a.response.redirect!=-1)
			{
				window.location.href=a.response.redirect;
			}
		}
	});
}
</script>

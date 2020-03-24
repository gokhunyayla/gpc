<?php
$var0=$database->ofv("companies");
?>

<?php
if ($var0!=-1)
{
?>

	<hr class="divider-w">
	<section class="module-small" style="padding:20px 0 !important;">
		<div class="container">
			<div class="row client">
				<div class="owl-carousel owl-carousel-2 text-center" data-items="6" data-pagination="false" data-navigation="false">
					
					<?php
					foreach ($var0 as $key0=>$value0)
					{
					?>

						<div class="owl-item">
							<div class="col-sm-12">
							<p><h5 class="client-logo"><?php print $value0["name"]; ?></h5><?php print $value0["comment"]; ?></p>
							</div>
						</div>

					<?php
					}
					?>

				</div>
			</div>
		</div>
	</section>

<?php
}
?>
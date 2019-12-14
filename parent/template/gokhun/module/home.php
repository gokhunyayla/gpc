<!doctype html>
<html lang="tr">
    <head>
        
		<?php
		include($data["config"]["path"]["module"]."/meta.php");
		include($data["config"]["path"]["module"]."/link.php");
		include($data["config"]["path"]["module"]."/title.php");
		?>
        
    </head>
    <body>
		
		
		<div class="row m-0 p-0">
			<div class="col-3 p-0">

				<?php
				include($data["config"]["path"]["module"]."/left-navigation.php");
				?>

			</div>

			<div class="col-9 p-0">
				
				<?php
				include($data["config"]["path"]["module"]."/right-top-bar.php");
				?>
				
				<section class="mb-5 p-3">
					<div class="row">
						
						<?php
						$var0=$site["database"]->ls();
						?>
						
						<?php
						if ($var0!=-1)
						{
						?>
						
							<?php
							$count=0;
							foreach ($var0 as $key0=>$value0)
							{
							?>

								<?php
								$count=$count+intval($value0["count"]);
								?>

							<?php
							}
							?>
						
							<?php
							if ($count>0)
							{
							?>

								<div class="col-3">
									<div class="card">
										<div class="card-body">
											<i class="fa fa-dashboard"></i> <?php print $count; ?> <?php print $data["word"]["visitor"]; ?>
										</div>
									</div>
								</div>
						
							<?php
							}
							?>
						
						<?php
						}
						?>
						
						<?php
						$var0=$site["database"]->cs();
						?>
						
						<?php
						if ($var0!=-1 && count($var0)>0)
						{
						?>
						
							<div class="col-3">
								<div class="card">
									<div class="card-body">
										<i class="fa fa-dashboard"></i> <?php print count($var0); ?> <?php print $data["word"]["form"]; ?>
									</div>
								</div>
							</div>
						
						<?php
						}
						?>
						
						<?php
						$var0=$site["database"]->ls();
						?>
						
						<?php
						if ($var0!=-1)
						{
						?>
													
							<?php
							$comment=0;
							foreach ($var0 as $key0=>$value0)
							{
							?>
						
								<?php
								if ($value0["comment"]!="")
								{
								?>
							
									<?php
									$comment=$comment+intval($value0["comment"]);
									?>
						
								<?php
								}
								?>

							<?php
							}
							?>
						
							<?php
							if ($comment>0)
							{
							?>

								<div class="col-3">
									<div class="card">
										<div class="card-body">
											<i class="fa fa-dashboard"></i> <?php print $comment; ?> <?php print $data["word"]["comment"]; ?>
										</div>
									</div>
								</div>
						
							<?php
							}
							?>
						
						<?php
						}
						?>
						
						<?php
						$var0=$site["database"]->ofv("testimonails");
						?>
						
						<?php
						if ($var0!=-1 && count($var0)>0)
						{
						?>
						
							<div class="col-3">
								<div class="card">
									<div class="card-body">
										<i class="fa fa-dashboard"></i> <?php print count($var0); ?> <?php print $data["word"]["testimonail-count"]; ?>
									</div>
								</div>
							</div>

						<?php
						}
						?>
						
					</div>
				</section>
				
			</div>
		</div>
		
		<?php
		include($data["config"]["path"]["module"]."/script.php");
		?>
        
    </body>
</html>
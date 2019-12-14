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
		
		<?php
		include($data["config"]["path"]["module"]."/header.php");
		include($data["config"]["path"]["module"]."/breadcrumbs.php");
		?>
		
		<?php
		if (isset($_POST["keyword"]))
		{
		?>
		
			<?php
			$keyword=$_POST["keyword"];
			?>
		
		<?php
		}
		else
		{
		?>
		
			<?php
			$keyword=-1;
			?>
		
		<?php
		}
		?>
				
		<section class="container">
		
			<div class="row mt-5 mb-5">
				<div class="col-12 text-center">
					<?php print $formname="search"; ?>
					<form id="<?php print $formname; ?>" method="post" action="<?php print $database->afv("search-add-check"); ?>">
						<div class="card">
							<div class="card-header"><?php print $data["word"]["searching-area"]; ?></div>
							<div class="card-body">
								<div class="form-group">
									<input type="text" class="form-control" name="keyword" placeholder="<?php print $data["word"]["please-write-to-search"]; ?>" <?php if ($keyword!=-1){ ?>value="<?php print $keyword; ?>"<?php } ?>>
								</div>
								<div class="btn-group">
									<button type="submit" class="btn btn-primary"><?php print $data["word"]["search"]; ?></button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			
			<div class="row mt-5 mb-5">
				<div class="col-12">
					
					<?php if ($keyword!=-1){ ?><p><?php print $data["word"]["searched-keyword"]; ?>: <?php print $keyword; ?></p><?php } ?>
					<hr class="mb-5" />
					
					<?php
					$var0=$database->afx($keyword);
					?>
					
					<?php
					if ($var0==-1)
					{
					?>
					
						<?php print $data["word"]["nothing-found"]; ?>
					
					<?php
					}
					else
					{
					?>
					
						<?php
						foreach ($var0 as $key0=>$value0)
						{
						?>
					
							<div class="card mb-4">
								<div class="row">
									<div class="col-3">
										
										<?php
										$image=$value0;
										include($data["config"]["path"]["module"]."/list-search.php");
										?>
										
									</div>
									<div class="col-7">
										<div class="card-body">
											<h2 class="card-title mt-3"><?php print $value0["content"]["body"]["text"]["title"]; ?></h2>
											<p class="card-text"><?php print $value0["content"]["body"]["text"]["title"]; ?></p>
										</div>
									</div>
									<div class="col-2 text-center mt-5">
										<a href="<?php print $value0["link"]; ?>" class="btn btn-primary"><?php print $data["word"]["read-more"]; ?></a>
									</div>
								</div>

								<div class="card-footer bg-white text-secondary">
									
									<?php 
									$date=$datetimes->e($value0["insert_date"]); 
									?>
									
									<?php print $date["date"][2]; ?> <?php print $datetimes->month($date["date"][1]); ?> <?php print $date["date"][0]; ?> <?php print $data["word"]["hour"]; ?> <?php print $date["time"][0]; ?>:<?php print $date["time"][1]; ?><?php print $data["word"]["published-at"]; ?> <?php print $data["word"]["by"]; ?><a href="#"> <?php print $value0["content"]["head"]["meta-author"]; ?></a> <span style="float:right;"><a class="mr-2" href="<?php print $value0["link"]; ?>" title="<?php print $value0["content"]["body"]["text"]["title"]; ?>"><i class="fa fa-eye"></i> <?php print $value0["count"]; ?></a> <a class="mr-2" href="<?php print $value0["link"]; ?>" title="<?php print $value0["content"]["body"]["text"]["title"]; ?>"><i class="fa fa-comment-o"></i> <?php if (is_array($value0["comment"])){ ?> <?php print count($value0["comment"]); ?> <?php }else{ ?>0<?php } ?></a></span>
								
								</div>
							</div>
					
						<?php
						}
						?>
					
					<?php
					}
					?>
					
				</div>
				
			</div>
		</section>
		
		<?php
		include($data["config"]["path"]["module"]."/footer.php");
		include($data["config"]["path"]["module"]."/script.php");
		?>
	
    </body>
</html>
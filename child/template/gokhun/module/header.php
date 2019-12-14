<header class="container">
    <div class="col d-flex align-items-center justify-content-between mt-3 mb-3">
        <a class="text-dark h2 mb-0" href="./"><?php print $data["corporate"]["name"]; ?></a>
		
		<?php
		if ($data["navigation"]["top-navigation"]!=-1)
		{
		?>
		
			<?php
			foreach ($data["navigation"]["top-navigation"] as $key0=>$value0)
			{
			?>
		
				<?php
				if ($value0["category"]==-1)
				{
				?>
		
					<?php
					$var1[$key0]=$value0;
					?>
		
				<?php
				}
				else
				{
				?>
		
					<?php
					foreach ($var1 as $key1=>$value1)
					{
					?>
						
						<?php
						if ($value0["category"]==$key1)
						{
						?>
							
							<?php
							$var1[$key1]["sub"][$key0]=$value0;
							?>
		
						<?php
						}
						else
						{
						?>
		
							<?php
							if (isset($var1[$key1]["sub"]))
							{
							?>
							
								<?php
								foreach ($var1[$key1]["sub"] as $key2=>$value2)
								{
								?>

									<?php
									$var1[$key1]["sub"][$key2]["sub"][$key0]=$value0;
									?>

								<?php
								}
								?>
		
							<?php
							}
							?>
		
						<?php
						}
						?>
			
					<?php
					}
					?>
		
				<?php
				}
				?>
		
			<?php
			}
			?>
		
			
		
			<?php
			$i=0;
			foreach ($var1 as $key0=>$value0)
			{
			?>
				
				<?php
				if (isset($value0["sub"]) && count($value0["sub"])>0)
				{
				?>
		
					<?php
					$j=0;
					foreach ($value0["sub"] as $key1=>$value1)
					{
					?>
						
						<?php
						if (isset($value1["sub"]) && count($value1["sub"])>0)
						{
						?>
		
							<?php
							$k=0;
							foreach ($value1["sub"] as $key2=>$value2)
							{
							?>
								
								<?php
								$var2[$i]["sub"][$j]["sub"][$k]=$value2;
								?>
		
							<?php
							}
							?>
		
						<?php
						}
						else
						{
						?>
		
							<?php
							$var2[$i]["sub"][$j]=$value1;
							?>
		
						<?php
						}
						?>
		
					<?php
					$j++;
					}
					?>
		
				<?php
				}
				?>
		
				<?php
				$var2[$i]=$value0;
				?>
		
			<?php
			$i++;
			}
			?>
		
			<nav class="navbar navbar-expand-lg navbar-light bg-white ml-auto">
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
			
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
				  
				  	<?php
					$i=0;
					foreach ($var2 as $key0=>$value0)
					{
				  	?>
					
						<li class="nav-item <?php if (isset($value0["sub"]) && count($value0["sub"])>0){ ?>dropdown<?php } ?> <?php if ($i==0){ ?>active<?php } ?>">
						  	<a class="nav-link <?php if (isset($value0["sub"]) && count($value0["sub"])>0){ ?>dropdown-toggle<?php } ?> <?php if ($i==0){ ?>font-weight-bold text-primary<?php } ?>" <?php if (isset($value0["sub"]) && count($value0["sub"])>0){ ?>role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"<?php } ?> href="<?php print $value0["link"]; ?>"><i class="<?php print $value0["class"]; ?>"></i> <?php print $value0["link-mask"]; ?> <?php if ($i==0){ ?><span class="sr-only">(aktif)</span><?php } ?></a>
							
							<?php 
							if (isset($value0["sub"]) && count($value0["sub"])>0)
							{ 
							?>
							
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									
									<?php
									foreach ($value0["sub"] as $key1=>$value1)
									{
									?>
									
										<a class="dropdown-item" href="<?php print $value1["link"]; ?>"><i class="<?php print $value1["class"]; ?>"></i> <?php print $value1["link-mask"]; ?></a>
									
									<?php
									}
									?>
								</div>
							
							<?php
							}
							?>
							
						</li>

					<?php
					$i++;
					}
					?>	
				 
				</ul>
			  </div>
			</nav>
		
		<?php
		}
		?>

        <a class="btn btn-primary ml-8 d-none d-lg-block font-weight-bold" href="#" data-toggle="modal" data-target="#exampleModal">Bize Katılın?</a>
    </div>
</header>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">İletişim Formu</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
		  <?php $formname="modal-form"; ?>
          <form id="<?php print $formname; ?>" method="post" action="<?php print $database->afv("contact-add-check"); ?>">
			  <input type="hidden" name="subject" value="İletişim Formu">
			  <input type="hidden" name="redirect" value="<?php print $data["page"]["link"]; ?>">
			  
              <div class="form-group">
                  <label><?php print $data["word"]["name"]; ?></label>
                  <input type="text" class="form-control" name="name" placeholder="<?php print $data["word"]["write-your-name"]; ?>">
              </div>

              <div class="form-group">
                  <label><?php print $data["word"]["phone"]; ?></label>
                  <input type="text" class="form-control" name="phone" placeholder="<?php print $data["word"]["write-your-phone"]; ?>">
              </div>

              <div class="form-group">
                  <label><?php print $data["word"]["message"]; ?></label>
                  <textarea class="form-control" rows="5" name="message" placeholder="<?php print $data["word"]["write-your-message"]; ?>"></textarea>
              </div>
			  
			  <div id="<?php print $formname; ?>-result"></div>

          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php print $data["word"]["close"]; ?></button>
          <button type="button" class="btn btn-primary" onClick="javascript:send('<?php print $formname; ?>');"><?php print $data["word"]["send"]; ?></button>
        </div>
      </div>
    </div>
  </div>
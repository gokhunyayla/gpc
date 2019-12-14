<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Açılır Menü">
        <span class="navbar-toggler-icon"></span>
    </button>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar2" aria-controls="navbar2" aria-expanded="false" aria-label="Açılır Menü">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div id="navbar2" class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li>
                <form method="post" action="#">
                    <div class="input-group">
                        <input type="text" autocomplete="off" class="datepicker form-control" name="start-date" placeholder="<?php print $data["dates"]["start-date"]; ?>" value="<?php print $data["dates"]["start-date"]; ?>">
                        <input type="text" autocomplete="off" class="datepicker form-control ml-2" name="end-date" placeholder="<?php print $data["dates"]["end-date"]; ?>" value="<?php print $data["dates"]["end-date"]; ?>">
                        <div class="ml-2">
                            <button class="btn btn-primary" type="button">
                                <i class="fa fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
		
			<?php
			$var1=array(); $var2=array();
			if ($data["navigation"]["right-top-navigation"]==-1)
			{
			?>
			
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-hashpopup="true" aria-expanded="false">
						<?php print $data["user"]["personal"]["name"]; ?> <?php print $data["user"]["personal"]["surname"]; ?>
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar2">
						<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logout-modal">Çıkış Yap</a>
					</div>
				</li>
			
			<?php
			}
			else
			{
			?>
			
				<?php
				foreach ($data["navigation"]["right-top-navigation"] as $key0=>$value0)
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

				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-hashpopup="true" aria-expanded="false">
						<?php print $data["user"]["personal"]["name"]; ?> <?php print $data["user"]["personal"]["surname"]; ?>
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar2">
						
						<?php
						foreach ($var2 as $key0=>$value0)
						{
						?>
						
							<a class="dropdown-item" href="<?php print $value0["link"]; ?>"><i class="<?php print $value0["class"]; ?>"></i> <?php print $value0["link-mask"]; ?></a>
						
						<?php
						}
						?>
						
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logout-modal">Çıkış Yap</a>
					</div>
				</li>
			
			<?php
			}
			?>
			
        </ul>
		
		<div class="modal fade" id="logout-modal" tabindex="-1" role="dialog" aria-labelledby="logout-modal" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"><?php print $data["word"]["are-you-sure"]; ?></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">
				<?php print $data["word"]["you-will-be-logged-out"]; ?>
				
				<div class="mt-3">
					<?php $formname="logout"; ?>
					<form id="<?php print $formname; ?>" method="post" action="<?php print $database->afv("logout"); ?>">
						<div id="<?php print $formname; ?>-result"></div>  
					</form>
				</div>
				  
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal"><?php print $data["word"]["close"]; ?></button>
				<button type="button" class="btn btn-danger" onClick="javascript:send('logout');"><?php print $data["word"]["logout"]; ?></button>
			  </div>
			</div>
		  </div>
		</div>
		
    </div>
</nav>
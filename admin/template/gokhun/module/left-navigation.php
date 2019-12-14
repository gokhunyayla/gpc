<nav class="bg-dark vh-100">
    <a class="navbar-brand bg-black p-3 w-100" href="./"><?php print $data["corporate"]["name"]; ?></a>
	
	<?php
	if ($data["navigation"]["left-navigation"]!=-1)
	{
	?>
	
		<?php
		foreach ($data["navigation"]["left-navigation"] as $key0=>$value0)
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
	
		<div id="navbar" class="mt-3">

			<ul class="nav flex-column">
				
				<?php
                $i=0;
                foreach ($var2 as $key0=>$value0)
                {
                ?>
				
					<?php
					if (isset($value0["sub"]))
					{
					?>
				
						<li class="nav-item <?php if ($i==0){ ?>active<?php } ?> dropdown">
							<a class="nav-link <?php if ($i==0){ ?>font-weight-bold<?php } ?>" href="<?php print $value0["link"]; ?>" role="button" data-toggle="collapse" aria-expanded="false"><i class="<?php print $value0["class"]; ?>"></i> <?php print $value0["link-mask"]; ?> <i class="fa fa-arrow-down"></i></a>
							<div id="option-collapse" class="collapse" aria-labelledby="option-collapse">
								
								<?php
								foreach ($value0["sub"] as $key0=>$value0)
								{
								?>
								
									<a class="dropdown-item" href="<?php print $value0["link"]; ?>"><i class="<?php print $value0["class"]; ?>"></i> <?php print $value0["link-mask"]; ?></a>
								
								<?php
								}
								?>
								
							</div>
						</li>
				
					<?php
					}
					else
					{
					?>
				
						<li class="nav-item <?php if ($i==0){ ?>active<?php } ?>">
							<a class="nav-link <?php if ($i==0){ ?>font-weight-bold<?php } ?>" href="<?php print $value0["link"]; ?>"><i class="<?php print $value0["class"]; ?>"></i> <?php print $value0["link-mask"]; ?></a>
						</li>
				
					<?php
					}
					?>
								
				<?php
				$i++;
				}
				?>
				
			</ul>

		</div>
	
	<?php
	}
	?>
	
</nav>
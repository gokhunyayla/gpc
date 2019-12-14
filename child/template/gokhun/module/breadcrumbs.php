<section class="mt-5 mb-5">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h1><?php print $data["page"]["content"]["body"]["text"]["title"]; ?></h1>
                <nav aria-label="breadcrumb">
					
					<ol class="breadcrumb justify-content-center bg-transparent p-0 m-0">
						
						<li class="breadcrumb-item"><a class="text-dark" href="./"><?php print $data["word"]["homepage"]; ?></a></li>
						
						<?php
						if ($data["page"]["category"]!=-1)
						{
						?>

							<?php
							$var0=$database->afi($data["page"]["category"]);
							?>

							<?php
							if ($var0!=-1)
							{
							?>

								<?php
								$var0=$var0[0];
								?>
						
								<?php
								$var1=$database->afi($var0["category"]);
								?>
						
								<?php
								if ($var1!=-1)
								{
								?>
									
									<?php
									$var1=$var1[0];
									?>
						
									<li class="breadcrumb-item"><a class="text-dark" href="<?php print $var1["link"]; ?>"><?php print $var1["content"]["link-mask"]; ?></a></li>
						
								<?php
								}
								?>

								<li class="breadcrumb-item"><a class="text-dark" href="<?php print $var0["link"]; ?>"><?php print $var0["content"]["link-mask"]; ?></a></li>
																									
							<?php
							}
							?>

						<?php
						}
						?>
						
						<li class="breadcrumb-item active text-primary" aria-current="page"><?php print $data["page"]["content"]["link-mask"]?></li>
					
                  	</ol>
					
                </nav>
            </div>
        </div>
    </div>
</section>
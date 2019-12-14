<footer class="bg-dark text-white p-3">
    <div class="container mb-5">
        <div class="row mt-5">
            <div class="col-3">
                <h6 class="h2"><?php print $data["corporate"]["name"]; ?></h6>
                <p><?php print $data["corporate"]["summary"]; ?></p>
				
				<?php
				if ($data["corporate"]["social-media"]!=-1)
				{
				?>
				
					<ul class="list-inline mb-0">
						
						<?php
						foreach ($data["corporate"]["social-media"] as $key0=>$value0)
						{
						?>
						
							<li class="list-inline-item"><a target="_blank" href="<?php print $value0["link"]; ?>" title="<?php print $value0["name"]; ?>"><i class="<?php print $value0["class"]; ?>"></i></a></li>
						
						<?php
						}
						?>
						
					</ul>
				
				<?php
				}
				?>

            </div>
            <div class="col-3">
                <h3><?php print $data["word"]["site-linkage"]; ?></h3>
				
				<?php
				if ($data["navigation"]["bottom-navigation"]!=-1)
				{
				?>
				
					<ul class="footer-link list-unstyled">
						
						<?php 
						foreach ($data["navigation"]["bottom-navigation"] as $key0=>$value0)
						{
						?>
						
							<li><a href="<?php print $value0["link"]; ?>"><i class="<?php print $value0["class"]; ?>"></i> <?php print $value0["link-mask"]; ?></a></li>
						
						<?php
						}
						?>
						
					</ul>
				
				<?php
				}
				?>
				
            </div>
            <div class="col-3">
                <h3><?php print $data["word"]["latest-blog"]; ?></h3>
				
				<?php
				$var0=$database->afc(10, "desc", 4);
				?>
				
				<?php
				if ($var0!=-1)
				{
				?>
				
					<ul class="footer-link list-unstyled">
						
						<?php
						foreach ($var0 as $key0=>$value0)
						{
						?>
						
							<li><a href="<?php print $value0["link"]; ?>" title="<?php print $value0["content"]["link-mask"]; ?>"><?php print $value0["content"]["link-mask"]; ?></a></li>
						
						<?php
						}
						?>
						
					</ul>
				
				<?php
				}
				?>
				
            </div>
            <div class="col-3">
                <h3><?php print $data["word"]["contact"]; ?></h3>
                <p><?php print $data["word"]["address"]; ?>: <?php print $data["corporate"]["address"]; ?></p>
                <p><?php print $data["word"]["phone"]; ?>: <a href="tel:<?php print $data["corporate"]["phone"]; ?>" title="Şirket Telefonu"><?php print $data["corporate"]["phone"]; ?></a></p>
                <p><?php print $data["word"]["email"]; ?>: <a href="mailto:<?php print $data["corporate"]["email"]; ?>" title="Şirket E-Posta Adresi"><?php print $data["corporate"]["email"]; ?></a></p>
            </div>
        </div>

        <p class="border-top border-secondary pt-4 text-center"><?php print $data["corporate"]["copyright"]; ?></p>
    </div>
</footer>
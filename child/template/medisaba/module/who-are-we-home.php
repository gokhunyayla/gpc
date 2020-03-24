<section class="welcome-area3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="welcome-box">
                    <h4><?php print $data["page"]["content"]["body"]["text"]["title"]; ?></h4>
                    <img src="<?php print $data["config"]["path"]["assets"]; ?>/images//heartbeat.png" alt="">
                    <p><?php print $data["page"]["content"]["body"]["text"]["detail"]; ?></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-0">
                <div class="shedule-box">
                    <?php print $data["word"]["danisman-bilgisi"]; ?>
                </div>
            </div>
        </div>
    </div>
</section>
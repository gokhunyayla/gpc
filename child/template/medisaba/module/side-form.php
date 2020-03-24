<div class="appoint-widget mb-5 p-3" style="border:1px solid #e2e2e2;">
    <h5><strong><?php print $data["word"]["contact-form"]; ?></strong></h5>
    <div class="tag-box mt-3">
        <?php $formname="yanform"; ?>
        <form id="<?php print $formname; ?>" method="post" action="<?php print $database->afv("contact-add-check"); ?>">
            <input type="hidden" name="subject" value="İletişim Formu">
            <input type="hidden" name="redirect" value="<?php print $data["page"]["link"]; ?>">
            <input class="form-control mt-1" style="height:40px;" type="text" name="name" placeholder="<?php print $data["word"]["write-your-name"]; ?>" required>
            <input class="form-control mt-1" style="height:40px;" type="text" name="phone" placeholder="<?php print $data["word"]["write-your-phone"]; ?>" required>
            <textarea class="form-control mt-1 mb-3" rows="5" name="message" id="message" placeholder="<?php print $data["word"]["write-your-message"]; ?>" required></textarea>
            <div id="<?php print $formname; ?>-result" style="margin-bottom:15px !important;"></div>
            <button type="button" class="btn btn-primary w-100" onClick="javascript:send('<?php print $formname; ?>');"><?php print $data["word"]["send"]; ?></button>
        </form>
    </div>
</div>
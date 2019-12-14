<?php
if (count($data["page"]["content"]["structure"])>0)
{
?>

    <?php
    foreach ($data["page"]["content"]["structure"] as $key0=>$value0)
    {
    ?>

        <?php
        require($data["config"]["path"]["module"]."/".$value0.".php");
        ?>

    <?php
    }
    ?>

<?php
}
?>
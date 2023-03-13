<?php
/**
 * Created by PhpStorm.
 * User: Pascal.BENZONANA
 * Date: 08.05.2017
 * Time: 09:16
 */

// tampon de flux stocké en mémoire
ob_start();
$title="RentASnow - showASnow";
?>

    <article>
        <header>
            <h2><?= $snow['code']; ?></h2>
            <ul class="nav nav-tabs">
                <li class="active"><a href="#details" data-toggle="tab">Détails du snow</a></li>
                <li><a href="#photo" data-toggle="tab">Photo</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade in active" id="details">
                    <div class="span12"><h4><strong><?= $snow['brand']; ?> - <?= $snow['model']; ?></strong></h4></div>
                    <div class="span3">Longueur : </div><div class="span6 text-info"><?= $snow['snowLength']; ?> cm</div>
                    <div class="span3">Prix : </div><div class="span6 text-info"><strong>CHF <?= $snow['dailyPrice']; ?> .-</strong></div>
                    <div class="span3">Disponibilité : </div><div class="span6"><?= $snow['qtyAvailable']; ?></div>
                    <div class="span3">Description : </div><div class="span8"><?= $snow['description']; ?></div>
                </div>
                <div class="tab-pane fade" id="photo">
                    <div class="thumbnail"><p><img src='view/content/images/<?=$snow['code']; ?>.jpg' style="width:50%"></p></div>
                </div>
            </div>
            <br>
        </header>
    </article>
    <hr/>

<?php
$content = ob_get_clean();
require "gabarit.php";
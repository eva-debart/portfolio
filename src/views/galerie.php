<link rel="stylesheet" href="../public/css/galerie.css">
<div>   
    <div class="mix-containex">
        <div id="myBtnContainer">
            <button class="btn active" onclick="filterSelection('all')">Tous</button> 
            <button class="btn" onclick="filterSelection('a')">site fait en formation html/css/php</button>
            <button class="btn" onclick="filterSelection('b')">site js/REACT/Node</button>
            <button class="btn" onclick="filterSelection('c')">maquette</button>
            <button class="btn" onclick="filterSelection('d')">logo</button>
            <button class="btn" onclick="filterSelection('e')">divers</button>
        </div>
        <div class="row">
            <?php foreach($sites as $site): ?>
                <div class="img">
                    <div class="column <?=$site->getCategory()?>">
                        <div class="content">
                            <img src="../public/assets/img/display/<?= $site->getImgGalerie()?>" alt="<?= $site->getNom()?>">
                            <p>
                                <span>
                                        <?= $site->getNom()?>
                                        <?php if( $site->getCategory() === 'a' ||  $site->getCategory()=== 'b'): ?>
                                            <a href="<?= $site->getSiteUrl() ?>" class="button portfolio">voir le site</a>
                                        <?php else: ?>
                                            <a url(<?= $site->getImgGrand() ?>) class="button portfolio">voir en grand</a>
                                        <?php endif;?>
                                </span>
                            </p>
                        </div>
                    <div>
                </div>
            <?php endforeach; ?>    
        </div>
    </div>
    <a href="#"class="button portfolio-savoir">en savoir plus</a>
</div>
<script src="../public/js/galerie-script.js"></script>

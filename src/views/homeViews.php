<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>portfolio</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="../public/css/galerie.css">
        <link rel="stylesheet" href="../public/css/style.css">
    
    </head>
    <body>
        <div class="accueil">
            <?php require './public/assets/header.php'; ?>
              
            <div class="visu">
                <p>Hallo! je suis prête pour commencer une nouvelle aventures</p>
                <a href="#"class="button boutton-acceuil">commencer</a>
            </div>
            
        </div>
        <main>
            <div class="presentation" id="about">
                <img src="../public/assets/img/photo-identité.jpg" alt="photo de profil" class="photo">
                <div class="text-pres">
                    <h2>A propos de moi</h2>
                    <p>Hello ! Je m’appelle Eva debart, designer web junior en recherche d'aprentissage en Développement Full-stack.
                    J’ai donc suivi la formation Développeur Web au sein de lécole Beweb. Suite à l’obtention du Bac +2,<br>
                    J'ai recherche un apprentissage.<br>
                    Je continue donc à travailler chaque jour avec envie, motivation et des idées plein la tête.
                    </p>
                </div>
            </div>
            <div class="skill">
                <?php require './public/assets/pie-chart.php'; ?>
            </div>

            <div class="galerie">

            <h2>My portfolio</h2>
                <div id="myBtnContainer">
                    <button class="btn active" onclick="filterSelection('all')">Tous</button> 
                    <button class="btn" onclick="filterSelection('a')">site fait en formation html/css/php</button>
                    <button class="btn" onclick="filterSelection('b')">site js/REACT/Node</button>
                    <button class="btn" onclick="filterSelection('c')">maquette</button>
                    <button class="btn" onclick="filterSelection('d')">logo</button>
                    <button class="btn" onclick="filterSelection('e')">divers</button>
                </div>
                
                <section class="rows">
                    <?php foreach($sites as $site): ?>

                        <article class="column <?=$site->getCategory()?>">
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
                        </article>
                    <?php endforeach; ?>    
                </section>

            </div>

            <div class="comment">
                <h2>Mes commentaires</h2>
                <?php $i = 0; foreach($comments as $comment): ?>
                    <ul class='comment-body'>
                        <li><img src="../public/assets/img/profile-picture-default.png" alt="photo de profil"></li>
                        <li class="textarea">
                            <p class="title"><?=$comment->getName_user(); ?></p>
                            <p class="comment-text"><?= $comment->getText(); ?> </p>
                            <p class="comment-date"><?= $comment->getCreated_at(); ?></p> 
                        </li>     
                    </ul>
                    <?php if($i === 6)
                            {
                                break;
                            }?>
                <?php $i++; endforeach; ?>
            </div>
            <div class="contact" id="contact">

                <form action="./index.php?url=addComment" method="POST">
                    <div class="row">
                        <div class="col-25">
                            <label for="email">Email</label>
                        </div> 
                        <div class="col-75">
                            <input type="email" id="email" name="email" value="" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="name">Name</label> 
                        </div>
                        <div class="col-75">
                            <input type="text" id="name" name="name" value="" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="message">Votre message</label>    
                        </div>
                        <div class="col-75">
                            <textarea name="message" id="message" cols="30" rows="10"></textarea>    
                        </div>
                    </div>
                    <input type='checkbox' name='verify' value='on'>
                    <label for="verify"> Cochez si vous voulez que votre message soit mis en commentaire après être vérifié.</label>             
                    <button  class="button butt-contact">envoyer</button>
                </form>  
            </div>
        </main>
        
        <footer>
            
        </footer>
        <script src="../public/js/galerie-script.js"></script>
    </body>
</html>
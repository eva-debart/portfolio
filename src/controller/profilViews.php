<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ma blibliotheque d'anime</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="./public/css/style.css">
    
    </head>
    
    <body>
        <div class="container">
            <?php require './public/assets/header.php'; ?>
        
        <main>
            <div class="container-section">
                <div class="container-login">
                <nav class="nav-JS">
                    <ul>
                        <li><a id="profil" href="#">Profil</a></li>
                        <li><a id="history" href="#">historique des commentaires</a></li>
                        <li><a id="favories" href="#">Favories</a></li>
                        <li><a id="modify" href="#">Ajouter Animes</a></li>
                    </ul>
                </nav>
                
                <section id="secLog" class="login">
                    <div class="content">
                        <div class="blockColor"></div>
                            <div class="contentBx justify">
                                <h3>Connexion</h3>
                                <img src="<?= htmlspecialchars($user->getProfile_picture());?>" class="pro_pict"></img>
                                <p>Nickname : <?= htmlspecialchars($user->getNickname()); ?> </p>
                                <p>Email : <?= htmlspecialchars($user->getEmail()); ?></p>
                                <a href="#">Modifier mot de Passe</a><br>
                                <a href="./index.php?url=logout">Deconnexion</a>
                            </div>
                        </div>
                </section>
                
                <section id="secHistory" class="history">
                    <div class="content">
                        <div class="contentBx">
                            <h3>Vos commentaires</h3>
                            <table class="profil-table">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>email</th>
                                        <th>name</th>
                                        <th>comment</th>
                                        <th>creer le </th>
                                        <th>verifier?</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($comments as $comment): ?>
                                        <tr>
                                            <td><?= $comment->getId();?></td>
                                            <td><?= $comment->getEmail_user();?></td>
                                            <td><?=$comment->getName_user(); ?></td>
                                            <td><?= $comment->getText(); ?> </td>
                                            <td><?= $comment->getCreated_at(); ?></td>
                                            <td><?= $comment->getVerify(); ?></td>
                                            <td><a href="./index.php?url=supprComment&id_comment=<?= $comment->getId() ?>">suprimer</a></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <h3>Vos messages</h3>
                            <table class="profil-table">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>email</th>
                                        <th>name</th>
                                        <th>message</th>
                                        <th>creer le </th>
                                        <th>verifier?</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($messages as $message): ?>
                                        <tr>
                                            <td><?= $message->getId();?></td>
                                            <td><?= $message->getEmail_user();?></td>
                                            <td><?=$message->getName_user(); ?></td>
                                            <td><?= $message->getText(); ?> </td>
                                            <td><?= $message->getCreated_at(); ?></td>
                                            <td><?= $message->getVerify(); ?></td>
                                            <td>
                                                <ul>
                                                    <li>
                                                    <form action="./index.php?url=verify&id_comment=<?= $message->getId() ?>"method="POST">
                                                        <button class="button">passer en commentaire?</button>
                                                    </form>
                                                    </li>
                                                    <li><a href="./index.php?url=supprComment&id_comment=<?= $message->getId() ?>">suprimer</a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
                
                <section id="secModify" class="modify">
                    <div class="content">
                        <div class="contentBx">
                            <h3>Modifier mes animes :</h3>
                         <ul>
                             <li><a href="./index.php?url=addSiteForm">ajouter un site</a></li>
                             
                              <?php if($user->getRoles() === 'Admin'): ?>
                              
                                  <li><a href ="./index.php?url=displayAnime"> Modifier les animes</a></li>
                                 <li><a href ="./index.php?url=viewCat">ajouter une Categorie/ modifier une Categorie</a></li>
                             <?php endif?>
                         </ul>   

                        </div>
                    </div>
                </section>
                </div>
            </div>
        </main>
        <?php require './public/assets/footer.php'; ?>
        <script type="text/javascript" src="./public/js/script.js"></script>
    </body>
</html>
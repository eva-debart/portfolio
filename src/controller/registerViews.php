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
           <div class='fond'>
               <div class="form">
                <h2>Enregistrez-vous</h2>
                <form action="./index.php?url=securityRegister" method="POST">
                    <fieldset>
                        <div class="field">
                            <label for="nickname">Nickname</label> <br>
                            <input type="text" id="nickname" name="nickname" value="" required>
                            
                        </div>
                        
                        <div class="field">
                            <label for="email">Email</label> <br>
                            <input type="email" id="email" name="email" value="" required>
                            
                        </div>
                        
                        <div class="field">
                            <label for="password">Mot de passe</label> <br>
                            <input type="password" id="name" name="password" value="" required>
                            
                        </div>
                        
                        <button>s'enregistrer</button>
                        <br>
                        <a href="./index.php?url=login">deja membre? se login</a>
                    </fieldset>
                </form>
               </div>
           </div>
                       
        </main>
        <?php require './public/assets/footer.php'; ?>
        <script type="text/javascript" src="../public/js/script.js"></script>
    </body>
</html>
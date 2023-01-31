<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>portfolio</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="./public/css/style.css">
    
    </head>
    
    <body>
        <div class="container">
            <?php require './public/assets/header.php'; ?>
            <main>
           <div class='fond'>
               <div class="form">
                <h2>ajouter un anime</h2>
                <form action="./index.php?url=addSite" method="POST" enctype="multipart/form-data">
                    <fieldset>
                        <div class="field">
                            <label for="nom">Name</label> <br>
                            <input type="text" id="nom" name="nom" value="" required>
                            
                        </div>
                        <div class="field">
                            <label for="imgGalerie">imgGalerie</label> <br>
                            <input type="file" id="imgGalerie" name="imgGalerie" value="" required>
                            
                        </div>

                        <div class="field">
                            <label for="imgGrand">imgGrand</label> <br>
                            <input type="file" id="imgGrand" name="imgGrand" value="" required>
                            
                        </div>
                        <div class="field">
                            <label for="url">url  (optional)</label> <br>
                            <input type="text" id="url" name="url" value="">
                            
                        </div>
                        <div class="field">
                            <label for="category">Category</label> <br>
                            <select name="category" id="category" required>
                                <option value="">--choisi sa category--</option>
                                <option value="a">site fait en formation html/css/php</option>
                                <option value="b">site js/REACT/node</option>
                                <option value="c">maquette</option>
                                <option value="d">logo</option>
                                <option value="e">divers</option>
                        </select>
                        </div>
                        
                        <button class="button">ajouter</button>
                        <br>
                    </fieldset>
                </form>
               </div>
           </div>
                       
        </main>
        <?php require './public/assets/footer.php'; ?>
        <script type="text/javascript" src="../public/js/script.js"></script>
    </body>
</html>
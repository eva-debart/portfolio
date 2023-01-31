<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>freshly restaurant</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/menus-style.css">
  
</head>
<body>
    <div class="container">
        <header class="header">
            <div>
             <img src="img/images/logo.png"
            alt="logo"class="logo">
            <h1>Freshly restaurant</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="#" class="current">Menus</a></li>
                    <li><a href="contact.php">Contact</a></li>
             
                </ul>
            </nav>
        </header>
        
        <main>
            <div class="container2">
                <h2>Details of our menus</h2>
                <p>Choose your main course according to your menu!</p>
                
                <div class="mix-container ">
        			<div class="mix-button">
        				<button type="button" data-filter="all">All</button>
        				<button type="button" data-filter=".category-a">Meat</button>
        				<button type="button" data-filter=".category-b">vegan</button>
        				<button type="button" data-filter=".category-c">fish</button>
        			</div>
        			<div class="img">
        			    	<div class="mix category-c" data-order="1">
            			    <img src="img/menus/fish-01.jpg" alt="grilled mussels">
            			     <p>
            			        <span>
            			            <img src="./img/images/fork-knife.svg">
            			             grilled mussels
            			         </span>
            			    </p>
            		    	</div>
            				<div class="mix category-b" data-order="2">
            			    <img src="img/menus/vegan-03.jpg" alt="mixed vegetables">
            			     <p>
            			        <span>
            			            <img src="./img/images/fork-knife.svg">
            			             mixed vegetables
            			         </span>
            			    </p>
            		    	</div>
            		    		<div class="mix category-a" data-order="3">
            			    <img src="img/menus/meat-03.jpg" alt="freshly kebabs">
            			     <p>
            			        <span>
            			            <img src="./img/images/fork-knife.svg">
            			             freshly kebabs
            			         </span>
            			    </p>
            			</div>
            				<div class="mix category-c" data-order="4">
            			    <img src="img/menus/fish-02.jpg" alt="cajun shrimp">
            			     <p>
            			        <span>
            			            <img src="./img/images/fork-knife.svg">
            			             cajun shrimp
            			         </span>
            			    </p>
            			</div>
            			<div class="mix category-a" data-order="5">
            			    <img src="img/menus/meat-01.jpg" alt="freshly burger">
            			    <p>
            			        <span>
            			            <img src="./img/images/fork-knife.svg">
            			             Freshly burger
            			         </span>
            			    </p>
            			</div>
            				<div class="mix category-b" data-order="6">
            			    <img src="img/menus/vegan-02.jpg" alt="grilled eggplants">
            			     <p>
            			        <span>
            			            <img src="./img/images/fork-knife.svg">
            			             grilled eggplants
            			         </span>
            			    </p>
            			</div>
            			<div class="mix category-a" data-order="7">
            			    <img src="img/menus/meat-02.jpg" alt="beef stew with pasta">
            			     <p>
            			        <span>
            			            <img src="./img/images/fork-knife.svg">
            			             beef stew with pasta
            			         </span>
            			    </p>
            			</div>
            			<div class="mix category-c" data-order="8">
            			    <img src="img/menus/fish-03.jpg" alt="grilled salmon">
            			     <p>
            			        <span>
            			            <img src="./img/images/fork-knife.svg">
            			             grilled salmon
            			         </span>
            			    </p>
            			</div>
            			<div class="mix category-b" data-order="9">
            			    <img src="img/menus/vegan-01.jpg" alt="Vegetable Jambalaya">
            			     <p>
            			        <span>
            			            <img src="./img/images/fork-knife.svg">
            			             Vegetable Jambalaya
            			         </span>
            			    </p>
            			</div>
        			</div>
    	    	</div>
    	    	
    	    	<h2>Deserts</h2>
    	    	<p>Here are the deserts you can choose to finish your meal (included in your menu).</p>
    	    	<div class="img">
    	    	    <div class="mix">
    	    	        <img src="img/menus/desert-01.jpg" alt="image d'un desert ">
    	    	         <p>
        			        <span>
        			            <img src="./img/images/fork-knife.svg">
        			             Tiramisu
        			         </span>
        			    </p>
    			    </div>
    			    <div class="mix">
    			         <img src="img/menus/desert-02.jpg" alt="image d'un desert ">
    			          <p>
        			        <span>
        			            <img src="./img/images/fork-knife.svg">
        			             freshly pancakes
        			         </span>
        			    </p>
    			    </div>
    			    <div class="mix">
    			      <img src="img/menus/desert-03.jpg" alt="image d'un desert ">
    			       <p>
        			        <span>
        			            <img src="./img/images/fork-knife.svg">
        			             Redberries cup
        			         </span>
        			    </p>
    			    </div>

    	    	  
    	    	    
    	    	</div>
    	    		<h2>Cocktails</h2>
    	    	<p>Soft drings are included,but if you want you can order one of our exellent cocktails (not included in the menu)</p>
    	    	<div class="img">
    	    	    <div class="mix">
    	    	     <img src="img/menus/drink-01.jpg" alt="image d'un desert "> 
    	    	      <p>
    			        <span>
    			            <img src="./img/images/fork-knife.svg">
    			             winter whiskey
    			         </span>
        			    </p>
    	    	    </div>
    	    	    <div class="mix">
    	    	        <img src="img/menus/drink-02.jpg" alt="image d'un desert ">
    	    	      <p>
    			        <span>
    			            <img src="./img/images/fork-knife.svg">
    			             paloma cocktail
    			         </span>
        			    </p>
    	    	    </div>
    	    	    <div class="mix">
    	    	      <img src="img/menus/drink-03.jpg" alt="image d'un desert ">
    	    	     <p>
    			        <span>
    			            <img src="./img/images/fork-knife.svg">
    			             bellini cocktail
    			         </span>
    			    </p>  
    	    	    </div>
    	    	   
    	    	</div>
            </div>
            
        </main>
        <div class="footer">
            <div class="element">
                <h2>Opening hours</h2>
                <ul>
                     <li>Monday : Closed</li>
                     <li>Tue-Wed : 9am - 10pm</li>
                     <li>Thu-Fri : 9am - 10pm</li>
                     <li>Sat-Sun : 5am - 10pm</li>
                 </ul>  
            </div>
            <div class="element">
                <h2>Contact</h2>
                <p>19 Christopher Street</p>
                <p>New York,</p>
                <p>NY 10014-3543</p>
                <p>+01 2000 800 9999</p> 
            </div>
            <div class="element">
                <h2>Social networks</h2>
                <div class="icone">
                      <ul>
                          <li class="i-marg"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                          <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                      </ul>
                  </div>
            </div>
        </div>
        </div>
           <footer>
	    	<p><a rel="license" href="https://3wa.fr/propriete-materiel-pedagogique/"><img alt="Propriété de la 3W Academy" src="https://3wa.fr/wp-content/themes/3wa2015/img/logos/big.png"></a></p>
		    <p>Ce matériel pédagogique est la propriété de la <a rel="license" href="https://3wa.fr/propriete-materiel-pedagogique/">3W Academy</a>. Cet exercice a été réalisé par Stephane Pereck.</p>
	    </footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>	
    	<script src="mixitup/mixitup.min.js"></script>
    	<script>
    	    if ($(".mix-container").length > 0) {   
                var mixer = mixitup('.mix-container');
            } 
    	</script>
    </body>
</html>
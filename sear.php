<?php
$q=$_POST['q'];
if($q==="fathey"){header("Location: card_f.html");}

elseif($q==="ahmed"){header("Location: card_a.html");}

elseif($q==="bassem"){header("Location: card_b.html");}

//==============Web Developer==============================
if($q==="Web Developer"){header("Location: card_sc_w.html");}
elseif($q==="wep"){header("Location: card_sc_w.html");}
elseif($q==="w"){header("Location: card_sc_w.html");}
elseif($q==="Wep"){header("Location: card_sc_w.html");}
elseif($q==="WEP"){header("Location: card_sc_w.html");}

//==============.Net==============================
if($q===".Net"){header("Location: card_sc_.n.html");}
elseif($q==="net"){header("Location: card_sc_.n.html");}
elseif($q==="Net"){header("Location: card_sc_.n.html");}
elseif($q==="NET"){header("Location: card_sc_.n.html");}
elseif($q==="N"){header("Location: card_sc_.n.html");}
elseif($q==="n"){header("Location: card_sc_.n.html");}

//==============Freelancer==============================
if($q==="Freelancer"){header("Location:card_sc_f.html");} 
elseif($q==="free"){header("Location:card_sc_f.html");}
elseif($q==="Free"){header("Location:card_sc_f.html");}
elseif($q==="Lancer"){header("Location:card_sc_f.html");}
elseif($q==="lancer"){header("Location:card_sc_f.html");}

//==============Designer==============================
if($q==="Designer"){header("Location:card_sc_d.html");} 
elseif($q==="Design"){header("Location:card_sc_d.html");} 
elseif($q==="disign"){header("Location:card_sc_d.html");} 
elseif($q==="designer"){header("Location:card_sc_d.html");} 
elseif($q==="DESIGNER"){header("Location:card_sc_d.html");} 
elseif($q==="disinr"){header("Location:card_sc_d.html");} 
elseif($q==="DISINR"){header("Location:card_sc_d.html");} 

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== REMIXICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="pro/css/sear/styles.css">

        <title>Animated search bar - Bedimcode</title>
    </head>
    <body>
        <div class="container">
            <form action="sear.php" method="POST" class="search" id="search-bar">
                <input type="search" placeholder="Type something..." name="q" class="search__input">
                <!-- <input type="password" placeholder="Password" name="pass"> -->
    
                <div class="search__button" id="search-button">
                    <i class="ri-search-2-line search__icon"></i>
                    <i class="ri-close-line search__close"></i>

                    
                    <!-- <input type="submit" value="Login" class="btn" > -->
                    
                </div>
                
            </form>
        </div>

        <!--=============== MAIN JS ===============-->
        <script src="pro/js/sear/main.js"></script>
    </body>
</html>
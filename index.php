<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=egde">
    <title>Website Proposal 3</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/menu.js"></script>
</head>
<body>
    <div id="head"><h1 id="headTitle">Website Proposal 3</h1></div>
    
       <div id="idHome" class="contentPage">
            <div id="idLabelHome" class="menuLabel"><p>Home</p></div>
            <div id="contentHome"><?php include "pages/home.php"; ?></div>
       </div>

       <div id="idNews" class="contentPage">
            <div id="idLabelNews" class="menuLabel"><p>Websites</p></div>
            <div id="contentNews"><?php include "pages/websites.php"; ?></div>
       </div>

       <div id="idAbout" class="contentPage">
            <div id="idLabelAbout" class="menuLabel"><p>Über mich</p></div>
            <div id="contentAbout"><?php include "pages/about.php"; ?></div>
       </div>

       <div id="idContact" class="contentPage">
            <div id="idLabelContact" class="menuLabel"><p>Kontakt</p></div>
            <div id="contentContact"><?php include "pages/contact.php"; ?></div>
       </div>

</body>
</html>

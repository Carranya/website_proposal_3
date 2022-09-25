<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=egde">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Proposal 3</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/menu.js"></script>
</head>
<body>
    <div id="head"><p id="headTitle">Head</p></div>
    <div id="main">Main
       <div id="idHome" class="contentPage">
            <div id="idLabelHome" class="menuLabel">Home</div>
            <div id="contentHome">Test Test</div>
       </div>

       <div id="idNews" class="contentPage">
            <div id="idLabelNews" class="menuLabel">News</div>
            <div id="contentNews">Test Test</div>
       </div>

       <div id="idContact" class="contentPage">
            <div id="idLabelContact" class="menuLabel">Kontakt</div>
            <div id="contentContact"><?php include "pages/contact.php"; ?></div>
       </div>

       <div id="idAbout" class="contentPage">
            <div id="idLabelAbout" class="menuLabel">Über mich</div>
            <div id="contentAbout">Test Test</div>
       </div>
    </div>



</body>
</html>

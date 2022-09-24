<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=egde">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Proposal 3</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="head"><p id="headTitle">Head</p></div>
    <div id="main">Main
        <input type="checkbox" id="idCheck">
       <div id="contentPage">Page
            <div class="toggle">Toggle</div>
       </div>
    </div>

<script>
    document.getElementById("idCheck").addEventListener("click", function(){slide()});

    function slide() {
        let move = document.getElementById("contentPage");
        move.style.transform = "translate(200px, 0)";
    }
</script>

</body>
</html>

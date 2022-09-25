const pages = [["idLabelHome", "idHome"],
                ["idLabelNews", "idNews"],
                ["idLabelAbout" ,"idAbout"],
                ["idLabelContact", "idContact"]
            ];

window.onload = function(){

    /*Load page "Home" from start*/
    openPage(pages, 0);

    /*Load picked page*/
    for (let i=0; i<4; i++){
        document.getElementById(pages[i][0]).addEventListener("click", function(){openPage(pages, i);});
    }
}


function openPage(pages, id) {

    /*Close all pages*/
    for(let setClose=0; setClose<4; setClose++){
        
        let pageclose = document.getElementById(pages[setClose][1]);
            pageclose.style.transform = "translate(-1175px, 0)";
    }

    /*Open picked page*/
    let pageOpen = document.getElementById(pages[id][1]);
            pageOpen.style.transform = "translate(0, 0)";

}


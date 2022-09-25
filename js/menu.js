
let o = 0;

window.onload = function(){
    const pageLabels = ["idLabelHome",
                        "idLabelNews",
                        "idLabelContact",
                        "idLabelAbout"];

   

    for (let i=0; i<4; i++){
        document.getElementById(pageLabels[i]).addEventListener("click", function(){openPage(pageLabels[i])});
    }
}


function openPage(id) {

    

    const pages = {idLabelHome:"idHome",
                    idLabelNews:"idNews",
                    idLabelContact:"idContact",
                    idLabelAbout:"idAbout"};

        if ( o == 0){
            let pageOpen = document.getElementById(pages[id]);
            pageOpen.style.transform = "translate(-695px, 0)";
            o++;
            alert(o);
        } else {
            let pageOpen = document.getElementById(pages[id]);
            pageOpen.style.transform = "translate(0, 0)";
            o--;
            alert(o);
        }
}


var nbconsonne=1;
var numlettre=1;

/*FONCTION CONSONNE*/
(function () {
    var consonne = function () {
        var tabconsonne = ['B', 'C', 'D', 'F', 'G','H','J','K','L','M','N','P','Q','R','S','T','V','W','X','Z'];
        var numRandom = Math.floor(Math.random()*tabconsonne.length);
        var motRandom = tabconsonne[numRandom];
        return motRandom;


    };
    $(".butconsonne").click(function () {
        var cons =consonne();
        $("#"+nbconsonne).html(cons);

        $.ajax({
            method: "GET",
            url: "traitement.php",
            data: { "lettre": cons}
        })
            .done(function(e) {
                console.log("data " + e );
            });
        nbconsonne = nbconsonne+1;
        console.log(nbconsonne);
        if (nbconsonne>9) {
            document.getElementById("butvoyelle").setAttribute("disabled", "disabled");
            document.getElementById("butconsonne").setAttribute("disabled", "disabled");
        }
    })
})();




/*FONCTION VOYELLE*/
(function () {
    var voyelle = function () {
        var tabvoyelle = ['A', 'E', 'I', 'O', 'U','Y'];
        var numRandom = Math.floor(Math.random()*tabvoyelle.length);
        var motRandom = tabvoyelle[numRandom];
       return motRandom;


    };
    $(".butvoyelle").click(function () {
        var voy = voyelle();
        $("#"+nbconsonne).html(voy);

        $.ajax({
            method: "GET",
            url: "traitement.php",
            data: { "lettre": voy}
        })
            .done(function(e) {
                console.log("data " + e );
            });
        nbconsonne = nbconsonne+1;
        if (nbconsonne>9) {
            document.getElementById("butvoyelle").setAttribute("disabled", "disabled");
            document.getElementById("butconsonne").setAttribute("disabled", "disabled");
        }
        console.log(nbconsonne);
    })
})();


/*Bouton reset*/
(function () {
    $(".reload").click(function () {
        window.location.reload();
    })
})();



/*COMPOSER LE MOT*/
(function (){
    $(".lettre").click(function () {
        $("#l"+numlettre).prop("disabled","disabled").show().html(this.textContent);
        numlettre++;
    });
})();

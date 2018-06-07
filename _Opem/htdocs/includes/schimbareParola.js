function schimbare_parola(){
        var x = document.getElementById("schimbare_parola");
        if (x.style.display != "none"){
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }

    function validare_camp(camp_input, camp_span){
        var field = document.forms["parola_noua"][camp_input].value;

        if (field == ""){
            document.getElementById(camp_span).innerHTML = "*Camp necompletat*";
            document.getElementById(camp_span).style.color = "red";
        }
        else
        {
            document.getElementById(camp_span).innerHTML = "";
        }
    }
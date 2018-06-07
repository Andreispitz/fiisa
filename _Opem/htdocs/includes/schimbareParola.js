function schimbare_parola(){
        var x = document.getElementById("schimbare_parola");
        if (x.style.display != "none"){
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }

    function validare_camp(id_form,camp_input, camp_span){
        var field = document.forms[id_form][camp_input].value;

        if (field == ""){
            document.getElementById(camp_span).innerHTML = "*Camp necompletat*";
            document.getElementById(camp_span).style.color = "red";
            document.getElementsByName(camp_input)[0].style.border = "1px solid red";
        }
        else
        {
            document.getElementById(camp_span).innerHTML = "";
            document.getElementsByName(camp_input)[0].style.border = "none";
        }
    }

    function setarile_profilului(){
        var x = document.getElementById("setari_profil");
        if (x.style.display != "none"){
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }

    }
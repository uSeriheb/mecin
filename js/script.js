

function verif()                                    
{ 
    var name = document.forms[0]["nom"];               
   var email = document.getElementById('mail') 
    console.log(name);

    if (name.value == "")                                  
    { 
        alert("Mettez votre nom."); 
        name.focus(); 
        return false; 
    }    
      
    if (email.value == "")                                   
    { 
        alert("Mettez une adresse email valide."); 
        email.focus(); 
        return false; 
    }    
    if (email.value.indexOf("@", 0) < 0)                 
    { 
        alert("Mettez une adresse email valide."); 
        email.focus(); 
        return false; 
    }    
    if (email.value.indexOf(".", 0) < 0)                 
    { 
        alert("Mettez une adresse email valide."); 
        email.focus(); 
        return false; 
    }    
    
}
verif();



var jour = 0,
    mois = 0,
    annee = 1949,
    selJour = document.getElementById('jour'),
    selMois = document.getElementById('mois'),
    selAnnee = document.getElementById('annee'),
    anneeOk = false,
    moisOk = false,
    valAnnee = false,
    valMois = false;
 
selJour.disabled = true;
 
for (var i = 1; i <= 12; i++) {
        var monOption = document.createElement('option');
        monOption.text = mois + i;
        monOption.value = mois + i;
 
        selMois.options[i] = monOption;
    }
for (var i = 1; i <= 73; i++) {
        var monOption = document.createElement('option');
        monOption.text = annee + i;
        monOption.value = annee + i;
 
        selAnnee.options[i] = monOption;
    }
 
selAnnee.onchange = function () {
        anneeOk = this.selectedIndex !== 0;
        valAnnee = parseInt(this.options[this.selectedIndex].value, 10) || false;
        if (anneeOk && moisOk) {
            afficherJours();
        }
    };
selMois.onchange = function () {
        moisOk = this.selectedIndex !== 0;
        valMois = parseInt(this.options[this.selectedIndex].value, 10) || false;
        if (anneeOk && moisOk) {
            afficherJours();
            selJour.disabled = false;
        } else {
            selJour.disabled = true;
        }
    };
 
function afficherJours() {
        var nbJours = 32 - (new Date(valAnnee, valMois - 1, 32)).getDate();
        for (var i = 1; i <= 31; i++) {
            if (i <= nbJours) {
                var monOption = document.createElement('option');
                monOption.text = jour + i;
                monOption.value = jour + i;
                selJour.options[i] = monOption;
            } else {
                selJour.options[i] = null;
            }
        }
    }







    
    
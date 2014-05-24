
    function verifEmail() {
    	var email = document.getElementById("adresse_email").value;
    	var emailconf = document.getElementById("emailConfirm").value;
    	if(email==emailconf){
    		document.getElementById("adresse_email").style.backgroundColor="#33CC00";
    		document.getElementById("emailConfirm").style.backgroundColor="#33CC00";
    	}
    }

    function verifPassword(){
    	var password = document.getElementById("mot_de_passe").value;
    	var passwordConfirm = document.getElementById("passwordConfirm").value;
    	if(passwordConfirm==password){
    		document.getElementById("passwordConfirm").style.backgroundColor="#33CC00"	;
    		document.getElementById("mot_de_passe").style.backgroundColor="#33CC00"	;
    	}
	}
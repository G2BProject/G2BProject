
    function verifEmail() {
        var email = document.getElementById("adresse_email").value;
        var emailconf = document.getElementById("emailConfirm").value;
        var reg = new RegExp('^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$', 'i');

        if(reg.test(email))
        {
            document.getElementById("adresse_email").style.backgroundColor="#33CC00";
            document.getElementById("emailConfirm").style.backgroundColor="#33CC00";
             if(email!=emailconf){
                document.getElementById("adresse_email").style.backgroundColor="#990000";
                document.getElementById("emailConfirm").style.backgroundColor="#990000";
            }
        }
        else
        {
            document.getElementById("adresse_email").style.backgroundColor="#990000";
            document.getElementById("emailConfirm").style.backgroundColor="#990000";
        }
       

    }

    function verifPassword(){
    	var password = document.getElementById("mot_de_passe").value;
    	var passwordConfirm = document.getElementById("passwordConfirm").value;
        var OK = true;
    	if(passwordConfirm!=password){
    		OK = false;
        }
        re = /[0-9]/;
        if(!re.test(password)) {
            OK = false;
        }
        re = /[a-z]/;
        if(!re.test(password)) {
            OK = false;
        }
        re = /[A-Z]/;
        if(!re.test(password)) {
            OK = false;
        }
        if(OK){
            document.getElementById("passwordConfirm").style.backgroundColor="#33CC00"  ;
            document.getElementById("mot_de_passe").style.backgroundColor="#33CC00" ;
        }else{
            document.getElementById("passwordConfirm").style.backgroundColor="#990000"  ;
            document.getElementById("mot_de_passe").style.backgroundColor="#990000" ;
        }
	}
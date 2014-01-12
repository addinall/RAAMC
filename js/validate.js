var debug = false;


//-------------------------
function checkAndSubmit() { 

    //  OK, since the HTML5 validation is only fleetingly
    //  implemented, we still need to write a BIT of Javascript
    //  to look at some basic client side validation.  I was trying
    //  to avoid ALL javascript, but still, we aren't loading
    //  any libraries or external frameworks, we are using the
    //  Javascript that comes with the browser.

    if (debug) {
        alert('in check and submit');
    }

    if (isValidForm()) {

        var butt = document.getElementById("register");
        if (debug) {
            alert('in butt click');
        }

        butt.click();
    }
}


//--------------------------
function validPostcode(code) {

      var postcodeRE = new RegExp(/^[0-9]{4}$/);
    
      return postcodeRE.test(code);
}

//--------------------------
function validEmail(email) {

    // this will sort out email injection security attacks.

      // var emailRE = new RegExp(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/);

      var emailRE = new RegExp(/^[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+\.[a-zA-Z]{2,4}$);

    
      return emailRE.test(email);
}

//-----------------------
function isValidForm()  {

        
        if (!document.raamcform.username.value)  { 
            alert('Please enter your name.'); 
            document.raamcform.username.focus(); 
            return false; 
        }

        if (!document.raamcform.address1.value)  { 
            alert('Please enter your address.'); 
            document.raamcform.address1.focus(); 
            return false; 
        }

        if (!document.raamcform.email.value)  { 
            alert('Please enter your email address.'); 
            document.raamcform.email.focus(); 
            return false; 
        }

        if (validEmail(document.raamcform.email.value) == false) {
            alert('Please enter a VALID email address.'); 
            document.raamcform.email.focus(); 
            return false; 
        }

        if (!document.raamcform.postcode.value)  { 
            alert('Please enter your postcode.'); 
            document.raamcform.postcode.focus(); 
            return false; 
        }


        if (validPostcode(document.raamcform.postcode.value) == false) {
            alert('Please enter a VALID postcode.'); 
            document.raamcform.postcode.focus(); 
            return false; 
        }

    if (debug) {
        alert('about to return true');
    }

    return true; 
}


//function check if empty
function hasEmptyFields(form) {
  let hasEmpty = false
  form.querySelectorAll('input, textarea').forEach(element => {
    if (element.value == '') {
      hasEmpty = true
    }
  })
  return hasEmpty
}

// check the sign up form
function validateSignUp(){
  const signUp = document.querySelector('#signUp')
  if (hasEmptyFields(signUp)) {
    alert("le champ ne peut pas être vide");
    return false;
  }

     //check the email format
     var mail=document.querySelector(".form-mail").value;
     var reg = /^[0-9a-zA-Z_.-]+[@][0-9a-zA-Z_.-]+([.][a-zA-Z]+){1,2}$/;
    console.log(mail);
     if (!reg.test(mail)){  
         alert("l'adresse mail n'est pas valide");
         return false;
     }

    //check password length
     var psws=document.querySelectorAll(".psw");
     console.log(psws);

     for (var psw of psws){
     if(psw.value.length<6){
       alert("Le mot de passe doit avoir au moin 6 caractères");
       return false;
     }}
    //check 2 passwords match
     var psw1=document.querySelector(".psw1").value;
     var psw2=document.querySelector(".psw2").value;
     if(psw1!==psw2){
       alert("Les 2 mots de passe ne sont pas identique");
       return false;
     }
    //check the ckechbox
    var checkbox = document.querySelector('#signUpCondition');
    if(checkbox.checked == false){
    alert("Veuillez lire et accepter les conditions générales");
    return false;
    }

}


// check the sign in form
function validateSignIn(){

  const signIn = document.querySelector('#signIn')
  if (hasEmptyFields(signIn)) {
    alert("le champ ne peut pas être vide");
    return false;
  }

       //check the email format
       var mail=document.querySelector(".mail").value;
       var reg = /^[0-9a-zA-Z_.-]+[@][0-9a-zA-Z_.-]+([.][a-zA-Z]+){1,2}$/;
      console.log(mail);
       if (!reg.test(mail)){  
           alert("l'adresse mail n'est pas valide");
           return false;
       }

}

function formConditionCheck(){
  var checkbox =document.getElementById('condition');
  console.log(checkbox);
  //If the checkbox has been checked
  if(checkbox.checked){
      //Enable the button.
      document.getElementById("submit_button").disabled = false;
  } else{
      //Disable the button.
      document.getElementById("submit_button").disabled = true;
  }
}

// check the contact form
function validateContact(){

  const contact = document.querySelector('#contact')
  if (hasEmptyFields(contact)) {
    alert("le champ ne peut pas être vide");
    return false;
  }

       //check the email format
       var mail=document.querySelector(".form-mail").value;
       var reg = /^[0-9a-zA-Z_.-]+[@][0-9a-zA-Z_.-]+([.][a-zA-Z]+){1,2}$/;
      console.log(mail);
       if (!reg.test(mail)){  
           alert("l'adresse mail n'est pas valide");
           return false;
       }

       var check=document.getElementsByTagName('checkbox').value;
       if(!check){
         return false;
       }

}


// check the comment form
function validateComments(){

  const comment = document.querySelector('#comment')
  if (hasEmptyFields(comment)) {
    alert("le champ ne peut pas être vide");
    return false;
  }
}

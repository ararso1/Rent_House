
/* Form Validation */

function validation(){
    var email = document.getElementById('email').value;
    var pass = document.getElementById('password').value;
    var con_pass = document.getElementById('con-password').value;
    var phone = document.getElementById('phone_no').value;
    var file = document.getElementById('file').value;


    var regx = /^([a-zA-Z0-9\.-]+)@([a-zA-Z0-9-]+).([a-z]{2,20})$/;
    
    
    if(email != ''){
        if(!regx.test(email)){
            var message = document.getElementById('label');
            message.innerHTML='Invalid email';
            message.style.visibility="visible";
            message.style.color="red";
        }
    }
    if(pass != ''){
        if(pass.length < 6){
            var message1 = document.getElementById('label1');
            message1.innerHTML = 'password must be greater than 6 character';
            message1.style.visibility='visible';
        }
        
    }
   
    //event.preventDefault();
    //ocument.getElementById("com").reset();
}

/* Validation for add property*/
(function () {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
  
          form.classList.add('was-validated')
        }, false)
      })
  })()

  
 var checkbox = document.getElementById('checkbox');
 var pass = document.getElementById('pass');

 checkbox.addEventListener('click', ()=>{
   if (pass.type ==="password") {
    pass.type="text";
   }else{
    pass.type="password";
   }
 })


 
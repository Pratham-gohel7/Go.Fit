let menubar = document.querySelector('#menubar');
let mynav = document.querySelector('.navbar');



menubar.onclick = () =>{
    menubar.classList.toggle('fa-times')
    mynav.classList.toggle('active')
}

document.querySelector('#loginbtn').onclick = () =>{
    document.querySelector('.login-form').classList.toggle('active');
  }
  document.querySelector('#closeloginform').onclick = () =>{
    document.querySelector('.login-form').classList.remove('active');
  }
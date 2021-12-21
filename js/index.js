var hambtn=document.getElementById("hamburger_menu");
var nav=document.querySelector('nav');
var closebtn=document.getElementById("exit_menu");

hambtn.addEventListener('click',() =>{
  nav.classList.add("menu-btn");
})

closebtn.addEventListener('click',() =>{
  nav.classList.remove("menu-btn");
})



// Open and close modals
var openbtns=document.querySelectorAll("#open");
var modals_cont=document.querySelectorAll(".modal-container");
var closebtns=document.querySelectorAll("#close");
var active=0;
openbtns.forEach((btns) =>{
btns.addEventListener("click",()=>{
  var num=btns.getAttribute("data-pr");
  active=num;
  modals_cont[num].classList.add("show");
})
})


closebtns.forEach((btns) =>{
  btns.addEventListener("click",()=>{
    modals_cont[active].classList.remove("show");
  })
  })






const form=document.getElementById("form");
form.addEventListener('submit',(event)=>{
  var name=document.querySelector("#name");
  var email=document.querySelector("#email");
  var message=document.querySelector("#message");
  name.innerHTML=" ";
  email.innerHTML=" ";
  message.innerHTML=" ";

  event.preventDefault();
});

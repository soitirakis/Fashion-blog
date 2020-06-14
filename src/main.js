/*<?php
  header('Content-Type: text/javascript; charset=UTF-8');
?>*/
"use strict;"

//function like an article
function buttonLike(value){
  let id = document.getElementsByClassName("likeable")[value];
  let atribute = id.attributes;
  console.log(atribute["value"]);
  id.innerHTML = "<i class='fa fa-check'></i> Liked";
}


//function comment an article
window.onclick = function(e){
  let id = e.target.type;
  if (id === 'submit') {
    let i = e.target.value;
    let lista = document.getElementsByClassName('para')[i];
    let txt = document.getElementsByClassName('comments')[i];
    //$("#para").append(txt);
    let item = document.createElement("p");
    item.textContent = txt.value;
    lista.appendChild(item);
  }
  e.preventDefault();
}

//tooltip
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});


//function to singUp
function loadDoc(){
    let newUser = document.getElementsByClassName('form-group')[0];
    let newForm = "<label for='newUserName'>Insert new user name</label><input type='text' name='newUserName' class='form-control' placeholder='Insert new user name'>";
    newUser.innerHTML = newForm;
    let newPassword = document.getElementsByClassName('form-group')[1];
    let newPass = "<label for='password'>Insert new password</label><input type='password' name='newPassword' class='form-control' placeholder='Insert new password'>";
    newPassword.innerHTML = newPass;
    let signUp = document.getElementsByClassName("signUp")[0];
  //  let createHiddenField = "<button type='submit' id='hiddenBtn' style='display:none;'></button>";
  //  signUp.outerHTML = createHiddenField;
    let createAccount = "<button type='submit' class='btn btn-dark' >Create Account</button>";
    signUp.outerHTML = createAccount;
    let login = document.getElementsByClassName("login")[0];
    login.style.display = "none";
}

//form validation signUp
/*
function validateForm() {
  console.log("form submited");
}*/
/*  let x = document.getElementsByName["newUserName"].value;
  console.log(x);
  if (x == "") {
    alert("Name must be filled out");
    console.log("eroare");
    //return false;
  }
*/
/*function useTemplate() {
  let data = [
    {title: "TITLE HEADING", description: "Title description", text: "Dont miss!", text2: 'some text here', buton: "Like" },
    {title: "TITLE HEADING", description: "Title description", text: "some text", text2: "another text", buton: "Like"}
  ];

  let template = document.querySelector("#produs-template").content;
  let produse = document.querySelector("#produse");

  for(let item of data) {
    let produs = template.cloneNode(true);

    produs.querySelector(".title").textContent = item.title;
    produs.querySelector(".description").textContent = item.description;
    produs.querySelector(".text").textContent = item.text;
    produs.querySelector(".text2").textContent = item.text2;
    produs.querySelector(".buton").textContent = item.buton;

    produse.appendChild(produs);
  }
}*/

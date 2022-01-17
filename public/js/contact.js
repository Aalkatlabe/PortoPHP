// Dark mode=================================>
const button = document.querySelector(".btn-dark");

let darkMode = JSON.parse(localStorage.getItem("darkModeTheme"));
const autoTheme = localStorage.getItem("darkModeTheme");


let darkModeOn = false;
let autoThemeMode = false;
const toggleTheme = function () {
    if(darkMode){
        darkMode = false;
    } 
    else{
        darkMode = true;
    } 
    localStorage.setItem("darkModeTheme", darkMode);
    const elements = document.querySelectorAll(
        ".mb-4" )
    for(let i = 0; i < elements.length; i++ ) {
    const element = elements[i];
    element.classList.toggle("dark-mode");
    }
    if(darkModeOn === false){
        darkModeOn = true
        }
        else{
            darkModeOn = false
        }
        console.log(darkModeOn);
};  

console.log(localStorage.getItem("darkModeTheme"))

if(darkMode){
    const elements = document.querySelectorAll(
        ".mb-4" )
    for(let i = 0; i < elements.length; i++ ) {
    const element = elements[i];
    element.classList.toggle("dark-mode");
    }
    if(darkModeOn == false){
        darkModeOn = true
        }
        else{
            darkModeOn = false
        }
        console.log(darkModeOn);
};

button.addEventListener('click', toggleTheme);

 const timeSwitcher = function () {
     const date = new Date();
     console.log(date);
     if(date.getHours() > 7 && date.getHours() < 17  ){
         if(darkModeOn == false && autoThemeMode == false){
         toggleTheme();
         autoThemeMode = true;
         }
         else{
            if(darkModeOn == true && autoThemeMode == false){
                autoThemeMode = true;
             }   
         }
     }
     else{
        if(darkModeOn == true && autoThemeMode == true){
            toggleTheme();
            autoThemeMode = false;
        }
     }
    };

 setInterval(timeSwitcher, 36000);
//------------------------------------------------------------------------------------------------------------///
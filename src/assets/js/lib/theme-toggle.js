//document.getElementById("themeToggle").addEventListener("click", myFunction);
//
//function myFunction() {
//  alert ("Hello World!");
//}

//function myFunction() {
//   document.getElementById("body").classList.add('dark');
//}

//document.getElementById('themeSwitch').addEventListener('change', function(event){
//  (event.target.checked) ? document.html.setAttribute('data-theme', 'dark') : document.html.removeAttribute('data-theme');
//});

 document.getElementById('themeSwitch').addEventListener('change', function(event){
(event.target.checked) ? document.getElementById("body").classList.add('dark') : document.getElementById("body").classList.remove('dark');
});
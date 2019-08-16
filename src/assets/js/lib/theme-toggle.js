document.getElementById('themeSwitch').addEventListener('change', function(event){
(event.target.checked) ? document.getElementById("body").classList.add('dark') : document.getElementById("body").classList.remove('dark');
});
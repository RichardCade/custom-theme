var themeSwitch = document.getElementById('themeSwitch');
if (themeSwitch) {
  initTheme();
  
  themeSwitch.addEventListener('change', function (event) {
    resetTheme(); // update color theme
  });

  function initTheme() {
    var darkThemeSelected = (localStorage.getItem('themeSwitch') !== null && localStorage.getItem('themeSwitch') === 'dark');
    // update checkbox
    themeSwitch.checked = darkThemeSelected;
    // update body data-theme attribute
    darkThemeSelected ? document.querySelector('body').classList.add('dark') : document.querySelector('body').classList.remove('dark');
  };
  
  function resetTheme() {
    if (themeSwitch.checked) { // dark theme has been selected
      document.querySelector('body').classList.add('dark');
      localStorage.setItem('themeSwitch', 'dark'); // save theme selection 
    } else {
      document.querySelector('body').classList.remove('dark');
      localStorage.removeItem('themeSwitch'); // reset theme selection 
    }
  };
}
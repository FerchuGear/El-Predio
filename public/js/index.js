var loading = function(e) {
    e.preventDefault();
    e.stopPropagation();
    e.target.classList.add('loading');
    e.target.setAttribute('disabled','disabled');
    setTimeout(function(){
      e.target.classList.remove('loading');
      e.target.removeAttribute('disabled');
    },1500);
  };
  
  var btns = document.querySelectorAll('button');
  for (var i=btns.length-1;i>=0;i--) {
    btns[i].addEventListener('click',loading);
  }
  function redirectWithDelay() {
    setTimeout(function() {
        window.location.href = 'public/screens/reservas.php';
    }, 1000); // 1000 ms = 1 segundo
}

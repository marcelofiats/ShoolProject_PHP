


function entrar(){
    var bo = window.document.querySelector('div#faz')
    faz.addEventListener('onclick', entrar)
    bo.innerHTML = 'Usuario Invalido'
}

function aluno(){
    var aluno = window.document.querySelector('div#nome').textContent
    alert(`Olá ${aluno} sejá bem vindo`)
}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  clearInterval(tmr)
  showSlides(slideIndex += n);
  transicao()
  ga('send', 'event', 'galeria', 'next_prev', 'Titulo da página');
 
 }

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {
    slideIndex = 1
  }
  if (n < 1) {
    slideIndex = slides.length
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[slideIndex - 1].style.display = "block";
}

function transicao(){
    tmr = setInterval(tradeSlides,4000)

}

function tradeSlides(){
    showSlides(slideIndex += 1);
  ga('send', 'event', 'galeria', 'next_prev', 'Titulo da página');
}
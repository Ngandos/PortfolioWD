//paramétrage
var tailleCercle = 240;
var vitesse = -60;

//variables
var container = document.getElementById('container');
var carousel = document.getElementById('carousel');
var img = carousel.getElementsByTagName('img');

//tailles images
carousel.style.width = 120 + "px";
carousel.style.height = 170 + "px";

//taille sol
var sol = document.getElementById('sol');
sol.style.width = tailleCercle * 3 + "px";
sol.style.height = tailleCercle * 3 + "px";

setTimeout(init);//start

//animation de rotation
var animationName = (vitesse > 0 ? 'spin' : 'spinRevert');
carousel.style.animation = `${animationName} ${Math.abs(vitesse)}s infinite linear`;

//animation de depart
function init(delai) {
  for (var i = 0; i < img.length; i++) {
    img[i].style.transform = "rotateY(" + (i * (360 / img.length)) + "deg) translateZ(" + tailleCercle + "px)";//on deplace chaque image à sa place
    img[i].style.transition = "transform 1s";
    img[i].style.transitionDelay = delai || (img.length - i) / 4 + "s";
  }
}

//deplacement à l'aide de la souris
var departX, departY, arriveX, arriveY, 
    distanceX = 0, distanceY = 0,
    transitionX = 0, transitionY = 10;

function moveCarousel(obj) {
  //évitons que la caméra puisse aller dans le sol
  if(transitionY > 180) transitionY = 180;
  if(transitionY < 0) transitionY = 0;
  
  obj.style.transform = "rotateX(" + (-transitionY) + "deg) rotateY(" + (transitionX) + "deg)";
}

document.onpointerdown = function (e) {
  var departX = e.clientX,
      departY = e.clientY;

  this.onpointermove = function (e) {
    var arriveX = e.clientX, arriveY = e.clientY;
    distanceX = arriveX - departX;
    distanceY = arriveY - departY;
    transitionX += distanceX * 0.1;
    transitionY += distanceY * 0.1;
    moveCarousel(container);
    departX = arriveX;
    departY = arriveY;
  };

  this.onpointerup = function (e) {
    this.onpointermove = this.onpointerup = null;
  };

  return false;
};

document.onmousewheel  = function(e) {
  tailleCercle += e.wheelDelta / 2;
  init(1);
}

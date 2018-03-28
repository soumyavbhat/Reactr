(function(){
  console.log('connected');

  var mainBtn1 = document.querySelector('#mainBtn1'),
      mainBtn2 = document.querySelector('#mainBtn2'),
      mainBtn3 = document.querySelector('#mainBtn3'),
      mainBtn4 = document.querySelector('#mainBtn4'),
      mainBtn5 = document.querySelector('#mainBtn5'),
      mainBtn6 = document.querySelector('#mainBtn6'),
      sliderclip = document.querySelector('.sliderclip'),
      title = document.querySelector('.title'),
      desc = document.querySelector('.desc'),

      mainBtns = document.querySelectorAll('.menu');

      function changeColour()
      {
        for(var i = 0; i <mainBtns.length; i++)
        {
          console.log("color");
    mainBtns[i].style.backgroundColor = '#464646';
        }


        mainBtns.forEach(function(mainBtn, index){
      mainBtn.addEventListener('click', changeSlide, false);
      });
      }

  function changeSlide()
  {


    // for(var i=1; i<=mainBtns.lenth; i++)
    // {
    //   console.log("works?");
    //   mainBtns[i].classList.add('nonActive');
    // }

let index = slide[this.id];
console.log("works");

this.style.backgroundColor = index.cl;
sliderclip.style.backgroundImage = index.img;
title.firstChild.nodeValue = index.name;
desc.firstChild.nodeValue = index.descript;
  }

  mainBtns.forEach(function(mainBtn, index){
mainBtn.addEventListener('click', changeColour, false);
});



})();

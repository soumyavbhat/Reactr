(()=>{
  var closeButton = document.querySelector('.close');
  var popup = document.querySelector('.popup');
var addButton = document.querySelector('.add');
var addButton2 = document.querySelector('.add2');



function closepopup()
{
  popup.style.display = 'none';
}

// var pid = 0;
function createEvent()
{
  console.log("element");
  // pid++;
  // var newPanel = document.createElement("p");
  // newPanel.id=pid;
  var project = document.querySelector('.project-con');
var optClass = document.createElement('p');

  var h1  = document.createElement('h1');
  var heading1 = document.createTextNode("PROJECT:");
  h1.appendChild(heading1);
  project.appendChild(h1);
  // var select = document.createElement("select");

var select = document.createElement('select');
var option = document.createElement('option');
var option2 = document.createElement('option');
var op1 =  new Option("Option 1", "5");
var op2 =  new Option("Option 2", "6");
option.appendChild(op1);
option2.appendChild(op2);
select.appendChild(option);
select.appendChild(option2);
project.appendChild(select);
  // proj.appendChild(projects);

  var h2  = document.createElement('h1');
  var heading2 = document.createTextNode("ROLE:");
  h2.appendChild(heading2);
  project.appendChild(h2);

  var br = document.createElement('br');
  project.appendChild(br);

  var selectRole = document.createElement('select');
  var Roption = document.createElement('option');
  var Roption2 = document.createElement('option');
  var Roption3 = document.createElement('option');

  var op1 =  new Option("Front-end developer and designer", "1");
  var op2 =  new Option("Front-end developer", "2");
  var op3 =  new Option("Back-end developer", "3");

  Roption.appendChild(op1);
  Roption2.appendChild(op2);
  Roption3.appendChild(op3);

  selectRole.appendChild(Roption);
  selectRole.appendChild(Roption2);
  selectRole.appendChild(Roption3);

  project.appendChild(selectRole);


var br = document.createElement('br');
project.appendChild(br);

  }

  function createEvent2()
  {
    var program = document.querySelector('.program-con');
  var optClass = document.createElement('p');

    var h1  = document.createElement('h1');
    var heading1 = document.createTextNode("PROGRAM:");
    h1.appendChild(heading1);
    program.appendChild(h1);

  var optClass = document.createElement('p');
var text = ("Enter Program here");
    var input  = document.createElement('input');
    input.value = text;
    optClass.appendChild(input);
    program.appendChild(optClass);


    var br = document.createElement('br');
    project.appendChild(br);

  }

addButton.addEventListener('click', createEvent, false);
addButton2.addEventListener('click', createEvent2, false);
closeButton.addEventListener('click', closepopup, false);
//
})();

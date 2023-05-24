function launchAnimation() {
  if(document.getElementById('myElement').innerHTML!="<div class=''><ul style='list-style-type:none;'><li>React Native</li><li>Typescript</li><li>Firebase</li><li>Firestore</li><li>noSql</li></ul></div>"){
  document.getElementById('myElement').innerHTML="<div class=''><ul style='list-style-type:none;'><li>React Native</li><li>Typescript</li><li>Firebase</li><li>Firestore</li><li>noSql</li></ul></div>";
  document.getElementById('noPointerElement').style="cursor:default;color:rgb(56,53,51);justify-content: left; min-height: 0px; letter-spacing: 0px; animation-fill-mode: forwards;animation-duration: 2s;animation-name: modificationstyletechno";      
       
  document.getElementById('myElement').className = 'my-animation';
  }else{document.getElementById('myElement').className = 'my-animation2';document.getElementById('myElement').innerHTML="<div class='card'></div>";
  document.getElementById('noPointerElement').style="cursor:pointer; ";
}
} 

function launchAnimation2() {
  if(document.getElementById('myElement2').innerHTML!="<div class=''><ul style='list-style-type:none;'><li>Php</li><li>MySql</li><li>Sql</li><li></li><li></li></ul></div>"){
  document.getElementById('myElement2').innerHTML="<div class=''><ul style='list-style-type:none;'><li>Php</li><li>MySql</li><li>Sql</li><li></li><li></li></ul></div>";
  document.getElementById('noPointerElement2').style="cursor:default;color:rgb(56,53,51);justify-content: left; min-height: 0px; letter-spacing: 0px; animation-fill-mode: forwards;animation-duration: 2s;animation-name: modificationstyletechno";      
       
  document.getElementById('myElement2').className = 'my-animation';
  }else{document.getElementById('myElement2').className = 'my-animation2';document.getElementById('myElement2').innerHTML="<div class='card'></div>";
  document.getElementById('noPointerElement2').style="cursor:pointer; ";
}
}

function launchAnimation3() {
  if(document.getElementById('myElement3').innerHTML!="<div class=''><ul style='list-style-type:none;'><li>React Native</li><li>Typescript</li><li>Firebase</li><li>Firestore</li><li>noSql</li></ul></div>"){
  document.getElementById('myElement3').innerHTML="<div class=''><ul style='list-style-type:none;'><li>React Native</li><li>Typescript</li><li>Firebase</li><li>Firestore</li><li>noSql</li></ul></div>";
  document.getElementById('noPointerElement3').style="cursor:default;color:rgb(56,53,51);justify-content: left; min-height: 0px; letter-spacing: 0px; animation-fill-mode: forwards;animation-duration: 2s;animation-name: modificationstyletechno";      
       
  document.getElementById('myElement3').className = 'my-animation';
  }else{document.getElementById('myElement3').className = 'my-animation2';document.getElementById('myElement3').innerHTML="<div class='card'></div>";
  document.getElementById('noPointerElement3').style="cursor:pointer; ";
}
}       

function launchAnimation4() {
  if(document.getElementById('myElement4').innerHTML!="<div class=''><ul style='list-style-type:none;'><li>React Native</li><li>Typescript</li><li>Firebase</li><li>Firestore</li><li>noSql</li></ul></div>"){
  document.getElementById('myElement4').innerHTML="<div class=''><ul style='list-style-type:none;'><li>React Native</li><li>Typescript</li><li>Firebase</li><li>Firestore</li><li>noSql</li></ul></div>";
  document.getElementById('noPointerElement4').style="cursor:default;color:rgb(56,53,51);justify-content: left; min-height: 0px; letter-spacing: 0px; animation-fill-mode: forwards;animation-duration: 2s;animation-name: modificationstyletechno";      
       
  document.getElementById('myElement4').className = 'my-animation';
  }else{document.getElementById('myElement4').className = 'my-animation2';document.getElementById('myElement4').innerHTML="<div class='card'></div>";
  document.getElementById('noPointerElement4').style="cursor:pointer; ";
}
}       
              
function toggleHiddenDiv() {
  $('#hidden-div').collapse('toggle');
}

$(document).ready(function() {
  $('.click-div').click(function() {
    toggleHiddenDiv();
  });
});

function toggleHiddenDiv2() {
  $('#hidden-div2').collapse('toggle');
}

$(document).ready(function() {
  $('.click-div2').click(function() {
    toggleHiddenDiv2();
  });
});

function toggleHiddenDiv3() {
  $('#hidden-div3').collapse('toggle');
}

$(document).ready(function() {
  $('.click-div3').click(function() {
    toggleHiddenDiv3();
  });
});

function toggleHiddenDiv4() {
  $('#hidden-div4').collapse('toggle');
}

$(document).ready(function() {
  $('.click-div4').click(function() {
    toggleHiddenDiv4();
  });
});
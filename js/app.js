$(document).ready(function() {
    setInterval(test, 2000);
    var i = 1;
  
    function test() {
      i = (i % 4) + 1;
      $('#btn' + i).prop('checked', true);
    }
  });

var scaled = false;
function scale(num){
  id = "gallery-img-" + num;
  document.getElementById(id).classList.toggle("gallery-img-active");
  document.getElementById("dark-bg").classList.toggle("dark-bg-active");
  
}
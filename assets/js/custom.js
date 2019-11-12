$(".show").on("click", function(){
  $(".mask").addClass("active");
  $(".maskabout").removeClass("active");
});
function closeModal(){
  $(".mask").removeClass("active");
}
$(".close, .mask").on("click", function(){
  closeModal();
});
$(document).keyup(function(e) {
  if (e.keyCode == 27) {
    closeModal();
  }
});
$(".showabout").on("click", function(){
  $(".maskabout").addClass("active");
  $(".mask").removeClass("active");
});
function closeModalAbout(){
  $(".maskabout").removeClass("active");
}
$(".close, .maskabout").on("click", function(){
  closeModalAbout();
});
$(document).keyup(function(e) {
  if (e.keyCode == 27) {
    closeModalAbout();
  }
});
document.getElementById('show-element').onclick = function() {
  var element = document.getElementById('to-show');
  if (element.className === 'hide') {
    element.className = 'show';
    document.getElementById('show-element').className = 'active';
  } else {
    element.className = 'hide';
    document.getElementById('show-element').className = '';
  }
}
function uncheckElements()
{
 var uncheck=document.getElementsByTagName('input');
 for(var i=0;i<uncheck.length;i++)
 {
  if(uncheck[i].type=='checkbox')
  {
   uncheck[i].checked=false;
  }
 }
}
$(document).ready(function(){
  $(window).resize(init);
  init();
});

function init() {
  var maxWidth = $('body').width();
  var sidebarWidth = $('#sidebar').width();
  
  var ml = ( maxWidth > 1200 ) ? sidebarWidth + 50 : sidebarWidth + 40;
  var w = maxWidth-sidebarWidth-20;
  
  if( maxWidth < 767 ) {
    w = maxWidth;
    ml = 0;
  }
  
  $('#articles').css({
    width: w,
    marginLeft: ml
  });
}

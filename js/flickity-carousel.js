
// document.addEventListener("DOMContentLoaded", function(){
//   var carousel = document.querySelector('.carousel');
//   console.log('it')
//   var flkty = new Flickity( carousel, {
//     imagesLoaded: true,
//     percentPosition: false,
//   });
//   console.log('made')
//   var imgs = carousel.querySelectorAll('.carousel-cell img');
//   // get transform property
//   var docStyle = document.documentElement.style;
//   var transformProp = typeof docStyle.transform == 'string' ?
//     'transform' : 'WebkitTransform';

//   flkty.on( 'scroll', function() {
//     flkty.slides.forEach( function( slide, i ) {
//       var img = imgs[i];
//       var x = ( slide.target + flkty.x ) * -1/3;
//       img.style[ transformProp ] = 'translateX(' + x  + 'px)';
//     });
//   });
// });

document.addEventListener("DOMContentLoaded", function(){
  var carousel = document.querySelector('.carousel');
  // console.log(carousel)
  // var flkty = new Flickity( carousel, {
  //   imagesLoaded: true,
  //   percentPosition: false,
  //   pageDots: false,
  // });
  carousel.style.opacity = 1;

  var next_prev_buttons = document.getElementsByClassName("flickity-button")
  for (i = 0; i < next_prev_buttons.length; i++) {
    // console.log(next_prev_buttons[i])
    next_prev_buttons[i].style.opacity = 0;
    // x[i].style.backgroundColor = "red";
  }
  
  var dots = document.querySelector('.flickity-page-dots');
  dots.style.opacity = 0;

  // next_prev_buttons.style.opacity = 0;

  // var PrevNextButton = Flickity.PrevNextButton;
  // PrevNextButton.prototype.update = function() {
  //   // index of first or last cell, if previous or next
  //   var cells = this.parent.cells;
  //   // enable is wrapAround and at least 2 cells
  //   if ( this.parent.options.wrapAround && cells.length > 1 ) {
  //     this.enable();
  //     return;
  //   }
  //   var lastIndex = cells.length ? cells.length - 1 : 0;
  //   var boundIndex = this.isPrevious ? 0 : lastIndex;
  //   var isEnabling;
  //   if ( this.parent.options.contain ) {
  //     var boundCell = cells[ boundIndex ];
  //     var selectedCell = cells[ this.parent.selectedIndex ];
  //     isEnabling = selectedCell.target != boundCell.target;
  //   } else {
  //     isEnabling = this.parent.selectedIndex == boundIndex
  //   }
  //   var method = isEnabling ? 'enable' : 'disable';
  //   this[ method ]();
  // };

  // var flkty = new Flickity( '.gallery', {
  //   initialIndex: 1,
  //   contain: true
// });







});

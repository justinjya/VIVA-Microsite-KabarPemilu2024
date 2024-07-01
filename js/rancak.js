function back_to_top(){
  $('#btt').click(function(){
	$('body,html').scrollTop(0);
    return false;
  });	
}

function ClosePopup(){
  $('.open-sticky').removeClass('show-sticky');
  $('.rancak-popup').fadeOut('fast');
};

function toggle_filter(){
  $('.section-search-filter').click(function(){
    $(this).find('.svgicon').slideToggle('fast');
	$('.section-filter').slideToggle('fast');
    return false;
  });	
}


var open_sticky = function(){
  "use strict";
  $('.open-sticky').click(function(){
    var get_id = $(this).attr('title');
	$('.open-sticky[title=' + get_id +']').toggleClass('show-sticky');
	$('.open-sticky').not('.open-sticky[title=' + get_id +']').removeClass('show-sticky');
    $('#popup-' + get_id).fadeToggle('fast');
    $('.rancak-popup').not('#popup-' + get_id).fadeOut('fast');
	if($('#popup-' + get_id).hasClass("popup-alert-temporary")){
      setTimeout(function() {
        ClosePopup();
      },2000);
	};
	return false;
  });	
};

var close_popup = function(){
  "use strict";
  $('.rancak-popup-overlay, .rancak-popup-close, .popup-submit-close').click(function(){
	ClosePopup();
	return false;
  });
};

$(document).ready(function(){
  "use strict";
  open_sticky();
  back_to_top();
  toggle_filter();
  custom_password();
  close_popup();
});


let localStorageSize = function () {
  let _lsTotal = 0,_xLen, _x;
  for (_x in localStorage) {
  if (!localStorage.hasOwnProperty(_x)) continue;
      _xLen = (localStorage[_x].length + _x.length) * 2;
      _lsTotal += _xLen;
  }
return  (_lsTotal / 1024).toFixed(2);
}

console.log( `Cache size: ${localStorageSize()}kb`)



// var array = [{id: 1, date:'Minggu, 12 Februari 2023'}, {id: 2, date:'Jumat, 8 Maret 2024'}, {id: 3, date:'Kamis, 9 Maret 2023'}];


// array.sort(function(a, b) {
//     var c = new Date(a.date);
//     var d = new Date(b.date);
//     return d-c;
// });


// console.log(array);
function login() {

  const logInVals = document.querySelectorAll('.loginInput');
}

function validateEmail(email) {
  var validRegex = /^[a-zA-Z0-9]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

  if (validRegex.test(email)) {

    return true;

  } else {

    myFunction()

    return false;

  }
}

function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}

function selectSubCat(county) {
  var e = document.getElementById("selectCounty");
  var value = e.value;
  var text = e.options[e.selectedIndex].text;
  changeSelectOptions(text)

}

function changeSelectOptions(text) {
  switch (text) {
    case 'Alba':
      var new_options = ['Alba Iulia', 'Câmpeni', 'Teiuș', 'Sebeș', 'Baia de Arieș'];
      break;
    case 'Bucuresti':
      var new_options = ['Bucuresti', 'Buftea', 'Bragadiru', 'Chitila', 'Cernica'];
      break;
    case 'Cluj':
      var new_options = ['Cluj-Napoca', 'Câmpia Turzii', 'Dej', 'Ocna Dejului', 'Pintic'];
      break;
    case 'Constanta':
      var new_options = ['Constanța', 'Negru Vodă', 'Ovidiu', 'Mangalia', 'Medgidia'];
      break;
    case 'Iasi':
      var new_options = ['Iași', 'Podu Iloaiei', 'Hârlău', 'Sirețel', 'Șcheia'];
      break;
    default:
      var new_options = ['Oras'];

  }
  removeOptions(document.getElementById('citySelect'));

  for (var i = 0; i < 5; i++) {
    var opt = document.createElement('option');
    opt.value = new_options[i];
    opt.innerHTML = new_options[i];
    document.getElementById('citySelect').appendChild(opt);
  }
}

function removeOptions(selectElement) {
  var i, L = selectElement.options.length - 1;
  for (i = L; i >= 0; i--) {
    selectElement.remove(i);
  }
}

function toggleText() {

  var showMoreText =
    document.getElementById("moreStudents");

  var buttonText =
    document.getElementById("showMoreStudentsButton");

  if (showMoreText.style.display === "none") {


    showMoreText.style.display = "inline";

    buttonText.innerHTML = "Show Less";
  }

  else {

    showMoreText.style.display = "none";

    buttonText.innerHTML = "Show More";
  }
}

// #bikes1_wrapper , #bikes2_wrapper , #bikes3_wrapper , #bikes4_wrapper



jQuery(document).ready(function ($) {

  

  $(function () {

    // Lightbox function
    var lightbox = function () {
      var src = $('.active').attr('src');
      $('#lightbox img').attr('src', src);
      $('#lightbox img').attr('height', "600px");
      $('#lightbox img').attr('width', "800px");
    }

    // Image is clicked
    $('img').click(function () {
      $('#lightbox').css('display', 'flex');
      $(this).addClass('active');
      lightbox();
    });

    // Close button clicked
    $('.close').click(function () {
      $('img').removeClass('active');
      $('#lightbox').hide();
    });

    // Next button clicked
    $('.next').click(function () {
      if ($('.active').parent('.gallery').children('img:last').hasClass('active')) {
        $('.active').removeClass().parent('.gallery').children('img:first').addClass('active');
        lightbox();
      } else {
        $('.active').removeClass().next('img').addClass('active');
        lightbox();
      }
    });

    // Prev button clicked
    $('.prev').click(function () {
      if ($('.active').parent('.gallery').children('img:first').hasClass('active')) {
        $('.active').removeClass().parent('.gallery').children('img:last').addClass('active');
        lightbox();
      } else {
        $('.active').removeClass().prev('img').addClass('active');
        lightbox();
      }
    });

  });
  $('.searchSelect').select2();
});
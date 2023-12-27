$(document).ready(function () {
  switchDiv();

  $("li:first-child").addClass("first");
  $("li:last-child").addClass("last");

  $('[href="#"]').attr("href", "javascript:;");

  $(".menu-Bar").click(function () {
    $(this).toggleClass("open");
    $(".menuWrap").toggleClass("open");
    $("body").toggleClass("ovr-hiddn");
  });

  $(".loginUp").click(function () {
    $(".LoginPopup").fadeIn();
    $(".overlay").fadeIn();
  });

  $(".signUp").click(function () {
    $(".signUpPop").fadeIn();
    $(".overlay").fadeIn();
  });

  $(".closePop,.overlay").click(function () {
    $(".popupMain").fadeOut();
    $(".overlay").fadeOut();
  });

  $(".menu .menu-item-has-children").addClass("dropdown-nav ");
  $(".menu .menu-item-has-children ul.sub-menu").addClass("dropdown");

  /* Tabbing Function */
  $("[data-targetit]").on("click", function (e) {
    $(this).addClass("active");
    $(this).siblings().removeClass("active");
    var target = $(this).data("targetit");
    $("." + target)
      .siblings('[class^="box-"]')
      .hide();
    $("." + target).fadeIn();
    $(".tabViewList").slick("setPosition", 0);
  });

  // Accordian
  $(".acc_title").on("click", function () {
    $(this).parents().find("li").removeClass("active");
    $(this).parents().find(".acc_desc").slideUp();
    $(this).parent("li").addClass("active");
    !$(this).next(".acc_desc").is(":visible")
      ? $(this).next(".acc_desc").slideDown()
      : $(this).parents().find("li").removeClass("active");
  });

  $("li.dropdown-nav").hover(function () {
    $(this).children("ul").stop(true, false, true).slideToggle(300);
  });

  $(".searchBtn").click(function () {
    $(".searchWrap").addClass("active");
    $(".overlay").fadeIn("active");
    $(".searchWrap input").focus();
    $(".searchWrap input").focusout(function (e) {
      $(this).parents().removeClass("active");
      $(".overlay").fadeOut("active");
      $("body").removeClass("ovr-hiddn");
    });
  });

  $(".index-slider").slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    // prevArrow: $('.prev'),
    // nextArrow: $('.next')
  });

  //     Slider For
  // $('.slider-for').slick({
  //     slidesToShow: 1,
  //     slidesToScroll: 1,
  //     dots: false,
  //     arrows: false,
  //     fade: true,
  //     asNavFor: '.slider-nav'
  // });
  // $('.slider-nav').slick({
  //     slidesToShow: 4,
  //     slidesToScroll: 1,
  //     asNavFor: '.slider-for',
  //     dots: false,
  //     focusOnSelect: true
  // });

  /* Top Scroll */
  // $('body').on('click', '.scrolldown-fl', function() {
  //     goToScroll('awardSec');
  // });
});

// $(window).on("scroll touchmove", function() {
//     $("header").toggleClass("stickyOpen", $(document).scrollTop() > 200);
// });

$(window).on("load", function () {
  var currentUrl = window.location.href.substr(
    window.location.href.lastIndexOf("/") + 1
  );
  $("ul.menu li a").each(function () {
    var hrefVal = $(this).attr("href");
    if (hrefVal == currentUrl) {
      $(this).removeClass("active");
      $(this).closest("li").addClass("active");
      $("ul.menu li.first").removeClass("active");
    }
  });
});

/* RESPONSIVE JS */
if ($(window).width() < 824) {
}

function switchDiv() {
  var $window = $(window).outerWidth();
  if ($window <= 768) {
    $(".topAppendTxt").each(function () {
      var getdtd = $(this).find(".cloneDiv").clone(true);
      $(this).find(".cloneDiv").remove();
      $(this).append(getdtd);
    });
  }
}

function goToScroll(e) {
  $("html, body").animate(
    {
      scrollTop: $("." + e).offset().top,
    },
    1000
  );
}

settings = {
  //Model Popup
  objModalPopupBtn: ".modalButton",
  objModalCloseBtn: ".overlay, .closeBtn, .cancel",
  objModalDataAttr: "data-popup",
};
$(settings.objModalPopupBtn).bind("click", function () {
  if ($(this).attr(settings.objModalDataAttr)) {
    var strDataPopupName = $(this).attr(settings.objModalDataAttr);

    //Fade In Modal Pop Up
    $(".overlay, #" + strDataPopupName).fadeIn();
  }
});

//On clicking the modal background
$(settings.objModalCloseBtn).bind("click", function () {
  $(".modal").fadeOut();
});

$("#navMenus").on("click", "li", function () {
  $("#navMenus li.active").removeClass("active");
  // adding classname 'active' to current click li
  $(this).addClass("active");
});

$(".inbox").click(function () {
  $(".panel").slideToggle();
});

// function selectOption(element) {
//   var selectedValue = element.textContent;
//   var realSelect = document.getElementById("realSelect");
//   var selectStyled = document.querySelector(".select-styled");

//   for (var i = 0; i < realSelect.options.length; i++) {
//     if (realSelect.options[i].text === selectedValue) {
//       realSelect.selectedIndex = i;
//       break;
//     }
//   }

//   selectStyled.textContent = selectedValue;

//   closeOptions();
// }

// function closeOptions() {
//   var selectOptions = document.querySelector(".select-options");
//   selectOptions.style.display = "none";
// }

// document.addEventListener("DOMContentLoaded", function () {
//   var selectStyled = document.querySelector(".select-styled");
//   var selectOptions = document.querySelector(".select-options");

//   selectStyled.addEventListener("click", function () {
//     selectOptions.style.display =
//       selectOptions.style.display === "block" ? "none" : "block";
//   });

//   document.addEventListener("click", function (event) {
//     if (!event.target.closest(".custom-select")) {
//       closeOptions();
//     }
//   });
// });

function myCategorized() {
  document.getElementById("myCategorized").classList.toggle("show");
}

window.onclick = function (event) {
  if (!event.target.matches(".categorized-dropbtn")) {
    var dropdowns = document.getElementsByClassName(
      ".categorized-dropdown-content"
    );
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains("show")) {
        openDropdown.classList.remove("show");
      }
    }
  }
};

function myTopics() {
  document.getElementById("myTopics").classList.toggle("show");
}

window.onclick = function (event) {
  if (!event.target.matches(".topics-dropbtn")) {
    var dropdowns = document.getElementsByClassName(".topics-dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains("show")) {
        openDropdown.classList.remove("show");
      }
    }
  }
};

function myTopic() {
  document.getElementById("myTopic").classList.toggle("show");
}

window.onclick = function (event) {
  if (!event.target.matches(".topic-dropbtn")) {
    var dropdowns = document.getElementsByClassName(".topic-dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains("show")) {
        openDropdown.classList.remove("show");
      }
    }
  }
};

function myPosted() {
  document.getElementById("myPosted").classList.toggle("show");
}

window.onclick = function (event) {
  if (!event.target.matches(".posted-dropbtn")) {
    var dropdowns = document.getElementsByClassName(".posted-dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains("show")) {
        openDropdown.classList.remove("show");
      }
    }
  }
};

function mySort() {
  document.getElementById("mySort").classList.toggle("show");
}

window.onclick = function (event) {
  if (!event.target.matches(".sort-dropbtn")) {
    var dropdowns = document.getElementsByClassName(".sort-dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains("show")) {
        openDropdown.classList.remove("show");
      }
    }
  }
};

function myResults() {
  document.getElementById("myResults").classList.toggle("show");
}

window.onclick = function (event) {
  if (!event.target.matches(".results-dropbtn")) {
    var dropdowns = document.getElementsByClassName(
      ".results-dropdown-content"
    );
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains("show")) {
        openDropdown.classList.remove("show");
      }
    }
  }
};



function AjaxRequest(url,data)
{
    var res;
    $.ajax({
        url: url,
        data: data,
        async: false,
        error: function() {
            console.log('error');
        },
        dataType: 'json',
        success: function(data) {
            res= data;

        },
        type: 'POST'
    });
    return res;
}
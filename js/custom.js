// for word captcha start
var code;
function createCaptcha() {
  //clear the contents of captcha div first
  document.getElementById("captcha").innerHTML = "";
  var charsArray = "0123456789";
  var lengthOtp = 6;
  var captcha = [];
  for (var i = 0; i < lengthOtp; i++) {
    //below code will not allow Repetition of Characters
    var index = Math.floor(Math.random() * charsArray.length + 1); //get the next character from the array
    if (captcha.indexOf(charsArray[index]) == -1)
      captcha.push(charsArray[index]);
    else i--;
  }
  var canv = document.createElement("canvas");
  canv.id = "captcha";
  canv.width = 120;
  canv.height = 35;
  var ctx = canv.getContext("2d");
  ctx.font = "25px Georgia";
  ctx.strokeText(captcha.join(""), 0, 30);
  //storing captcha so that can validate you can save it somewhere else according to your specific requirements
  code = captcha.join("");
  document.getElementById("captcha").appendChild(canv); // adds the canvas to the body element
}
$("#refresh_captcha").click(function () {
  createCaptcha();
});
function validateCaptcha(action) {
  //   debugger
  if (document.getElementById("cpatchaTextBox").value == code) {
    $("#enquiryForm").attr("action", action + ".php");
    return true;
  } else {
    event.preventDefault();
    $("#enquiryForm").attr("action", "");
    alert("Invalid Captcha. try Again");
    createCaptcha();
    $("#cpatchaTextBox").val("");
    return false;
  }
}

// for word captcha start
var code2;
function createCaptcha2() {
  //clear the contents of captcha div first
  document.getElementById("captcha2").innerHTML = "";
  var charsArray = "0123456789";
  var lengthOtp = 6;
  var captcha2 = [];
  for (var i = 0; i < lengthOtp; i++) {
    //below code will not allow Repetition of Characters
    var index = Math.floor(Math.random() * charsArray.length + 1); //get the next character from the array
    if (captcha2.indexOf(charsArray[index]) == -1)
      captcha2.push(charsArray[index]);
    else i--;
  }
  var canv2 = document.createElement("canvas");
  canv2.id = "captcha2";
  canv2.width = 120;
  canv2.height = 35;
  var ctx2 = canv2.getContext("2d");
  ctx2.font = "25px Georgia";
  ctx2.strokeText(captcha2.join(""), 0, 30);
  //storing captcha so that can validate you can save it somewhere else according to your specific requirements
  code2 = captcha2.join("");
  document.getElementById("captcha2").appendChild(canv2); // adds the canvas to the body element
}
$("#refresh_captcha2").click(function () {
  createCaptcha2();
});
function validateCaptcha2() {
  //   debugger
  if (document.getElementById("cpatchaTextBox2").value == code) {
    $("#enquiryForm2").attr("action", action + ".php");
    return true;
  } else {
    event.preventDefault();
    $("#enquiryForm2").attr("action", "");
    alert("Invalid Captcha. try Again");
    createCaptcha();
    $("#cpatchaTextBox2").val("");
    return false;
  }
}

$(function () {
  AOS.init();
  window.addEventListener("load", AOS.refresh);
  $(window).on("scroll", function () {
    $(function () {
      if ($(".stricky").length) {
        var strickyScrollPos = 100;
        if ($(window).scrollTop() > strickyScrollPos) {
          $(".stricky").addClass("stricky-fixed");
          $(".scroll-to-top").fadeIn(1500);
        } else if ($(this).scrollTop() <= strickyScrollPos) {
          $(".stricky").removeClass("stricky-fixed");
          $(".scroll-to-top").fadeOut(1500);
        }
      }
    });
  });
});
$(function () {
  $(window).on("scroll", function () {
    var scrolled = $(window).scrollTop();
    if (scrolled > 80) $(".go-top").addClass("active");
    if (scrolled < 80) $(".go-top").removeClass("active");
  });
  $(function () {
    $(".go-top").on("click", function () {
      $("html, body").animate(
        {
          scrollTop: "0",
        },
        500
      );
    });
  });
});
$(function () {
  $(".dropDown").click(function () {
    $(this).siblings("li").find("ul").slideUp();
    $(this)
      .siblings("li")
      .find("i")
      .removeClass("fa-chevron-up")
      .addClass("fa-chevron-down");
    $(this).find("ul").slideToggle();
    $(this).find("i").toggleClass("fa-chevron-up");
  });
});
$(".awardSlider").slick({
  dots: false,
  infinite: true,
  speed: 500,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: true,
  prevArrow:
    "<button type='button' class='slick-prev pull-left'><i class='bi bi-chevron-left'></i></button>",
  nextArrow:
    "<button type='button' class='slick-next pull-right'><i class='bi bi-chevron-right'></i></button>",
  slidesToScroll: 1,
  slidesToShow: 6,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
      },
    },
  ],
});
$(".blogSlider").slick({
  dots: false,
  infinite: true,
  speed: 500,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: true,
  prevArrow:
    "<button type='button' class='slick-prev pull-left'><i class='bi bi-chevron-left'></i></button>",
  nextArrow:
    "<button type='button' class='slick-next pull-right'><i class='bi bi-chevron-right'></i></button>",
  slidesToScroll: 1,
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
      },
    },
  ],
});

document.querySelectorAll(".dropdownArrow").forEach((item, i) => {
  item.addEventListener("click", () => {
    item.classList.toggle("dropdownArrowActive");

    document.querySelectorAll(".innerDetails")[i].classList.toggle("openTab");
  });
});

document.querySelectorAll(".outerDetails").forEach((item, i) => {
  item.addEventListener("click", () => {
    document
      .querySelectorAll(".dropdownArrow")
      [i].classList.toggle("dropdownArrowActive");
    document.querySelectorAll(".innerDetails")[i].classList.toggle("openTab");
  });
});

document.querySelectorAll(".innerAboutLogo ul li").forEach((item, i) => {
  item.addEventListener("click", () => {
    document
      .querySelectorAll(".aboutDropBox")
      [i].classList.toggle("aboutDropActive");
  });
});

document.querySelectorAll(".select").forEach((select) => {
  select.addEventListener("click", () => {
    if (document.querySelector(".form-group .active")) {
      document.querySelector(".form-group .active").classList.remove("active");
    }
    select.classList.add("active");
  });
});

document.querySelectorAll('.select input[type="radio"]').forEach((radio) => {
  radio.addEventListener("change", (e) => {
    const select = e.target.closest(".select");
    const selected = select.querySelector(".selected");
    const checkedLabel = select.querySelector(`label[for="${e.target.id}"]`);

    if (checkedLabel) {
      selected.textContent = checkedLabel.getAttribute("data-txt");
    }

    select.classList.remove("active");
  });
});

function toggleMoreCities() {
  const moreCities = document.getElementById("more-north-america-cities");
  const showMoreText = document.querySelector(".show-more");
  if (moreCities.style.display === "none") {
    moreCities.style.display = "block";
    showMoreText.textContent = "Show Less...";
  } else {
    moreCities.style.display = "none";
    showMoreText.textContent = "Show More...";
  }
}

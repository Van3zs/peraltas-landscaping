(function (window) {
  "use strict";
  function define_openHours() {
    var OpenHours = {};

    var insertColon = function (time) {
      var center = time.length - 2;
      var timeWithColon = [time.slice(0, center), ":", time.slice(center)].join(
        ""
      );
      return timeWithColon;
    };

    var formatTime = function (time) {
      if (time) {
        if (time >= 1200) {
          var formattedTime = time === 1200 ? 1200 : time - 1200;
          return `${insertColon(formattedTime.toString())} PM`;
        } else {
          return `${insertColon(time.toString())} AM`;
        }
      }
    };

    const weekIndex = {
      0: "Sunday",
      1: "Monday",
      2: "Tuesday",
      3: "Wednesday",
      4: "Thursday",
      5: "Friday",
      6: "Saturday",
    };

    var determineDay = function (day, dayDiv) {
      var now = new Date();
      if (day === weekIndex[now.getDay()]) {
        dayDiv.style["font-weight"] = "bold";
        dayDiv.style["color"] = "#31a35e";
      }
    };

    OpenHours["generateTime"] = function (hours) {
      var rootElement = document.getElementById("open-hours");
      var table = document.createElement("table");
      if (rootElement) {
        for (var day in hours) {
          var dayDiv = document.createElement("tr");

          determineDay(day, dayDiv);

          var dayTitleElement = document.createElement("td");
          var dayTimesElement = document.createElement("td");

          var dayTitle = document.createTextNode(day);
          dayTitleElement.appendChild(dayTitle);
          dayDiv.appendChild(dayTitleElement);

          var dayHours = "";

          if (Object.keys(hours[day]).length === 0) {
            dayHours = `Closed`;
          } else {
            dayHours = `${formatTime(hours[day]["start"])} - ${formatTime(
              hours[day]["end"]
            )}`;
          }

          var dayTimes = document.createTextNode(dayHours);
          dayTimesElement.appendChild(dayTimes);
          dayDiv.appendChild(dayTimesElement);
          table.appendChild(dayDiv);
        }
        rootElement.appendChild(table);
      }
    };

    return OpenHours;
  }

  if (typeof OpenHours === "undefined") {
    window.OpenHours = define_openHours();
  }
})(window);

//GALLERY PART

var slides = document.getElementsByClassName("gallery-page");

window.addEventListener("load", () => {
  console.log(slides);
  slides[0].classList.add("active");
});

var slidePosition = 1;
var i = 0;

// forward/Back controls
function plusSlides(n) {
  SlideShow((slidePosition += n));
}

function SlideShow(n) {
  slides[i].classList.remove("active");
  if (n > slides.length) {
    slidePosition = 1;
  }
  if (n < 1) {
    slidePosition = slides.length;
  }

  slides[slidePosition - 1].classList.add("active");
  i = slidePosition - 1;
}

// Open the Modal
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

// Close the Modal
function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

function currentSlide(n) {
  var i;
  var slides = document.querySelectorAll(
    ".wapper-gallery .active .mySlides img"
  );

  console.log(n);
  var caption = document.querySelectorAll(
    ".wapper-gallery .active .mySlides .caption-container p"
  );
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
    caption[i].style.display = "none";
  }
  slides[n - 1].style.display = "block";
  caption[n - 1].style.display = "block";
}

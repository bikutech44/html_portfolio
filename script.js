



// uncheck check menu or hide menu bar
var checkbox = document.getElementById("menu-bar");
document.addEventListener("click", function(event) {
  if (event.target != checkbox && checkbox.checked) {
    checkbox.checked = false;
  }
});

var prevScrollpos = window.pageYOffset;
var hideThreshold = 60;  // Set a threshold of 60 pixels

window.addEventListener('scroll', () => {
  var currentScrollPos = window.pageYOffset;
  var scrollDifference = Math.abs(currentScrollPos - prevScrollpos); // Calculate scroll difference

  // Only proceed if the scroll difference is more than 60 pixels
  if (scrollDifference >= hideThreshold) {
    if (prevScrollpos > currentScrollPos) {
      // Scrolling up: Show the navbar
      document.querySelector(".navbar").style.top = "0";
    } else {
      // Scrolling down: Hide the navbar
      document.querySelector(".navbar").style.top = "-55px"; // Adjust based on your navbar height
    }
    prevScrollpos = currentScrollPos;  // Update the previous scroll position after the threshold is met
  }
});

// change color while scroled
 const body1 = document.querySelector('.body1');

window.addEventListener('scroll', () => {
  if (window.scrollY > 0) {
    body1.classList.add('body1-scrolled');
  } else {
    body1.classList.remove('body1-scrolled');
  }
});


// ===========   opacity change
const canvas1 = document.querySelector('.canvas1');

window.addEventListener('scroll', () => {
  if (window.scrollY > 0) {
    canvas1.classList.add('canvas1-scrolled');
  } else {
    canvas1.classList.remove('canvas1-scrolled');
  }
});


// add border to the navbar while scroled 
const navbar = document.querySelector('.navbar');

window.addEventListener('scroll', () => {
  if (window.scrollY > 0) {
    navbar.classList.add('navbar-scrolled');
  } else {
    navbar.classList.remove('navbar-scrolled');
  }
});



// for text animation over pic
const info = document.querySelector('.info p');
info.innerHTML = info.innerText.split("").map(
  (char, i) =>
  `<span style="transform:rotate(${i * 6.46}deg)">${char}</span>`
).join("")



// ============= move line
const move_line = document.querySelector('.timeline');

window.addEventListener('scroll', () => {
  if (window.scrollY > 800) {
    move_line.classList.add('move_line');
  }
   else {
    move_line.classList.remove('move_line');
  }
});
//  for mobile
window.addEventListener('scroll', () => {
  if (window.scrollY > 1170) {
    move_line.classList.add('move_line_mob');
  }
   else {
    move_line.classList.remove('move_line_mob');
  }
});


// ============= move timeline


const timelineContainers = document.querySelectorAll('.timeline-container');

timelineContainers.forEach((container) => {
  window.addEventListener('scroll', () => {
    if (window.scrollY > 800) {
      container.classList.add('move_down');
    } else {
      container.classList.remove('move_down');
    }
  });
});
//  for mobile
timelineContainers.forEach((container) => {
  window.addEventListener('scroll', () => {
    if (window.scrollY > 1175) {
      container.classList.add('move_down_mob');
    } else {
      container.classList.remove('move_down_mob');
    }
  });
});


// =========== move skill

  var htmlBar = document.querySelector(".html");

  window.addEventListener('scroll', () => {
    if (window.scrollY > 800) {
      htmlBar.classList.add("animate-html");
    } else {
      htmlBar.classList.remove("animate-html");
    }
  });

  var cssBar = document.querySelector(".css");

  window.addEventListener('scroll', () => {
    if (window.scrollY > 810) {
      cssBar.classList.add("animate-css");
    } else {
      cssBar.classList.remove("animate-css");
    }
  });

  var javaBar = document.querySelector(".java_script");

  window.addEventListener('scroll', () => {
    if (window.scrollY > 820) {
      javaBar.classList.add("animate-java_script");
    } else {
      javaBar.classList.remove("animate-java_script");
    }
  });

  var phpBar = document.querySelector(".p_hp");

  window.addEventListener('scroll', () => {
    if (window.scrollY > 830) {
      phpBar.classList.add("animate-p_hp");
    } else {
      phpBar.classList.remove("animate-p_hp");
    }
  });


  
// ===================== for mobile



    window.addEventListener('scroll', () => {
      if (window.scrollY > 2060) {
        htmlBar.classList.add("animate-html_mob");
      } else {
        htmlBar.classList.remove("animate-html_mob");
      }
    });

    window.addEventListener('scroll', () => {
      if (window.scrollY > 2070) {
        cssBar.classList.add("animate-css_mob");
      } else {
        cssBar.classList.remove("animate-css_mob");
      }
    });

    window.addEventListener('scroll', () => {
      if (window.scrollY > 2080) {
        javaBar.classList.add("animate-java_script_mob");
      } else {
        javaBar.classList.remove("animate-java_script_mob");
      }
    });

    window.addEventListener('scroll', () => {
      if (window.scrollY > 2100) {
        phpBar.classList.add("animate-p_hp_mob");
      } else {
        phpBar.classList.remove("animate-p_hp_mob");
      }
    });


// Get the button element
const button = document.querySelector('submit');

// Add event listener to button
button.addEventListener('click', function() {
  // Scroll back down to the bottom of the page
  window.scrollTo({
    top: document.body.scrollHeight,
    behavior: 'smooth'
  });
});



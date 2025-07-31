import { gsap } from "gsap";

const $cursor = document.querySelector('.cursor');
const $bigBall = document.querySelector('.cursor__ball--big');
const $smallBall = document.querySelector('.cursor__ball--small');
const $hoverables = document.querySelectorAll('.hoverable');
const $customCursorAreas = document.querySelectorAll('.custom-cursor');

// Move the cursor
function onMouseMove(e) {
  gsap.to($bigBall, {
    duration: 0.4,
    x: e.clientX - 15,
    y: e.clientY - 15
  })
  gsap.to($smallBall, {
    duration: 0.1,
    x: e.clientX - 5,
    y: e.clientY - 7
  })
}

// Hover an element
function onMouseHover() {
  gsap.to($bigBall, {
    duration: 0.3,
    scale: 4
  })
}

function onMouseHoverOut() {
  gsap.to($bigBall, {
    duration: 0.3,
    scale: 1
  })
}

function onMouseOverCustomArea() {
    $cursor.style.opacity = 1;
}

function onMouseOutCustomArea() {
    $cursor.style.opacity = 0;
}

document.body.addEventListener('mousemove', onMouseMove);

for (let i = 0; i < $hoverables.length; i++) {
  $hoverables[i].addEventListener('mouseenter', onMouseHover);
  $hoverables[i].addEventListener('mouseleave', onMouseHoverOut);
}

for (let i = 0; i < $customCursorAreas.length; i++) {
    $customCursorAreas[i].addEventListener('mouseenter', onMouseOverCustomArea);
    $customCursorAreas[i].addEventListener('mouseleave', onMouseOutCustomArea);
}
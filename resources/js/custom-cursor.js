import { gsap } from "gsap";

const $cursor = document.querySelector(".cursor");
const $bigBall = document.querySelector(".cursor__ball--big");
const $smallBall = document.querySelector(".cursor__ball--small");
const $hoverables = document.querySelectorAll(".hoverable, button, a");
const $customCursorAreas = document.querySelectorAll(".custom-cursor");

$cursor.style.opacity = 0;

function onMouseMove(e) {
  gsap.to($bigBall, {
    duration: 0.4,
    x: e.clientX - 15,
    y: e.clientY - 15,
  });
  gsap.to($smallBall, {
    duration: 0.1,
    x: e.clientX - 5,
    y: e.clientY - 7,
  });
}

function onMouseHover() {
  gsap.to($bigBall, {
    duration: 0.3,
    scale: 4,
  });
}
  
function onMouseHoverOut() {
  gsap.to($bigBall, {
    duration: 0.45,
    scale: 1,
  });
}

function onMouseOverCustomArea() {
  $cursor.style.opacity = 1;
  document.body.addEventListener("mousemove", onMouseMove);
}

function onMouseOutCustomArea() {
  $cursor.style.opacity = 0;
  
  document.body.removeEventListener("mousemove", onMouseMove);
}

for (let i = 0; i < $customCursorAreas.length; i++) {
  const customArea = $customCursorAreas[i];
  customArea.addEventListener("mouseenter", onMouseOverCustomArea);
  customArea.addEventListener("mouseleave", onMouseOutCustomArea);

  const hoverablesInArea = customArea.querySelectorAll(".hoverable, button, a");
  for (let j = 0; j < hoverablesInArea.length; j++) {
    hoverablesInArea[j].addEventListener("mouseenter", onMouseHover);
    hoverablesInArea[j].addEventListener("mouseleave", onMouseHoverOut);
  }
}
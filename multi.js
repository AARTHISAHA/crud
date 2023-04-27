const button1 = document.querySelector('#button-1');
const button2 = document.querySelector('#button-2');
const button3 = document.querySelector('#button-3');

const indicator = document.querySelectorAll('.indicator');

let step = 1;

function handleSubmit(event) {  
  let stepClass = `.step-${step}`;
   console.log(stepClass);
  let stepElm = document.querySelector(stepClass);
  console.log(stepElm);
  stepElm.classList.remove('visible__no-animation');
  stepElm.classList.add('slide-out');
  indicator[step-1].classList.remove('active');
  setTimeout(() => {
    step += 1;
    if (step > 3) {
      step = 1;
    }
        console.log(step);
      indicator[step-1].classList.add('active');
      stepClass = `.step-${step}`;
     stepElm = document.querySelector(stepClass);
    stepElm.classList.remove('slide-out');
    stepElm.classList.add('slide-in');
  },100)
}

button1.addEventListener('click', handleSubmit);
button2.addEventListener('click', handleSubmit);
button3.addEventListener('click', handleSubmit);

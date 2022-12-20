
/*------------------------------------- statistika  -----------------------*/  
let valueDisplays = document.querySelectorAll (".count");
let interval = 10000;
valueDisplays.forEach((valueDisplay) => {
    let startValue = 0;
    let endValue = parseInt (valueDisplay.getAttribute 
        ("data-val"));
        let duration = Math.floor (interval / endValue);
        let counter = setInterval(function () {
            startValue += 1;
            valueDisplay.textContent = startValue;
            if (startValue == endValue) {
                clearInterval (counter);
            }
        }, duration);
        });


/*------------------------------------- druge animacije -----------------------*/ 

ScrollReveal({
  reset: true,
  distance: '80px',
  duration: 1500,
  delay: 200
});      
ScrollReveal().reveal('.img1, .paragraphdesno, .textbg, .pl, .h2k, .p2p, .imgk, .h22', { delay: 300});

const observer = new IntersectionObserver((entries)=> {
    entries.forEach ((entry) => {
        console.log(entry)
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
        }
        else {
            entry.target.classList.remove ('.show');
        }
    })
}) 

const hiddenElemenst = document.querySelectorAll('.hidden');
hiddenElemenst.forEach((el) => observer.observe (el));



const observerr = new IntersectionObserver((entries)=> {
    entries.forEach ((entry) => {
        console.log(entry)
        if (entry.isIntersecting) {
            entry.target.classList.add('prikazi');
        }
        else {
            entry.target.classList.remove ('.prikazi');
        }
    })
}) 

const hiddenElemenstt = document.querySelectorAll('.sakri');
hiddenElemenstt.forEach((el) => observerr.observe (el));




const observerrr = new IntersectionObserver((entries)=> {
    entries.forEach ((entry) => {
        console.log(entry)
        if (entry.isIntersecting) {
            entry.target.classList.add('iskoci');
        }
        else {
            entry.target.classList.remove ('.iskoci');
        }
    })
}) 

const hiddenElemensttt = document.querySelectorAll('.poklopi');
hiddenElemensttt.forEach((el) => observerrr.observe (el));

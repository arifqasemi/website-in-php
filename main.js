var bar = document.querySelector('.hamburger');
aside = document.querySelector('.navbar');
var close = document.querySelector('.close');

   // Cart file //
var bag = document.querySelector('.bag');
var Cart = document.querySelector('.Cart');


  // menu display //
bar.addEventListener('click', ()=>{
    aside.classList.add('active');
})
   // menu close //
close.addEventListener('click', ()=>{
    aside.classList.remove('active');
})

    // Cart display //
bag.addEventListener('click', (e)=>{
    e.preventDefault();
   Cart.classList.toggle('display') ;
})



// var minus = document.querySelectorAll('.minus1');

// minus.addEventListener('click', increment())

// function increment(){
//     console.log('it works');
// }
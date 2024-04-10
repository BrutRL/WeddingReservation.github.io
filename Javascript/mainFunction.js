let btnViewmore = document.getElementById('btnViewmore');
let btnLearn = document.getElementById('btnLearn');

btnViewmore.addEventListener('click',()=>{
    window.location.assign("login.php");
})
btnLearn.addEventListener('click',()=>{
    let moreDescription = document.querySelector('.moreDescription')
    moreDescription.style.display = "block";
    let aboutContent = document.querySelector('.aboutContent');
    aboutContent.style.display ='none';
})
btnLearn.addEventListener('uncl')

document.addEventListener("DOMContentLoaded", function(){
    var accordianToggles = document.querySelectorAll('.faq .faq-title');
    console.log(accordianToggles)
    for(let accordianToggle of accordianToggles ){
        accordianToggle.addEventListener('click', function(){
            console.log('clicked')
            const thisFAQContent = this.parentNode.querySelector('.faq-content');
            thisFAQContent.classList.toggle('show');
        })
    }
})
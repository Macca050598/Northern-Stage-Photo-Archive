const Blogo = document.querySelectorAll("#Blogo path");

for (let i = 0; i < Blogo.length; i++){
    console.log(`Letter ${i} is ${Blogo[i].getTotalLength()}`);
}


const navSlide = () => {
    const mobileLines = document.querySelector('.mobileLines');
    const nav = document.querySelector('.links-nav');
    const navLinks = document.querySelectorAll('.links-nav li');
    //toggles the navigation


    mobileLines.addEventListener('click',()=> {
        nav.classList.toggle('links-active');
        //animation for the links

        navLinks.forEach((link, index) => {
            if (link.style.animation) {
                link.style.animation = ''
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 1}s`;
            }
        });

        //mobile lines animation
        mobileLines.classList.toggle('clicked');

    });


};





navSlide();
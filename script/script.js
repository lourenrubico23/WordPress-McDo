var slider = tns({
    container: '.banner',
    items: 1,
    controls:  false,
    autoplayButtonOutput: false,
    slideBy: 'page',
    autoplay: true,
  });
  
const toggleBtn = document.querySelector('.toggle__button')
const dropdown = document.querySelector('.dropdown')

const closeBtn = document.querySelector('.close')

toggleBtn.addEventListener('click', ()=> {
    dropdown.classList.add('show');
    toggleBtn.classList.add('cross');
})

closeBtn.addEventListener('click', ()=> {
    dropdown.classList.remove('show');
    toggleBtn.classList.remove('cross');
})

/* Links / Dropdown - faq */
const links = document.querySelectorAll(".filter__cards h5");
links.forEach((link) => {
  link.addEventListener("click", () => {
    link.querySelector("i").classList.toggle("open");
    link.nextElementSibling.classList.toggle("open");
  });
});
let scrollpos = window.scrollY

const header = document.querySelector(".logo")
const scrollChange = 1

const add_class_on_scroll = () => header.classList.add("scrolled")
const remove_class_on_scroll = () => header.classList.remove("scrolled")

window.addEventListener('scroll', function() { 
  scrollpos = window.scrollY;

  if (scrollpos >= scrollChange) { add_class_on_scroll() }
  else { remove_class_on_scroll() }
  
})
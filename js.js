const listImage = document.querySelector('#list-image');
const logoImage = document.querySelectorAll('#logoImage');
const pencilImage = document.querySelector('#pencilImage');
const penImage = document.querySelector('#penImage');
const paintImage = document.querySelector('#paintImage');
const rainbowImage = document.querySelector('#rainbowImage');
const menu = document.querySelector('#mobileMenu');
const xButton = document.querySelector('#xMark');
const homeB = document.querySelector('#hButton');
const servicesB = document.querySelector('#sButton');
const portofolioB = document.querySelector('#pButton');
const contactB = document.querySelector('#cButton');


listImage.addEventListener('click', function() {
    menu.style.display = 'block';
});
xButton.addEventListener('click', function() {
    menu.style.display = 'none';
});
homeB.addEventListener('click', function() {
    menu.style.display = 'none';
});
servicesB.addEventListener('click', function() {
    console.log("da");
    menu.style.display = 'none';
});
portofolioB.addEventListener('click', function() {
    menu.style.display = 'none';
});
contactB.addEventListener('click', function() {
    menu.style.display = 'none';
});

/*dark mode button*/
const darkModeButton = document.querySelector('#circle');
const header = document.querySelector('header');
const body = document.querySelector('body');
const service1 = document.querySelector('#service1');
const service2 = document.querySelector('#service2');
const service3 = document.querySelector('#service3');
const service4 = document.querySelector('#service4');
const services = document.querySelector('#services');
const portofolio = document.querySelector('#portofolio');
const form = document.querySelector('form');
const h2 = document.querySelectorAll('h2');
const p = document.querySelectorAll('p');
const label = document.querySelectorAll('label');
const a = document.querySelectorAll('a');


darkModeButton.addEventListener('click', () => {
    darkModeButton.classList.toggle('active')
    console.log("Hello");
    // Toggle background colors of header, body and other elements
    
    a.forEach((a) => {
  // Check if the paragraph should be excluded
    if (a.className === 'include') {
  // Toggle font color
    a.style.transition = 'color 0.5s ease';
    a.style.color = darkModeButton.classList.contains('active') ? '#d3eaf2' : '#00749C';
  }});


    header.style.transition = 'background-color 0.5s ease';
    header.style.backgroundColor = darkModeButton.classList.contains('active') ? '#00749C' : '#d3eaf2';
    body.style.transition = 'background-color 0.5s ease';
    body.style.backgroundColor = darkModeButton.classList.contains('active') ? '#171717' : '#ffffff';
    service1.style.transition = 'background-color 0.5s ease';
    service1.style.backgroundColor = darkModeButton.classList.contains('active') ? '#00749C' : '#d3eaf2';
    service3.style.transition = 'background-color 0.5s ease';
    service3.style.backgroundColor = darkModeButton.classList.contains('active') ? '#00749C' : '#d3eaf2';
    service2.style.transition = 'background-color 0.5s ease';
    service2.style.backgroundColor = darkModeButton.classList.contains('active') ? '#00749C' : '#d3eaf2';
    service4.style.transition = 'background-color 0.5s ease';
    service4.style.backgroundColor = darkModeButton.classList.contains('active') ? '#00749C' : '#d3eaf2';
    services.style.transition = 'background-color 0.5s ease';
    services.style.backgroundColor = darkModeButton.classList.contains('active') ? '#00749C' : '#d3eaf2';
    portofolio.style.transition = 'background-color 0.5s ease';
    portofolio.style.backgroundColor = darkModeButton.classList.contains('active') ? '#ABA791' : '#EBE8DA';
    form.style.transition = 'background-color 0.5s ease';
    form.style.backgroundColor = darkModeButton.classList.contains('active') ? '#00749C' : '#d3eaf2';
    h2.forEach((h2) => {
        // Toggle font color
        h2.style.transition = 'color 0.5s ease';
        h2.style.color = darkModeButton.classList.contains('active') ? '#ffffff' : '#000000';
    });

    p.forEach((p) => {
  // Check if the paragraph should be excluded
    if (p.id !== 'exclude') {
  // Toggle font color
    p.style.transition = 'color 0.5s ease';
    p.style.color = darkModeButton.classList.contains('active') ? '#ffffff' : '#000000';
  };
    if (p.id === 'include') {
  // Toggle font color for intro text
    p.style.color = '#daa520';
  }}   );
    label.forEach((label) => {
        // Toggle font color
        label.style.transition = 'color 0.5s ease';
        label.style.color = darkModeButton.classList.contains('active') ? '#ffffff' : '#000000';
    });
    listImage.style.transition = '0.5s ease';
    listImage.src = darkModeButton.classList.contains('active') ? 'whitelist.png' : 'list.png';
    logoImage.forEach((logoImage) => {
        logoImage.style.transition = '0.5s ease';
        logoImage.src = darkModeButton.classList.contains('active') ? 'whitelogo.png' : 'logo.png';
    });
    pencilImage.style.transition = '0.5s ease';
    pencilImage.src = darkModeButton.classList.contains('active') ? 'whitepencil.png' : 'pencil.png';
    penImage.style.transition = '0.5s ease';
    penImage.src = darkModeButton.classList.contains('active') ? 'whitepen.png' : 'pen.png';
    paintImage.style.transition = '0.5s ease';
    paintImage.src = darkModeButton.classList.contains('active') ? 'whitepaint.png' : 'paint.png';
    rainbowImage.style.transition = '0.5s ease';
    rainbowImage.src = darkModeButton.classList.contains('active') ? 'whiterainbow.png' : 'rainbow.png';    
});
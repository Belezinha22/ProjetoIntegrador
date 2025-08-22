document.addEventListener('DOMContentLoaded', () => {
  gsap.fromTo('.features',
    {
      y: -300,
      opacity: 0
    },
    {
      y: 0,
      opacity: 1,
      delay: 2,
      duration: 7,
      ease: "power2.out"
    }
  )
})

// Seleção de elementos
const toggleBtn = document.getElementById('menu-toggle');
const navbar = document.getElementById('navbar');
const header = document.getElementById('header');
const navLinks = document.querySelectorAll('nav a');

// Controle do menu mobile
toggleBtn.addEventListener('click', () => {
  const isOpen = navbar.classList.toggle('active');

  // Animação do ícone do menu
  toggleBtn.innerHTML = isOpen
    ? '<i class="fa-solid fa-xmark"></i>'
    : '<i class="fa-solid fa-bars"></i>';

  // Bloqueio do scroll quando menu está aberto
  document.body.style.overflow = isOpen ? 'hidden' : '';
});

// Fechar menu ao clicar em um link
navLinks.forEach(link => {
  link.addEventListener('click', () => {
    if (navbar.classList.contains('active')) {
      navbar.classList.remove('active');
      toggleBtn.innerHTML = '<i class="fa-solid fa-bars"></i>';
      document.body.style.overflow = '';
    }
  });
});

// Efeito de scroll no header
let lastScroll = 0;
window.addEventListener('scroll', () => {
  const currentScroll = window.scrollY;

  // Adiciona/remove classe scrolled
  if (currentScroll > 50) {
    header.classList.add('scrolled');

    // Esconde/mostra navbar durante scroll
    if (currentScroll > lastScroll && !navbar.classList.contains('active')) {
      header.style.transform = 'translateY(-100%)';
    } else {
      header.style.transform = 'translateY(0)';
    }
  } else {
    header.classList.remove('scrolled');
    header.style.transform = 'translateY(0)';
  }

  lastScroll = currentScroll;
});

// Redimensionamento da janela
window.addEventListener('resize', () => {
  if (window.innerWidth > 768 && navbar.classList.contains('active')) {
    navbar.classList.remove('active');
    toggleBtn.innerHTML = '<i class="fa-solid fa-bars"></i>';
    document.body.style.overflow = '';
  }
});



// swiper
new Swiper('.card-wrapper', {
  // Optional parameters
  loop: true,
  spaceBetween: 30,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  breakpoints: {
    0: {
      slidesPerView: 1
    },
    768: {
      slidesPerView: 2
    },
    1024: {
      slidesPerView: 3
    },
  }
});

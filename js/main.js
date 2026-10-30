document.addEventListener('DOMContentLoaded', () => {
  const header = document.querySelector('.header');
  const burger = document.getElementById('burger');
  const nav = document.getElementById('nav');
  const links = nav ? nav.querySelectorAll('.header__link') : [];
  if (header) {
    const handleScroll = () => {
      if (window.scrollY > 100) {
        header.classList.add('header--scrolled');
      } else {
        header.classList.remove('header--scrolled');
      }
    };
    window.addEventListener('scroll', handleScroll, { passive: true });
    handleScroll();
  }
  if (burger && nav) {
    const toggleMenu = (open) => {
      const isOpen = open !== undefined ? open : !nav.classList.contains('header__nav--active');
      burger.classList.toggle('burger--active', isOpen);
      nav.classList.toggle('header__nav--active', isOpen);
      if (header) {
        header.classList.toggle('header--menu-open', isOpen);
      }
      document.body.classList.toggle('no-scroll', isOpen);
    };
    burger.addEventListener('click', () => {
      toggleMenu();
    });
    links.forEach(link => {
      link.addEventListener('click', () => {
        toggleMenu(false);
      });
    });
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && nav.classList.contains('header__nav--active')) {
        toggleMenu(false);
      }
    });
    window.addEventListener('resize', () => {
      if (window.innerWidth > 1200 && nav.classList.contains('header__nav--active')) {
        toggleMenu(false);
      }
    });
  }
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const targetId = this.getAttribute('href');
      if (!targetId || targetId === '#') return;
      const targetElem = document.querySelector(targetId);
      if (targetElem) {
        e.preventDefault();
        const headerHeight = header ? header.offsetHeight : 0;
        const targetPos = targetElem.getBoundingClientRect().top + window.pageYOffset - headerHeight;
        window.scrollTo({
          top: targetPos,
          behavior: 'smooth'
        });
      }
    });
  });
  const protoModal = document.getElementById('protoModal');
  const protoModalClose = document.getElementById('protoModalClose');
  const openProtoModal = (e) => {
    if (e) e.preventDefault();
    if (protoModal) {
      protoModal.classList.add('proto-modal--active');
    }
  };
  const closeProtoModal = () => {
    if (protoModal) {
      protoModal.classList.remove('proto-modal--active');
    }
  };
  if (protoModalClose) {
    protoModalClose.addEventListener('click', closeProtoModal);
  }
  if (protoModal) {
    protoModal.addEventListener('click', (e) => {
      if (e.target === protoModal) {
        closeProtoModal();
      }
    });
  }
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && protoModal && protoModal.classList.contains('proto-modal--active')) {
      closeProtoModal();
    }
  });
  const bookingForm = document.getElementById('bookingForm');
  if (bookingForm) {
    bookingForm.addEventListener('submit', (e) => {
      e.preventDefault();
      bookingForm.reset();
      openProtoModal();
    });
  }
  document.querySelectorAll('a[href^="tel:"], .socials__link, .menu__cta').forEach(elem => {
    elem.addEventListener('click', (e) => {
      openProtoModal(e);
    });
  });
});

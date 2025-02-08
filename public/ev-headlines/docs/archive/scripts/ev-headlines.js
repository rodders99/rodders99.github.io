function scrollToAnchor(hash, padding) {
    const anchor = document.getElementById(hash);
    if (anchor) {
      window.location.hash = hash;
      anchor.scrollIntoView({ behavior: 'smooth', block: 'center' });
      // Add the padding to the top of the page
      window.scrollTo({
        top: anchor.offsetTop - padding,
        behavior: 'smooth'
      });
    }
  }
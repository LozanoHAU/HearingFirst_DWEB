const toggleButton = document.getElementsByClassName('dot')[0];
const hiddenElement = document.getElementsByClassName('nav-bar')[0];

toggleButton.addEventListener('click', function() {
  if (hiddenElement.style.visibility === 'hidden') {
    hiddenElement.style.visibility = 'visible';  // Show the element

    hiddenElement.style.transition = 'right 0.5s ease-in-out';
  } else {
    hiddenElement.style.visibility = 'hidden';   // Hide the element
  }
});



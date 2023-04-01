// Get elements from the DOM
const form = document.getElementById('settings-form');
const profilePictureInput = document.getElementById('profile-picture');
const profilePictureImg = document.querySelector('.profile-picture-container img');

// Handle form submission
form.addEventListener('submit', function(event) {
	// event.preventDefault();
	// Get values from the form
	const username = document.getElementById('username').value;
	const password = document.getElementById('password').value;
	// Send form data to server using AJAX or fetch API
	// ...
});

// Handle profile picture change
profilePictureInput.addEventListener('change', function(event) {
	const file = event.target.files[0];
	const reader = new FileReader();
	reader.addEventListener('load', function() {
		profilePictureImg.src = reader.result;
	});
	reader.readAsDataURL(file);
});

const stars = document.querySelector('.stars');
const starHTML = '<span class="star"></span>';

for (let i = 0; i < 5; i++) {
  stars.insertAdjacentHTML('beforeend', starHTML);
}

const starElements = document.querySelectorAll('.star');
const ratingInput = document.querySelector('#rating');

starElements.forEach((star, index) => {
  star.addEventListener('click', () => {
    ratingInput.value = index + 1;
    starElements.forEach((s, i) => {
      if (i <= index) {
        s.classList.add('filled');
      } else {
        s.classList.remove('filled');
      }
    });
  });
});

const bintang = document.querySelector('.bintang');
const bintangHTML = '<span class="bintangs"></span>';

for (let z = 0; z < 5; z++) {
  bintang.insertAdjacentHTML('beforeend', bintangHTML);
}

const bintangElements = document.querySelectorAll('.bintangs');
const rateInput = document.querySelector('#rate');

bintangElements.forEach((bintang, indes) => {
  bintang.addEventListener('click', () => {
    rateInput.value = indes + 1;
    bintangElements.forEach((a, z) => {
      if (z <= indes) {
        a.classList.add('filled');
      } else {
        a.classList.remove('filled');
      }
    });
  });
});


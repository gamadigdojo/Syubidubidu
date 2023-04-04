const opsiButton = document.getElementById('opsi-button');
const additionalOptions = document.querySelector('.additional-options');
const opsiText = document.getElementById('opsi-text');
const optionList = document.querySelectorAll('.additional-options p');

optionList.forEach(option => {
  option.addEventListener('click', function() {
    let temp = opsiText.value;
    opsiText.value = option.textContent;
    option.textContent = temp;
    additionalOptions.classList.toggle('show');
  });
});

opsiButton.addEventListener('click', function() {
  additionalOptions.classList.toggle('show');
});


const radioBtns = document.querySelectorAll('input[type="radio"][name="PaymentMethod"]');

radioBtns.forEach(function(radioBtn) {
    radioBtn.addEventListener('change', function() {
        radioBtns.forEach(function(btn) {
            let btnId = btn.id.substring(8);
            if (btn.checked) {
                document.getElementById('btn' + btnId).style.color = '#FF0808';
                document.getElementById('btn' + btnId).style.borderColor = '#FF0808';
            }
            else {
                document.getElementById('btn' + btnId).style.color = '#292336';
                document.getElementById('btn' + btnId).style.borderColor = '#292336';
            }
        });
    });
});
let radioBtns = document.querySelectorAll('input[type="radio"][name="PaymentMethod"]');

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

let Sprice = document.getElementById("tempPrice").innerText;
let price = parseInt(Sprice);

let selectedIndex = document.getElementById("opsi-text").selectedIndex;
let selectedOption = document.getElementById("opsi-text").options[selectedIndex];

let Sfee = selectedOption.innerText.split(" - ")[1].split(" ")[1];
let fee = parseInt(Sfee);

let finalPrice = fee+price;

document.getElementById("price").innerText = finalPrice;


document.getElementById("opsi-text").addEventListener("change", function handleOptionChange() {
  var selectElement = document.getElementById("opsi-text");
  var selectedValue = selectElement.value;

  let selectedIndex = document.getElementById("opsi-text").selectedIndex;
  let selectedOption = document.getElementById("opsi-text").options[selectedIndex];

  let Sfee = selectedOption.innerText.split(" - ")[1].split(" ")[1];
  let fee = parseInt(Sfee);

  let finalPrice = fee+price;

  document.getElementById("price").innerText = finalPrice;
});
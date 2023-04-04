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

let selectedIndex = document.getElementById("opsi-text").selectedIndex;
let selectedOption = document.getElementById("opsi-text").options[selectedIndex];

let Sfee = selectedOption.innerText.split(" - ")[1].split(" ")[1];
let fee = parseInt(Sfee);
console.log(fee);

let Sprice = document.getElementById("price").innerText.split(" ")[1];
let price = parseInt(Sprice);
console.log(price);

let finalPrice = fee+price;
console.log(finalPrice);

document.getElementById("price").innerText = finalPrice;
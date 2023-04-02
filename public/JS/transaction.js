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
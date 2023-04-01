let count = 1;

document.getElementById('amount').innerText = count;

document.getElementById('increase').addEventListener("click", function(){
    count++;
    document.getElementById('amount').innerText = count;
});

document.getElementById('decrease').addEventListener("click", function(){
    if (count > 1){
        count--;
        document.getElementById('amount').innerText = count;
    }
});
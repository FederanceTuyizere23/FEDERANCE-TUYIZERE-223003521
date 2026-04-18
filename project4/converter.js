function convertCurrency() {

    let amount = parseFloat(document.getElementById("amount").value);
    let rate = parseFloat(document.getElementById("rate").value);
    let currency = document.getElementById("currency").value;

    // validation
    if (isNaN(amount) || amount <= 0) {
        alert("Enter valid amount");
        return;
    }

    if (isNaN(rate) || rate <= 0) {
        alert("Enter valid rate");
        return;
    }

    // calculation
    let result = amount * rate;

    // display
    document.getElementById("result-box").innerHTML =
        amount + " FRW = " + result.toFixed(2) + " " + currency;
}
const search = () => {
    const searchbox = document.getElementById("search-item").value.toUpperCase();
    const storeitems = document.getElementsByClassName(".container");
    const item = document.querySelectorAll(".item");
    const name = document.getElementsByTagName("h5");


    for (var i = 0; i < name.length; i++) {
        let match = item[i].getElementsByTagName('h5')[0];

        if (match) {
            let searchvalue = match.textContent || match.innerHTML;
            if (searchvalue.toUpperCase().indexOf(searchbox) > -1) {
                item[i].style.display = "";
            } else {
                item[i].style.display = "none";
            }
        }
    }
}

const plus = document.querySelector(".plus"),
    minus = document.querySelector(".minus"),
    num = document.querySelector(".num");
productAmmount = document.querySelector(".productAmmount"),
    productPrice = parseInt(document.querySelector(".productPrice")),
    price = document.querySelector(".totalPrice");

let a = 1;

plus.addEventListener("click", function () {
    a++;
    productAmmount.innerText = a;
    a = (a < 10) ? "0" + a : a;
    num.innerText = a;
    price.innerText = a * parseInt(productPrice);
});

minus.addEventListener("click", function () {
    if (a > 1) {
        a--;
        productAmmount.innerText = a;
        a = (a < 10) ? "0" + a : a;
        num.innerText = a;
        price.innerHTML = a * productPrice;
    }
});


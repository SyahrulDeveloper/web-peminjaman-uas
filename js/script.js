function myFunction() {
    alert("Terimakasih, Pesan Telah Terkirim!");
}

const hamBurger = document.querySelector(".toggle-btn");
hamBurger.addEventListener("click", function () {
    document.querySelector("#sidebar").classList.toggle("expand");
});

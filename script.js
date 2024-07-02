document.querySelector(".hamburger").addEventListener("click", function () {
  document.querySelector(".navigation ul").classList.toggle("active");
});

// pengirimanpaket
function hitungBiaya() {
  const jarak = document.getElementById('jarak').value;
  const biaya = jarak * 15000;
  document.getElementById('hasil').innerText = `Biaya Pengiriman: Rp ${biaya}`;
  document.getElementById('biaya').value = biaya;
}

var button = document.querySelector(".pengirimancard2 button");
var details = document.getElementById("details");

button.addEventListener("click", function () {
  // Toggle class 'hidden' pada elemen detail
  details.classList.toggle("hidden");
});

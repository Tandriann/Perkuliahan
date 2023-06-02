function validateForm(event) {
  event.preventDefault(); // Mencegah pengiriman form jika validasi gagal

  var nameInput = document.getElementById("name");
  var emailInput = document.getElementById("email");

  // Validasi Nama (tidak boleh kosong)
  if (nameInput.value === "") {
    nameInput.classList.add("error");
  } else {
    nameInput.classList.remove("error");
  }

  // Validasi Email (format email yang benar)
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailRegex.test(emailInput.value)) {
    emailInput.classList.add("error");
  } else {
    emailInput.classList.remove("error");
  }
}

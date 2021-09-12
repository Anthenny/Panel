const modalPersoneel = document.querySelector(".modal-maak-personeel");

// Btns

const modalPersoneelBtn = document.querySelector(".btn-maak-gebruiker");

// Close
const closePersoneel = document.querySelector(".close-personeel");

const openModal = (modalName) => {
  modalName.style.display = "block";
};

const closeModal = (modalName) => {
  modalName.style.display = "none";
};

// Personeel
modalPersoneelBtn.addEventListener("click", () => {
  openModal(modalPersoneel);
});

closePersoneel.addEventListener("click", () => {
  closeModal(modalPersoneel);
});

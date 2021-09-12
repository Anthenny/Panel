const modalMenukaart = document.querySelector(".modal-menukaart");
const modalReserveren = document.querySelector(".modal-reserveren");
const modalPersoneel = document.querySelector(".modal-maak-personeel");

// Btns
const modalMenuBtn = document.querySelector(".btn-menu");
const modalReserveerBtn = document.querySelector(".btn-reserveren");
const modalPersoneelBtn = document.querySelector(".btn-maak-gebruiker");

// Close
const modalMenuClose = document.querySelector(".close-menu");
const modalReserverenClose = document.querySelector(".close-reserveren");
const closePersoneel = document.querySelector(".close-personeel");

const openModal = (modalName) => {
  modalName.style.display = "block";
};

const closeModal = (modalName) => {
  modalName.style.display = "none";
};

// Home Screen
// modalMenuBtn.addEventListener("click", () => {
//   openModal(modalMenukaart);
// });

// modalMenuClose.addEventListener("click", () => {
//   closeModal(modalMenukaart);
// });

// modalReserveerBtn.addEventListener("click", () => {
//   openModal(modalReserveren);
// });

// modalReserverenClose.addEventListener("click", () => {
//   closeModal(modalReserveren);
// });

// Personeel
modalPersoneelBtn.addEventListener("click", () => {
  openModal(modalPersoneel);
});

closePersoneel.addEventListener("click", () => {
  closeModal(modalPersoneel);
});

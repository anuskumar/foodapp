const openModalBtn = document.querySelectorAll(".open-modal");
const closeModal = document.querySelector(".close-modal");
const modal = document.querySelector(".modal");
const modalContainer = document.querySelector(".modal-container");

openModalBtn.forEach((openModal) => {
  openModal.addEventListener("click", () => {
    modal.classList.remove("hide");
    modalContainer.classList.remove("hide");
  });
});

closeModal.addEventListener("click", () => {
  setTimeout(() => {
    modal.classList.add("hide");
  },800);
  modalContainer.classList.add("hide");
});

// modal.addEventListener("click", () => {
//   setTimeout(() => {
//     modal.classList.add("hide");
//   },800);
//   modalContainer.classList.add("hide");
// });
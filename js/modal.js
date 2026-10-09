document.addEventListener("click", function (event) {
  const openBtnEdit = event.target.closest(".open-modal-btn");
  const openBtnDelete = event.target.closest(".open-delete-btn");

  if (openBtnEdit) {
    const modal = openBtnEdit.closest(".inline").querySelector(".game-modal");
    if (modal) modal.style.display = "block";
    return;
  }
  if (openBtnDelete) {
    const modal = openBtnDelete
      .closest(".inline")
      .querySelector(".game-modal-delete");
    if (modal) modal.style.display = "block";
    return;
  }
  const closeBtn = event.target.closest(".close");
  const closeBtnDel = event.target.closest(".close-delete");
  if (closeBtn) {
    const modal = closeBtn.closest(".game-modal");
    if (modal) modal.style.display = "none";
    return;
  }
  if (closeBtnDel) {
    const modal = closeBtnDel.closest(".game-modal-delete");
    if (modal) modal.style.display = "none";
    return;
  }
  if (event.target.classList.contains("game-modal")) {
    event.target.style.display = "none";
  }
  if (event.target.classList.contains("game-modal-delete")) {
    event.target.style.display = "none";
  }
});

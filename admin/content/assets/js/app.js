function menu() {
  let list = document.querySelector("#menu-wrapper .section").children;
  let pages = document.querySelector("#content-wrapper .pages").children;
  for (let i = 0; i < list.length; i++) {
    list[i].addEventListener("click", (e) => {
      for (let j = 0; j < list.length; j++) {
        if (list[i] === list[j]) {
          list[j].classList.add("active");
          pages[j].style.display = "";
        } else {
          list[j].classList.remove("active");
          pages[j].style.display = "none";
        }
      }
    });
  }
}
menu();

function showpassword() {
  let flag = 0;
  let element = document.querySelector(
    "#content-wrapper #password .modal-body .new"
  );
  let element1 = document.querySelector(
    "#content-wrapper #password .modal-body .confirm"
  );
  document
    .querySelector("#content-wrapper #password .modal-body .show input")
    .addEventListener("click", (e) => {
      if (flag === 0) {
        element.setAttribute("type", "text");
        element1.setAttribute("type", "text");
        flag = 1;
      } else {
        element.setAttribute("type", "password");
        element1.setAttribute("type", "password");
        flag = 0;
      }
    });
}
showpassword();

function handelLink() {
  let elem = document.querySelector("#menu-wrapper .section").children;
  if (window.location.search) {
    let param = window.location.search.split("?")[1].split("&");
    elem[param[0].split("=")[1] - 1].click();
  }
}
handelLink();

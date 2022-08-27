function movetoPassword() {
  let username = document.querySelector("#username");
  let password = document.querySelector("#password");
  let backbtn = document.querySelector(".backBtn i");
  let loginbtnbutton = document.querySelector(".loginBtn button");
  let loginbtnspan = document.querySelector(".loginBtn span");
  if (username.value === "") {
    return (username.style.border = ".5px solid rgba(245, 66, 66,.4)");
  } else {
    username.style.display = "none";
    password.style.display = "";
    backbtn.style.opacity = "1";
    backbtn.style.pointerEvents = "all";
    backbtn.style.transform = "rotate(0deg)";
    loginbtnspan.style.display = "none";
    loginbtnbutton.style.display = "";
  }
}
function handelBack() {
  let username = document.querySelector("#username");
  let password = document.querySelector("#password");
  let backbtn = document.querySelector(".backBtn i");
  let loginbtnbutton = document.querySelector(".loginBtn button");
  let loginbtnspan = document.querySelector(".loginBtn span");
  username.style.display = "";
  password.style.display = "none";
  backbtn.style.opacity = "0";
  backbtn.style.pointerEvents = "none";
  backbtn.style.transform = "rotate(-90deg)";
  loginbtnspan.style.display = "";
  loginbtnbutton.style.display = "none";
}

// $(window).on("load", function () {
//   $("#intro").modal("show");
// });

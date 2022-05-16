let today = new Date();

let month, day;

if (today.getMonth() < 10) {
  month = "0" + (today.getMonth() + 1);
} else {
  month = today.getMonth() + 1;
}

if (today.getDate() < 10) {
  day = "0" + today.getDate();
} else {
  day = today.getDate();
}

let date = today.getFullYear() + "-" + month + "-" + today.getDate();

const datumForm = document.querySelector("#datumForm");
const datumForm2= document.querySelector("#datumForm2");

if (datumForm) {
  datumForm.setAttribute("min", date);
}

if (datumForm2) {
  datumForm2.setAttribute("min", date);
}
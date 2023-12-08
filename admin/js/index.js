import "../css/style.scss";

import * as bootstrap from "bootstrap";
import * as Popper from "@popperjs/core";

console.log("javascript works in private adminzone....");

const toastTrigger = document.getElementById("liveToastBtn");
const toastLiveExample = document.getElementById("liveToast");
if (toastTrigger) {
  toastTrigger.addEventListener("click", () => {
    const toast = new bootstrap.Toast(toastLiveExample);
    toast.show();
  });
}

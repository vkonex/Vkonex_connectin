const form = document.querySelector(".typing-area"),
  incoming_id = form.querySelector(".incoming_id").value,
  fileUpload = form.querySelector("#file-upload"),
  labelFile = document.querySelector("#label-file"),
  inputField = form.querySelector(".input-field"),
  sendBtn = form.querySelector("button"),
  chatBox = document.querySelector(".chat-box");

form.onsubmit = (e) => {
  e.preventDefault();
};
let upload_file = (event) => {
  if (event.target.files[0]) {
    let filename = event.target.files[0].name;
    labelFile.innerHTML = "Attached : "+filename;
    sendBtn.classList.add("active");
  }
};
inputField.focus();
inputField.onkeyup = () => {
  if (inputField.value != "") {
    sendBtn.classList.add("active");
  } else {
    sendBtn.classList.remove("active");
  }
};

sendBtn.onclick = () => {
  console.log(fileUpload.files[0])
  let formData = new FormData(form);
  fetch("php/insert-chat.php", {
    method: "POST",
    body: formData,
  })
    .then((res) => res.text())
    .then((data) => {
      inputField.value = "";
      scrollToBottom();
    })
    .catch((err) => {
      console.log(err);
    });
};

chatBox.onmouseenter = () => {
  chatBox.classList.add("active");
};

chatBox.onmouseleave = () => {
  chatBox.classList.remove("active");
};
setInterval(() => {
  let formData = new FormData();
  formData.append("incoming_id", incoming_id);
  fetch("php/get-chat.php", {
    method: "POST",
    body: formData,
  })
    .then((res) => res.text())
    .then((data) => {
      chatBox.innerHTML = data;
      if (!chatBox.classList.contains("active")) {
        scrollToBottom();
      }
    })
    .catch((err) => {
      console.log(err);
    });
}, 500);

function scrollToBottom() {
  chatBox.scrollTop = chatBox.scrollHeight;
}

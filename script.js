const message =
  "Thank you for submitting your request. Dora the explorator will respond ASAP.";

if (document.getElementById("contactForm") != null) {
  document
    .getElementById("contactForm")
    .addEventListener("submit", function (event) {
      event.preventDefault();
      alert(message);
    });
}
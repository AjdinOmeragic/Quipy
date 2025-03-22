const quoteText = document.querySelector(".quote");
const quoteBtn = document.querySelector("button.new-quote");
const authorName = document.querySelector(".name");
const sountBtn = document.querySelector(".sound");
const copyBtn = document.querySelector(".copy");

function randomQuote() {
  fetch("http://api.quotable.io/random")
    .then((res) => res.json())
    .then((result) => {
      quoteText.textContent = result.content;
      authorName.textContent = result.author;
    })
    .catch((error) => {
      console.error("Error fetching the quote:", error);
      quoteText.textContent = "An error occurred. Please try again.";
      authorName.textContent = "";
    });
}

sountBtn.addEventListener("click", () => {
  let utterance = new SpeechSynthesisUtterance(
    `${quoteText.textContent} by ${authorName.textContent}`
  );
  speechSynthesis.speak(utterance);
});

copyBtn.addEventListener("click", () => {
  navigator.clipboard.writeText(
    `${quoteText.textContent} by ${authorName.textContent}`
  );
});

quoteBtn.addEventListener("click", randomQuote);
randomQuote();

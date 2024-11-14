const messageInputE = document.getElementById("message");
const chatE = document.querySelector(".chat")
const krzysiekResponses = [
    "Świetnie!",
    "Kto gra główną rolę?",
    "Lubisz filmy Tego reżysera?",
    "Będę 10 minut wcześniej",
    "Może kupimy sobie popcorn?",
    "Ja wolę Colę",
    "Zaproszę jeszcze Grześka",
    "Tydzień temu też byłem w kinie na Diunie",
    "Ja funduję bilety"
]

sender.addEventListener("click", (e)=>{
    const message = messageInputE.value;
    sendMessage(message, "Jolka");
    
})

lotto.addEventListener("click", (e)=>{
    const index = Math.floor(Math.random() * krzysiekResponses.length )
    const message = krzysiekResponses[index]
    sendMessage(message, "Krzysiek");
})

// person = Jolka albo Krzysiek

function sendMessage(message, person){
    const chatBoxE = document.createElement("div");
    chatBoxE.classList.add(person);

    const imageElement = document.createElement("img");
    imageElement.src = person + ".jpg" 
    const paragraphE = document.createElement("p");
    paragraphE.textContent = message

    chatBoxE.appendChild(imageElement);
    chatBoxE.appendChild(paragraphE);
    chatE.appendChild(chatBoxE);

    chatBoxE.scrollIntoView();
    
}
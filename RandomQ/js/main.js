function quote (text,author) {
    this.text = text;
    this.author = author;

}

var quoteOne = new quote("I'm selfish, impatient and a little insecure. I make mistakes, I am out of control and at times hard to handle. But if you can't handle me at my worst, then you sure as hell don't deserve me at my best.","Marilyn Monroe");
var quoteTwo = new quote("Two things are infinite: the universe and human stupidity; and I'm not sure about the universe.","Albert Einstein");
var quoteThree = new quote ("Be who you are and say what you feel, because those who mind don't matter, and those who matter don't mind","Bernard M. Baruch");
var quoteFour = new quote ("You know you're in love when you can't fall asleep because reality is finally better than your dreams.","Dr. Seuss");
var quoteFive = new quote ("In three words I can sum up everything I've learned about life: it goes on.","Robert Frost");
var quoteSex = new quote ("If you want to know what a man's like, take a good look at how he treats his inferiors, not his equals.","J.K. Rowling");
var quoteSeven = new quote ("Live as if you were to die tomorrow. Learn as if you were to live forever.","Mahatma Gandhi");

var quoteArr = [
    quoteOne, quoteTwo,quoteFive,quoteFour,quoteSeven,quoteSex,quoteThree
]

var text = document.getElementById("text");
var author = document.getElementById("author");

function generatQ(){
    var randomNum = Math.random(); //generate random num fro 0 to <1
    var arrNum = Math.floor(randomNum*7); //get random num from 0 to 6
    text.innerHTML = quoteArr[arrNum].text;
    author.innerHTML = quoteArr[arrNum].author;

}






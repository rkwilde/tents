var reviews = [
    {
        quotes_classes:"mb-3 mt-4",
        text:"We transform your space into the <br>perfect venue. You choose the location, meet <br>with us to choose the design and we'll <br>take it from there.",
        author:"Andrew Willis, Owner"
    },
    {
        quotes_classes:"mb-3 mt-5",
        text:"Andrew, the owner, <br>definitely has an affinity for drapery <br>and lighting!",
        author:"Ashley Molburg"
    },
    {
        quotes_classes:"mb-3 mt-4",
        text:"We work efficiently and quietly behind the <br>scenes, so that you can put your focus where <br>it belongs - on your guests and your <br>special day.",
        author:"Andrew Willis, Owner"
    },
    {
        quotes_classes:"mb-3 mt-4",
        text:"We are passionate about providing the very best <br>in service and in design for your special <br>event. And it's that passion that drives <br>us to deliver nothing but the best.",
        author:"Shannon Willis, Design Consultant"
    }
];

document.getElementById("whichReview").value = "0";

var timer = setInterval(nextReviewInterval,10000);



// FUNCTIONS
function previousReview()
{
    clearInterval(timer);
    timer = setInterval(nextReviewInterval,10000);
    changeReview(-1);
}
function nextReview()
{
    clearInterval(timer);
    timer = setInterval(nextReviewInterval,10000);
    changeReview(1);
}
function nextReviewInterval()
{
    changeReview(1);
}
function changeReview(delta)
{
    var reviewID = document.getElementById("whichReview");
    reviewID.value = (Number(reviewID.value) + reviews.length + delta) % reviews.length;
        // by adding the length first, the formula can't go negative, but doesn't change the modulus'd answer
    fadeOutReview();
    setTimeout(loadReview,500);
    setTimeout(fadeInReview,500);
}
function fadeOutReview()
{
    var reviewCont = document.getElementById("reviewContainer");
    var reviewText = document.getElementById("reviewText");
    reviewCont.classList.add('color-purple-bg','transition2');
    reviewText.classList.add('color-purple-font','transition2');
}
function fadeInReview()
{
    var reviewCont = document.getElementById("reviewContainer");
    var reviewText = document.getElementById("reviewText");
    reviewCont.classList.remove('color-purple-bg');
    reviewText.classList.remove('color-purple-font');
}
function loadReview()
{
    var reviewID = document.getElementById("whichReview");
    var curReview = reviews[Number(reviewID.value)];
    document.getElementById("reviewQuotes").setAttribute("class",curReview.quotes_classes);
    document.getElementById("reviewText").innerHTML = curReview.text;
    document.getElementById("reviewAuthor").innerHTML = curReview.author;
}
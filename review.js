window.addEventListener('load', init);

// Globals
let apiUrl = 'http://localhost/School/Jaar-1/3e_kwartaal/CLE3/webservice-sharon/index.php';
let allReviews = document.getElementById('all-reviews');

// Start function
function init()
{
    seeReviews();
    ajaxRequest(apiUrl, createReviewCards());
}

//Function for fetching the API
function ajaxRequest(){
    fetch(url)
        .then((response) => {
            if(!response.ok){
                throw new Error(response.statusText);
            }
            return response.json();
        })
        .then(succesHandler)
        .catch(ajaxErrorHandler);
}

// Function create a card with a review of a person
function createReviewCards(data) {
    for (let review of data) {
        console.log(review);
        let div = document.createElement('div');
        div.classList.add('review-card');
        div.dataset.name = review.name;

        allReviews.appendChild(div);

        ajaxRequest(review.url, fillReviews);
    }
}

//Function write the name and rating from the array
function fillReviews(review){
    let div = document.querySelector(`.review-card[data-name='${review.name}']`);

    let name = document.createElement('h3');
    name.classList.add('reviewname');
    name.innerText = review.name;
    div.appendChild(name);

    let rating = document.createElement('div');
    rating.classList.add('rating');
    rating.innerText = review.rating;
    div.appendChild(rating);

    let button = document.createElement('button');
    button.classList.add('seemore');
    button.innerText = 'See more';
    div.appendChild(button);

    // let description = document.createElement('li');
    // description.classList.add('reviewdescription');
    // description.innerText = review.feedback;
    // div.appendChild(description);
    // console.log(data);
}


//Error function
function ajaxErrorHandler(data){
    console.log(data);
    let error = document.createElement('div');
    error.classList.add('error');
    error.innerText = "Op het moment kunnen de reviews niet geladen worden, probeer het later opnieuw"
    allReviews.before(error);
}
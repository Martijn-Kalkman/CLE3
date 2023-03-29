window.addEventListener('load', init);

// Globals
let apiUrl = 'http://localhost/School/Jaar-1/3e_kwartaal/CLE3/webservice-sharon/index.php';
let allReviews = document.getElementById('all-reviews');

// Start function
function init()
{
    seeReviews();
}

// Function to get the hardcoded reviews from the array
function seeReviews(){
    fetch(apiUrl)
        .then((response) => {
            if(!response.ok){
                throw new Error(response.statusText);
            }
            return response.json();
        })
        .then(createReviewCards)
        .catch(ajaxErrorHandler);
}

function createReviewCards(data) {

    for (let review of data) {
        console.log(review);
        let div = document.createElement('div');
        div.classList.add('review-card');
        div.dataset.name = review.name;
        allReviews.appendChild(div);

        // let name = document.createElement('li');
        // name.classList.add('reviewname');
        // name.innerText = review.name;
        // div.appendChild(name);
        //
        // let stars = document.createElement('li');
        // stars.classList.add('rating');
        // stars.innerText = review.rating;
        // div.appendChild(stars);




        fetch(review.url)
            .then((response) => {
                if(!response.ok){
                    throw new Error(response.statusText);
                }
                return response.json();
            })
            .then(fillReviews)
            .catch(ajaxErrorHandler);

        console.log(review.id);
    }
}

function fillReviews(data){
    let description = document.createElement('li');
    description.classList.add('reviewdescription');
    description.innerText = review.feedback;
    div.appendChild(description);
    console.log(data);
}


//Error function
function ajaxErrorHandler(data){
    console.log(data);
    let error = document.createElement('div');
    error.classList.add('error');
    error.innerText = "Op het moment kunnen de reviews niet geladen worden, probeer het later opnieuw"
    allReviews.before(error);
}
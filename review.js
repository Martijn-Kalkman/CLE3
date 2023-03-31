window.addEventListener('load', init);

// Globals
let apiUrl = 'http://localhost/School/Jaar-1/3e_kwartaal/CLE3/webservice-sharon/index.php';
let allReviews;
let reviewData = {};
let reviewDetails;
let detailContent;

// Start function
function init()
{
    allReviews = document.getElementById('all-reviews');
    ajaxRequest(apiUrl, createReviewCards);
    allReviews.addEventListener('click', clickedReview);

    reviewDetails = document.getElementById('review-detail');
    detailContent = document.querySelectorAll('.modal-content');
    reviewDetails.addEventListener('click', detailModalClickHandler);
    reviewDetails.addEventListener('close', detailCloseHandler);
}

//Function for fetching the API
function ajaxRequest(url, succesHandler){
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
    for (let review of data.results) {
        console.log(data);
        let div = document.createElement('div');
        div.classList.add('review-card');
        div.dataset.name = review.name;


        let name = document.createElement('h2');
        name.classList.add('text-3xl', 'font-bold', 'dark:text-black');
        name.innerText = review.name;
        div.appendChild(name);


        if (review.rating === 1){
          let stars = document.createElement('span');
           stars.classList.add('fa', 'fa-star', 'checked', 'allstars');
            div.appendChild(stars);
        }

        if (review.rating === 2){
            let stars = document.createElement('span');
            stars.classList.add('fa', 'fa-star', 'checked', 'allstars');
            div.appendChild(stars.cloneNode(true));
            div.appendChild(stars.cloneNode(true));
        }

        if (review.rating === 3){
            let stars = document.createElement('span');
            stars.classList.add('fa', 'fa-star', 'checked', 'allstars');
            div.appendChild(stars.cloneNode(true));
            div.appendChild(stars.cloneNode(true));
            div.appendChild(stars.cloneNode(true));
        }
        if (review.rating === 4){
            let stars = document.createElement('span');
            stars.classList.add('fa', 'fa-star', 'checked', 'allstars');
            div.appendChild(stars.cloneNode(true));
            div.appendChild(stars.cloneNode(true));
            div.appendChild(stars.cloneNode(true));
            div.appendChild(stars.cloneNode(true));
        }
        if (review.rating === 5){
            let stars = document.createElement('span');
            stars.classList.add('fa', 'fa-star', 'checked', 'allstars');
            div.appendChild(stars.cloneNode(true));
            div.appendChild(stars.cloneNode(true));
            div.appendChild(stars.cloneNode(true));
            div.appendChild(stars.cloneNode(true));
            div.appendChild(stars.cloneNode(true));
        }


        allReviews.appendChild(div);

        let button = document.createElement('button');
        button.classList.add('bg-blue-500', 'hover:bg-blue-400', 'text-white', 'font-bold', 'py-2', 'px-4', 'border-b-4', 'border-blue-700', 'hover:border-blue-500', 'rounded');
        button.innerText = 'Bekijk review';
        div.appendChild(button);
        ajaxRequest(apiUrl, average);
    }

}

//Function write the name and rating from the array in a separate screen
function clickedReview(e) {
    let clickedItem = e.target;
    if (clickedItem.nodeName !== 'BUTTON'){
        return;
    }

    let review = reviewData[clickedItem.dataset.id];
    console.log(review);

    detailContent.innerHTML = '';

    // let name = document.createElement('h2');
    // name.classList.add('text-4xl', 'font-extrabold', 'dark:text-black');
    // name.innerHTML = `${review.name} (#${review.id})`;
    // reviewDetails.appendChild(name);


    // if (review.rating === 1){
    //     let stars = document.createElement('span');
    //     stars.classList.add('fa', 'fa-star', 'checked');
    //     div.appendChild(stars);
    // }
    //
    // if (review.rating === 2){
    //     let stars = document.createElement('span');
    //     stars.classList.add('fa', 'fa-star', 'checked');
    //     div.appendChild(stars.cloneNode(true));
    //     div.appendChild(stars.cloneNode(true));
    // }
    //
    // if (review.rating === 3){
    //     let stars = document.createElement('span');
    //     stars.classList.add('fa', 'fa-star', 'checked');
    //     div.appendChild(stars.cloneNode(true));
    //     div.appendChild(stars.cloneNode(true));
    //     div.appendChild(stars.cloneNode(true));
    // }
    // if (review.rating === 4){
    //     let stars = document.createElement('span');
    //     stars.classList.add('fa', 'fa-star', 'checked');
    //     div.appendChild(stars.cloneNode(true));
    //     div.appendChild(stars.cloneNode(true));
    //     div.appendChild(stars.cloneNode(true));
    //     div.appendChild(stars.cloneNode(true));
    // }
    // if (review.rating === 5){
    //     let stars = document.createElement('span');
    //     stars.classList.add('fa', 'fa-star', 'checked');
    //     div.appendChild(stars.cloneNode(true));
    //     div.appendChild(stars.cloneNode(true));
    //     div.appendChild(stars.cloneNode(true));
    //     div.appendChild(stars.cloneNode(true));
    //     div.appendChild(stars.cloneNode(true));
    // }


    reviewDetails.showModal();
    allReviews.classList.add('dialog-open');

    // reviewDetails.innerText = "Hoi"
}

function average(data){
    let numbers = data.rating;
    let sum = numbers.reduce((accumulator, currentValue) => {
        return accumulator + currentValue;
    })
    let avg = sum/numbers.length;
    console.log(avg);
}

function detailModalClickHandler(e){
    if (e.target.nodeName === 'DIALOG' || e.target.nodeName === 'BUTTON') {
        reviewDetails.close();
    }
}

function detailCloseHandler() {
    allReviews.classList.remove('dialog-open');
}
//Error function
function ajaxErrorHandler(data){
    console.log(data);
    let error = document.createElement('div');
    error.classList.add('error');
    error.innerText = "Op het moment kunnen de reviews niet geladen worden, probeer het later opnieuw"
    allReviews.before(error);
}
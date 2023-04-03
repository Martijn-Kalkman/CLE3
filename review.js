window.addEventListener('load', init);

// Globals
let apiUrl = 'http://localhost/School/Jaar-1/3e_kwartaal/CLE3/webservice-sharon/index.php';
let allReviews;
let reviewAverage;
let reviewData = {};
let reviewDetails;
let detailContent;

// Start function
function init()
{
    allReviews = document.getElementById('all-reviews');
    reviewAverage = document.getElementById('reviewaverage')
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
        let div = document.createElement('div');
        div.classList.add('review-card', 'max-w-sm', 'p-6', 'bg-white', 'border', 'border-gray-200', 'rounded-lg', 'shadow', 'dark:bg-gray-700', 'dark:border-gray-700');
        div.dataset.name = review.name;


        let name = document.createElement('h2');
        name.classList.add('mb-2', 'text-2xl', 'font-bold', 'tracking-tight', 'text-gray-900', 'dark:text-white');
        name.innerText = review.name;
        div.appendChild(name);


        if (review.rating === 1){
          let stars = document.createElement('span');
           stars.classList.add('fa', 'fa-star', 'checked');
            div.appendChild(stars);
        }

        if (review.rating === 2){
            let stars = document.createElement('span');
            stars.classList.add('fa', 'fa-star', 'checked');
            div.appendChild(stars.cloneNode(true));
            div.appendChild(stars.cloneNode(true));
        }

        if (review.rating === 3){
            let stars = document.createElement('span');
            stars.classList.add('fa', 'fa-star', 'checked');
            div.appendChild(stars.cloneNode(true));
            div.appendChild(stars.cloneNode(true));
            div.appendChild(stars.cloneNode(true));
        }
        if (review.rating === 4){
            let stars = document.createElement('span');
            stars.classList.add('fa', 'fa-star', 'checked');
            div.appendChild(stars.cloneNode(true));
            div.appendChild(stars.cloneNode(true));
            div.appendChild(stars.cloneNode(true));
            div.appendChild(stars.cloneNode(true));
        }
        if (review.rating === 5){
            let stars = document.createElement('span');
            stars.classList.add('fa', 'fa-star', 'checked');
            div.appendChild(stars.cloneNode(true));
            div.appendChild(stars.cloneNode(true));
            div.appendChild(stars.cloneNode(true));
            div.appendChild(stars.cloneNode(true));
            div.appendChild(stars.cloneNode(true));
        }


        allReviews.appendChild(div);

        let button = document.createElement('button');
        button.classList.add('reviewbutton', 'inline-flex', 'items-center', 'px-3', 'py-2', 'text-sm', 'font-medium', 'text-center', 'text-white', 'bg-blue-700', 'rounded-lg', 'hover:bg-blue-80', 'focus:ring-4', 'focus:outline-none', 'focus:ring-blue-300', 'dark:bg-blue-600', 'dark:hover:bg-blue-700', 'dark:focus:ring-blue-800');
        button.innerText = 'Bekijk review';
        div.appendChild(button);

    }
    ajaxRequest(apiUrl, average);
}

//Function write the name and rating from the array in a separate screen
function clickedReview(e) {
    let clickedItem = e.target;
    if (clickedItem.nodeName !== 'BUTTON'){
        return;
    }
    console.log(e);
    let review = reviewData[clickedItem.dataset.id];
    console.log(review);

    detailContent.innerHTML = '';

    // let name = document.createElement('h2');
    // name.classList.add('mb-2', 'text-2xl', 'font-bold', 'tracking-tight', 'text-gray-900', 'dark:text-white');
    // name.innerText = review.name;
    // div.appendChild(name);



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
        let sum = 0;
        for (let i = 0; i < data.results.length; i++) {
            sum += data.results[i].rating;
        }
        let average = Math.round(sum / data.count);

    let div = document.createElement('div');
    div.classList.add('averageofreviews', 'max-w-sm', 'p-6', 'bg-white', 'border', 'border-gray-200', 'rounded-lg', 'shadow', 'dark:bg-gray-700', 'dark:border-gray-700');

    if (average === 1){
        let stars = document.createElement('span');
        stars.classList.add('fa', 'fa-star', 'checked');
        div.appendChild(stars);
    }

    if (average === 2){
        let stars = document.createElement('span');
        stars.classList.add('fa', 'fa-star', 'checked');
        div.appendChild(stars.cloneNode(true));
        div.appendChild(stars.cloneNode(true));
    }

    if (average === 3){
        let stars = document.createElement('span');
        stars.classList.add('fa', 'fa-star', 'checked');
        div.appendChild(stars.cloneNode(true));
        div.appendChild(stars.cloneNode(true));
        div.appendChild(stars.cloneNode(true));
    }
    if (average === 4){
        let stars = document.createElement('span');
        stars.classList.add('fa', 'fa-star', 'checked');
        div.appendChild(stars.cloneNode(true));
        div.appendChild(stars.cloneNode(true));
        div.appendChild(stars.cloneNode(true));
        div.appendChild(stars.cloneNode(true));
    }
    if (average === 5){
        let stars = document.createElement('span');
        stars.classList.add('fa', 'fa-star', 'checked');
        div.appendChild(stars.cloneNode(true));
        div.appendChild(stars.cloneNode(true));
        div.appendChild(stars.cloneNode(true));
        div.appendChild(stars.cloneNode(true));
        div.appendChild(stars.cloneNode(true));
    }
    let h1 = document.createElement('h1')
    h1.innerText = 'van de 5 sterren gemiddeld';
    h1.classList.add('mb-2', 'text-2xl', 'font-bold', 'tracking-tight', 'text-gray-900', 'dark:text-white');
    div.appendChild(h1);
    reviewAverage.appendChild(div);
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
    let error = document.createElement('div');
    error.classList.add('error');
    error.innerText = "Op het moment kunnen de reviews niet geladen worden, probeer het later opnieuw"
    allReviews.before(error);
}
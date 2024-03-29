window.addEventListener('load', init);


// Globals
let apiUrl = `${window.location.href.split('review.php')[0]}/webservice-sharon/index.php`;
let allReviews;
let reviewAverage;
let reviewDetails;
let detailContent;
let favorites = [];
let favorite;
let average2;

let prevValue = localStorage.getItem('favorites');
let eventLocalStorage = [];

// Start function
function init()
{
    allReviews = document.getElementById('all-reviews');
    reviewAverage = document.getElementById('reviewaverage')
    ajaxRequest(apiUrl, createReviewCards);
    allReviews.addEventListener('click', clickedReview);

    reviewDetails = document.getElementById('review-detail');
    detailContent = document.querySelector('.modal-content');
    reviewDetails.addEventListener('click', detailModalClickHandler);
    reviewDetails.addEventListener('close', detailCloseHandler);


}

window.addEventListener('storage', function(event) {
    if (event.key === 'favorites') {
      console.log('The value of myKey has changed to: ' + event.newValue);
    }
  });

//Function for fetching the API
//  if correct; go to succesHandler
//  if incorrect; go to ajaxErrorHandler
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
        div.classList.add('review-card', 'p-6', 'bg-white', 'border', 'border-gray-200', 'rounded-lg', 'shadow', 'dark:bg-gray-700', 'dark:border-gray-700');
        div.dataset.name = review.name;

        favorite = document.createElement('span');
        favorite.classList.add('fa-regular', 'fa-star', 'stars', 'absolute', 'top-5', 'right-0', 'h-16', 'w-16');
        favorite.dataset.id = review.id;
        div.appendChild(favorite);

        let name = document.createElement('h2');
        name.classList.add('mb-2', 'text-2xl', 'font-bold', 'tracking-tight', 'text-gray-900', 'dark:text-white');
        name.innerText = review.name;
        div.appendChild(name);

        if (review.rating === 1){
          let stars = document.createElement('span');
           stars.classList.add('fa', 'fa-star', 'checked');
           let emptyStars = document.createElement('span');
           emptyStars.classList.add('fa-regular', 'fa-star');
            div.appendChild(stars);
            div.appendChild(emptyStars.cloneNode(true));
            div.appendChild(emptyStars.cloneNode(true));
            div.appendChild(emptyStars.cloneNode(true));
            div.appendChild(emptyStars.cloneNode(true));
        }

        if (review.rating === 2){
            let stars = document.createElement('span');
            stars.classList.add('fa', 'fa-star', 'checked');
            let emptyStars = document.createElement('span');
            emptyStars.classList.add('fa-regular', 'fa-star');
            div.appendChild(stars.cloneNode(true));
            div.appendChild(stars.cloneNode(true));
            div.appendChild(emptyStars.cloneNode(true));
            div.appendChild(emptyStars.cloneNode(true));
            div.appendChild(emptyStars.cloneNode(true));
        }

        if (review.rating === 3){
            let stars = document.createElement('span');
            stars.classList.add('fa', 'fa-star', 'checked');
            let emptyStars = document.createElement('span');
            emptyStars.classList.add('fa-regular', 'fa-star');
            div.appendChild(stars.cloneNode(true));
            div.appendChild(stars.cloneNode(true));
            div.appendChild(stars.cloneNode(true));
            div.appendChild(emptyStars.cloneNode(true));
            div.appendChild(emptyStars.cloneNode(true));
        }
        if (review.rating === 4){
            let stars = document.createElement('span');
            stars.classList.add('fa', 'fa-star', 'checked');
            let emptyStars = document.createElement('span');
            emptyStars.classList.add('fa-regular', 'fa-star');
            div.appendChild(stars.cloneNode(true));
            div.appendChild(stars.cloneNode(true));
            div.appendChild(stars.cloneNode(true));
            div.appendChild(stars.cloneNode(true));
            div.appendChild(emptyStars.cloneNode(true));
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
        button.dataset.id = review.id;
        div.appendChild(button);



    }
    ajaxRequest(apiUrl, average);
}

//Function write the name and rating from the array in a separate screen
function clickedReview(e) {
    let clickedItem = e.target;
    if (clickedItem.nodeName === 'BUTTON'){
        let reviewID = clickedItem.dataset.id;
        let extraURL = apiUrl+'?id='+reviewID;
        reviewDetails.showModal();
        allReviews.classList.add('dialog-open');

        ajaxRequest(extraURL, fillDialog);
    }

    if (clickedItem.nodeName === 'SPAN' && clickedItem.dataset.id !== ''){
        let favoriteID = clickedItem.dataset.id;
        saveFavorite(favoriteID);
    } else {
        return;
    }
}

/**
 * This function will save an favourite review item with the following params
 * @param {string} item this is the param of the function which holds a string value
 * 
 * Functions works as follows:
 *  checks in the localStorage if there is an key with the name favorites 
 *      if it has a key with called 'favourites' then put them in the variable 
 *      'favoriteItems' and then JSON.Parse that variable into favorites 
 *          then check if there is already the same value in the localStorage 
 *              if it has the same value then splice it (remove it from the array) and then push everything back into localStorage. 
 */

function saveFavorite(item) {
    if (localStorage.getItem('favorites') !== null) {
        let favoriteItems = localStorage.getItem('favorites');
        favorites = JSON.parse(favoriteItems);
            if (favorites.includes(item) === true) {
                let favoriteIndex = favorites.indexOf(item);
                favorites.splice(favoriteIndex, 1);
                localStorage.setItem('favorites', JSON.stringify(favorites));

            }else{
                favorites.push(item);
                localStorage.setItem('favorites', JSON.stringify(favorites));
       
            }
    } else {
        localStorage.setItem('favorites', JSON.stringify(favorites));
    }
}




function fillDialog(data){
    detailContent.innerHTML = '';

        let tags = document.createElement('h3');
        tags.innerHTML = data.tags;
        tags.classList.add('text-white', 'font-bold', 'py-2', 'px-4', 'rounded-full');
        detailContent.appendChild(tags);

        let description = document.createElement('h1');
        description.innerHTML = data.comment;
        description.classList.add('text-white')
        detailContent.appendChild(description);
}



function average(data){
        let sum = 0;
        for (let i = 0; i < data.results.length; i++) {
            sum += data.results[i].rating;
        }
        let average = Math.round(sum / data.count);
       average2 = sum/data.count;
        let averageLocalStorage = JSON.stringify(average2);
        window.localStorage.setItem('averages', averageLocalStorage)
    let div = document.createElement('div');
    div.classList.add('averageofreviews', 'p-6', 'bg-white', 'border', 'border-gray-200', 'rounded-lg', 'shadow', 'dark:bg-gray-700', 'dark:border-gray-700');

    let title = document.createElement('h1');
    title.innerHTML = data.name;
    title.classList.add('mb-2', 'text-5xl', 'font-bold', 'tracking-tight', 'text-gray-900', 'dark:text-white');
    div.appendChild(title);

    if (average === 1){
        let stars = document.createElement('span');
        stars.classList.add('fa', 'fa-star', 'checked');
        let emptyStars = document.createElement('span');
        emptyStars.classList.add('fa-regular', 'fa-star');
        div.appendChild(stars);
        div.appendChild(emptyStars.cloneNode(true));
        div.appendChild(emptyStars.cloneNode(true));
        div.appendChild(emptyStars.cloneNode(true));
        div.appendChild(emptyStars.cloneNode(true));
    }

    if (average === 2){
        let stars = document.createElement('span');
        stars.classList.add('fa', 'fa-star', 'checked');
        let emptyStars = document.createElement('span');
        emptyStars.classList.add('fa-regular', 'fa-star');
        div.appendChild(stars.cloneNode(true));
        div.appendChild(stars.cloneNode(true));
        div.appendChild(emptyStars.cloneNode(true));
        div.appendChild(emptyStars.cloneNode(true));
        div.appendChild(emptyStars.cloneNode(true));
    }

    if (average === 3){
        let stars = document.createElement('span');
        stars.classList.add('fa', 'fa-star', 'checked');
        let emptyStars = document.createElement('span');
        emptyStars.classList.add('fa-regular', 'fa-star');
        div.appendChild(stars.cloneNode(true));
        div.appendChild(stars.cloneNode(true));
        div.appendChild(stars.cloneNode(true));
        div.appendChild(emptyStars.cloneNode(true));
        div.appendChild(emptyStars.cloneNode(true));
    }
    if (average === 4){
        let stars = document.createElement('span');
        stars.classList.add('fa', 'fa-star', 'checked');
        let emptyStars = document.createElement('span');
        emptyStars.classList.add('fa-regular', 'fa-star');
        div.appendChild(stars.cloneNode(true));
        div.appendChild(stars.cloneNode(true));
        div.appendChild(stars.cloneNode(true));
        div.appendChild(stars.cloneNode(true));
        div.appendChild(emptyStars.cloneNode(true));
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
    h1.innerText = average2 + ' van de 5 sterren gemiddeld';
    h1.classList.add('mb-2', 'text-2xl', 'font-bold', 'tracking-tight', 'text-gray-900', 'dark:text-white');
    div.appendChild(h1);

    reviewAverage.appendChild(div);
}

function detailModalClickHandler(e){
    if (e.target.nodeName === 'DIALOG' || e.target.nodeName === 'BUTTON' || e.target.nodeName === 'SPAN') {
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


// Set up a function to check for changes to the key
function checkLocalStorage() {
  // Get the current value of the key
  let currValue = localStorage.getItem('favorites');
  // Compare the current value to the previous value
  if (currValue !== prevValue) {
    
    eventLocalStorage = JSON.parse(localStorage.getItem('favorites'));


    
    for (let index = 0; index < eventLocalStorage.length; index++) {
       document.querySelector(`[data-id="${eventLocalStorage[index]}"]`).classList.add('fa-solid')
    }
    prevValue = currValue;
  }
}

// Call the checkLocalStorage() function every 1 second
setInterval(checkLocalStorage, 50);

//  this needs to be reworked
//  checks all the span element with data-id and then first removes all fa solid and then readds them 
//  issue with this memory leak
setInterval(() => {
    let elements = document.querySelectorAll('span[data-id]');
    eventLocalStorage = JSON.parse(localStorage.getItem('favorites'));

    for (let i = 0; i < elements.length; i++) {
        elements[i].classList.remove('fa-solid');
        elements[i].classList.add('fa-regular');
    }

    for (let index = 0; index < eventLocalStorage.length; index++) {
        document.querySelector(`[data-id="${eventLocalStorage[index]}"]`).classList.remove('fa-solid')
       if(document.querySelector(`[data-id="${eventLocalStorage[index]}"]`).dataset.id == eventLocalStorage[index]){
        document.querySelector(`[data-id="${eventLocalStorage[index]}"]`).classList.add('fa-solid')
       }
    }
}, 100);
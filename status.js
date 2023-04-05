window.addEventListener('load', init);

// Globals
let apiUrl = `${window.location.href.split('status.php')[0]}/webservice-martijn/index.php`;let elavatorStatus;

// Start function
function init()
{
    elavatorStatus = document.getElementById('elavatorStatus');

    ajaxRequest(apiUrl, createReviewCards);
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
        if (review.id === 1) {
            let div = document.createElement('div');
            div.classList.add('elavator-data');
            div.dataset.name = review.name;

            let elevator_height = document.createElement('h3');
            elevator_height.classList.add('elevator_height');
            elevator_height.innerText = "Hoogte: " + review.elevator_height;
            div.appendChild(elevator_height);



            let status = document.createElement('p');
            status.innerText = "Status: " + review.status;
            div.appendChild(status);

            let closed = document.createElement('p');
            closed.innerText ="Open: " + review.closed;
            div.appendChild(closed);

            let accessibility = document.createElement('p');
            accessibility.innerText ="Accessible: " + review.accessibility;
            div.appendChild(accessibility);

            let specifics = document.createElement('p');
            specifics.innerText ="Bijzonderheden: " + review.specifics;
            div.appendChild(specifics);

            let elavatorImage = document.createElement('img');
            elavatorImage.classList.add('rounded-xl');
            elavatorImage.id = 'elavatorImage';
            elavatorImage.src = review.image;
            document.getElementById('image-container').appendChild(elavatorImage);
            console.log(elavatorImage);

            let name = document.createElement('p');
            name.classList.add('text-6xl', 'font-normal', 'leading-normal', 'mt-0', 'mb-2');
            name.id = 'name';
            name.innerText = review.name;
            document.getElementById('name').appendChild(name);
            console.log(name);

            let modalbtn = document.createElement('button');
            modalbtn.classList.add('bg-custom', 'hover:bg-blue-700', 'text-white', 'font-bold', 'py-2', 'px-4', 'rounded');
            modalbtn.id = 'modalbtn';
            modalbtn.innerText = "Meer informatie";
            modalbtn.addEventListener('click', openModal);
            document.getElementById('name').appendChild(modalbtn);
            document.getElementById('closeModal').addEventListener('click', closeModal);

            console.log(modalbtn);

            elavatorStatus.appendChild(div);
        }
    }
}

function addCardFromForm() {
    // Get input values from form
    const nameInput = document.getElementById('name-input');
    const descriptionInput = document.getElementById('description-input');
    const name = nameInput.value;
    const description = descriptionInput.value;

    // Create new card
    const createCard = (name, description) => {
        const card = document.createElement('div');
        card.classList.add('text-white', 'p-4', 'm-6', 'w-full', 'md:w-3/4');
        card.innerHTML = `
    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">${name}</h5>
      <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">${description}</p>
      <button class="favorite-btn inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <span class="favorite-label">Add to Favorites</span>
        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
      </button>
    </div>
  `;

        // Add event listener to the favorite button
        const favoriteBtn = card.querySelector('.favorite-btn');
        const title = name.trim();

        // Load existing favorites from local storage
        let favorites = JSON.parse(localStorage.getItem('favorites')) || {};

        // Check if this card is already favorited
        if (favorites[title]) {
            favoriteBtn.classList.add('bg-yellow-400');
            favoriteBtn.querySelector('.favorite-label').textContent = 'Remove from Favorites';
        }

        // Add click event listener to the favorite button
        favoriteBtn.addEventListener('click', () => {
            if (favorites[title]) {
                // Remove from favorites
                delete favorites[title];
                favoriteBtn.classList.remove('bg-yellow-400');
                favoriteBtn.querySelector('.favorite-label').textContent = 'Add to Favorites';
            } else {
                // Add to favorites
                favorites[title] = true;
                favoriteBtn.classList.add('bg-yellow-400');
                favoriteBtn.querySelector('.favorite-label').textContent = 'Remove from Favorites';
            }

            // Save favorites to local storage
            localStorage.setItem('favorites', JSON.stringify(favorites));
        });

        // Add new card to the card list
        const cardList = document.getElementById('card-list');
        cardList.appendChild(card);
    };

// Example usage
    createCard('Example Card', 'This is an example card.');


    // Reset form inputs
    nameInput.value = '';
    descriptionInput.value = '';
}

function addCardFromForm() {
    const name = document.getElementById("name-input").value;
    const description = document.getElementById("description-input").value;

    const cardList = document.getElementById("card-list");

    const card = document.createElement("div");
    card.classList.add("text-white", "p-4", "m-6", "w-full", "md:w-3/4");

    const cardContent = `
    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">${name}</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">${description}</p>
<!--        <button class="favorite-btn inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="addToFavorites(this.parentNode.parentNode)">Add to Favorites-->
<!--        </button>-->
    </div>
  `;

    card.innerHTML = cardContent;
    cardList.appendChild(card);
}



// Function to open the modal
    function openModal() {
        // Get the modal element
        const modal = document.getElementById('modal');

        // Show the modal
        modal.classList.remove('hidden');
    }

    // Function to close the modal
function closeModal() {
    // Get the modal element
    const modal = document.getElementById('modal');

    // Hide the modal
    modal.classList.add('hidden');
}

// Add event listeners to the open and close modal buttons


//Function write the name and rating from the array
function fillReviews(review){
    let div = document.querySelector(`.review-card[data-name='${review.name}']`);




    //
    // let button = document.createElement('button');
    // button.classList.add('seemore');
    // button.innerText = 'See more';
    // div.appendChild(button);

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
    elavatorStatus.before(error);
}
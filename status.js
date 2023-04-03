window.addEventListener('load', init);

// Globals
let apiUrl = 'http://localhost/CLE3/webservice-martijn/index.php';
let elavatorStatus;

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
            elevator_height.innerText = review.elevator_height;
            div.appendChild(elevator_height);



            let status = document.createElement('p');
            status.innerText = review.status;
            div.appendChild(status);

            let closed = document.createElement('p');
            closed.innerText = review.closed;
            div.appendChild(closed);

            let accessibility = document.createElement('p');
            accessibility.innerText = review.accessibility;
            div.appendChild(accessibility);

            let specifics = document.createElement('p');
            specifics.innerText = review.specifics;
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
document.getElementById('openModal').addEventListener('click', openModal);
document.getElementById('closeModal').addEventListener('click', closeModal);


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
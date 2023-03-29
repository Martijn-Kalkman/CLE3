window.addEventListener('load', init)
let apiUrl = 'http://localhost/School/Jaar-1/3e_kwartaal/CLE3/webservice-sharon/index.php';
let allReviews = document.getElementById('allreviews');

function init(){
    seeReviews();
}

function seeReviews(){
    fetch(apiUrl)
        .then((response) => {
            if(!response.ok){
                throw new Error(response.statusText);
            }
            return response.json();
        })
        .then(displayReviews)
        .catch(ajaxErrorHandler);
}

function displayReviews(data){
    console.log(data);
    // console.log(data.rating);
    // console.log(data.name);
    for (let review of data.results) {

        let div = document.createElement('div');
        div.classList.add('reviewcard');
        div.dataset.name = review.name
        allReviews.appendChild(div);

    let name = document.createElement('li');
    name.classList.add('reviewname');
    name.innerText = review.name;
    div.appendChild(name);

    let stars = document.createElement('li');
    stars.classList.add('rating');
    stars.innerText = review.rating;
    div.appendChild(stars);


    let description = document.createElement('li');
    description.classList.add('reviewdescription');
    description.innerText = review.feedback;
    div.appendChild(description);
}
}

function ajaxErrorHandler(data){
    console.log(data);
    let error = document.createElement('div');
    error.classList.add('error');
    error.innerText = "Op het moment kunnen de reviews niet geladen worden, probeer het later opnieuw"
    allReviews.before(error);
}
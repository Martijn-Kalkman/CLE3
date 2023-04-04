<form id="card-form">
    <label for="name-input">Card Name:</label>
    <input type="text" id="name-input" name="name-input"><br>

    <label for="description-input">Card Description:</label>
    <input type="text" id="description-input" name="description-input"><br>

    <input type="button" value="Add Card" onclick="addCardFromForm()">
</form>

<div id="card-list"></div>

<script>
    function addCardFromForm() {
        // Get input values from form
        const nameInput = document.getElementById('name-input');
        const descriptionInput = document.getElementById('description-input');
        const name = nameInput.value;
        const description = descriptionInput.value;

        // Create new card
        const card = document.createElement('div');
        card.classList.add('bg-blue-500', 'text-white', 'p-4', 'm-6', 'w-full', 'md:w-3/4');
        card.innerHTML = `
      <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">${name}</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">${description}</p>
        <button class="favorite-btn inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          <span class="favorite-label">Add to Favorites</span>
          <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
      </div>
    `;

        // Add new card to the card list
        const cardList = document.getElementById('card-list');
        cardList.appendChild(card);

        // Reset form inputs
        nameInput.value = '';
        descriptionInput.value = '';
    }
</script>

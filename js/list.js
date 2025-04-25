let suggestionList = JSON.parse(localStorage.getItem('suggestionList')) || [];

function saveToStorage() {
  localStorage.setItem('suggestionList', JSON.stringify(suggestionList));
}

function renderList() {
  const listEl = document.getElementById('suggestionList');
  listEl.innerHTML = '';

  suggestionList.forEach((suggestion) => {
    const li = document.createElement('li');
    li.innerHTML = `
      <strong>${suggestion.place}</strong> suggested by ${suggestion.name} from ${suggestion.country} on ${suggestion.date}
    `;
    listEl.appendChild(li);
  });
}

function addSuggestion() {
  const nameInput = document.getElementById('nameInput');
  const countryInput = document.getElementById('countryInput');
  const placeInput = document.getElementById('placeInput');
  
  const name = nameInput.value.trim();
  const country = countryInput.value.trim();
  const place = placeInput.value.trim();
  
  if (!name || !country || !place) return;

  const date = new Date().toLocaleString(); // Get the current date and time
  suggestionList.push({ name, country, place, date });
  nameInput.value = '';
  countryInput.value = '';
  placeInput.value = '';
  saveToStorage();
  renderList();
}

// Initial render
renderList();
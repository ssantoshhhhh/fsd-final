let suggestionList = JSON.parse(localStorage.getItem('suggestionList')) || [];
let filter = 'all';

function saveToStorage() {
  localStorage.setItem('suggestionList', JSON.stringify(suggestionList));
}

function renderList() {
  const listEl = document.getElementById('suggestionList');
  listEl.innerHTML = '';

  const filtered = suggestionList.filter(suggestion => {
    if (filter === 'all') return true;
    if (filter === 'approved') return suggestion.approved;
    if (filter === 'not-approved') return !suggestion.approved;
  });

  filtered.forEach((suggestion, index) => {
    const li = document.createElement('li');
    li.className = suggestion.approved ? 'approved' : 'not-approved';
    li.innerHTML = `
      ${suggestion.name} from ${suggestion.country} suggests visiting ${suggestion.place}
      <div>
        <button onclick="toggleApproved(${index})">${suggestion.approved ? 'Undo Approval' : 'Approve'}</button>
        <button onclick="deleteSuggestion(${index})">Delete</button>
      </div>
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

  suggestionList.push({ name, country, place, approved: false });
  nameInput.value = '';
  countryInput.value = '';
  placeInput.value = '';
  saveToStorage();
  renderList();
}

function deleteSuggestion(index) {
  suggestionList.splice(index, 1);
  saveToStorage();
  renderList();
}

function toggleApproved(index) {
  suggestionList[index].approved = !suggestionList[index].approved;
  saveToStorage();
  renderList();
}

function filterList(type) {
  filter = type;
  renderList();
}

// Initial render
renderList();
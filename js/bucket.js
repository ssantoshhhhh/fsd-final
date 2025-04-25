let bucketList = JSON.parse(localStorage.getItem('bucketList')) || [];
let filter = 'all';

function saveToStorage() {
  localStorage.setItem('bucketList', JSON.stringify(bucketList));
}

function renderList() {
  const listEl = document.getElementById('bucketList');
  listEl.innerHTML = '';

  const filtered = bucketList.filter(place => {
    if (filter === 'all') return true;
    if (filter === 'to-visit') return !place.visited;
    if (filter === 'visited') return place.visited;
  });

  filtered.forEach((place, index) => {
    const li = document.createElement('li');
    li.className = place.visited ? 'visited' : '';
    li.innerHTML = `
      ${place.name} - <small>${new Date(place.timestamp).toLocaleString()}</small>
      <div>
        <button onclick="toggleVisited(${index})">${place.visited ? 'Undo' : 'Visited'}</button>
        <button onclick="editPlace(${index})">Edit</button>
        <button onclick="deletePlace(${index})">Delete</button>
      </div>
    `;
    listEl.appendChild(li);
  });
}

function addPlace() {
  const input = document.getElementById('placeInput');
  const name = input.value.trim();
  if (!name) return;

  // Add timestamp
  bucketList.push({ name, visited: false, timestamp: Date.now() });
  input.value = '';
  saveToStorage();
  renderList();
  showNotification("Place added successfully!"); // Show notification
}

function showNotification(message) {
  const notification = document.getElementById('notification');
  notification.textContent = message;
  notification.style.display = "block";

  setTimeout(() => {
    notification.style.display = "none";
  }, 3000); // Hide notification after 3 seconds
}

function deletePlace(index) {
  bucketList.splice(index, 1);
  saveToStorage();
  renderList();
}

function toggleVisited(index) {
  bucketList[index].visited = !bucketList[index].visited;
  saveToStorage();
  renderList();
}

function editPlace(index) {
  const newName = prompt("Edit the place name:", bucketList[index].name);
  if (newName !== null && newName.trim() !== '') {
    bucketList[index].name = newName.trim();
    saveToStorage();
    renderList();
  }
}

function filterList(type) {
  filter = type;
  renderList();
}

function clearAll() {
  if (confirm("Are you sure you want to clear all places?")) {
    bucketList = [];
    saveToStorage();
    renderList();
  }
}

// Initial render
renderList();
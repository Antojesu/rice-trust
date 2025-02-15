// Data for the cards
const data = [
    {
        title: "INTERNATIONAL WOMANS DAY",
        description: "HAPPY INTERNATIONAL WOMEN'S DAY.. WE WISH THEM ALL SUCCESS IN THEIR ENDEAVOURS!!",
        image: "w1.jpg"
    },
    {
        title: "INTERNATIONAL WOMANS DAY",
        description: "INTERNATIONAL WOMEN'S DAY.. WE WISH THEM ALL SUCCESS IN THEIR ENDEAVOURS!!.",
        image: "w2.jpg"
    },
    {
        title: "INTERNATIONAL WOMANS DAY",
        description: "INTERNATIONAL WOMEN'S DAY.. WE WISH THEM ALL SUCCESS IN THEIR ENDEAVOURS!!.",
        image: "w3.jpg"
    },
    // Add more items as needed
];


// Variables for dynamic loading
let visibleItems = 2; // Number of items to show initially
const container = document.getElementById('card-container');
const loadMoreBtn = document.getElementById('load-more-btn');

// Function to render items
function renderItems() {
    container.innerHTML = ""; // Clear previous items
    data.slice(0, visibleItems).forEach(item => {
        const card = document.createElement('div');
        card.className = 'card';
        card.innerHTML = `
            <img src="${item.image}" alt="${item.title}">
            <h2>${item.title}</h2>
            <p>${item.description}</p>
        `;
        container.appendChild(card);
    });
    // Hide the button if all items are loaded
    if (visibleItems >= data.length) {
        loadMoreBtn.style.display = 'none';
    }
}

// Load more items on button click
loadMoreBtn.addEventListener('click', () => {
    visibleItems += 2; // Increase the number of visible items
    renderItems();
});

// Initial render
renderItems();
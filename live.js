let activeButton = null;

function handleClick(button) {
    if (activeButton) {
        activeButton.classList.remove('active');
    }

    button.classList.add('active');
    activeButton = button;
}

// Database kosong untuk menyimpan data konser
let database = [];

// Fungsi untuk menambahkan entri ke database
function tambahEvent(tanggal, nama, lokasi) {
    database.push({ tanggal, nama, lokasi });
}

// Fungsi untuk mencari event berdasarkan tanggal
function cariEvent(tanggal) {
    return database.filter(event => event.tanggal === tanggal);
}

// Contoh penggunaan
tambahEvent('2024-05-01', 'Konser A', 'Jakarta');
tambahEvent('2024-05-15', 'Konser B', 'Bandung');
tambahEvent('2024-06-01', 'Konser C', 'Surabaya');

// Menampilkan data dari database ke dalam elemen HTML
let eventList = document.getElementById('event-list');
database.forEach(event => {
    let li = document.createElement('li');
    li.className = 'py-2';
    li.innerHTML = `
        <span class="font-bold">${event.tanggal}</span> - ${event.nama} (${event.lokasi})
    `;
    eventList.appendChild(li);
});

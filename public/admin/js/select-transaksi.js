var tahunSelect = document.getElementById("tahun");
var bulanSelect = document.getElementById("bulan");
var tanggalSelect = document.getElementById("tanggal");

// Fungsi untuk mendapatkan jumlah hari dalam sebuah bulan pada tahun tertentu
function daysInMonth(month, year) {
    return new Date(year, month, 0).getDate();
}

// Fungsi untuk mengisi pilihan tanggal berdasarkan bulan dan tahun yang dipilih
function populateTanggal() {
    var tahun = tahunSelect.value;
    var bulan = bulanSelect.value;
    var jumlahHari = daysInMonth(bulan, tahun);

    tanggalSelect.innerHTML = "";
    var startYear = 2020;
    var endYear = 2030;
    for(var year = startYear ; year <= endYear; year++){
        var option = document.createElement("option")
        option.text = year
        option.value = year
        tahunSelect.add(option)
    }

    for (var i = 1; i <= jumlahHari; i++) {
        var option = document.createElement("option");
        option.text = i;
        option.value = i;
        tanggalSelect.add(option);
    }
}

// Panggil fungsi populateTanggal saat nilai bulan atau tahun berubah
tahunSelect.addEventListener("change", populateTanggal);
bulanSelect.addEventListener("change", populateTanggal);

// Panggil fungsi populateTanggal untuk inisialisasi saat halaman dimuat
populateTanggal();
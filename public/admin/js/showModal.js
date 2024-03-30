



document.querySelector("#upUndanganCetak").addEventListener("show.bs.modal", function(event) {
    var tombol = event.relatedTarget.dataset;
    var uuid = tombol.uuid;
    var name = tombol.name;
    var jenis = tombol.jenis;
    var kategori = tombol.kategori;
    var stok = tombol.stok;
    var terjual = tombol.terjual;
    var harga = tombol.harga;
    var deskripsi = tombol.deskripsi;
    document.querySelector("#uuid").value = uuid;
    document.querySelector("#name").value = name;
    document.querySelector("#kategori").value = kategori;
    document.querySelector("#stok").value = stok;
    document.querySelector("#terjual").value = terjual;
    document.querySelector("#harga").value = harga;
    tinymce.get('dek').setContent(deskripsi)
    
    setTimeout(function() {
        document.querySelector("#jenis").value = jenis;
    }, 200);
});



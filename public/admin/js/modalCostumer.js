document.querySelector("#upCostumer").addEventListener("show.bs.modal", function(event) {
    var tombol = event.relatedTarget.dataset;
    var uuid = tombol.uid
    var name = tombol.name
    var nomor = tombol.nomor
    var alamat = tombol.alamat
    var usaha = tombol.usaha
    console.log(usaha)
    document.querySelector("#uuid").value = uuid
    document.querySelector("#name").value=name
    document.querySelector("#nomor").value= nomor
    document.querySelector("#alamat").value=alamat
    document.querySelector("#usaha").value=usaha

})
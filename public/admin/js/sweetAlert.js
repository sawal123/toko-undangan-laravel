document.querySelectorAll('.sweetdelete').forEach(function(element) {
    element.addEventListener('click', function(event) {
        console.log('ok');
        var getLink = event.currentTarget.getAttribute('href');
        event.preventDefault(); // Menghentikan default behavior dari link

        Swal.fire({
            title: "Yakin Hapus Data?",
            text: "Data akan dihapus secara permanen!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            // Jika diklik ya maka arahkan ke getLink
            if (result.isConfirmed) {
                window.location.href = getLink;
            }
        });
    });
});


document.querySelectorAll('#sweetdelete').forEach(function(element) {
    element.addEventListener('click', function(event) {
        event.preventDefault(); // Menghentikan default behavior dari tombol submit
        var form = event.target.closest(
            '.delete-form'); // Mencari formulir terdekat yang berisi tombol submit yang diklik
        var message = event.target.getAttribute('data-message');
        var confirmText = event.target.getAttribute('data-confirm-text');

        Swal.fire({
            title: message,
            text: "Data akan dihapus secara permanen!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: confirmText
        }).then((result) => {
            // Jika diklik ya maka submit formulir
            if (result.isConfirmed) {
                form.submit(); // Submit formulir
            }
        });
    });
});

<script>
    const scriptURL = 'https://script.google.com/macros/s/AKfycbz3PcQlY-YrY4o25cfm9f7AQESVUxQc2CxuBqv-SUc3yhFyBB3UL3V7_ZpFY-lr6yq76w/exec';
    const form = document.forms['submit-to-google-sheet'];
    const kirim = document.querySelector('.kirim');
    const loading = document.querySelector('.loading');
    const alert = document.querySelector('.alert-kirim');
    
    form.addEventListener('submit', e => {
        e.preventDefault();

        // Ketika tombol submit diklik, tampilkan tombol loading dan hilangkan tombol kirim
        loading.classList.toggle('d-none');
        kirim.classList.toggle('d-none');

        fetch(scriptURL, { method: 'POST', body: new FormData(form)})
        .then(response => {

            // Tampilkan tombol kirim dan hilangkan tombol loading
            loading.classList.toggle('d-none');
            kirim.classList.toggle('d-none');

            // Tampilkan alert
            alert.classList.toggle('d-none');

            // Reset form
            form.reset();
            console.log('Success!', response);
        })
        .catch(error => console.error('Error!', error.message));
    });
</script>
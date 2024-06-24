document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper('.mySwiper', {
        // Konfigurasi Swiper di sini
        slidesPerView: 1, // Jumlah slide yang ditampilkan sekaligus
        spaceBetween: 30, // Jarak antara slide (dalam px)
        loop: true, // Mengaktifkan loop pada slider
        pagination: {
            el: '.swiper-pagination', // Menambahkan pagination
            clickable: true, // Membuat pagination dapat diklik
        },
        navigation: {
            nextEl: '.swiper-button-next', // Tombol navigasi ke slide berikutnya
            prevEl: '.swiper-button-prev', // Tombol navigasi ke slide sebelumnya
        },
        // Opsional: Efek transisi antara slide
        // Misalnya, gunakan coverflow effect
        effect: 'coverflow',
        coverflowEffect: {
            rotate: 50, // Rotasi slide dalam derajat
            stretch: 0, // Pemisahan antara slide (0 untuk tidak ada pemisahan)
            depth: 100, // Kedalaman slide
            modifier: 1, // Modifikasi efek coverflow
            slideShadows: true, // Mengaktifkan bayangan pada slide
        },
    });
});

var countDownDate = new Date("may 10, 2024 00:00:00").getTime();
var x = setInterval(function() {
    var now = new Date().getTime();
    var distance = countDownDate - now;

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("days").innerHTML = days;
    document.getElementById("hours").innerHTML = hours;
    document.getElementById("minutes").innerHTML = minutes;
    document.getElementById("seconds").innerHTML = seconds;
},1000);

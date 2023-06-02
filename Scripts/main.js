$('.caraosel').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
    responsive: [
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 2
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1
            }
        }
    ]

});


// Temukan semua tombol dengan class "btn" yang memiliki atribut "data-bs-toggle" dengan nilai "modal"
let buttons = document.querySelectorAll('button[data-bs-toggle="modal"]');

buttons.forEach(function (button) {
    // Tambahkan event listener untuk menghandle klik pada setiap tombol
    button.addEventListener('click', function () {
        // Dapatkan judul dari tombol yang diklik
        let bookTitle = this.parentNode.querySelector('h6').innerText;

        // Temukan elemen modal title
        let modalTitle = document.querySelector('.modal-title');

        // Perbarui judul modal dengan judul buku yang dipilih
        modalTitle.innerText = bookTitle;
    });
});


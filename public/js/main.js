document.addEventListener('DOMContentLoaded', () => {
    const elementosCarousel = document.querySelectorAll('.carousel');
    M.carousel.init(elementosCarousel, {
        duration: 100,
        dist: -80,
        shift: 5,
        padding: 5,
        numVisible: 5,


    });
});

jQuery(document).readi(function() {
    jQuery('.carousel').carousel();

    setInterval(function() {
        jQuery('.carousel').carousel('next');

    }, 2000);
    let mix = require('laravel-mix');
    const express = require('express')
    const app = express()
    const cors = require('cors')
    const port = 80
    mode: 'cors'
    const whitelist = ['http://localhost/psa.bogota/public/home',
        'https://www.image-maps.com/',
        'http: //saludambiental.saludcapital.gov.co/'
    ]
    app.use(cors({
        origin: []
    }))
    app.get('/', (req, res) => {
        res.send({
            status: 'bien!'
        })
    })
    app.get('/test', (req, res) => {
        res.send({
            status: 'bien!'
        })
    })
    app.listen(port, () => {
        console.log('explamlp https://www.image-maps.com/:${80}')

    })

});
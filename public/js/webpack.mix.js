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


/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css');
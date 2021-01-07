# SABLONIN
## How to run
- copy file .env.example
- rename file menjadi .env lalu atur sesuai db
- dalam terminal ketik *composer install*
- ketik *npm install* (harus dah install node.js)
- ketik *php artisan key:generated*
- ketik *php artisan migrate*
- ketik *php artisan db:seed*

## API Resource Route
#### Artikel
- GET   : /artikels
- GET   : /artikels/{id}
- POST  : /artikels
- PUT   : /artikels/{id}
- DELETE: /artikels/{id}

#### Portofolio
- GET   : /portofolios
- GET   : /portofolios/{id}
- POST  : /portofolios
- PUT   : /portofolios/{id}
- DELETE: /portofolios/{id}

#### Category
- GET   : /categories
- GET   : /categories/{id}/portofolios
- POST  : /categories
- PUT   : /categories/{id}
- DELETE: /categories/{id}

#### Bahan
- GET   : /bahans
- GET   : /bahans/{id}
- POST  : /bahans
- PUT   : /bahans/{id}
- DELETE: /bahans/{id}

#### Tinta
- GET   : /tintas
- GET   : /tintas/{id}
- POST  : /tintas
- PUT   : /tintas/{id}
- DELETE: /tintas/{id}

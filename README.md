## CATAAS
### Que s'ha fet?
- S'agafen les dades de la API de [CATAAS](https://cataas.com/).
- Es genera una api pròpia
- Es mostra una galeria amb les imatges dels gats

## Com es desplega?
Clonar el projecte 
```
git clone https://github.com/Sadki10/cataas.git
```
Entrar a la carpeta del projecte
```
cd cataas
```
Crear un arxiu .env i genera les claus
```
cp .env.example .env && php artisan key:generate
```
Instal·lar les dependències i construir el projecte
```
composer i && npm i && npm run build
```
Executa les migracions i els seeders
```
php artisan migrate --seed
```
Executar el projecte
```
php artisan serve
```

# IT-SIA31 - API Development Project

## 1. API DESCRIPTION AND FEATURES

### Description
This API provides access to Bible verses. It allows clients to retrieve a daily random verse or fetch all verses stored in the database.

### Features
* **Daily Verse Endpoint**: Get a single random Bible verse each time you call the endpoint.

## 2. INSTALLATION AND SETUP
This project requires **PHP** and **Composer**.

### STEP 1: CLONE REPOSITORY
git clone https://github.com/Vince2245/IT-SIA31---API-Development-Project.git

### STEP 2: INSTALL COMPOSER
Navigate into the cloned directory and run the following command to install the required dependencies:
composer install

### STEP 3: SET UP THE DATABASE
1.  Create a file named `database.sqlite` inside the `database` folder.
2.  Run the following command to run the migrations and set up the database schema:
    php artisan migrate

### STEP 4: START SERVER
Start the local development server with this command:
php artisan serve

## 3. EXAMPLE OF REQUEST AND RESPONSE
### EXAMPLE REQUEST
* **Get all verses**:
    `GET http://127.0.0.1:8000/verses`
* **Get a random daily verse**:
    `GET http://127.0.0.1:8000/daily-verse`

### EXAMPLE RESPONSE
Below is an example of a JSON response you would receive from the daily verse endpoint:

{
"id": 1,
"text": "14 Ye are the light of the world. A city that is set on an hill cannot be hid. 15 Neither do men light a candle, and put it under a bushel, but on a candlestick; and it giveth light unto all that are in the house. 16 Let your light so shine before men, that they may see your good works, and glorify your Father which is in heaven.",
"reference": "Matthew 5:14-16",
"created_at": "2025-09-06T11:13:36.000000Z",
"updated_at": "2025-09-06T11:13:36.000000Z"
}

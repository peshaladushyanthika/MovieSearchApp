
# Movie Search and Favorites App
The Movie Search App is a web application built with Laravel that allows users to search for movies, view detailed information, and save favorites. The app integrates with the OMDb API to fetch movie data and provides user authentication to store personalized favorites.

## Features

* Search Movies: Users can search for movies by title and view a list of results.
* View Movie Details: Clicking on a movie displays detailed information such as title, year.
* Favorite Movies: Users can save movies to their personal "Favorites" list.
* Persistent Storage: Favorites are stored per user in the database.
* Authentication: Users must log in to save and view their favorites.
* Dynamic Theming: Users can switch between light and dark modes.

## Tech Stack

* Framework: Laravel 9
* Frontend: Blade Templates, JavaScript, Bootstrap
* Database: MySQL
* API: OMDb API

## Prerequisites

Before running the application, ensure you have the following installed:

* PHP 8.0 or later
* Composer
* MySQL
* Laravel 9
  
## Installation

1. Clone the repository:
   
   ```https://github.com/peshaladushyanthika/MovieSearchApp.git```
2. Install dependencies:
   
   ```composer install```
3. Copy the environment file:
   
   ```cp .env.example .env```
   
4. Configure Environment Variables:
   
 * Open the .env file and set up your database credentials.
   
    ```DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=database_name
    DB_USERNAME=database_username
    DB_PASSWORD=database_password```
   
5. Generate application key:

   ```php artisan key:generate```
   
6. Run database migrations:

   ```php artisan migrate```
   
7. Start the development server:

    ```php artisan serve```
    
8. Open http://127.0.0.1:8000 in your browser.

## API Configuration

* OMDb open API: Get an API key from "https://www.omdbapi.com/" and set it in the .env file.

### How to Get Your OMDb API Key

    To generate an API key, follow these steps: 
    
    1. Go to OMDb API Website https://www.omdbapi.com/ and navigate to the "API Key" tab
    2. Sign Up for an API Key
     - Enter your name and email address
     - Choose a free or paid plan (Free allows 1,000 requests per day)
     - Click Submit
    3. Check Your Email
     - You will receive an email from OMDb with your API Key
    4. Update Your .env File
     - Replace your_api_key with the actual key from your email:

    MOVIE_API_URL=https://www.omdbapi.com/
    MOVIE_API_KEY=your_omdb_api_key

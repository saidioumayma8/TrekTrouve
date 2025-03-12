# TrekTrouve

TrekTrouve is a platform dedicated to exploring Morocco's breathtaking landscapes through guided excursions and adventure trips. Our mission is to connect travelers with experienced guides and provide seamless trip planning services.

## Features

- **Excursion Management**: Create, manage, and explore various excursions across Morocco.
- **Trail Integration**: Connect excursions with designated trails for a structured adventure.
- **Guide System**: Experienced guides provide insights, recommendations, and lead trips.
- **Trip Assistance**: Get help planning your trips, including recommended activities and itineraries.

## Technologies Used

- **Backend**: Laravel (PHP Framework)
- **Frontend**: Blade Templates, HTML, CSS, JavaScript
- **Database**: MySQL
- **Version Control**: Git & GitHub

## Installation

1. Clone the repository:

   ```sh
   git clone https://github.com/yourusername/TrekTrouve.git
   ```

2. Navigate to the project directory:

   ```sh
   cd TrekTrouve
   ```

3. Install dependencies:

   ```sh
   composer install
   npm install
   ```

4. Create a `.env` file:

   ```sh
   cp .env.example .env
   ```

5. Configure the database connection in `.env`:

   ```sh
   DB_DATABASE=your_database
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

6. Generate application key:

   ```sh
   php artisan key:generate
   ```

7. Run migrations and seed database:

   ```sh
   php artisan migrate --seed
   ```

8. Start the development server:

   ```sh
   php artisan serve
   ```

## Usage

- Register and log in to access excursion features.
- Create new excursions and link them to specific trails.
- View and manage excursions as an admin.
- Connect with guides for planned adventures.
- Get assistance in planning the perfect trip.

## Project Structure

```
TrekTrouve/
│── app/
│   ├── Models/        # Laravel Eloquent models (Excursion, Trail, etc.)
│   ├── Http/         
│       ├── Controllers/  # Application controllers
│── database/
│   ├── migrations/    # Database migration files
│── resources/
│   ├── views/         # Blade templates
│── routes/
│   ├── web.php        # Web routes
│── public/            # Public assets (CSS, JS, images)
│── .env.example       # Example environment configuration
│── composer.json      # PHP dependencies
│── package.json       # Frontend dependencies
│── README.md          # Project documentation
```

## Contributing

1. Fork the repository.
2. Create a new branch:

   ```sh
   git checkout -b feature-name
   ```

3. Make your changes and commit:

   ```sh
   git commit -m "Add new feature"
   ```

4. Push to your branch:

   ```sh
   git push origin feature-name
   ```

5. Submit a pull request.

## License

This project is licensed under the MIT License.

## Contact

For any inquiries, feel free to reach out at oumaymasaidi908@gmail.com.

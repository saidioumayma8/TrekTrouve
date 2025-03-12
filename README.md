TrekTrouve

TrekTrouve is a platform dedicated to exploring Morocco's breathtaking landscapes through guided excursions and adventure trips. Our mission is to connect travelers with experienced guides and provide seamless trip planning services.

Features

Excursion Management: Create, manage, and explore various excursions across Morocco.

Trail Integration: Connect excursions with designated trails for a structured adventure.

Guide System: Experienced guides provide insights, recommendations, and lead trips.

Trip Assistance: Get help planning your trips, including recommended activities and itineraries.

Technologies Used

Backend: Laravel (PHP Framework)

Frontend: Blade Templates, HTML, CSS, JavaScript

Database: MySQL

Version Control: Git & GitHub

Installation

Clone the repository:

git clone https://github.com/yourusername/TrekTrouve.git

Navigate to the project directory:

cd TrekTrouve

Install dependencies:

composer install
npm install

Create a .env file:

cp .env.example .env

Configure the database connection in .env:

DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password

Generate application key:

php artisan key:generate

Run migrations and seed database:

php artisan migrate --seed

Start the development server:

php artisan serve

Usage

Register and log in to access excursion features.

Create new excursions and link them to specific trails.

View and manage excursions as an admin.

Connect with guides for planned adventures.

Get assistance in planning the perfect trip.

Project Structure

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

Contributing

Fork the repository.

Create a new branch:

git checkout -b feature-name

Make your changes and commit:

git commit -m "Add new feature"

Push to your branch:

git push origin feature-name

Submit a pull request.

License

This project is licensed under the MIT License.

Contact

For any inquiries, feel free to reach out at Oumaymasaidi908@gmail.com.


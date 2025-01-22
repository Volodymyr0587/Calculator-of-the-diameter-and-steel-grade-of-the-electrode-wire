# Electrode Wire Calculator

This is a web application built using **Laravel** and **Livewire** that calculates the recommended diameter and type of electrode wire based on the steel grade, welding type, and material thickness.

## Features

- Select steel grade (e.g., S235, S355, etc.).
- Choose the welding type (manual, semi-automatic, or automatic).
- Input the material thickness in millimeters.
- Responsive design using Tailwind CSS.
- Real-time validation with Livewire.

## Requirements

- PHP >= 8.1
- Composer
- Laravel >= 10
- Node.js and npm

## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/Volodymyr0587/Calculator-of-the-diameter-and-steel-grade-of-the-electrode-wire.git
   cd Calculator-of-the-diameter-and-steel-grade-of-the-electrode-wire
   ```

2. Install dependencies:

   ```bash
   composer install
   npm install
   npm run dev
   ```

3. Configure the environment:

   - Copy the `.env.example` file to `.env`:

     ```bash
     cp .env.example .env
     ```

   - Set your database credentials in the `.env` file.

4. Run migrations:

   ```bash
   php artisan migrate
   ```

5. Seed the database with steel grades (optional You can add your data to the seeder `database/seeders/SteelSeeder.php` before running this command):

   ```bash
   php artisan db:seed --class=SteelSeeder
   ```

6. Start the development server:

   ```bash
   php artisan serve
   ```

   The application will be accessible at `http://localhost:8000`.

## Usage

1. Navigate to the application in your browser.
2. Fill in the required fields:
   - **Steel Grade:** Enter the steel grade (e.g., S235).
   - **Welding Type:** Select the type of welding (manual, semi-automatic, automatic).
   - **Material Thickness:** Input the material thickness in millimeters.
3. Click the **Calculate** button to get the recommended electrode wire details.


## Responsive Design

This application uses **Tailwind CSS** for styling and is fully responsive:

- Mobile-friendly layout.
- Inputs and buttons are optimized for touch devices.

## Contribution

Feel free to contribute to this project by submitting issues or pull requests.

## License

This project is licensed under the [MIT License](LICENSE).


# Laravel Blog

A simple blog application built with Laravel and Bootstrap. Users can view posts, create new posts, and see individual post details.

## Features

*   View all posts
*   View a single post
*   Create a new post

## Technologies Used

*   Laravel
*   Bootstrap
*   PHP
*   Composer
*   Node.js (for frontend dependencies)

## Installation

1.  Clone the repository: `git clone https://github.com/your-username/your-repository.git`
2.  Navigate to the project directory: `cd your-repository`
3.  Install PHP dependencies: `composer install`
4.  Install frontend dependencies: `npm install`
5.  Create a copy of the `.env.example` file and rename it to `.env`: `cp .env.example .env`
6.  Generate an application key: `php artisan key:generate`
7.  Configure your database settings in the `.env` file.
8.  Run database migrations: `php artisan migrate`
9.  (Optional) Seed the database with sample data: `php artisan db:seed`
10. Start the development server: `php artisan serve`
11. Compile frontend assets: `npm run dev` (or `npm run watch` for continuous compilation)

## Usage

*   Open your web browser and navigate to `http://localhost:8000` (or the port specified by `php artisan serve`).
*   You will see a list of blog posts.
*   Click on a post title to view the full post.
*   Click on the "Create Post" button to add a new post.

## Contributing

*   Fork the repository.
*   Create a new branch: `git checkout -b feature/your-feature-name`
*   Make your changes and commit them: `git commit -m 'Add some feature'`
*   Push to the branch: `git push origin feature/your-feature-name`
*   Open a pull request.

## License

This project is licensed under the MIT License.

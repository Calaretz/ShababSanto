# Contact Management Application

## Project Description

A simple web application to manage contacts, built with Angular for the frontend and Laravel for the backend. Users can create, read, update, and delete contacts. Contacts can be categorized, and the application supports user authentication.

## Table of Contents

1. [Features](#features)
2. [Technologies Used](#technologies-used)
3. [Installation and Setup](#installation-and-setup)
4. [Usage](#usage)
5. [Project Structure](#project-structure)
6. [Contributing](#contributing)
7. [Contact](#contact)

## Features

- User authentication (login/register)
- Create, read, update, and delete contacts
- Categorize contacts
- Search and filter contacts by category or name

## Technologies Used

- **Frontend**: Angular
- **Backend**: Laravel
- **Database**: MySQL (or any other preferred database)
- **Version Control**: Git and GitHub

## Installation and Setup

### Prerequisites

- Node.js and npm installed
- PHP and Composer installed
- MySQL or another preferred database

### Backend (Laravel) Setup

1. Clone the repository:
   '''bash
   git clone https://github.com/Calaretz/ShababSanto.git
   cd ShababSanto/backend
   
2. Install dependencies:
   composer install
   
3. Set up the environment:
   Copy .env.example to .env
   Update .env with your database credentials

4. Generate application key:
   '''bash
   php artisan key:generate

5. Run migrations:
   '''bash
   php artisan migrate

6. (Optional) Seed the database:
   '''bash
   php artisan db:seed

7. Start the development server:
   '''bash
   php artisan serve

### Frontend (Angular) Setup

1.Navigate to the frontend directory:
   '''bash
   cd ../frontend

2. Install dependencies:
   '''bash
   npm install
   
3. Start the development server:
   '''bash
   ng serve

## Usage
   1. Open your browser and go to http://localhost:4200 for the Angular frontend.
   2. The Laravel backend will be running on http://localhost:8000.

### Project Structure

## Backend (Laravel)

backend/
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
├── routes/
├── storage/
├── tests/
├── .env.example
├── composer.json
└── phpunit.xml

## Frontend (Angular)

frontend/
├── src/
│   ├── app/
│   ├── assets/
│   ├── environments/
├── angular.json
├── package.json
└── tsconfig.json

### Contributing

1. Fork the repository.
2. Create a new branch (git checkout -b feature-branch).
3. Make your changes.
4. Commit your changes (git commit -m 'Add some feature').
5. Push to the branch (git push origin feature-branch).
6. Open a pull request.

### Contact
Fares: faresibrahim10@gmail.com

Kilani: kilani.1090@gmail.com

Rimawi: aa.rimawi@gmail.com





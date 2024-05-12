
# Movie Streaming Website

## 📋 Project Overview

The Movie Streaming Website is a platform designed to provide users with a seamless experience for exploring movie details, watching trailers, selecting pricing plans, and processing payments. The project includes both user-facing functionalities and an admin dashboard for managing content.

## 🔗 Inner Links and Functions

### Admin Module

- 💰 **Manage Pricing Plans:** Add, edit,update or delete pricing plans.
- 🎬 **Manage Movies:** Add, edit,update or delete movie details.
- 🍿 **Manage Premium Items:** Add, edit, or delete premium items.
- 🎥 **Manage Premieres:** Add, delete,edit or update premiere items.
- 📁 **Manage Catalog:** Delete,update or edit catalog items.
- 📝 **Manage Reviews:**  Delete,update or edit user reviews.
- 💬 **Manage Comments:** Delete,update or edit user comments.
- 👥 **Manage Users:** Edit user details.


These are the functionalities of the User Module:

User Module
- 📋 Catalog: Browse the movie catalog.
- 🎞️ Watch Trailers: View trailers for each movie.
- 💳 Select Pricing Plan: Choose from basic, premium, or standard plans.
- 💳 Payment Process: Process payment based on the selected plan.
- 📝 Make Account: Users can create accounts to access personalized features.
- 💬 Add Comments and Reviews: Engage with the community by adding comments and reviews for movies.
- 🎥 Get Recommended Movies: Receive personalized recommendations.
- 📚 See Genre Recommendations: Explore movies within preferred genres for a tailored browsing experience.

## 💻 Installation and Technologies

### Prerequisites

- **XAMPP:** Download and install XAMPP from [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html).
- **IDE:** Install an IDE like Visual Studio Code for viewing and editing the code.

### Running the Project

1. Clone the repository to your local machine.
2. Import the MySQL database schema provided in `database_schema.sql` into your MySQL database using phpMyAdmin or a similar tool.
3. Place the cloned project folder into the `htdocs` directory of your XAMPP installation.
4. Update the database connection settings in `config.php` with your MySQL credentials.
5. Start the Apache and MySQL services in XAMPP.
6. Open your web browser and navigate to `http://localhost/your_project_folder` to access the website.

## 📝 Lessons Learned

Throughout the development of this project, several challenges were encountered, each providing valuable learning experiences:

### Challenge 1: Integrating Frontend Template

#### Solution:
Adopted a modular approach, breaking down the template into smaller components for easier customization and feature integration.

### Challenge 2: Implementing Backend Functionality

#### Solution:
Sought guidance from online resources and experimented to successfully configure the backend environment and implement required functionalities.

### Challenge 3: Managing Admin and User Modules Simultaneously

#### Solution:
Adopted an iterative development approach, prioritizing essential features and ensuring clear communication. While working independently, I focused on addressing the requirements of both the admin and user modules, ensuring that key functionalities were implemented effectively. This approach allowed for efficient development and timely delivery of the project.

## 🌱 Goals

- Enhance user interface design for better usability.
- Implement additional features like user profiles and secure payment gateways.
- Expand program features to offer a more diverse selection of content.
- Integrate feedback mechanisms to improve user experience.

## 🚧 Functionalities with Issues
Payment Process
Issue: Users may encounter difficulties in selecting a pricing plan and navigating to the payment method during the checkout process.
Challenge: Integrating the payment gateway posed challenges, and further assistance or resources may be needed to improve this feature.

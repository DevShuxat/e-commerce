# Online Shop

This project is an Online Shop built using the PHP Laravel framework. It provides a platform for users to browse and purchase various products conveniently from their homes.

## Features

- User Registration: Users can create an account to access the online shop and enjoy personalized features.
- Product Catalog: The online shop offers a wide range of products, conveniently categorized for easy browsing.
- Product Search: Users can search for specific products based on keywords or filters.
- Shopping Cart: Users can add products to their shopping cart and proceed to checkout when ready.
- Secure Checkout Process: The checkout process ensures the security of users' payment information.
- Order Tracking: Users can track the status of their orders and view their order history.
- User Reviews and Ratings: Users can leave reviews and ratings for products they have purchased.
- Wishlist: Users can create and manage a wishlist of their favorite products.
- Discount and Promotion Codes: The online shop supports the application of discount and promotion codes during checkout.

## Installation

1. Clone the repository to your local machine.
```shell
git clone https://github.com/your-username/online-shop.git
```

2. Navigate to the project directory.
```shell
cd online-shop
```

3. Install the project dependencies using Composer.
```shell
composer install
```

4. Create a copy of the `.env.example` file and rename it to `.env`.
```shell
cp .env.example .env
```

5. Generate an application key.
```shell
php artisan key:generate
```

6. Configure the database connection in the `.env` file with your database credentials.

7. Run the database migrations and seed the database.
```shell
php artisan migrate --seed
```

8. Start the local development server.
```shell
php artisan serve
```

9. Access the application by visiting `http://localhost:8000` in your web browser.

## Contributing

Contributions are welcome! If you encounter any issues or have suggestions for improvement, please feel free to open an issue or submit a pull request.

## License

This project is licensed under the [MIT License](LICENSE).

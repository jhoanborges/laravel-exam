# ![Laravel Exam](https://laravel.com/img/logotype.min.svg)

> ### Laravel version 10.10 codebase containing a brand new template that adheres to the current repo.

----------

# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/10.x)

## General Overview

1. Clone the repository
2. Switch to the repo folder
3. Install all the dependencies using composer
4. Copy the example env file and make the required configuration changes in the .env file
5. Generate a new application key
5. Run the database migrations
6. Start the local development server

## Exam Instructions and requirements


1. Create a new branch with the candidate's name (Your name).
After the branch is done, the candidate should do the following:
3. Configure a local database and run the default laravel migrations that are already
created in laravel. Postgress, MySQL or sqlserver can be used.
4. Create a new model called Product, that must include the product’s migration to the
database. This migration depends entirely on the candidate's vision to build the table attributes.
5. Create the ProductsController.
6. Build a relationship between products and users. A product should have an unique user.
That means that a product belongs to an user and a user has one product. This must be done using
laravel models to achieve it.
7. Create a function in the ProductsController to create a new user in the database. After
the user is created, created a product and link that product to the user using the model previously
created. This can be completed on the same function.
8. Print the results creating and using a route that points to the ProductsController to show
all users that has products related or linked.
9. Push the changes to the candidate’s branch


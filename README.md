# PHP Legacy App

This repository contains a PHP legacy application with home rolled authentication. It's not very secure, any account with a password of 'password' is logged in.

Read the corresponding blog posts:

* https://fusionauth.io/blog/updating-crufty-php-application
* https://fusionauth.io/blog/how-to-migrate-user-data-centralized-auth-system

### Prerequisites

* A modern PHP
* Docker for running FusionAuth
* This repo

### Connector license

Note that Connectors are a feature available to FusionAuth installations with a paid edition. You can [sign up for a 14 day free trial](https://fusionauth.io/pricing) of the "Starter" Edition to test this functionality out.

### Setup

* Clone this repo and `cd` into it.
* Update `kickstart/kickstart.json`. Replace the text `ADD LICENSE ID` with a valid FusionAuth license Id retrieved previously.
  * If you don't have a license Id, this example **will not work**.
* Run `docker compose up -d` to stand up a preconfigured FusionAuth instance.
* Run `composer install`.
* Start a webserver: `php -S 0.0.0.0:8000` . This should not be used for production.

### To use

* Go to `http://localhost:8000` and login.
* An email address with a password of `password` will be logged in using the connector.
* Users will who successfully authenticate will be migrated from the legacy application to FusionAuth.
* If you reset a FusionAuth user's password (using the administrative user interface) to `password2`, that's what you'll have to use to login.

To access the admin UI to see if users are migrated or to examine the connector configuration, open an incongito browser window and visit http://localhost:9011. The username is `admin@example.com` and the password is, you guessed it, `password`.

### Winding down

* Kill the webserver process.
* `docker compose down -v` will delete the FusionAuth server.


# PHP Legacy App

This repository contains a PHP legacy application with home rolled authentication. It's not very secure, any account with a password of 'password' is logged in.

### Prerequisites

* A modern PHP
* This repo

### Setup

* Clone this repo and change directory into it.
* Run `composer install`.
* Start a webserver: `php -S 0.0.0.0:8000` . This should not be used for production.

### To use

* Go to `http://localhost:8000` and login. 
* Any username with a password of `password` will be authenticated.

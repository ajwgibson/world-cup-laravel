world-cup-laravel
=================

This is a version of my simple World Cup prediction competition web application built 
using the [Laravel framework](http://laravel.com/).


Getting started
---------------

As well as containing the laravel application, this repository includes a Vagrantfile
for laravel homestead - a laravel-specific vagrant box that will allow you to get a
totally self-contained development environment up and running very quickly. See the
laravel documentation for more information about homestead.

To use homestead, you will need the following software pre-requisites:

+ Virtualbox
+ Vagrant

Assuming you have those, you will need to do the folling:

1. Edit the Homestead.yaml file to fix any file paths that are in it.
2. Issue the `vagrant up` command (might take a while to download the homestead box).
3. ssh into the homestead vm using `vagrant ssh`
4. Install the laravel dependencies using `composer install`
5. __TODO__ Create the database and run the migrations
6. Browse to the application from your host machine at [http://localhost:8000](http://localhost:8000)


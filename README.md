rest_api
========

A Symfony project preconfigured for CORS Rest API.<br/>

1 - Install dependencies
-------------

$ composer install

2 - Create database
-------------

Create database and insert credentials in parameters.yml

3 - Setup database and users
-------------

$ php bin/console fos:user:create (username: admin, password: entra)<br/>
$ php bin/console doctrine:schema:update --force

4 - Create the first client
-------------

INSERT INTO `oauth2_clients` VALUES (NULL, '3bcbxd9e24g0gk4swg0kwgcwg4o8k8g4g888kwc44gcc0gwwk4', 'a:0:{}', '4ok2x70rlfokc8g0wws8c8kwcokw80k44sg48goc0ok4w0so0k', 'a:1:{i:0;s:8:"password";}');

5 - Use example to test the configuration
-------------

under <b>app/Resources/views/default/index.html.twig</b> you can find a working example of token auth and api call.

6 - Setup CORS if needed
-------------

under <b>app/config/config.yml</b> change <b>nelmio_cors</b> configurations as you need.
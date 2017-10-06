rest_api
========

A Symfony project preconfigured for CORS Rest API.<br/>
Before start execute these commands:

$ php bin/console fos:user:create (username: admin, password: entra)<br/>
$ php bin/console doctrine:schema:update --force

Create a client:<br/>
INSERT INTO `oauth2_clients` VALUES (NULL, '3bcbxd9e24g0gk4swg0kwgcwg4o8k8g4g888kwc44gcc0gwwk4', 'a:0:{}', '4ok2x70rlfokc8g0wws8c8kwcokw80k44sg48goc0ok4w0so0k', 'a:1:{i:0;s:8:"password";}');

TOKEN CALL:<br/>
http://localhost:8000/oauth/v2/token?grant_type=password&client_id=1_3bcbxd9e24g0gk4swg0kwgcwg4o8k8g4g888kwc44gcc0gwwk4&client_secret=4ok2x70rlfokc8g0wws8c8kwcokw80k44sg48goc0ok4w0so0k&username=admin&password=entra

TOKEN RESULT:<br/>
{
    "access_token": "NTQ4NmIyOGY4NDM0NzJjZGIyYjllZDE4ZGFlYjcyYWI0N2EzYjgzMGM0ZDRlM2YwM2VkMjU1ZmNlMGU5MzYyZg",
    "expires_in":3600,
    "token_type":"bearer",
    "scope":null,
    "refresh_token":"YWRmOWZkYmM0ZGU4MzE3N2U3ZTYxNDY2NDYxYzcyNGQ2NzU3ZWRlYTkwODM3ZjE3MWFlMDMwYzcxMWExMTYyOA"
}
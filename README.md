# hidden-url

Code samples are written on **php**. But it can be applied algorithmically to other languages as well. 

The purpose of hiding the url makes it difficult to download documents.

In addition, if you are managing http requests with nginx, you can prevent direct access to the document by adding the following code to the nginx host config file.

``` NGINX
location /documents {
    if ($http_referer !~ "http://hide-url"){
        return 403;
    }
}
```

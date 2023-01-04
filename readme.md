## Varnish HTTP cache experiments

![Varnish Cache image](https://bartekblog.prv.pl/varnish_proxy/varnish_architecture.png)

#### 1 - How to set up
> docker-compose up

#### 2 - Get not cached JSON content
> http://localhost:8080

#### 3 - Get cached by Varnish JSON content with default TTL
> http://localhost:80

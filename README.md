this project for tracking crypto crance 
<br>
# Routes :
```php

Route::get('/', function () {
//    This REQ GET price
    $client = new \GuzzleHttp\Client();
//    this API
    $res = $client->get('https://api.coinstats.app/public/v1/coins?skip=0&limit=10');
    $content = (string) $res->getBody();
//    RET
    $content = json_decode($content, true);
    return view('welcome',compact('content'));
});
Route::get('/api_u', function () {
//    This REQ GET price
    $client = new \GuzzleHttp\Client();
//    this API
    $res = $client->get('https://api.coinstats.app/public/v1/coins?skip=0&limit=10');
    $content = (string) $res->getBody();
//    RET
    $content = json_decode($content, true);
    return view('api');
});
Route::get('/api', function () {
//    This REQ GET price
    $client = new \GuzzleHttp\Client();
//    this API
    $res = $client->get('https://api.coinstats.app/public/v1/coins?skip=0&limit=10');
    $content = (string) $res->getBody();
//    RET
    $content = json_decode($content, true);
    return ($content);
});
```
#Api - Route:
```php
Route::get('/api', function () {
//    This REQ GET price
    $client = new \GuzzleHttp\Client();
//    this API
    $res = $client->get('https://api.coinstats.app/public/v1/coins?skip=0&limit=10');
    $content = (string) $res->getBody();
//    RET
    $content = json_decode($content, true);
    return ($content);
});
```

#Home - Route:
```php
Route::get('/', function () {
//    This REQ GET price
    $client = new \GuzzleHttp\Client();
//    this API
    $res = $client->get('https://api.coinstats.app/public/v1/coins?skip=0&limit=10');
    $content = (string) $res->getBody();
//    RET
    $content = json_decode($content, true);
    return view('welcome',compact('content'));
});
```
<!-- ![image](https://user-images.githubusercontent.com/35100055/196808417-818b0519-d1a8-4a44-9bac-0dfee39c260c.png)
 -->

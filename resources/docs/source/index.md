---
title: API Reference

language_tabs:
- php
- bash
- javascript
- python

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#API


<!-- START_0a626b6d1291dcbdc606398e1a1eb067 -->
## api/pans
> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/pans',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```bash
curl -X GET \
    -G "http://localhost/api/pans" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/pans"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'http://localhost/api/pans'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json
[
    {
        "shape": "round",
        "measures": [
            "diameter"
        ]
    },
    {
        "shape": "square",
        "measures": [
            "edge"
        ]
    },
    {
        "shape": "rectangular",
        "measures": [
            "width",
            "length"
        ]
    }
]
```

### HTTP Request
`GET api/pans`


<!-- END_0a626b6d1291dcbdc606398e1a1eb067 -->

<!-- START_023d434def3b985bfed57a8907b52e9b -->
## api/pans
> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/pans',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'pans' => [
                [
                    'shape' => 'Round',
                    'measure' => '{ "diameter": 14 }',
                ],
            ],
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```bash
curl -X POST \
    "http://localhost/api/pans" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"pans":[{"shape":"Round","measure":"{ \"diameter\": 14 }"}]}'

```

```javascript
const url = new URL(
    "http://localhost/api/pans"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "pans": [
        {
            "shape": "Round",
            "measure": "{ \"diameter\": 14 }"
        }
    ]
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'http://localhost/api/pans'
payload = {
    "pans": [
        {
            "shape": "Round",
            "measure": "{ \"diameter\": 14 }"
        }
    ]
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```



### HTTP Request
`POST api/pans`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `pans.*.shape` | string |  required  | The shape of a pan.
        `pans.*.measure` | object |  required  | The measure of a pan.
    
<!-- END_023d434def3b985bfed57a8907b52e9b -->



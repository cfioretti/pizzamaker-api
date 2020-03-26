<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>I love pizza - API Reference</title>

    <link rel="stylesheet" href="/docs/css/style.css" />
    <script src="/docs/js/all.js"></script>


          <script>
        $(function() {
            setupLanguages(["php","bash","javascript","python"]);
        });
      </script>
      </head>

  <body class="">
    <a href="#" id="nav-button">
      <span>
        NAV
        <img src="/docs/images/navbar.png" />
      </span>
    </a>
    <div class="tocify-wrapper">
        <img src="/docs/images/logo.png" />
                    <div class="lang-selector">
                                  <a href="#" data-language-name="php">php</a>
                                  <a href="#" data-language-name="bash">bash</a>
                                  <a href="#" data-language-name="javascript">javascript</a>
                                  <a href="#" data-language-name="python">python</a>
                            </div>
                            <div class="search">
              <input type="text" class="search" id="input-search" placeholder="Search">
            </div>
            <ul class="search-results"></ul>
              <div id="toc">
      </div>
                    <ul class="toc-footer">
                                  <li></li>
                            </ul>
            </div>
    <div class="page-wrapper">
      <div class="dark-box"></div>
      <div class="content">
          <!-- START_INFO -->
<h1>Info</h1>
<p>Welcome to the generated API reference.<br>
<a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a></p>
<!-- END_INFO -->
<h1>API</h1>
<!-- START_0a626b6d1291dcbdc606398e1a1eb067 -->
<h2>api/pans</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://ilovepizza.test/api/pans',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "https://ilovepizza.test/api/pans" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://ilovepizza.test/api/pans"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://ilovepizza.test/api/pans'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">[
    {
        "id": 1,
        "shape": "Round",
        "measures": [
            "Ray"
        ]
    },
    {
        "id": 2,
        "shape": "Rectangular",
        "measures": [
            "Width",
            "Length"
        ]
    },
    {
        "id": 3,
        "shape": "Square",
        "measures": [
            "Edge"
        ]
    }
]</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/pans</code></p>
<!-- END_0a626b6d1291dcbdc606398e1a1eb067 -->
<!-- START_023d434def3b985bfed57a8907b52e9b -->
<h2>api/pans</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://ilovepizza.test/api/pans',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'pans' =&gt; [
                [
                    'shape' =&gt; 'Round',
                    'measure' =&gt; '{ "Ray": 4 }',
                ],
            ],
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-bash">curl -X POST \
    "https://ilovepizza.test/api/pans" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"pans":[{"shape":"Round","measure":"{ \"Ray\": 4 }"}]}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://ilovepizza.test/api/pans"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "pans": [
        {
            "shape": "Round",
            "measure": "{ \"Ray\": 4 }"
        }
    ]
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://ilovepizza.test/api/pans'
payload = {
    "pans": [
        {
            "shape": "Round",
            "measure": "{ \"Ray\": 4 }"
        }
    ]
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/pans</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>pans.*.shape</code></td>
<td>string</td>
<td>required</td>
<td>The shape of a pan.</td>
</tr>
<tr>
<td><code>pans.*.measure</code></td>
<td>object</td>
<td>required</td>
<td>The measure of a pan.</td>
</tr>
</tbody>
</table>
<!-- END_023d434def3b985bfed57a8907b52e9b -->
      </div>
      <div class="dark-box">
                        <div class="lang-selector">
                                    <a href="#" data-language-name="php">php</a>
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                                    <a href="#" data-language-name="python">python</a>
                              </div>
                </div>
    </div>
  </body>
</html>
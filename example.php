<?php

include './pricepi-rest.php';

/* See pricepi.com/piguide.html for more detailed information! */
echo call_pricepi("562013011", // your unique id
                  "sAJlm4MRm6dg8A0z6G6GJfygFh9HDXm2", // your account key
                  "SEK", // preferred currency
                  "off", // include results with an unknown currency. ON/OFF
                  "relevance", // results sortby. relevance/price
                  "0+30", // results offset+total
                  "keyword", // type of query. "keyword" is currently the only option
                  "bäddsoffa" // keywords to search for
                 );
?> 



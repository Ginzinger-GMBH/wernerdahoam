<?php
require('../../dmxConnectLib/dmxConnect.php');


$app = new \lib\App();

$app->define(<<<'JSON'
{
  "meta": {
    "options": {},
    "$_GET": [
      {
        "type": "text",
        "name": "sort"
      },
      {
        "type": "text",
        "name": "dir"
      }
    ]
  },
  "exec": {
    "steps": [
      "Connections/connection1",
      {
        "name": "gm_alle",
        "module": "dbconnector",
        "action": "select",
        "options": {
          "connection": "connection1",
          "sql": {
            "type": "SELECT",
            "columns": [
              {
                "table": "gm",
                "column": "marke"
              },
              {
                "table": "gm",
                "column": "type"
              },
              {
                "table": "gm",
                "column": "typezusatz"
              },
              {
                "table": "gm",
                "column": "erstzulassung"
              },
              {
                "table": "gm",
                "column": "farbe"
              },
              {
                "table": "gm",
                "column": "preis"
              },
              {
                "table": "gm",
                "column": "normalpreis"
              },
              {
                "table": "gm",
                "column": "haendlerpreis"
              },
              {
                "table": "gm",
                "column": "tagesangebot"
              }
            ],
            "table": {
              "name": "gm"
            },
            "joins": [],
            "query": "SELECT marke, type, typezusatz, erstzulassung, farbe, preis, normalpreis, haendlerpreis, tagesangebot FROM gm",
            "params": []
          }
        },
        "output": true,
        "meta": [
          {
            "name": "marke",
            "type": "text"
          },
          {
            "name": "type",
            "type": "text"
          },
          {
            "name": "typezusatz",
            "type": "text"
          },
          {
            "name": "erstzulassung",
            "type": "text"
          },
          {
            "name": "farbe",
            "type": "text"
          },
          {
            "name": "preis",
            "type": "text"
          },
          {
            "name": "normalpreis",
            "type": "text"
          },
          {
            "name": "haendlerpreis",
            "type": "text"
          },
          {
            "name": "tagesangebot",
            "type": "text"
          }
        ],
        "outputType": "array"
      }
    ]
  }
}
JSON
);
?>
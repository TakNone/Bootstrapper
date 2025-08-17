# bots.answerWebhookJSONQuery

**Description** : *Answers a custom query; for bots only*

**Layer** : 211

```tl
bots.answerWebhookJSONQuery#e6213f4d query_id:long data:DataJSON = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>query_id</mark> | [`long`](type/long) | Identifier of a custom query |
| <mark>data</mark> | [`DataJSON`](type/DataJSON) | JSON-serialized answer to the query |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **DATA_JSON_INVALID** | `400` | The provided JSON data is invalid |
| **QUERY_ID_INVALID** | `400` | The query ID is invalid |
| **USER_BOT_INVALID** | `403` | User accounts must provide the bot method parameter when calling this method. If there is no such method parameter, this method can only be invoked by bot accounts |
| **USER_BOT_REQUIRED** | `400` | This method can only be called by a bot |

---

## Example

```php
$bool = $client->bots->answerWebhookJSONQuery(
	query_id : -8117629671243497904,
	data : $client->dataJSON(
		data : 'gamLFw7Bxrdk8fDN',
	),
);
```
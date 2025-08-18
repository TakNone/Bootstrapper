# updateBotWebhookJSONQuery

**Description** : *A new incoming query; for bots only*

**Layer** : 211

```tl
updateBotWebhookJSONQuery#9b9240a6 query_id:long data:DataJSON timeout:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>query_id</mark> | [`long`](type/long) | Query identifier |
| <mark>data</mark> | [`DataJSON`](type/DataJSON) | Query data |
| <mark>timeout</mark> | [`int`](type/int) | Query timeout |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateBotWebhookJSONQuery(
	query_id : -2640606458127848925,
	data : $client->dataJSON(
		data : 'BLw8z06yKEigM2SJ',
	),
	timeout : 58,
);
```
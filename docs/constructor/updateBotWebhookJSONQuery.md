# updateBotWebhookJSONQuery

**Description** : *A new incoming query; for bots only*

**Layer** : 227

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
	query_id : 8069393676618306141,
	data : $client->dataJSON(
		data : 'qEgHK5DPrjWGY6A7',
	),
	timeout : 5,
);
```
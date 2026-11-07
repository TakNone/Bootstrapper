# updateBotWebhookJSONQuery

**Description** : *A new incoming query; for bots only*

**Layer** : 233

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
	query_id : 7972227769697000639,
	data : $client->dataJSON(
		data : 'IrgGTMl43yhcoxRf',
	),
	timeout : 40,
);
```
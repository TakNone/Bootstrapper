# updateBotWebhookJSONQuery

**Layer** : 214

```tl
updateBotWebhookJSONQuery#9b9240a6 query_id:long data:DataJSON timeout:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>query_id</mark> | [`long`](type/long) | NOTHING |
| <mark>data</mark> | [`DataJSON`](type/DataJSON) | NOTHING |
| <mark>timeout</mark> | [`int`](type/int) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateBotWebhookJSONQuery(
	query_id : 4008333991022588442,
	data : $client->dataJSON(
		data : '9S5CvubHds7WhzIR',
	),
	timeout : 10,
);
```
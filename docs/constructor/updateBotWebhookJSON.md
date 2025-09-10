# updateBotWebhookJSON

**Layer** : 214

```tl
updateBotWebhookJSON#8317c0c3 data:DataJSON = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>data</mark> | [`DataJSON`](type/DataJSON) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateBotWebhookJSON(
	data : $client->dataJSON(
		data : 'yW8ViboAEpvszePO',
	),
);
```
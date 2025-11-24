# updateBotWebhookJSON

**Description** : *A new incoming event; for bots only*

**Layer** : 218

```tl
updateBotWebhookJSON#8317c0c3 data:DataJSON = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>data</mark> | [`DataJSON`](type/DataJSON) | The event |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateBotWebhookJSON(
	data : $client->dataJSON(
		data : 'QSzNL3EMFKVe26JD',
	),
);
```
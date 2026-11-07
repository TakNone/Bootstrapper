# messages.widgetPublicData

**Layer** : 233

```tl
messages.widgetPublicData#4493bff hash:long data:string period:int = messages.WidgetPublicData;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | NOTHING |
| <mark>data</mark> | [`string`](type/string) | NOTHING |
| <mark>period</mark> | [`int`](type/int) | NOTHING |

---

## Type

[messages.WidgetPublicData](type/messages.WidgetPublicData)

---

## Example

```php
$messagesWidgetPublicData = $client->messages->widgetPublicData(
	hash : 0,
	data : '7PI8zLjhWUumcEOy',
	period : 40,
);
```
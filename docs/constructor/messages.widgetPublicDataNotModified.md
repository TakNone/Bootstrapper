# messages.widgetPublicDataNotModified

**Layer** : 233

```tl
messages.widgetPublicDataNotModified#b9196e57 period:int = messages.WidgetPublicData;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>period</mark> | [`int`](type/int) | NOTHING |

---

## Type

[messages.WidgetPublicData](type/messages.WidgetPublicData)

---

## Example

```php
$messagesWidgetPublicData = $client->messages->widgetPublicDataNotModified(
	period : 20,
);
```
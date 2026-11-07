# inputMediaWidgetId

**Layer** : 233

```tl
inputMediaWidgetId#7c855cb5 flags:# widget_id:long chat_data:flags.0?string = InputMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>widget_id</mark> | [`long`](type/long) | NOTHING |
| **chat_data** | [`flags.0?string`](type/string) | NOTHING |

---

## Type

[InputMedia](type/InputMedia)

---

## Example

```php
$inputMedia = $client->inputMediaWidgetId(
	widget_id : 7971772671548157689,
	chat_data : '8RaQq9vtLxUWoFgr',
);
```
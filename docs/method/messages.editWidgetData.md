# messages.editWidgetData

**Layer** : 233

```tl
messages.editWidgetData#eac343c0 flags:# widget_id:long public_data:string cache_time:flags.0?int = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>widget_id</mark> | [`long`](type/long) | NOTHING |
| <mark>public_data</mark> | [`string`](type/string) | NOTHING |
| **cache_time** | [`flags.0?int`](type/int) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->messages->editWidgetData(
	widget_id : 4706632897692876243,
	public_data : 'YRZc8Ae9FQHt1Nvk',
	cache_time : 80,
);
```
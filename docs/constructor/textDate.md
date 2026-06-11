# textDate

**Layer** : 227

```tl
textDate#a5b45e2b flags:# relative:flags.0?true short_time:flags.1?true long_time:flags.2?true short_date:flags.3?true long_date:flags.4?true day_of_week:flags.5?true text:RichText date:int = RichText;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **relative** | [`flags.0?true`](type/true) | NOTHING |
| **short_time** | [`flags.1?true`](type/true) | NOTHING |
| **long_time** | [`flags.2?true`](type/true) | NOTHING |
| **short_date** | [`flags.3?true`](type/true) | NOTHING |
| **long_date** | [`flags.4?true`](type/true) | NOTHING |
| **day_of_week** | [`flags.5?true`](type/true) | NOTHING |
| <mark>text</mark> | [`RichText`](type/RichText) | NOTHING |
| <mark>date</mark> | [`int`](type/int) | NOTHING |

---

## Type

[RichText](type/RichText)

---

## Example

```php
$richText = $client->textDate(
	relative : true,
	short_time : true,
	long_time : true,
	short_date : true,
	long_date : true,
	day_of_week : true,
	text : $client->textEmpty(),
	date : 73,
);
```
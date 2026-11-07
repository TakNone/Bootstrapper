# messages.setBotWidgetQueryAnswer

**Layer** : 233

```tl
messages.setBotWidgetQueryAnswer#f8cdec6a flags:# query_id:long result:flags.0?string = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>query_id</mark> | [`long`](type/long) | NOTHING |
| **result** | [`flags.0?string`](type/string) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->messages->setBotWidgetQueryAnswer(
	query_id : -8405334021427433104,
	result : 'NH6vVrDFKa3X20hO',
);
```
# messages.setWebViewResult

**Layer** : 216

```tl
messages.setWebViewResult#e41cd11d query_id:long = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>query_id</mark> | [`long`](type/long) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->messages->setWebViewResult(
	query_id : 7337367830105207795,
);
```
# messages.setWebViewResult

**Layer** : 214

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
	query_id : -6565550157262408198,
);
```
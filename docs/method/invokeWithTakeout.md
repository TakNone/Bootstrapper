# invokeWithTakeout

**Description** : *Invoke a method within a takeout session, see here &raquo; for more info*

**Layer** : 233

```tl
invokeWithTakeout#aca9fd2e {X:Type} takeout_id:long query:!X = X;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>takeout_id</mark> | [`long`](type/long) | Takeout session ID » |
| <mark>query</mark> | [`!X`](type/X) | Query |

---

## Result

[X](type/X)

---

## Example

```php
$x = $client->invokeWithTakeout(
	takeout_id : -505857343412142197,
	query : $client->help->getConfig(raw : true),
);
```
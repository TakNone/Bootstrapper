# starsTonAmount

**Description** : *Describes an amount of toncoin in nanotons \(i\.e\. 1/1\_000\_000\_000 of a toncoin\)*

**Layer** : 216

```tl
starsTonAmount#74aee3e0 amount:long = StarsAmount;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>amount</mark> | [`long`](type/long) | The amount in nanotons |

---

## Type

[StarsAmount](type/StarsAmount)

---

## Example

```php
$starsAmount = $client->starsTonAmount(
	amount : -5999212253400844734,
);
```
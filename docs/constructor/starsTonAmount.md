# starsTonAmount

**Description** : *Describes an amount of Gram in nanograms \(i\.e\. 1/1\_000\_000\_000 of a Gram\)*

**Layer** : 229

```tl
starsTonAmount#74aee3e0 amount:long = StarsAmount;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>amount</mark> | [`long`](type/long) | The amount in nanograms |

---

## Type

[StarsAmount](type/StarsAmount)

---

## Example

```php
$starsAmount = $client->starsTonAmount(
	amount : -5503844494755012028,
);
```
# statsPercentValue

**Description** : *Channel statistics percentage.
Compute the percentage simply by doing part * total / 100*

**Layer** : 211

```tl
statsPercentValue#cbce2fe0 part:double total:double = StatsPercentValue;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>part</mark> | [`double`](type/double) | Partial value |
| <mark>total</mark> | [`double`](type/double) | Total value |

---

## Type

[StatsPercentValue](type/StatsPercentValue)

---

## Example

```php
$statsPercentValue = $client->statsPercentValue(
	part : -1197049.169921875,
	total : -1264984.611328125,
);
```
# statsPercentValue

**Description** : *Channel statistics percentage\.
Compute the percentage simply by doing part \* total / 100*

**Layer** : 216

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
	part : 1373958.1123046875,
	total : -1538421.7294921875,
);
```
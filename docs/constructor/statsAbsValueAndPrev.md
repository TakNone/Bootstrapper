# statsAbsValueAndPrev

**Description** : *Statistics value couple; initial and final value for period of time currently in consideration*

**Layer** : 222

```tl
statsAbsValueAndPrev#cb43acde current:double previous:double = StatsAbsValueAndPrev;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>current</mark> | [`double`](type/double) | Current value |
| <mark>previous</mark> | [`double`](type/double) | Previous value |

---

## Type

[StatsAbsValueAndPrev](type/StatsAbsValueAndPrev)

---

## Example

```php
$statsAbsValueAndPrev = $client->statsAbsValueAndPrev(
	current : -999266.2763671875,
	previous : 1985767.0791015625,
);
```
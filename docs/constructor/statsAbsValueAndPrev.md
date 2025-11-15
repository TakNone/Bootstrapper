# statsAbsValueAndPrev

**Description** : *Statistics value couple; initial and final value for period of time currently in consideration*

**Layer** : 218

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
	current : 107399.6279296875,
	previous : -548105.775390625,
);
```
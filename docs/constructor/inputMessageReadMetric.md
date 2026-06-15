# inputMessageReadMetric

**Layer** : 227

```tl
inputMessageReadMetric#402b4495 msg_id:int view_id:long time_in_view_ms:int active_time_in_view_ms:int height_to_viewport_ratio_permille:int seen_range_ratio_permille:int = InputMessageReadMetric;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>msg_id</mark> | [`int`](type/int) | NOTHING |
| <mark>view_id</mark> | [`long`](type/long) | NOTHING |
| <mark>time_in_view_ms</mark> | [`int`](type/int) | NOTHING |
| <mark>active_time_in_view_ms</mark> | [`int`](type/int) | NOTHING |
| <mark>height_to_viewport_ratio_permille</mark> | [`int`](type/int) | NOTHING |
| <mark>seen_range_ratio_permille</mark> | [`int`](type/int) | NOTHING |

---

## Type

[InputMessageReadMetric](type/InputMessageReadMetric)

---

## Example

```php
$inputMessageReadMetric = $client->inputMessageReadMetric(
	msg_id : 22,
	view_id : -7267153152523083025,
	time_in_view_ms : 24,
	active_time_in_view_ms : 78,
	height_to_viewport_ratio_permille : 26,
	seen_range_ratio_permille : 27,
);
```
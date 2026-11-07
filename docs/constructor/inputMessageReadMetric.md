# inputMessageReadMetric

**Description** : *Read metric for a single message exposure, describing how long the message was visible in the chat viewport*

**Layer** : 229

```tl
inputMessageReadMetric#402b4495 msg_id:int view_id:long time_in_view_ms:int active_time_in_view_ms:int height_to_viewport_ratio_permille:int seen_range_ratio_permille:int = InputMessageReadMetric;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>msg_id</mark> | [`int`](type/int) | ID of the message |
| <mark>view_id</mark> | [`long`](type/long) | Random non-zero 64-bit ID generated for this exposure |
| <mark>time_in_view_ms</mark> | [`int`](type/int) | Total exposure time in milliseconds of at least one pixel of the message, after the 300 ms entry grace period |
| <mark>active_time_in_view_ms</mark> | [`int`](type/int) | Part of time_in_view_ms accumulated while the user is active |
| <mark>height_to_viewport_ratio_permille</mark> | [`int`](type/int) | round(max_message_height * 1000 / max_viewport_height), may exceed 1000 when the message is taller than the viewport |
| <mark>seen_range_ratio_permille</mark> | [`int`](type/int) | round(max_seen_vertical_range * 1000 / max_message_height), clamped to the 0–1000 range |

---

## Type

[InputMessageReadMetric](type/InputMessageReadMetric)

---

## Example

```php
$inputMessageReadMetric = $client->inputMessageReadMetric(
	msg_id : 90,
	view_id : 1649262688408946964,
	time_in_view_ms : 26,
	active_time_in_view_ms : 50,
	height_to_viewport_ratio_permille : 21,
	seen_range_ratio_permille : 87,
);
```
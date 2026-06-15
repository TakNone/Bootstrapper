# messages.reportReadMetrics

**Layer** : 227

```tl
messages.reportReadMetrics#4067c5e6 peer:InputPeer metrics:Vector<InputMessageReadMetric> = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>metrics</mark> | [`Vector<InputMessageReadMetric>`](type/InputMessageReadMetric) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->messages->reportReadMetrics(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	metrics : array(
		$client->inputMessageReadMetric(
			msg_id : 3,
			view_id : 6771399504891574564,
			time_in_view_ms : 60,
			active_time_in_view_ms : 51,
			height_to_viewport_ratio_permille : 63,
			seen_range_ratio_permille : 70,
		),
	),
);
```
# messages.reportReadMetrics

**Layer** : 225

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
			msg_id : 91,
			view_id : -1759191291720638602,
			time_in_view_ms : 83,
			active_time_in_view_ms : 18,
			height_to_viewport_ratio_permille : 63,
			seen_range_ratio_permille : 55,
		),
	),
);
```
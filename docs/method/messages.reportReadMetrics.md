# messages.reportReadMetrics

**Description** : *Report viewport read metrics for visible messages, indicating how long each message stayed in the chat viewport, see here &raquo; for more info on the full flow*

**Layer** : 229

```tl
messages.reportReadMetrics#4067c5e6 peer:InputPeer metrics:Vector<InputMessageReadMetric> = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer where the messages are located |
| <mark>metrics</mark> | [`Vector<InputMessageReadMetric>`](type/InputMessageReadMetric) | List of read metrics for individual messages |

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
			msg_id : 60,
			view_id : 1456249370838195396,
			time_in_view_ms : 58,
			active_time_in_view_ms : 58,
			height_to_viewport_ratio_permille : 13,
			seen_range_ratio_permille : 86,
		),
	),
);
```
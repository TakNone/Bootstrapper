# messages.getBotWidgetQueryAnswer

**Layer** : 233

```tl
messages.getBotWidgetQueryAnswer#5c550579 peer:InputPeer msg_id:int query_type:WidgetQueryType data:bytes = messages.BotWidgetQueryAnswer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>msg_id</mark> | [`int`](type/int) | NOTHING |
| <mark>query_type</mark> | [`WidgetQueryType`](type/WidgetQueryType) | NOTHING |
| <mark>data</mark> | [`bytes`](type/bytes) | NOTHING |

---

## Result

[messages.BotWidgetQueryAnswer](type/messages.BotWidgetQueryAnswer)

---

## Example

```php
$messagesBotWidgetQueryAnswer = $client->messages->getBotWidgetQueryAnswer(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	msg_id : 86,
	query_type : $client->widgetQueryTypeData(
		with_wallet : true,
	),
	data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```
# channelAdminLogEvent

**Description** : *Admin log event*

**Layer** : 233

```tl
channelAdminLogEvent#1fad68cd id:long date:int user_id:long action:ChannelAdminLogEventAction = ChannelAdminLogEvent;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`long`](type/long) | Event ID |
| <mark>date</mark> | [`int`](type/int) | Date |
| <mark>user_id</mark> | [`long`](type/long) | User ID |
| <mark>action</mark> | [`ChannelAdminLogEventAction`](type/ChannelAdminLogEventAction) | Action |

---

## Type

[ChannelAdminLogEvent](type/ChannelAdminLogEvent)

---

## Example

```php
$channelAdminLogEvent = $client->channelAdminLogEvent(
	id : 1661429320090178459,
	date : 83,
	user_id : -2835639500160659327,
	action : $client->channelAdminLogEventActionChangeTitle(
		prev_value : 'x3ubQNWtRAy1oOai',
		new_value : 'jZHSUK5vs9aIyBbA',
	),
);
```
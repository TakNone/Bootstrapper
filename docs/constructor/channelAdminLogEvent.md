# channelAdminLogEvent

**Description** : *Admin log event*

**Layer** : 229

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
	id : -5049479573171575098,
	date : 88,
	user_id : 910913785763925866,
	action : $client->channelAdminLogEventActionChangeTitle(
		prev_value : 'hXa6R1gK2eVzTqI4',
		new_value : 'lP4bM56fESuksIiw',
	),
);
```
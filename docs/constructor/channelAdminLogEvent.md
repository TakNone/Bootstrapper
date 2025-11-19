# channelAdminLogEvent

**Description** : *Admin log event*

**Layer** : 218

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
	id : -7135919922417982969,
	date : 24,
	user_id : -2244384294056298580,
	action : $client->channelAdminLogEventActionChangeTitle(
		prev_value : 'kqixZzs7ldWGYmK1',
		new_value : '5hpQK7afPTjZCXrY',
	),
);
```
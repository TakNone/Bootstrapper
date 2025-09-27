# channelAdminLogEvent

**Description** : *Admin log event*

**Layer** : 214

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
	id : 8986238855379457391,
	date : 16,
	user_id : -64820961311486322,
	action : $client->channelAdminLogEventActionChangeTitle(
		prev_value : 'WQ1wxCa9iGJT7yH8',
		new_value : 'rTRSCp0d8jZDz5gv',
	),
);
```
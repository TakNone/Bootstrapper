# channelAdminLogEvent

**Description** : *Admin log event*

**Layer** : 222

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
	id : -7196197850766052695,
	date : 17,
	user_id : -4328958259355843261,
	action : $client->channelAdminLogEventActionChangeTitle(
		prev_value : 'K6JyTPue9omCBVIp',
		new_value : 'd9WHNavSoV0G6RrB',
	),
);
```
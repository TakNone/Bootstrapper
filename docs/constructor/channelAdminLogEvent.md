# channelAdminLogEvent

**Description** : *Admin log event*

**Layer** : 211

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
	id : 2764533404086738657,
	date : 48,
	user_id : -6469945994205241626,
	action : $client->channelAdminLogEventActionChangeTitle(
		prev_value : '6BdJRImcaAh48TDv',
		new_value : 'jT4BJuCbL1RQ3WrM',
	),
);
```
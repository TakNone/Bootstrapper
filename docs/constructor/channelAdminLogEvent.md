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
	id : -8238810454635843140,
	date : 97,
	user_id : -6334205629262593350,
	action : $client->channelAdminLogEventActionChangeTitle(
		prev_value : '2jZVCHprItgJoNc3',
		new_value : 'u56tJaAZR02xLIer',
	),
);
```
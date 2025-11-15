# channelAdminLogEvent

**Description** : *Admin log event*

**Layer** : 216

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
	id : -223227854646926026,
	date : 68,
	user_id : -882129789339571770,
	action : $client->channelAdminLogEventActionChangeTitle(
		prev_value : 'agWnxV9q5NbrYURX',
		new_value : 'JYCKogneD351jmbs',
	),
);
```
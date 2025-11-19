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
	id : 8623402387833568678,
	date : 79,
	user_id : -8086831225046960909,
	action : $client->channelAdminLogEventActionChangeTitle(
		prev_value : '0qhW4jcZ1LtlJUE2',
		new_value : 'bUCRyhkpgMe7aqfA',
	),
);
```
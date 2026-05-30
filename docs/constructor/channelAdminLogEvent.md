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
	id : -2196411297300950143,
	date : 94,
	user_id : -2264587722996098800,
	action : $client->channelAdminLogEventActionChangeTitle(
		prev_value : 'wxPUQflMRHFcYVzo',
		new_value : 'ye0n9fSs4PW6Okao',
	),
);
```
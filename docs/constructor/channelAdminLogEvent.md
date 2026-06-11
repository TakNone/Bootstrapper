# channelAdminLogEvent

**Description** : *Admin log event*

**Layer** : 227

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
	id : 5961406123449559231,
	date : 52,
	user_id : -8959788675812993321,
	action : $client->channelAdminLogEventActionChangeTitle(
		prev_value : 'FxPSgBCGRr2QE3ij',
		new_value : 'qeCy1v5OxlN4DLdi',
	),
);
```
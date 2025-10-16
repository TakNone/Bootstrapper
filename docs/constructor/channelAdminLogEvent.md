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
	id : -3873586809512339332,
	date : 98,
	user_id : -8561013746626439361,
	action : $client->channelAdminLogEventActionChangeTitle(
		prev_value : 'pNwrmBRofgIhHsXT',
		new_value : '3w2EUMhFBeT6gtJP',
	),
);
```
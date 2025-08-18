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
	id : -1543021464331359296,
	date : 78,
	user_id : -1889542380320028200,
	action : $client->channelAdminLogEventActionChangeTitle(
		prev_value : 'LPSBalHEy5Vds7Ye',
		new_value : 'x4a1Vc0R7z2Yq9Di',
	),
);
```
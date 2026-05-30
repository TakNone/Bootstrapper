# channelAdminLogEvent

**Description** : *Admin log event*

**Layer** : 225

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
	id : 1357873223133744354,
	date : 63,
	user_id : -8183821724804247956,
	action : $client->channelAdminLogEventActionChangeTitle(
		prev_value : 'R9NtdOrCgSKcMiFW',
		new_value : 'bmwKoFud4v1LE2xg',
	),
);
```
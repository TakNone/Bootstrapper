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
	id : 3234634068877114274,
	date : 28,
	user_id : 7992345073960975022,
	action : $client->channelAdminLogEventActionChangeTitle(
		prev_value : 'xLR6TZIFWprXAnfY',
		new_value : 'xk9GJ370cwLYljd8',
	),
);
```
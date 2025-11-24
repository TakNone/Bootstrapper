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
	id : -4993363001421420463,
	date : 99,
	user_id : 80313949232503641,
	action : $client->channelAdminLogEventActionChangeTitle(
		prev_value : 'tYgGOuDhf14j0rnd',
		new_value : '2ysDEwLtXmTh8P43',
	),
);
```
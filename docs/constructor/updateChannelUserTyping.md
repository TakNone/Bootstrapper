# updateChannelUserTyping

**Description** : *A user is typing in a supergroup, channel or message thread*

**Layer** : 222

```tl
updateChannelUserTyping#8c88c923 flags:# channel_id:long top_msg_id:flags.0?int from_id:Peer action:SendMessageAction = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>channel_id</mark> | [`long`](type/long) | Channel ID |
| **top_msg_id** | [`flags.0?int`](type/int) | Thread ID |
| <mark>from_id</mark> | [`Peer`](type/Peer) | The peer that is typing |
| <mark>action</mark> | [`SendMessageAction`](type/SendMessageAction) | Whether the user is typing, sending a media or doing something else |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateChannelUserTyping(
	channel_id : 8797373505650493980,
	top_msg_id : 96,
	from_id : $client->peerUser(
		user_id : -2122660802491676048,
	),
	action : $client->sendMessageTypingAction(),
);
```
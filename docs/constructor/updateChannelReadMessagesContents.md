# updateChannelReadMessagesContents

**Layer** : 214

```tl
updateChannelReadMessagesContents#25f324f7 flags:# channel_id:long top_msg_id:flags.0?int saved_peer_id:flags.1?Peer messages:Vector<int> = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| <mark>channel_id</mark> | [`long`](type/long) | NOTHING |
| **top_msg_id** | [`flags.0?int`](type/int) | NOTHING |
| **saved_peer_id** | [`flags.1?Peer`](type/Peer) | NOTHING |
| <mark>messages</mark> | [`Vector<int>`](type/int) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateChannelReadMessagesContents(
	channel_id : -8700597047279770828,
	top_msg_id : 49,
	saved_peer_id : $client->peerUser(
		user_id : -1668570973392640450,
	),
	messages : array(74),
);
```
# messageActionConferenceCall

**Layer** : 214

```tl
messageActionConferenceCall#2ffe2f7a flags:# missed:flags.0?true active:flags.1?true video:flags.4?true call_id:long duration:flags.2?int other_participants:flags.3?Vector<Peer> = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **missed** | [`flags.0?true`](type/true) | NOTHING |
| **active** | [`flags.1?true`](type/true) | NOTHING |
| **video** | [`flags.4?true`](type/true) | NOTHING |
| <mark>call_id</mark> | [`long`](type/long) | NOTHING |
| **duration** | [`flags.2?int`](type/int) | NOTHING |
| **other_participants** | [`flags.3?Vector<Peer>`](type/Peer) | NOTHING |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionConferenceCall(
	missed : true,
	active : true,
	video : true,
	call_id : 6675852277443447517,
	duration : 40,
	other_participants : array(
		$client->peerUser(
			user_id : 2606536808699590435,
		),
		$client->peerChat(
			chat_id : 4404577720942586656,
		),
		$client->peerChannel(
			channel_id : -6266458473194326010,
		),
	),
);
```
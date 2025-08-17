# messageActionConferenceCall

**Layer** : 211

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
	call_id : -4391891399138837510,
	duration : 9,
	other_participants : array(
		$client->peerUser(
			user_id : -3703185512944339995,
		),
		$client->peerChat(
			chat_id : -2908533800484503853,
		),
		$client->peerChannel(
			channel_id : 2918957058243148826,
		),
	),
);
```
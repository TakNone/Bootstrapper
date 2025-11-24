# messageActionConferenceCall

**Description** : *Represents a conference call \(or an invitation to a conference call, if neither the missed nor active flags are set\)*

**Layer** : 218

```tl
messageActionConferenceCall#2ffe2f7a flags:# missed:flags.0?true active:flags.1?true video:flags.4?true call_id:long duration:flags.2?int other_participants:flags.3?Vector<Peer> = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **missed** | [`flags.0?true`](type/true) | Whether the conference call has ended and the user hasn't joined |
| **active** | [`flags.1?true`](type/true) | Whether the user is currently in the conference call |
| **video** | [`flags.4?true`](type/true) | Whether this is a video conference call |
| <mark>call_id</mark> | [`long`](type/long) | Call ID |
| **duration** | [`flags.2?int`](type/int) | Call duration, for left calls only |
| **other_participants** | [`flags.3?Vector<Peer>`](type/Peer) | Identifiers of some other call participants |

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
	call_id : -4575163938616923670,
	duration : 24,
	other_participants : array(
		$client->peerUser(
			user_id : -8592353759798021548,
		),
		$client->peerChat(
			chat_id : 5719551257038589248,
		),
		$client->peerChannel(
			channel_id : 8350012952807534886,
		),
	),
);
```
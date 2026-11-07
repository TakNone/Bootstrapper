# messageActionConferenceCall

**Description** : *Represents a conference call &raquo;, or an invitation to one if neither the missed nor active flags are set*

**Layer** : 233

```tl
messageActionConferenceCall#2ffe2f7a flags:# missed:flags.0?true active:flags.1?true video:flags.4?true call_id:long duration:flags.2?int other_participants:flags.3?Vector<Peer> = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	call_id : -2717752970742908977,
	duration : 87,
	other_participants : array(
		$client->peerUser(
			user_id : -2783222665488714066,
		),
		$client->peerChat(
			chat_id : 6128223686859663921,
		),
		$client->peerChannel(
			channel_id : -5770286525019628809,
		),
	),
);
```
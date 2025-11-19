# updateGroupCall

**Description** : *A new groupcall was started*

**Layer** : 218

```tl
updateGroupCall#9d2216e0 flags:# live_story:flags.2?true peer:flags.1?Peer call:GroupCall = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **live_story** | [`flags.2?true`](type/true) | NOTHING |
| **peer** | [`flags.1?Peer`](type/Peer) | NOTHING |
| <mark>call</mark> | [`GroupCall`](type/GroupCall) | Info about the group call or livestream |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateGroupCall(
	live_story : true,
	peer : $client->peerUser(
		user_id : -6154362480043133479,
	),
	call : $client->groupCallDiscarded(
		id : -7556737974344978252,
		access_hash : -1907378549453606126,
		duration : 43,
	),
);
```
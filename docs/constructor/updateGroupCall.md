# updateGroupCall

**Description** : *A new groupcall was started*

**Layer** : 227

```tl
updateGroupCall#9d2216e0 flags:# live_story:flags.2?true peer:flags.1?Peer call:GroupCall = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
		user_id : -7156414335417435856,
	),
	call : $client->groupCallDiscarded(
		id : -7599563903843406128,
		access_hash : 4991400441262979100,
		duration : 59,
	),
);
```
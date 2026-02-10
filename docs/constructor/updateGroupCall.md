# updateGroupCall

**Description** : *A new groupcall was started*

**Layer** : 222

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
		user_id : -2421889541532872268,
	),
	call : $client->groupCallDiscarded(
		id : 8553537656664856546,
		access_hash : -4637364886186579466,
		duration : 25,
	),
);
```
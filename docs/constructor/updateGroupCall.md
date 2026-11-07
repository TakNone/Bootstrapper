# updateGroupCall

**Description** : *Indicates that group call information changed, see applying group call updates &raquo;*

**Layer** : 233

```tl
updateGroupCall#9d2216e0 flags:# live_story:flags.2?true peer:flags.1?Peer call:GroupCall = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **live_story** | [`flags.2?true`](type/true) | Whether this update belongs to a live story » |
| **peer** | [`flags.1?Peer`](type/Peer) | Peer associated with the group call |
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
		user_id : 4533255942917321382,
	),
	call : $client->groupCallDiscarded(
		id : 8595004402942536362,
		access_hash : -6169621006699713102,
		duration : 5,
	),
);
```
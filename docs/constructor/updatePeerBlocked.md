# updatePeerBlocked

**Description** : *We blocked a peer, see here &raquo; for more info on blocklists*

**Layer** : 211

```tl
updatePeerBlocked#ebe07752 flags:# blocked:flags.0?true blocked_my_stories_from:flags.1?true peer_id:Peer = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **blocked** | [`flags.0?true`](type/true) | Whether the peer was blocked or unblocked |
| **blocked_my_stories_from** | [`flags.1?true`](type/true) | Whether the peer was added/removed to/from the story blocklist; if not set, this update affects the main blocklist, see here » for more info |
| <mark>peer_id</mark> | [`Peer`](type/Peer) | The (un)blocked peer |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updatePeerBlocked(
	blocked : true,
	blocked_my_stories_from : true,
	peer_id : $client->peerUser(
		user_id : -2357520853702350901,
	),
);
```
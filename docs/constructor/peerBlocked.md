# peerBlocked

**Description** : *Information about a blocked peer*

**Layer** : 211

```tl
peerBlocked#e8fd8014 peer_id:Peer date:int = PeerBlocked;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer_id</mark> | [`Peer`](type/Peer) | Peer ID |
| <mark>date</mark> | [`int`](type/int) | When was the peer blocked |

---

## Type

[PeerBlocked](type/PeerBlocked)

---

## Example

```php
$peerBlocked = $client->peerBlocked(
	peer_id : $client->peerUser(
		user_id : 5387821323340818856,
	),
	date : 1,
);
```
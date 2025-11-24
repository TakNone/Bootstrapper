# updatePeerHistoryTTL

**Description** : *The Time\-To\-Live for messages sent by the current user in a specific chat has changed*

**Layer** : 218

```tl
updatePeerHistoryTTL#bb9bb9a5 flags:# peer:Peer ttl_period:flags.0?int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>peer</mark> | [`Peer`](type/Peer) | The chat |
| **ttl_period** | [`flags.0?int`](type/int) | The new Time-To-Live |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updatePeerHistoryTTL(
	peer : $client->peerUser(
		user_id : -5349557801174588810,
	),
	ttl_period : 100,
);
```
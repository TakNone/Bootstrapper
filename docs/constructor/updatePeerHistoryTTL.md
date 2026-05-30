# updatePeerHistoryTTL

**Description** : *The Time\-To\-Live for messages sent by the current user in a specific chat has changed*

**Layer** : 225

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
		user_id : -2748221351324999310,
	),
	ttl_period : 91,
);
```
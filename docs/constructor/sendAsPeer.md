# sendAsPeer

**Description** : *Indicates a peer that can be used to send messages*

**Layer** : 222

```tl
sendAsPeer#b81c7034 flags:# premium_required:flags.0?true peer:Peer = SendAsPeer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **premium_required** | [`flags.0?true`](type/true) | Whether a Telegram Premium account is required to send messages as this peer |
| <mark>peer</mark> | [`Peer`](type/Peer) | Peer |

---

## Type

[SendAsPeer](type/SendAsPeer)

---

## Example

```php
$sendAsPeer = $client->sendAsPeer(
	premium_required : true,
	peer : $client->peerUser(
		user_id : 2492068989099654707,
	),
);
```
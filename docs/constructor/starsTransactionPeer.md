# starsTransactionPeer

**Description** : *Describes a Telegram Star transaction with another peer*

**Layer** : 216

```tl
starsTransactionPeer#d80da15d peer:Peer = StarsTransactionPeer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`Peer`](type/Peer) | The peer |

---

## Type

[StarsTransactionPeer](type/StarsTransactionPeer)

---

## Example

```php
$starsTransactionPeer = $client->starsTransactionPeer(
	peer : $client->peerUser(
		user_id : 542575782184452033,
	),
);
```
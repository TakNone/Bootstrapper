# payments.getStarsStatus

**Description** : *Get the current Telegram Stars balance of the current account (with peer=inputPeerSelf), or the stars balance of the bot specified in peer*

**Layer** : 211

```tl
payments.getStarsStatus#4ea9b3bf flags:# ton:flags.0?true peer:InputPeer = payments.StarsStatus;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **ton** | [`flags.0?true`](type/true) | NOTHING |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer of which to get the balance |

---

## Result

[payments.StarsStatus](type/payments.StarsStatus)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$paymentsStarsStatus = $client->payments->getStarsStatus(
	ton : true,
	peer : $client->inputPeerEmpty(),
);
```
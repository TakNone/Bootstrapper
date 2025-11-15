# payments.getStarsStatus

**Description** : *Get the current Telegram Stars balance of the current account \(with peer=inputPeerSelf\), or the stars balance of the bot specified in peer*

**Layer** : 218

```tl
payments.getStarsStatus#4ea9b3bf flags:# ton:flags.0?true peer:InputPeer = payments.StarsStatus;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **ton** | [`flags.0?true`](type/true) | If set, returns the channel/ad revenue balance in nanotons |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer of which to get the balance |

---

## Result

[payments.StarsStatus](type/payments.StarsStatus)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOT_ACCESS_FORBIDDEN** | `403` | The specified method can be used over a business connection for some operations, but the specified query attempted an operation that is not allowed over a business connection |
| **BUSINESS_CONNECTION_INVALID** | `400` | The connection_id passed to the wrapping invokeWithBusinessConnection call is invalid |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$paymentsStarsStatus = $client->payments->getStarsStatus(
	ton : true,
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```
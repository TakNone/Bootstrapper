# payments.getConnectedStarRefBot

**Description** : *Fetch info about a specific bot affiliation »*

**Layer** : 211

```tl
payments.getConnectedStarRefBot#b7d998f0 peer:InputPeer bot:InputUser = payments.ConnectedStarRefBots;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The affiliated peer |
| <mark>bot</mark> | [`InputUser`](type/InputUser) | The bot that offers the affiliate program |

---

## Result

[payments.ConnectedStarRefBots](type/payments.ConnectedStarRefBots)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$paymentsConnectedStarRefBots = $client->payments->getConnectedStarRefBot(
	peer : $client->inputPeerEmpty(),
	bot : $client->inputUserEmpty(),
);
```
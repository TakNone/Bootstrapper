# premium.getBoostsStatus

**Description** : *Gets the current number of boosts of a channel/supergroup*

**Layer** : 211

```tl
premium.getBoostsStatus#42f1f61 peer:InputPeer = premium.BoostsStatus;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The peer |

---

## Result

[premium.BoostsStatus](type/premium.BoostsStatus)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$premiumBoostsStatus = $client->premium->getBoostsStatus(
	peer : $client->inputPeerEmpty(),
);
```
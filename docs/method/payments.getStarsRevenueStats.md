# payments.getStarsRevenueStats

**Description** : *Get Telegram Star revenue statistics »*

**Layer** : 211

```tl
payments.getStarsRevenueStats#d91ffad6 flags:# dark:flags.0?true ton:flags.1?true peer:InputPeer = payments.StarsRevenueStats;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **dark** | [`flags.0?true`](type/true) | Whether to enable dark theme for graph colors |
| **ton** | [`flags.1?true`](type/true) | NOTHING |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Get statistics for the specified bot, channel or ourselves (inputPeerSelf) |

---

## Result

[payments.StarsRevenueStats](type/payments.StarsRevenueStats)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$paymentsStarsRevenueStats = $client->payments->getStarsRevenueStats(
	dark : true,
	ton : true,
	peer : $client->inputPeerEmpty(),
);
```
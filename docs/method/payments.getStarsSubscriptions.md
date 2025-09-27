# payments.getStarsSubscriptions

**Description** : *Obtain a list of active, expired or cancelled Telegram Star subscriptions &raquo;*

**Layer** : 214

```tl
payments.getStarsSubscriptions#32512c5 flags:# missing_balance:flags.0?true peer:InputPeer offset:string = payments.StarsStatus;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **missing_balance** | [`flags.0?true`](type/true) | Whether to return only subscriptions expired due to an excessively low Telegram Star balance |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Always pass inputPeerSelf |
| <mark>offset</mark> | [`string`](type/string) | Offset for pagination, taken from payments.starsStatus.subscriptions_next_offset |

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
$paymentsStarsStatus = $client->payments->getStarsSubscriptions(
	missing_balance : true,
	peer : $client->inputPeerEmpty(),
	offset : 'hs5Z4NU1IxkF2LmR',
);
```
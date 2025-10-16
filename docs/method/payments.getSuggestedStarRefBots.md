# payments.getSuggestedStarRefBots

**Description** : *Obtain a list of suggested mini apps with available affiliate programs*

**Layer** : 216

```tl
payments.getSuggestedStarRefBots#d6b48f7 flags:# order_by_revenue:flags.0?true order_by_date:flags.1?true peer:InputPeer offset:string limit:int = payments.SuggestedStarRefBots;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **order_by_revenue** | [`flags.0?true`](type/true) | If set, orders results by the expected revenue |
| **order_by_date** | [`flags.1?true`](type/true) | If set, orders results by the creation date of the affiliate program |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The peer that will become the affiliate: star commissions will be transferred to this peer's star balance |
| <mark>offset</mark> | [`string`](type/string) | Offset for pagination, taken from payments.suggestedStarRefBots.next_offset, initially empty |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of results to return, see pagination |

---

## Result

[payments.SuggestedStarRefBots](type/payments.SuggestedStarRefBots)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `403` | The provided peer id is invalid |

---

## Example

```php
$paymentsSuggestedStarRefBots = $client->payments->getSuggestedStarRefBots(
	order_by_revenue : true,
	order_by_date : true,
	peer : $client->inputPeerEmpty(),
	offset : 'tJm0fTR5FhsMrAxN',
	limit : 44,
);
```
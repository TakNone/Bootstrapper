# payments.resolveStarGiftOffer

**Description** : *Accept or decline a previously received collectible gift purchase offer &raquo;, see here &raquo; for the full flow*

**Layer** : 229

```tl
payments.resolveStarGiftOffer#e9ce781c flags:# decline:flags.0?true offer_msg_id:int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **decline** | [`flags.0?true`](type/true) | If set, declines the offer; otherwise, accepts it |
| <mark>offer_msg_id</mark> | [`int`](type/int) | Identifier of the messageActionStarGiftPurchaseOffer service message describing the offer to act upon |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **MESSAGE_ID_INVALID** | `400` | The provided message id is invalid |

---

## Example

```php
$updates = $client->payments->resolveStarGiftOffer(
	decline : true,
	offer_msg_id : 5,
);
```
# payments.getStarGiftAuctionState

**Description** : *Returns info about a collectible gift auction &raquo;; also subscribes the user to auction updates, see here &raquo; for more info on the full flow*

**Layer** : 233

```tl
payments.getStarGiftAuctionState#5c9ff4d6 auction:InputStarGiftAuction version:int = payments.StarGiftAuctionState;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>auction</mark> | [`InputStarGiftAuction`](type/InputStarGiftAuction) | Either the ID of the gift linked to the auction, or an auction deep link slug » |
| <mark>version</mark> | [`int`](type/int) | Initially 0, then set to the returned starGiftAuctionState.version, to avoid refetching results if they haven't changed |

---

## Result

[payments.StarGiftAuctionState](type/payments.StarGiftAuctionState)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **STARGIFT_INVALID** | `400` | The passed gift is invalid |

---

## Example

```php
$paymentsStarGiftAuctionState = $client->payments->getStarGiftAuctionState(
	auction : $client->inputStarGiftAuction(
		gift_id : -6601051744924125663,
	),
	version : 9,
);
```
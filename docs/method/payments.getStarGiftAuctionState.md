# payments.getStarGiftAuctionState

**Layer** : 225

```tl
payments.getStarGiftAuctionState#5c9ff4d6 auction:InputStarGiftAuction version:int = payments.StarGiftAuctionState;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>auction</mark> | [`InputStarGiftAuction`](type/InputStarGiftAuction) | NOTHING |
| <mark>version</mark> | [`int`](type/int) | NOTHING |

---

## Result

[payments.StarGiftAuctionState](type/payments.StarGiftAuctionState)

---

## Example

```php
$paymentsStarGiftAuctionState = $client->payments->getStarGiftAuctionState(
	auction : $client->inputStarGiftAuction(
		gift_id : 4032801059740372140,
	),
	version : 91,
);
```
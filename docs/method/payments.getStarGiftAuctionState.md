# payments.getStarGiftAuctionState

**Layer** : 222

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
		gift_id : -3420110167891855734,
	),
	version : 9,
);
```
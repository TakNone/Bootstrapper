# payments.getStarGiftAuctionAcquiredGifts

**Layer** : 222

```tl
payments.getStarGiftAuctionAcquiredGifts#6ba2cbec gift_id:long = payments.StarGiftAuctionAcquiredGifts;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>gift_id</mark> | [`long`](type/long) | NOTHING |

---

## Result

[payments.StarGiftAuctionAcquiredGifts](type/payments.StarGiftAuctionAcquiredGifts)

---

## Example

```php
$paymentsStarGiftAuctionAcquiredGifts = $client->payments->getStarGiftAuctionAcquiredGifts(
	gift_id : -4534993238745271163,
);
```
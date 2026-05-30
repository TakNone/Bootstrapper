# payments.getStarGiftAuctionAcquiredGifts

**Layer** : 225

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
	gift_id : 6246909800553460654,
);
```
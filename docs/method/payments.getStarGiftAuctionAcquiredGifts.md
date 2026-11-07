# payments.getStarGiftAuctionAcquiredGifts

**Description** : *Fetches all the gifts that the current user won in an auction*

**Layer** : 229

```tl
payments.getStarGiftAuctionAcquiredGifts#6ba2cbec gift_id:long = payments.StarGiftAuctionAcquiredGifts;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>gift_id</mark> | [`long`](type/long) | The gift ID linked to the auction |

---

## Result

[payments.StarGiftAuctionAcquiredGifts](type/payments.StarGiftAuctionAcquiredGifts)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **STARGIFT_INVALID** | `400` | The passed gift is invalid |

---

## Example

```php
$paymentsStarGiftAuctionAcquiredGifts = $client->payments->getStarGiftAuctionAcquiredGifts(
	gift_id : 2543025112543149371,
);
```
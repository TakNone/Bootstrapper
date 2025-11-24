# messages.getStarGiftAuctionAcquiredGifts

**Layer** : 218

```tl
messages.getStarGiftAuctionAcquiredGifts#6ba2cbec gift_id:long = StarGiftAuctionAcquiredGifts;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>gift_id</mark> | [`long`](type/long) | NOTHING |

---

## Result

[StarGiftAuctionAcquiredGifts](type/StarGiftAuctionAcquiredGifts)

---

## Example

```php
$starGiftAuctionAcquiredGifts = $client->messages->getStarGiftAuctionAcquiredGifts(
	gift_id : -1059069364290078304,
);
```
# updateStarGiftAuctionState

**Description** : *Contains updates to auction state, see here &raquo; for more info on how to enable these updates*

**Layer** : 229

```tl
updateStarGiftAuctionState#48e246c2 gift_id:long state:StarGiftAuctionState = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>gift_id</mark> | [`long`](type/long) | ID of the collectible gift » currently being distributed in the auction |
| <mark>state</mark> | [`StarGiftAuctionState`](type/StarGiftAuctionState) | Auction state |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateStarGiftAuctionState(
	gift_id : 8787922256042170754,
	state : $client->starGiftAuctionStateNotModified(),
);
```
# updateStarGiftAuctionState

**Layer** : 222

```tl
updateStarGiftAuctionState#48e246c2 gift_id:long state:StarGiftAuctionState = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>gift_id</mark> | [`long`](type/long) | NOTHING |
| <mark>state</mark> | [`StarGiftAuctionState`](type/StarGiftAuctionState) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateStarGiftAuctionState(
	gift_id : 3379103359531600316,
	state : $client->starGiftAuctionStateNotModified(),
);
```
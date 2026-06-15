# updateStarGiftAuctionState

**Layer** : 227

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
	gift_id : -2013065686798331616,
	state : $client->starGiftAuctionStateNotModified(),
);
```
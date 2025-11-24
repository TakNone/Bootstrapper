# updateStarGiftAuctionUserState

**Layer** : 218

```tl
updateStarGiftAuctionUserState#dc58f31e gift_id:long user_state:StarGiftAuctionUserState = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>gift_id</mark> | [`long`](type/long) | NOTHING |
| <mark>user_state</mark> | [`StarGiftAuctionUserState`](type/StarGiftAuctionUserState) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateStarGiftAuctionUserState(
	gift_id : 3183791143603728315,
	user_state : $client->starGiftAuctionUserState(
		returned : true,
		bid_amount : 124518744835715586,
		bid_date : 2,
		min_bid_amount : 369701421702449022,
		peer : $client->peerUser(
			user_id : -2068163266659819213,
		),
		acquired_count : 11,
	),
);
```
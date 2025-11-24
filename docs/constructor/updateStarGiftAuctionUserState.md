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
	gift_id : 8746661892622102470,
	user_state : $client->starGiftAuctionUserState(
		returned : true,
		bid_amount : -1585574001763006196,
		bid_date : 1,
		min_bid_amount : -8022409630432101947,
		peer : $client->peerUser(
			user_id : 3104075762960506367,
		),
		acquired_count : 95,
	),
);
```
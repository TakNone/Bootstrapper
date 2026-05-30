# updateStarGiftAuctionUserState

**Layer** : 225

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
	gift_id : 8719318604525483737,
	user_state : $client->starGiftAuctionUserState(
		returned : true,
		bid_amount : 7605482569883715027,
		bid_date : 85,
		min_bid_amount : -6865158604419402331,
		bid_peer : $client->peerUser(
			user_id : -6417682894727110292,
		),
		acquired_count : 58,
	),
);
```
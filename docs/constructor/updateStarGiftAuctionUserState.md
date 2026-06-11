# updateStarGiftAuctionUserState

**Layer** : 227

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
	gift_id : 290098847565109556,
	user_state : $client->starGiftAuctionUserState(
		returned : true,
		bid_amount : -6053698324656747887,
		bid_date : 49,
		min_bid_amount : 8004309705195899303,
		bid_peer : $client->peerUser(
			user_id : 7776932497571052535,
		),
		acquired_count : 56,
	),
);
```
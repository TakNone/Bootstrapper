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
	gift_id : -4398615500270299371,
	user_state : $client->starGiftAuctionUserState(
		returned : true,
		bid_amount : -8601318791086422110,
		bid_date : 67,
		min_bid_amount : -1788806588719592308,
		bid_peer : $client->peerUser(
			user_id : 6592133487210454973,
		),
		acquired_count : 42,
	),
);
```
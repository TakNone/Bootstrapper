# updateStarGiftAuctionUserState

**Layer** : 222

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
	gift_id : -5748721648408055950,
	user_state : $client->starGiftAuctionUserState(
		returned : true,
		bid_amount : 2242768529098891917,
		bid_date : 67,
		min_bid_amount : 7302263953637952001,
		bid_peer : $client->peerUser(
			user_id : 858129302723094478,
		),
		acquired_count : 68,
	),
);
```
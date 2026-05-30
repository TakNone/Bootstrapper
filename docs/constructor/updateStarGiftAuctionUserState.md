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
	gift_id : -4264377235542518246,
	user_state : $client->starGiftAuctionUserState(
		returned : true,
		bid_amount : 6630905723692766730,
		bid_date : 78,
		min_bid_amount : -6429687066885658556,
		bid_peer : $client->peerUser(
			user_id : 6201489450259809443,
		),
		acquired_count : 25,
	),
);
```
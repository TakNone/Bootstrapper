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
	gift_id : -7869756253739162157,
	user_state : $client->starGiftAuctionUserState(
		returned : true,
		bid_amount : -4109944594625144018,
		bid_date : 87,
		min_bid_amount : -4839437592642872009,
		peer : $client->peerUser(
			user_id : 7859325149378730163,
		),
		acquired_count : 59,
	),
);
```
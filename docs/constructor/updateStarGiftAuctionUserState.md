# updateStarGiftAuctionUserState

**Description** : *Contains updates to auction state related to the current user, see here &raquo; for more info on how to enable these updates*

**Layer** : 233

```tl
updateStarGiftAuctionUserState#dc58f31e gift_id:long user_state:StarGiftAuctionUserState = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>gift_id</mark> | [`long`](type/long) | ID of the collectible gift » currently being distributed in the auction |
| <mark>user_state</mark> | [`StarGiftAuctionUserState`](type/StarGiftAuctionUserState) | Auction state related to the current user (i.e. info about placed bids, won gifts and so on) |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateStarGiftAuctionUserState(
	gift_id : -2545108222708615716,
	user_state : $client->starGiftAuctionUserState(
		returned : true,
		bid_amount : -597947994840181184,
		bid_date : 79,
		min_bid_amount : 7705283227332272448,
		bid_peer : $client->peerUser(
			user_id : 1802914594517176171,
		),
		acquired_count : 41,
	),
);
```
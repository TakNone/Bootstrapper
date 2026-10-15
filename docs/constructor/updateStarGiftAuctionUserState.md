# updateStarGiftAuctionUserState

**Description** : *Contains updates to auction state related to the current user, see here &raquo; for more info on how to enable these updates*

**Layer** : 229

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
	gift_id : -8716672600390322290,
	user_state : $client->starGiftAuctionUserState(
		returned : true,
		bid_amount : -1113194424543139279,
		bid_date : 29,
		min_bid_amount : -4091145661406069118,
		bid_peer : $client->peerUser(
			user_id : -4860724268407921909,
		),
		acquired_count : 18,
	),
);
```
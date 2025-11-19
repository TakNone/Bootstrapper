# starGiftAuctionUserState

**Layer** : 218

```tl
starGiftAuctionUserState#2eeed1c4 flags:# returned:flags.1?true bid_amount:flags.0?long bid_date:flags.0?int min_bid_amount:flags.0?long peer:flags.0?Peer acquired_count:int = StarGiftAuctionUserState;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **returned** | [`flags.1?true`](type/true) | NOTHING |
| **bid_amount** | [`flags.0?long`](type/long) | NOTHING |
| **bid_date** | [`flags.0?int`](type/int) | NOTHING |
| **min_bid_amount** | [`flags.0?long`](type/long) | NOTHING |
| **peer** | [`flags.0?Peer`](type/Peer) | NOTHING |
| <mark>acquired_count</mark> | [`int`](type/int) | NOTHING |

---

## Type

[StarGiftAuctionUserState](type/StarGiftAuctionUserState)

---

## Example

```php
$starGiftAuctionUserState = $client->starGiftAuctionUserState(
	returned : true,
	bid_amount : 7438169505649831132,
	bid_date : 29,
	min_bid_amount : 7561835168323714996,
	peer : $client->peerUser(
		user_id : -7359035537829755635,
	),
	acquired_count : 36,
);
```
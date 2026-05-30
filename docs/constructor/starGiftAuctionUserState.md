# starGiftAuctionUserState

**Layer** : 225

```tl
starGiftAuctionUserState#2eeed1c4 flags:# returned:flags.1?true bid_amount:flags.0?long bid_date:flags.0?int min_bid_amount:flags.0?long bid_peer:flags.0?Peer acquired_count:int = StarGiftAuctionUserState;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **returned** | [`flags.1?true`](type/true) | NOTHING |
| **bid_amount** | [`flags.0?long`](type/long) | NOTHING |
| **bid_date** | [`flags.0?int`](type/int) | NOTHING |
| **min_bid_amount** | [`flags.0?long`](type/long) | NOTHING |
| **bid_peer** | [`flags.0?Peer`](type/Peer) | NOTHING |
| <mark>acquired_count</mark> | [`int`](type/int) | NOTHING |

---

## Type

[StarGiftAuctionUserState](type/StarGiftAuctionUserState)

---

## Example

```php
$starGiftAuctionUserState = $client->starGiftAuctionUserState(
	returned : true,
	bid_amount : 2822754248337358565,
	bid_date : 71,
	min_bid_amount : -4192058956740695976,
	bid_peer : $client->peerUser(
		user_id : 126631001023873053,
	),
	acquired_count : 96,
);
```
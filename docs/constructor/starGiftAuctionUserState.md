# starGiftAuctionUserState

**Layer** : 222

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
	bid_amount : -8816391576566730347,
	bid_date : 94,
	min_bid_amount : 6111642758335635673,
	bid_peer : $client->peerUser(
		user_id : 3343481254775442396,
	),
	acquired_count : 73,
);
```
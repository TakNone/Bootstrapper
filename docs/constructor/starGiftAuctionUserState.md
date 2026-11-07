# starGiftAuctionUserState

**Description** : *Contains information about the current user&#039;s state in an auction &raquo;*

**Layer** : 233

```tl
starGiftAuctionUserState#2eeed1c4 flags:# returned:flags.1?true bid_amount:flags.0?long bid_date:flags.0?int min_bid_amount:flags.0?long bid_peer:flags.0?Peer acquired_count:int = StarGiftAuctionUserState;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **returned** | [`flags.1?true`](type/true) | If set, the placed bid was returned to the user, because it was outbid so much that it fell out of the top starGiftAuctionState.gifts_left positions, meaning that even if no new bids are placed, the user will never receive any gifts, so the bid was completely removed from the auction, and in order to participate again the user must manually make a new bid |
| **bid_amount** | [`flags.0?long`](type/long) | Contains the amount of the placed bid in Telegram Stars |
| **bid_date** | [`flags.0?int`](type/int) | Contains a UNIX timestamp, indicating when the bid was placed |
| **min_bid_amount** | [`flags.0?long`](type/long) | Contains the minumum allowed bid amount in Telegram Stars, if set overrides starGiftAuctionState.min_bid_amount for the current user |
| **bid_peer** | [`flags.0?Peer`](type/Peer) | Contains the peer that will receive the gift, if you end up winning this round |
| <mark>acquired_count</mark> | [`int`](type/int) | Contains the number of gifts that were purchased so far in the auction by the current user |

---

## Type

[StarGiftAuctionUserState](type/StarGiftAuctionUserState)

---

## Example

```php
$starGiftAuctionUserState = $client->starGiftAuctionUserState(
	returned : true,
	bid_amount : -8719702120008610741,
	bid_date : 56,
	min_bid_amount : -1630894022454233316,
	bid_peer : $client->peerUser(
		user_id : -4337556844843743349,
	),
	acquired_count : 77,
);
```
# starGiftAuctionRoundExtendable

**Description** : *Describes one or more extendable collectible gift auction rounds &raquo;*

**Layer** : 229

```tl
starGiftAuctionRoundExtendable#aa021e5 num:int duration:int extend_top:int extend_window:int = StarGiftAuctionRound;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>num</mark> | [`int`](type/int) | This object describes all rounds starting from num up until next.num-1 inclusively (next is the next StarGiftAuctionRound) |
| <mark>duration</mark> | [`int`](type/int) | Duration in seconds of the round(s) |
| <mark>extend_top</mark> | [`int`](type/int) | The round(s) will be extended by extend_window if a bid changes the composition/order of the top extend_top bidders |
| <mark>extend_window</mark> | [`int`](type/int) | The round(s) will be extended by this many seconds if a bid changes the composition/order of the top extend_top bidders |

---

## Type

[StarGiftAuctionRound](type/StarGiftAuctionRound)

---

## Example

```php
$starGiftAuctionRound = $client->starGiftAuctionRoundExtendable(
	num : 93,
	duration : 16,
	extend_top : 43,
	extend_window : 38,
);
```
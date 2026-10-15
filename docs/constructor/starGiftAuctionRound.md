# starGiftAuctionRound

**Description** : *Describes one or more collectible gift auction rounds &raquo;*

**Layer** : 229

```tl
starGiftAuctionRound#3aae0528 num:int duration:int = StarGiftAuctionRound;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>num</mark> | [`int`](type/int) | This object describes all rounds starting from num up until next.num-1 inclusively (next is the next StarGiftAuctionRound) |
| <mark>duration</mark> | [`int`](type/int) | Duration in seconds of the round(s) |

---

## Type

[StarGiftAuctionRound](type/StarGiftAuctionRound)

---

## Example

```php
$starGiftAuctionRound = $client->starGiftAuctionRound(
	num : 12,
	duration : 63,
);
```
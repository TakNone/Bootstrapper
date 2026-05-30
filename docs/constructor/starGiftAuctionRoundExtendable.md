# starGiftAuctionRoundExtendable

**Layer** : 222

```tl
starGiftAuctionRoundExtendable#aa021e5 num:int duration:int extend_top:int extend_window:int = StarGiftAuctionRound;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>num</mark> | [`int`](type/int) | NOTHING |
| <mark>duration</mark> | [`int`](type/int) | NOTHING |
| <mark>extend_top</mark> | [`int`](type/int) | NOTHING |
| <mark>extend_window</mark> | [`int`](type/int) | NOTHING |

---

## Type

[StarGiftAuctionRound](type/StarGiftAuctionRound)

---

## Example

```php
$starGiftAuctionRound = $client->starGiftAuctionRoundExtendable(
	num : 92,
	duration : 7,
	extend_top : 11,
	extend_window : 25,
);
```
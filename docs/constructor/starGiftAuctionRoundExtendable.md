# starGiftAuctionRoundExtendable

**Layer** : 225

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
	num : 46,
	duration : 40,
	extend_top : 32,
	extend_window : 16,
);
```
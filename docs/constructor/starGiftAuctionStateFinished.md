# starGiftAuctionStateFinished

**Description** : *Represents a finished auction &raquo;*

**Layer** : 233

```tl
starGiftAuctionStateFinished#972dabbf flags:# start_date:int end_date:int average_price:long listed_count:flags.0?int fragment_listed_count:flags.1?int fragment_listed_url:flags.1?string = StarGiftAuctionState;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>start_date</mark> | [`int`](type/int) | UNIX timestamp indicating when the auction started |
| <mark>end_date</mark> | [`int`](type/int) | UNIX timestamp indicating when the auction ended |
| <mark>average_price</mark> | [`long`](type/long) | Average price of distributed gifts |
| **listed_count** | [`flags.0?int`](type/int) | Number of gifts from the auction currently being resold on Telegram: if set, when the corresponding element is clicked in graphical clients, payments.getResaleStarGifts should be invoked with the ID of the gift associated to this auction, see here » for more info |
| **fragment_listed_count** | [`flags.1?int`](type/int) | Number of gifts from the auction currently being resold on Fragment |
| **fragment_listed_url** | [`flags.1?string`](type/string) | Only set if fragment_listed_count is set. If set, when the corresponding element is clicked in graphical clients, this URL should be opened |

---

## Type

[StarGiftAuctionState](type/StarGiftAuctionState)

---

## Example

```php
$starGiftAuctionState = $client->starGiftAuctionStateFinished(
	start_date : 74,
	end_date : 35,
	average_price : 994086938879860399,
	listed_count : 67,
	fragment_listed_count : 83,
	fragment_listed_url : 'https://docs.liveproto.dev',
);
```
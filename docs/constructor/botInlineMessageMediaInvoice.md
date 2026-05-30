# botInlineMessageMediaInvoice

**Description** : *Send an invoice*

**Layer** : 222

```tl
botInlineMessageMediaInvoice#354a9b09 flags:# shipping_address_requested:flags.1?true test:flags.3?true title:string description:string photo:flags.0?WebDocument currency:string total_amount:long reply_markup:flags.2?ReplyMarkup = BotInlineMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **shipping_address_requested** | [`flags.1?true`](type/true) | Set this flag if you require the user's shipping address to complete the order |
| **test** | [`flags.3?true`](type/true) | Test invoice |
| <mark>title</mark> | [`string`](type/string) | Product name, 1-32 characters |
| <mark>description</mark> | [`string`](type/string) | Product description, 1-255 characters |
| **photo** | [`flags.0?WebDocument`](type/WebDocument) | Product photo |
| <mark>currency</mark> | [`string`](type/string) | Three-letter ISO 4217 currency code, or XTR for Telegram Stars |
| <mark>total_amount</mark> | [`long`](type/long) | Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies) |
| **reply_markup** | [`flags.2?ReplyMarkup`](type/ReplyMarkup) | Inline keyboard |

---

## Type

[BotInlineMessage](type/BotInlineMessage)

---

## Example

```php
$botInlineMessage = $client->botInlineMessageMediaInvoice(
	shipping_address_requested : true,
	test : true,
	title : 'mb1LwBgr4fu2W8PD',
	description : '68U5gFlBAnaueVZH',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -5061164047536899622,
		size : 78,
		mime_type : 'bJBGc6m0zlfPhNAF',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 11,
				h : 64,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'rCjmo8lgkHTP6LBz',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 77,
					x : -593069.5654296875,
					y : -1151959.1962890625,
					zoom : -516495.43359375,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -515490.5537109375,
				w : 96,
				h : 93,
				preload_prefix_size : 78,
				video_start_ts : 406954.1953125,
				video_codec : 'c4nfPWHeDt19VhbG',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 37,
				title : 'vZy9KGkebAuWBdqi',
				performer : '1zYs8rL674SbxH9a',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'LTZFeAJWz4yfvqgK',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'owBmLVrHsCFSlba9',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	currency : 'qemT8ChWB1H29dZk',
	total_amount : -918702415336617227,
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```
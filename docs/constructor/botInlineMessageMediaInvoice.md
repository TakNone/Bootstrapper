# botInlineMessageMediaInvoice

**Description** : *Send an invoice*

**Layer** : 218

```tl
botInlineMessageMediaInvoice#354a9b09 flags:# shipping_address_requested:flags.1?true test:flags.3?true title:string description:string photo:flags.0?WebDocument currency:string total_amount:long reply_markup:flags.2?ReplyMarkup = BotInlineMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	title : 'Si7XODo9hAlI0FPm',
	description : 'cjJxn6ZCA50Luo2y',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -7893653460481676744,
		size : 34,
		mime_type : 'MXpwvh5D9jY04ZHE',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 54,
				h : 88,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'iEeYXVJGmKnwjbhr',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 73,
					x : 1302008.3662109375,
					y : 57546.8037109375,
					zoom : 991802.5810546875,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1160928.306640625,
				w : 87,
				h : 16,
				preload_prefix_size : 12,
				video_start_ts : 179758.34765625,
				video_codec : 'HRgDdSBLmEkA3hcQ',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 2,
				title : 'uh94YXk2w03nRsaO',
				performer : 'U7sq5Yd3Q9SRnZvX',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : '9MmhvdtFpNQS4OuP',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'YjNWVAoTztpG1PS7',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	currency : 'FwziLWOkHIGCx7EN',
	total_amount : -157420564292739465,
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```
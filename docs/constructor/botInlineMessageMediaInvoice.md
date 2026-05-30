# botInlineMessageMediaInvoice

**Description** : *Send an invoice*

**Layer** : 225

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
	title : '6Z4VWOiLPQMSxGor',
	description : 'l3fUYAStbIr9ahzo',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -8518821331837637933,
		size : 19,
		mime_type : 'SKE7m3TQJYMfvFi9',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 80,
				h : 77,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'gTYku3LE2rHQsjqF',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 14,
					x : -1207708.8212890625,
					y : 2051423.740234375,
					zoom : 1365663.380859375,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -40193.0703125,
				w : 51,
				h : 78,
				preload_prefix_size : 65,
				video_start_ts : -1080847.3017578125,
				video_codec : 'eIWjiC6yaph8L9XN',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 22,
				title : 'vAThgxdpsLCBb5HG',
				performer : 'DKvfpgGoSJtNm32n',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'tCm6qQfoZ7XTOYM4',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'KpeMGTPaQyx6gALt',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	currency : 'KbgBHRJ2QtwTuGdP',
	total_amount : -4097650189249566073,
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```
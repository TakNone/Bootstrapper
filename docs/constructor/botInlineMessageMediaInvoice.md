# botInlineMessageMediaInvoice

**Description** : *Send an invoice*

**Layer** : 211

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
	title : 'M1QEau3ghfmzc6r5',
	description : '6uWSLnvTA3hKYa0c',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 5859221963743579383,
		size : 35,
		mime_type : 's6gT9HtQGJfiFj5B',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 91,
				h : 0,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'XBGEa3NAwQRjUHKc',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -636710.28515625,
				w : 50,
				h : 100,
				preload_prefix_size : 7,
				video_start_ts : -830729.943359375,
				video_codec : '1qr2nIbAPLuZEFJW',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 28,
				title : 'hMPJVwqCLxAWpzyG',
				performer : 'Muc4dxTNAHn5b8wF',
				waveform : 'ʿY3}LiveProto??y?',
			),
			$client->documentAttributeFilename(
				file_name : 'byRtL64CQE5iKhve',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'JMEyhfe1XkpWaO2x',
				stickerset : $client->inputStickerSetEmpty(...),
			),
		),
	),
	currency : '1KRHyXJQYDmz0Nh4',
	total_amount : 6413433133386373760,
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```
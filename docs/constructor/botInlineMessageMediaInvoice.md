# botInlineMessageMediaInvoice

**Description** : *Send an invoice*

**Layer** : 216

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
	title : 'RGlgLMBV4n6CAwyN',
	description : 'HT7Xu0qvfrFME9QK',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -6583585810573724919,
		size : 21,
		mime_type : 'wChfHRpZ8xKyNDTM',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 46,
				h : 59,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'OaswBKSMvoWg0rkz',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -247990.9853515625,
				w : 2,
				h : 71,
				preload_prefix_size : 83,
				video_start_ts : 399706.5478515625,
				video_codec : 'VxUR2SK7TXOCNnMw',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 21,
				title : 'MyWD37k4wqLV1vCo',
				performer : 'uhFUEmlzwvAjSHV3',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'Hn0S6vMZXfGTk4t7',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'V6wRGxIShpsBgEW9',
				stickerset : $client->inputStickerSetEmpty(...),
			),
		),
	),
	currency : '3eNLmdV4uETOFo7U',
	total_amount : 4239613715688478136,
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```
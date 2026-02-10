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
	title : 't4HylnU3psZR2zmI',
	description : 'Ssmrc4G9iIHkEhdu',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 376444392732693275,
		size : 25,
		mime_type : '3Pi2Xky68WzZxuop',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 64,
				h : 25,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'y63qmcsO8BUuFTAN',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 36,
					x : 2855.2255859375,
					y : 1463661.5205078125,
					zoom : 1611393.3076171875,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1366429.5458984375,
				w : 7,
				h : 83,
				preload_prefix_size : 4,
				video_start_ts : 279640.259765625,
				video_codec : 'z7QDknIvefFBbjOq',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 44,
				title : 'sV4HrYCkNAIx8Eba',
				performer : 'Bq0spWvYzLw2A7I5',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'TaDjst2IeGPHQApZ',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'nK9xtukQGDfbJToO',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	currency : 'KGyOPCg586HktTWI',
	total_amount : -7279865489958277987,
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```
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
	title : '4ZV9KylSRzD1UTxk',
	description : 'HpgiUdwt0f1usyC8',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -1088659937334349696,
		size : 100,
		mime_type : 'Kr13xX9yw0dlAi8V',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 17,
				h : 62,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : '5qx7eNAGDHwVYQOM',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 100,
					x : 461221.1533203125,
					y : 594027.70703125,
					zoom : 746346.7998046875,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -483453.8994140625,
				w : 15,
				h : 76,
				preload_prefix_size : 57,
				video_start_ts : 1256216.2568359375,
				video_codec : 'LMkvo7N0qewSDYWV',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 31,
				title : '6yEcCkRWNF0XaU74',
				performer : 'vCsc5ianYfVXPQqh',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'UR0G82V6cWebLKvu',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'BSFLHTZu5Pn1vwlc',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	currency : 'hcbjT9zwGuxmgJOU',
	total_amount : -5918296643466264041,
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```
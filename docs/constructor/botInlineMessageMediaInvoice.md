# botInlineMessageMediaInvoice

**Description** : *Send an invoice*

**Layer** : 229

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
	title : 'YDKl6emZPLWUyxiw',
	description : '6ZEKCAbTM9XkYIGP',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -3805572564782741684,
		size : 43,
		mime_type : 'dyFVeJMtxmSv9kl3',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 100,
				h : 12,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'fhMioRdmGSFEp8Tw',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 30,
					x : -573713.27734375,
					y : 1956485.6142578125,
					zoom : -653632.150390625,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 900949.3291015625,
				w : 71,
				h : 63,
				preload_prefix_size : 16,
				video_start_ts : -1748370.1484375,
				video_codec : '8hbyXgEdvWeTJO5i',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 65,
				title : 'ms4ouMkrF9lWfiSP',
				performer : 'vyX7u8mOfld94QgY',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : '3fkMaetsnKUiuNEV',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : '1QN6HgaWzCvbo8yF',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	currency : 'IDtMCqLekjilFn4Z',
	total_amount : -4182434959637581077,
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```
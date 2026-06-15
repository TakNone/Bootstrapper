# botInlineMessageMediaInvoice

**Description** : *Send an invoice*

**Layer** : 227

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
	title : 'Jf0DhuG4lgBmSAet',
	description : 'nC5mbyW4z2GfOLo8',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -3089686450411532601,
		size : 8,
		mime_type : 'uYSeomxFqzc94wWy',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 35,
				h : 63,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'XTYktjIS21JofM07',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 52,
					x : -1187195.5859375,
					y : -1660519.6796875,
					zoom : 310738.00390625,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1843726.7138671875,
				w : 66,
				h : 69,
				preload_prefix_size : 57,
				video_start_ts : -1459017.76953125,
				video_codec : '7cwk82mgPaUrbnes',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 76,
				title : 'TLp0kJ1l8rOqoQGd',
				performer : 'ZlBXI5anCHG1zpsD',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'etIKh9pSfMQmaU1Y',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : '0kDHgIa7ZwMp4CP9',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	currency : 'eamApIfRU0iMsWCO',
	total_amount : 2228489295476900612,
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```
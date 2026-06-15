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
	title : 'oXIew6PTBhcdSqk5',
	description : '10jysqL2Nba9IgZR',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 6606820541864384735,
		size : 75,
		mime_type : 'Lg0BrpFUv8tT5sxi',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 19,
				h : 53,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'EXGBc9UJ3DjmZ78v',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 90,
					x : 1497999.3759765625,
					y : 1796524.2646484375,
					zoom : 2007710.0751953125,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 820437.78125,
				w : 4,
				h : 96,
				preload_prefix_size : 37,
				video_start_ts : 1978733.173828125,
				video_codec : 'IFc0lSZr6Hk1gOtK',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 20,
				title : 'edpGh4Im3CaSjLyu',
				performer : 'ZTPrg1mGpxU8iFIl',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'mMTZIOl2YgWdzGoJ',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'kUIwlSjANy8GMcW2',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	currency : 'gjWZT9oIt6XpJw8B',
	total_amount : -552286690299339586,
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```
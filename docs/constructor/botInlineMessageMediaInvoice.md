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
	title : '3iFCGMNsn1vVDOhT',
	description : 'AzwtPMpbyWLrFojn',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 1864690207872612663,
		size : 3,
		mime_type : '4SYyuQ3boPgFKBH8',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 69,
				h : 87,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'XHwCZ3DE8hcp45gA',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1519246.5263671875,
				w : 2,
				h : 46,
				preload_prefix_size : 80,
				video_start_ts : -1205934.5654296875,
				video_codec : 'hk76cKMjINqQPHUb',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 37,
				title : '5xZpoE0CTQNXA1zL',
				performer : '79AdlcPMfvUZW3jp',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : '73yKdRBlfZs1LPSA',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : '9SvqY1dKghXy35pb',
				stickerset : $client->inputStickerSetEmpty(...),
			),
		),
	),
	currency : 'Rwo27JTZKgF4xD9V',
	total_amount : 3686935444599779689,
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```
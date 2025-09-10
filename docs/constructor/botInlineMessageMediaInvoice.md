# botInlineMessageMediaInvoice

**Description** : *Send an invoice*

**Layer** : 214

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
	title : 'gyV5XWMtko2ml6Ij',
	description : '8jIykVHlr0chwAC2',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -835047386995113543,
		size : 44,
		mime_type : 'rHjiayc0Z21UBM4s',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 65,
				h : 84,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : '7NdvPsTiALHfwUR1',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -806356.54296875,
				w : 95,
				h : 82,
				preload_prefix_size : 12,
				video_start_ts : 424430.5185546875,
				video_codec : 'xfINdyF9MoS2qRGa',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 96,
				title : '59I2WUGJqTmsyL1x',
				performer : '3c5wfPtmKiSW7Mr4',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 't74IeMDbJmafix03',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'CXgZERThIQpSvYOD',
				stickerset : $client->inputStickerSetEmpty(...),
			),
		),
	),
	currency : 'RUTCrEJzptKZWLAc',
	total_amount : -18874946562624404,
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```
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
	title : 'J95lI2O8XGQuAn4y',
	description : 'fi7pdoGqKmuw0c6A',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -4560724417207417932,
		size : 20,
		mime_type : 'iVbWl4ve9uHmCkO6',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 5,
				h : 0,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'Qb42xh5IVfqJXKA9',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 245100.076171875,
				w : 46,
				h : 69,
				preload_prefix_size : 4,
				video_start_ts : 1627830.763671875,
				video_codec : 'iKpPUGtHV2SQuMCN',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 86,
				title : 'uBLn5sdHNYmwUazT',
				performer : 'JTiprPBfEqZaY5bF',
				waveform : '}Dg/|LiveProto??׮U',
			),
			$client->documentAttributeFilename(
				file_name : '6V3SdmDTKxbnOQ0M',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : '3iBhNxTPvrsWqzYd',
				stickerset : $client->inputStickerSetEmpty(...),
			),
		),
	),
	currency : 'uRSqH9BIArleZJWG',
	total_amount : -2748372397752402612,
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```
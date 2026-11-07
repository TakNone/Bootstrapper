# botInlineMessageMediaInvoice

**Description** : *Send an invoice*

**Layer** : 233

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
	title : 'gSElzRmDdh4IQ7xq',
	description : '6PgvrWJaq1EG4930',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 535396620947673177,
		size : 82,
		mime_type : 'xjhD6diIq2B9gfO4',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 2,
				h : 77,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'aOH4cZQvgi7yqw6E',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 57,
					x : 618834.26171875,
					y : 2048694.330078125,
					zoom : -187147.0703125,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1043867.224609375,
				w : 39,
				h : 97,
				preload_prefix_size : 11,
				video_start_ts : 1140178.9287109375,
				video_codec : '76wCroSzn428tpMY',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 100,
				title : 'aXD0GnMZvBflHNIz',
				performer : '2jBhPtArRx9pzE3v',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : '61jpoQBm7cH8bVqP',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'ySF9o8iWqzgdxT2X',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	currency : 'hDjGR52MxAsrvVWl',
	total_amount : -8106393439765381320,
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```
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
	title : 'kwPN7pAyoJrqE5f1',
	description : 'A0b1kerx4cMv8Td2',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 5297928349402229888,
		size : 80,
		mime_type : 'nBjg5v9YVf7OWqXd',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 78,
				h : 1,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'abi51JgAyfWjzUQT',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 18,
					x : -1101833.7802734375,
					y : -1846959.8583984375,
					zoom : -868178.23046875,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1511695.330078125,
				w : 74,
				h : 78,
				preload_prefix_size : 37,
				video_start_ts : -1998890.8154296875,
				video_codec : 'hvEO2iTR5WgZMpSq',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 91,
				title : 'F8uWAk9iZEx2lRYq',
				performer : 'BMcFxGW0PHO2S8rn',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'kY2GZrVndNHcvsQx',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'O3XszAgL49dbnTYF',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	currency : 'WETPOobypajvGlMN',
	total_amount : -2964396448534763700,
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```
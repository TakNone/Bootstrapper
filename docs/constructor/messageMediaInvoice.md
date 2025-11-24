# messageMediaInvoice

**Description** : *Invoice*

**Layer** : 218

```tl
messageMediaInvoice#f6a548d3 flags:# shipping_address_requested:flags.1?true test:flags.3?true title:string description:string photo:flags.0?WebDocument receipt_msg_id:flags.2?int currency:string total_amount:long start_param:string extended_media:flags.4?MessageExtendedMedia = MessageMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **shipping_address_requested** | [`flags.1?true`](type/true) | Whether the shipping address was requested |
| **test** | [`flags.3?true`](type/true) | Whether this is an example invoice |
| <mark>title</mark> | [`string`](type/string) | Product name, 1-32 characters |
| <mark>description</mark> | [`string`](type/string) | Product description, 1-255 characters |
| **photo** | [`flags.0?WebDocument`](type/WebDocument) | URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service. People like it better when they see what they are paying for |
| **receipt_msg_id** | [`flags.2?int`](type/int) | Message ID of receipt: if set, clients should change the text of the first keyboardButtonBuy button always attached to the message to a localized version of the word Receipt |
| <mark>currency</mark> | [`string`](type/string) | Three-letter ISO 4217 currency code, or XTR for Telegram Stars |
| <mark>total_amount</mark> | [`long`](type/long) | Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies) |
| <mark>start_param</mark> | [`string`](type/string) | Unique bot deep-linking parameter that can be used to generate this invoice |
| **extended_media** | [`flags.4?MessageExtendedMedia`](type/MessageExtendedMedia) | Deprecated |

---

## Type

[MessageMedia](type/MessageMedia)

---

## Example

```php
$messageMedia = $client->messageMediaInvoice(
	shipping_address_requested : true,
	test : true,
	title : '8bVEcGNmaZRQt6Hv',
	description : 'ZSQYv7dx9BTkNnaG',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 2148632746909404442,
		size : 26,
		mime_type : 'D5Kitz2pSkv3oJlE',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 9,
				h : 5,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'mxSy50sBMoGAEdhJ',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 28,
					x : 462128.669921875,
					y : 1906619.2451171875,
					zoom : 1786934.703125,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 962443.2490234375,
				w : 29,
				h : 69,
				preload_prefix_size : 28,
				video_start_ts : 318181.8251953125,
				video_codec : 'mdN7XYp1yRDHu9wz',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 97,
				title : 'M5gNxZJT0tz6pFqE',
				performer : '4FvVByLlNQq9anUb',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'k1hnEaKdSOTsmM4G',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'MT4qgc3SzGlvF7Aw',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	receipt_msg_id : 83,
	currency : 'kc5bWE4GfPpFCsR2',
	total_amount : -2140390172219061938,
	start_param : 'SIbJcO4d8vwEP2No',
	extended_media : $client->messageExtendedMediaPreview(
		w : 91,
		h : 84,
		thumb : $client->photoSizeEmpty(
			type : 'SIRkNnEcXw2zoy1t',
		),
		video_duration : 98,
	),
);
```
# messageMediaInvoice

**Description** : *Invoice*

**Layer** : 225

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
	title : 'NJI8f5piVAMSPoey',
	description : 'juFp1f9hLKwVlNYH',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 6125250076963874707,
		size : 74,
		mime_type : 'tNgnEaKmJQ3d9qx6',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 47,
				h : 11,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'm1DrJqEfwpnaZ3Tu',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 6,
					x : 7670.7099609375,
					y : -280631.7177734375,
					zoom : -1249749.1298828125,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 887437.1748046875,
				w : 79,
				h : 16,
				preload_prefix_size : 83,
				video_start_ts : -569212.90234375,
				video_codec : 'nlcKSRCUzQxDI8ag',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 5,
				title : '8yKROEsCoWq7Amuw',
				performer : '2NDsQLclWZn18BHz',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'ewNDIHaEcbspxU0Y',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'brTfO9z0y6iuaGAw',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	receipt_msg_id : 94,
	currency : 'tvYTGMfNrskyga0n',
	total_amount : 2167262139320665205,
	start_param : 'fN1GFd8PpDjQuL0X',
	extended_media : $client->messageExtendedMediaPreview(
		w : 85,
		h : 26,
		thumb : $client->photoSizeEmpty(
			type : 'YSLpnuUvZFaCjGbz',
		),
		video_duration : 9,
	),
);
```
# messageMediaInvoice

**Description** : *Invoice*

**Layer** : 233

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
	title : 'NUVsJio6ItWS0CkQ',
	description : 'GdjmahL1A3BT4Yus',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -4710512864433815133,
		size : 95,
		mime_type : '59fFSoZLONwM3Ri7',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 24,
				h : 69,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'eo3UtIMCBm8Vw25Q',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 30,
					x : -1284497.30859375,
					y : 1629062.333984375,
					zoom : 958623.8798828125,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -165372.89453125,
				w : 66,
				h : 35,
				preload_prefix_size : 0,
				video_start_ts : -669698.5537109375,
				video_codec : 'Ab1J9lrGdWT7PEV4',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 31,
				title : '0SMcamuI2RQeWLTZ',
				performer : 'ZKfLSHAte2RclMYD',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'LoahyfYtmJMiFrbD',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'dP9yXYmStBfO10MQ',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	receipt_msg_id : 22,
	currency : 'z9MeNUownKpdYVxX',
	total_amount : 3300097470025531020,
	start_param : 'T5AxKNJEH9G4jRP8',
	extended_media : $client->messageExtendedMediaPreview(
		w : 79,
		h : 93,
		thumb : $client->photoSizeEmpty(
			type : '08baETdycIBUgovH',
		),
		video_duration : 29,
	),
);
```
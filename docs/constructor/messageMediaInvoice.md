# messageMediaInvoice

**Description** : *Invoice*

**Layer** : 216

```tl
messageMediaInvoice#f6a548d3 flags:# shipping_address_requested:flags.1?true test:flags.3?true title:string description:string photo:flags.0?WebDocument receipt_msg_id:flags.2?int currency:string total_amount:long start_param:string extended_media:flags.4?MessageExtendedMedia = MessageMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	title : 'N6YZ3Xej14oiVEmF',
	description : 'AqeF4yQ7zvck3wDr',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 5161146177318949123,
		size : 92,
		mime_type : 'aVRwIOmN2H8gDLyE',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 6,
				h : 3,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'nwSUHkj4W9GaPZYf',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 2040409.650390625,
				w : 96,
				h : 24,
				preload_prefix_size : 72,
				video_start_ts : 523406.5380859375,
				video_codec : '2ITsUFdfHNlCORiL',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 92,
				title : 'xscfVTh5C8Dz1neN',
				performer : 'yMXmK4tL0pkDCGaj',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : '3SlUyZCOPnHzq2bd',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'ue0o5QMWtwji264V',
				stickerset : $client->inputStickerSetEmpty(...),
			),
		),
	),
	receipt_msg_id : 90,
	currency : 'KCuF1nTBxm2h5AiG',
	total_amount : 960536230735790438,
	start_param : 'gIsqYfMEvtOn4QAP',
	extended_media : $client->messageExtendedMediaPreview(
		w : 61,
		h : 82,
		thumb : $client->photoSizeEmpty(
			type : 'jiqUyk01DVSGvBae',
		),
		video_duration : 3,
	),
);
```
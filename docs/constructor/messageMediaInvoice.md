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
	title : 'BVzhjwHOXbgFD6E8',
	description : 'vVliMWoX3jfBwceU',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -8412214563445440320,
		size : 91,
		mime_type : 'lvgMEbF8cxADBnZV',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 93,
				h : 66,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'fFInbz4oxul9Rst6',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -162274.173828125,
				w : 79,
				h : 23,
				preload_prefix_size : 23,
				video_start_ts : 1736055.7822265625,
				video_codec : '3TORwxFLPS4QhM2l',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 40,
				title : 'UQZl6RVbHKWLu5Y2',
				performer : 'hbCgW0GDVHds8OzL',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'pWP0uXJIAUzrM2tB',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'S5OpxbvEn8MZlyQL',
				stickerset : $client->inputStickerSetEmpty(...),
			),
		),
	),
	receipt_msg_id : 97,
	currency : 'xqHYjMwK8bI4rvRD',
	total_amount : -2211289967737450284,
	start_param : 'tMe0ABVzsU92N8cR',
	extended_media : $client->messageExtendedMediaPreview(
		w : 26,
		h : 3,
		thumb : $client->photoSizeEmpty(
			type : 'OaWTgikEAzvDLVql',
		),
		video_duration : 39,
	),
);
```
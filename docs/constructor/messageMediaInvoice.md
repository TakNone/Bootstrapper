# messageMediaInvoice

**Description** : *Invoice*

**Layer** : 214

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
	title : 'srVfZplM2J5ChwKq',
	description : 'MNQLksOq3n0vcxWz',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -1285670798713457680,
		size : 11,
		mime_type : 'lUF1MzBdaiqD0wPj',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 43,
				h : 42,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'dQzLm6VtXqOEjJb5',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 928972.1171875,
				w : 72,
				h : 55,
				preload_prefix_size : 38,
				video_start_ts : -1081274.5478515625,
				video_codec : 'CADbBFPqpHsJWRk7',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 44,
				title : 'TG1pNbcM0Qo7V4C8',
				performer : 'sVTlKYqfuOaLiX4G',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'TLIDmsSf4h5Yeziv',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'OrtPYwXZMIV1FEyp',
				stickerset : $client->inputStickerSetEmpty(...),
			),
		),
	),
	receipt_msg_id : 43,
	currency : '3oRNeAc6jtviCX0b',
	total_amount : -2165057837160302481,
	start_param : '3TtbBNUoWARnGxu5',
	extended_media : $client->messageExtendedMediaPreview(
		w : 40,
		h : 64,
		thumb : $client->photoSizeEmpty(
			type : 'FxcqKPgAzIhsurUR',
		),
		video_duration : 6,
	),
);
```
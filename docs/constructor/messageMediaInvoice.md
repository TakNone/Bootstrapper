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
	title : '26SPGed8hCnlJtr0',
	description : '52gJiYn6bmKwUcpe',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -2416637657852885400,
		size : 54,
		mime_type : 'acpzB5TXqdNEOnxZ',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 30,
				h : 28,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'IRjs1KLOWBGwnrZ3',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 5,
					x : -176600.45703125,
					y : 1997209.6650390625,
					zoom : -1584658.458984375,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1559880.1328125,
				w : 1,
				h : 17,
				preload_prefix_size : 85,
				video_start_ts : -273657.0576171875,
				video_codec : 'WqF08kJXapOLvg3d',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 48,
				title : 'zZCt12NSkglWohLc',
				performer : 'zTiRrn7JgQf0Ymxp',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'bDoqQczAN4i0exTv',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : '0yAIcjv2srl7LnBX',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	receipt_msg_id : 45,
	currency : 'wyhSNEOUa59mQoMZ',
	total_amount : 7099466491656086081,
	start_param : 'pDEgti1P2G0WkBZm',
	extended_media : $client->messageExtendedMediaPreview(
		w : 14,
		h : 53,
		thumb : $client->photoSizeEmpty(
			type : 'c5mnI1W4AJ7xNL0P',
		),
		video_duration : 88,
	),
);
```
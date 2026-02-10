# messageMediaInvoice

**Description** : *Invoice*

**Layer** : 222

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
	title : 'oVtrqMFbzpuw8IaY',
	description : 'SVKRAEkvDOqQiUcg',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -5316036939088016826,
		size : 1,
		mime_type : '4gbUld2a6KjzLpsB',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 66,
				h : 40,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : '03hDNOpjQmbvLSiw',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 97,
					x : 363851.650390625,
					y : 804059.826171875,
					zoom : 1605822.4462890625,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -837547.8359375,
				w : 50,
				h : 84,
				preload_prefix_size : 67,
				video_start_ts : 1255858.203125,
				video_codec : '0eV85otu1daH9vPz',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 14,
				title : 's3FmVR2yScYHNUj0',
				performer : 'j2vpkBCxTLmD7IGr',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'FiUYTNH4pIRuoK82',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'M6paEdRCl1TFs0kW',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	receipt_msg_id : 47,
	currency : '4bfLjokmhdTpvJxV',
	total_amount : 1495248415616895584,
	start_param : 'Y4KjRzB7hs3MVTZp',
	extended_media : $client->messageExtendedMediaPreview(
		w : 65,
		h : 80,
		thumb : $client->photoSizeEmpty(
			type : 'b2tSJxuvPGRqfi7e',
		),
		video_duration : 39,
	),
);
```
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
	title : 'OMxzhprLt0SWvQVo',
	description : 'rV9AngZScJUOe8Pv',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 5471068559548218176,
		size : 23,
		mime_type : '6ZaiRKNqHYpVwTsr',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 52,
				h : 15,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'HyZ8sCz1aPfqSdTU',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 16,
					x : 79792.880859375,
					y : -1208533.4072265625,
					zoom : -1333838.0830078125,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1230656.3408203125,
				w : 31,
				h : 100,
				preload_prefix_size : 98,
				video_start_ts : -1419703.8466796875,
				video_codec : 'R6sotANMlhvLjOm3',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 100,
				title : 'ziDYFEf1ZTa0krvG',
				performer : 'YlXT984J6Uaydowe',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'F064oymfktQjCXV7',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'NW2BmfbGE4M7xut3',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	receipt_msg_id : 13,
	currency : 'fEBsaH8in6zbvCNP',
	total_amount : 1395689635882797942,
	start_param : 'YLZSjgU6oBb5dWGO',
	extended_media : $client->messageExtendedMediaPreview(
		w : 60,
		h : 77,
		thumb : $client->photoSizeEmpty(
			type : '29EYSzpUgDh7PJvI',
		),
		video_duration : 1,
	),
);
```
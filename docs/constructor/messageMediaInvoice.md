# messageMediaInvoice

**Description** : *Invoice*

**Layer** : 229

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
	title : 'c5RplEN1dI09Wf7F',
	description : 'Bg6e7bFHLVo1c4rd',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -686871720669318679,
		size : 27,
		mime_type : 'RQgs1GvqAMCDBuhf',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 35,
				h : 42,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'jDEMnSkBhipKqXPw',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 56,
					x : -135597.95703125,
					y : 938592.767578125,
					zoom : 333270.966796875,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 678399.8125,
				w : 39,
				h : 89,
				preload_prefix_size : 42,
				video_start_ts : -351968.287109375,
				video_codec : 'KN5FJYg3yIrZ9VdM',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 13,
				title : 'QDsT150pV9hwvUdi',
				performer : 'uwYTtZXCOkoL3F2g',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'S5RJTtwFyQPcjBn2',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'JbGce0Bsl8pqIidk',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	receipt_msg_id : 86,
	currency : 'bY9sjpfvzLNxGiK2',
	total_amount : 5712809842864405087,
	start_param : 'rwPosLaT2fDUqHl6',
	extended_media : $client->messageExtendedMediaPreview(
		w : 43,
		h : 79,
		thumb : $client->photoSizeEmpty(
			type : 'cwJ5HniALhk17jvb',
		),
		video_duration : 62,
	),
);
```
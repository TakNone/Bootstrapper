# messageMediaInvoice

**Description** : *Invoice*

**Layer** : 227

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
	title : 'KkE9t0JU4Iw12nro',
	description : 'wIL8unoDC6TWm2yi',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -9089753186398005245,
		size : 3,
		mime_type : 'QLvrD1buVTlWhzMS',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 47,
				h : 82,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'QYsf5owg7ZhCPNXR',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 35,
					x : 1943174.431640625,
					y : -1512067.533203125,
					zoom : 1764607.6123046875,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1827085.8359375,
				w : 52,
				h : 37,
				preload_prefix_size : 83,
				video_start_ts : -914721.671875,
				video_codec : 'cqu974fyCoOUsMFn',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 36,
				title : 'j41AfJvbkYcg785m',
				performer : 'grHTQ5KI2xCSdoZy',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'IYPcpsOn7mdyiwVo',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'TZ1FbLACYSGoiq2c',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	receipt_msg_id : 36,
	currency : '1aUtm8sPhxMW5k0D',
	total_amount : -3948783891558848247,
	start_param : 'gY6D2i10AMHoPbTm',
	extended_media : $client->messageExtendedMediaPreview(
		w : 25,
		h : 88,
		thumb : $client->photoSizeEmpty(
			type : '0xAGHOuMKI47skDg',
		),
		video_duration : 78,
	),
);
```
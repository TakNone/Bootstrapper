# messageMediaInvoice

**Description** : *Invoice*

**Layer** : 211

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
	title : 'Qd1bYSBpTalFDPrq',
	description : 'J4pPatbFS6qC983o',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 8698902831372339608,
		size : 12,
		mime_type : 'C5vDV8L6fljKQnTS',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 85,
				h : 60,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : '7WFNHSPv4VKBiz0U',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -722523.4375,
				w : 90,
				h : 13,
				preload_prefix_size : 84,
				video_start_ts : -909226.3447265625,
				video_codec : '3oab5pGDvLHQfisy',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 90,
				title : 'bm5O6ZDo1J2xdF8g',
				performer : 'dZGE8zxFj5L4I17t',
				waveform : 'dI??LiveProto?Ǳ?',
			),
			$client->documentAttributeFilename(
				file_name : 'yd6h4vOgfCElU9mx',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'KFvetuHjE70Ioc61',
				stickerset : $client->inputStickerSetEmpty(...),
			),
		),
	),
	receipt_msg_id : 3,
	currency : 'oYundvbLefkX7ElK',
	total_amount : 2359028069827006652,
	start_param : 'DyApNSjw0UKkhtf9',
	extended_media : $client->messageExtendedMediaPreview(
		w : 7,
		h : 90,
		thumb : $client->photoSizeEmpty(
			type : 'sj3K4U8wRCQVDmWA',
		),
		video_duration : 42,
	),
);
```
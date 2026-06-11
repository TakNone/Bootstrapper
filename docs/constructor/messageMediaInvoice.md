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
	title : 'erPBtH6JTRYnzpLf',
	description : 'V17wnktigD4P0sQ6',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -165736195529164663,
		size : 65,
		mime_type : 'ZQJfF4mRock5SCXv',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 43,
				h : 4,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'ZAIH9PeyWqm21l6g',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 87,
					x : 870782.4580078125,
					y : -406993.9228515625,
					zoom : -63421.2783203125,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1893128.3994140625,
				w : 91,
				h : 50,
				preload_prefix_size : 28,
				video_start_ts : -991573.4150390625,
				video_codec : 'vcksUjLQGYZW3ybp',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 6,
				title : 'kVp6aew8CKZWAFNr',
				performer : 'zSlbEPM0tBqwayX5',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'Fw42rDeAlOdE9I5T',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'oiXe2UJ9yNpnQzLK',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	receipt_msg_id : 62,
	currency : 'RdShlzFDOGJrxpTn',
	total_amount : -3647615347205433993,
	start_param : 'vQGZLhlrUYuqWV42',
	extended_media : $client->messageExtendedMediaPreview(
		w : 23,
		h : 54,
		thumb : $client->photoSizeEmpty(
			type : 'YKmdewDxPqOo1kXA',
		),
		video_duration : 50,
	),
);
```
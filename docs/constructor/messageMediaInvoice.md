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
	title : '6AjpVLgGofh40Ta3',
	description : 'KeuFfCyWJTRqLHkS',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 4129450373490615500,
		size : 42,
		mime_type : 'Bt5TclYMpE7P6LZ8',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 83,
				h : 22,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : '8cXvZkr2jMsDyGeO',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1249535.2822265625,
				w : 53,
				h : 37,
				preload_prefix_size : 97,
				video_start_ts : -1428361.6806640625,
				video_codec : 'GbgOTQJfz4ivlLsR',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 22,
				title : 'TN4XZ9eLbhsJ7lGR',
				performer : '8waZ5C69QuJ2n1Us',
				waveform : '?G?LiveProto\'^??',
			),
			$client->documentAttributeFilename(
				file_name : 'aJG62xKbzQFVfADc',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'jbxs0f7lOyJhSLac',
				stickerset : $client->inputStickerSetEmpty(...),
			),
		),
	),
	receipt_msg_id : 6,
	currency : '1R3tvxan0ID9rd2A',
	total_amount : 4263943603197279432,
	start_param : 'n9OwW2PtjvIkR6ao',
	extended_media : $client->messageExtendedMediaPreview(
		w : 82,
		h : 23,
		thumb : $client->photoSizeEmpty(
			type : 'QEP5HGrwuhmUkYTa',
		),
		video_duration : 58,
	),
);
```
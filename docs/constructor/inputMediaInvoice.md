# inputMediaInvoice

**Description** : *Generated invoice of a bot payment*

**Layer** : 216

```tl
inputMediaInvoice#405fef0d flags:# title:string description:string photo:flags.0?InputWebDocument invoice:Invoice payload:bytes provider:flags.3?string provider_data:DataJSON start_param:flags.1?string extended_media:flags.2?InputMedia = InputMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>title</mark> | [`string`](type/string) | Product name, 1-32 characters |
| <mark>description</mark> | [`string`](type/string) | Product description, 1-255 characters |
| **photo** | [`flags.0?InputWebDocument`](type/InputWebDocument) | URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service. People like it better when they see what they are paying for |
| <mark>invoice</mark> | [`Invoice`](type/Invoice) | The actual invoice |
| <mark>payload</mark> | [`bytes`](type/bytes) | Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use for your internal processes |
| **provider** | [`flags.3?string`](type/string) | Payments provider token, obtained via Botfather |
| <mark>provider_data</mark> | [`DataJSON`](type/DataJSON) | JSON-encoded data about the invoice, which will be shared with the payment provider. A detailed description of required fields should be provided by the payment provider |
| **start_param** | [`flags.1?string`](type/string) | Unique bot deep links start parameter. If present, forwarded copies of the sent message will have a URL button with a deep link to the bot (instead of a Pay button), with the value used as the start parameter. If absent, forwarded copies of the sent message will have a Pay button, allowing multiple users to pay directly from the forwarded message, using the same invoice |
| **extended_media** | [`flags.2?InputMedia`](type/InputMedia) | Deprecated |

---

## Type

[InputMedia](type/InputMedia)

---

## Example

```php
$inputMedia = $client->inputMediaInvoice(
	title : 'ja473fWrn6HvJCFI',
	description : 'GDZhoOJa0MkEu5IS',
	photo : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 63,
		mime_type : 'Y5l3hunLyfSW4sk8',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 78,
				h : 17,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'YibTJkFN9WC24nMV',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1900429.1416015625,
				w : 23,
				h : 36,
				preload_prefix_size : 11,
				video_start_ts : 496901.0087890625,
				video_codec : '73XnOePuyaFK2fJV',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 45,
				title : 'wT9RtBnbOAND1PFQ',
				performer : 's4U2HRfkSem8zFIQ',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'vnfFEkgUSyxlbCo6',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'Y7pditlnxb84BLFV',
				stickerset : $client->inputStickerSetEmpty(...),
			),
		),
	),
	invoice : $client->invoice(
		test : true,
		name_requested : true,
		phone_requested : true,
		email_requested : true,
		shipping_address_requested : true,
		flexible : true,
		phone_to_provider : true,
		email_to_provider : true,
		recurring : true,
		currency : 'XLfxDFJE9zho6ZuP',
		prices : array(
			$client->labeledPrice(
				label : 'yCn8h7235jwDPYvd',
				amount : 3681094062812162854,
			),
		),
		max_tip_amount : 5160615495158081356,
		suggested_tip_amounts : array(-3869411977322809798),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 46,
	),
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	provider : 'hi9ZMvsrCt2LBR14',
	provider_data : $client->dataJSON(
		data : 'Vwn708f4Pc1ET3MQ',
	),
	start_param : 'ZR46i81kP2AFtN5D',
	extended_media : $client->inputMediaEmpty(),
);
```
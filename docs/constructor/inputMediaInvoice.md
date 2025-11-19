# inputMediaInvoice

**Description** : *Generated invoice of a bot payment*

**Layer** : 218

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
	title : 'PFT3b5zhOG9Zpkes',
	description : 'U1CjmDLgBViMu3Et',
	photo : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 75,
		mime_type : '0GagwiqucTbYE5MK',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 39,
				h : 7,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'ehWwTYVxaCFvKIMD',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 79,
					x : 187596.376953125,
					y : -505127.595703125,
					zoom : 1498714.8203125,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1174102.365234375,
				w : 26,
				h : 10,
				preload_prefix_size : 6,
				video_start_ts : -875228.5078125,
				video_codec : 'U9VS3WHyeZfltYmF',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 89,
				title : 'VmW9JDB2xNKhPd6Q',
				performer : '9TDRzdcaY5ojI4sb',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'Kgc9E0AzTpt1Rmqy',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'bucCJgrpIOFYG7zh',
				stickerset : $client->inputStickerSetEmpty(),
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
		currency : 'uqfPpk4d7Xrb8N1m',
		prices : array(
			$client->labeledPrice(
				label : 'uvXyEN9VI078Fw6O',
				amount : 1130178432557219204,
			),
		),
		max_tip_amount : 7554433257244597538,
		suggested_tip_amounts : array(-6068054656295250115),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 35,
	),
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	provider : 'kBwrWUanICjGzqbl',
	provider_data : $client->dataJSON(
		data : 'tRM6TS2OCQ8GchH7',
	),
	start_param : 'lcThW9DsMLSpCEKB',
	extended_media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
);
```
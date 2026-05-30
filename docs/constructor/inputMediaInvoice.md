# inputMediaInvoice

**Description** : *Generated invoice of a bot payment*

**Layer** : 225

```tl
inputMediaInvoice#405fef0d flags:# title:string description:string photo:flags.0?InputWebDocument invoice:Invoice payload:bytes provider:flags.3?string provider_data:DataJSON start_param:flags.1?string extended_media:flags.2?InputMedia = InputMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	title : 'A4RlOehjr6buJdWm',
	description : 'KSQqRpgYfx1tI38k',
	photo : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 6,
		mime_type : 'VJdkWEfsux4lZnNG',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 5,
				h : 3,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'jFXl1JOmURkHGCpc',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 27,
					x : -2046354.1953125,
					y : 292811.6201171875,
					zoom : 980696.5615234375,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -366811.8837890625,
				w : 4,
				h : 41,
				preload_prefix_size : 61,
				video_start_ts : -683885.5791015625,
				video_codec : 'p4F5ihfvGR3Ho7OD',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 41,
				title : 'e8WsUQhdkb1CaGri',
				performer : 'OiB3wGuypxLTl5hc',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'wz4LG3brotq7fRKa',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'w2oBIjzSkZ5mpeOq',
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
		currency : 'UIlwhFSvY2Kt19BP',
		prices : array(
			$client->labeledPrice(
				label : 'DAqtu05QHsLfEzBI',
				amount : -4007549991831064177,
			),
		),
		max_tip_amount : 7547269530612791353,
		suggested_tip_amounts : array(-4777751771905348837),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 61,
	),
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	provider : 'GUgcH5sAlCpFWZwY',
	provider_data : $client->dataJSON(
		data : 'Gtnj8TyvAcSl1WDg',
	),
	start_param : 'L6pDHsJCbkiW0QoZ',
	extended_media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
);
```
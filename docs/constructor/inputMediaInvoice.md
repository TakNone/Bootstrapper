# inputMediaInvoice

**Description** : *Generated invoice of a bot payment*

**Layer** : 211

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
	title : 'JPq9LedY8mA5STr3',
	description : 'QrAtCdYlSc6ifDPN',
	photo : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 49,
		mime_type : 'Du4lIYd8AHQacZrT',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 60,
				h : 8,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'yclfIbKLx1er4igB',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 468574.9814453125,
				w : 19,
				h : 64,
				preload_prefix_size : 85,
				video_start_ts : -644270.3974609375,
				video_codec : 'zlN2q7oPEtaDcLXB',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 39,
				title : '048NfKCR5BzSskW6',
				performer : 'x8Fo6O7d14DVXGzL',
				waveform : 't?vo&LiveProtom*?+i',
			),
			$client->documentAttributeFilename(
				file_name : 'wuksgExPV3qvIX4Q',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'SHEATpzvlYmaoyRi',
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
		currency : 'zmeDSpFG6VxUCZa7',
		prices : array(
			$client->labeledPrice(
				label : 'J05E7Xy4wnuUA3r6',
				amount : -102541365061203011,
			),
		),
		max_tip_amount : 91978323667130851,
		suggested_tip_amounts : array(-2786993547196865198),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 33,
	),
	payload : '??a$LiveProto?U??%',
	provider : 'GgS4YLhu9e0dys7A',
	provider_data : $client->dataJSON(
		data : 'ylUwgbGoBZ6YS7nh',
	),
	start_param : 'eoFUxWdafnHEkNKT',
	extended_media : $client->inputMediaEmpty(),
);
```
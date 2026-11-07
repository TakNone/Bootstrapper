# inputMediaInvoice

**Description** : *Generated invoice of a bot payment*

**Layer** : 233

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
	title : 'hPmvYSy1RFOl7NZd',
	description : 'NRuxpvGLPghkljbE',
	photo : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 11,
		mime_type : 'dpV19PmXTyCk6ijW',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 11,
				h : 68,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'A86E247SVGcwXRg9',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 94,
					x : 983710.1728515625,
					y : -1921091.607421875,
					zoom : 342795.7294921875,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 102707.8203125,
				w : 83,
				h : 87,
				preload_prefix_size : 100,
				video_start_ts : 1965999.9921875,
				video_codec : 'EkUq15p9CZrm7olL',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 66,
				title : 'UEykTLC6NAfbiJnp',
				performer : '9gwLH0CzrxhNTF6A',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'RAEHklGNJDZKx8Xv',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'wX2n7zN1KdRFjlSr',
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
		currency : '6ysvWaZ7dlI8foGp',
		prices : array(
			$client->labeledPrice(
				label : 'bA1DsoRmNQ2ig7H6',
				amount : 5411148117766519302,
			),
		),
		max_tip_amount : 1492808388206570804,
		suggested_tip_amounts : array(7970887006144779367),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 25,
	),
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	provider : 'iyx5lNPoJgVf7c1O',
	provider_data : $client->dataJSON(
		data : 'yuLFPOapUMWT9zSN',
	),
	start_param : 'DEN3wRnxizhPfrYQ',
	extended_media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
);
```
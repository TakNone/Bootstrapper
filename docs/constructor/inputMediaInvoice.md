# inputMediaInvoice

**Description** : *Generated invoice of a bot payment*

**Layer** : 227

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
	title : 'DU5ac6bBtpjxT1XO',
	description : 'HXM38zAek0fGOFN5',
	photo : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 45,
		mime_type : '7lJMzBZIgUQcW2ms',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 99,
				h : 51,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : '2VRqZN1rCYsDduK7',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 15,
					x : -360360.1943359375,
					y : -380222.4541015625,
					zoom : 878308.1171875,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 71756.4111328125,
				w : 63,
				h : 36,
				preload_prefix_size : 54,
				video_start_ts : -1675927.896484375,
				video_codec : 'nipkeFI702bwUcmE',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 22,
				title : 'aP0xUp4JROfNZul3',
				performer : 'GnhJtxWsXwjCT2RY',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'JaewXyuzkF0LcCrn',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'uWQ3Cn5xPdg8LZBz',
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
		currency : 'k41jMVICGYaKWuz7',
		prices : array(
			$client->labeledPrice(
				label : 'W045zGSgYCfNeaRi',
				amount : 5797723135432414392,
			),
		),
		max_tip_amount : 44098553761666020,
		suggested_tip_amounts : array(6555475163010473636),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 5,
	),
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	provider : 'cHulwkBq6t89oKF7',
	provider_data : $client->dataJSON(
		data : '9VkdGUq1vtnKlm53',
	),
	start_param : 'AQ6PE90CSWdX5BZ3',
	extended_media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
);
```
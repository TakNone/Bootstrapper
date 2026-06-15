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
	title : 'fSCmpTkXWuhrdcO2',
	description : 'SERq0xkPX9eBygLK',
	photo : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 58,
		mime_type : 'K3FpSmWYt64fDzoc',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 9,
				h : 82,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'DUl5GghkF03zJYbX',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 73,
					x : -932403.5126953125,
					y : -1628148.185546875,
					zoom : -430038.1865234375,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1480723.4541015625,
				w : 36,
				h : 37,
				preload_prefix_size : 59,
				video_start_ts : 124695.11328125,
				video_codec : 'AaQFeCHq5Y6mZpgD',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 45,
				title : 'unPEiI4Ol2xTXdrY',
				performer : 'M4J5IxjPi8FAlpue',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'x1a8Jk9jVgBNcibr',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : '3j9Ck6JPnBlEb1Ny',
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
		currency : 'pBbLfwScK437N8ov',
		prices : array(
			$client->labeledPrice(
				label : '5cj4NLVJtlS7Hghy',
				amount : -5982666780783581423,
			),
		),
		max_tip_amount : -1548866618574340372,
		suggested_tip_amounts : array(3929081735105923099),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 31,
	),
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	provider : 'R92myCOPDh7fAbGZ',
	provider_data : $client->dataJSON(
		data : 'ohSfOIdcpWyMQUZm',
	),
	start_param : 'In89eDdkYczFiGat',
	extended_media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
);
```
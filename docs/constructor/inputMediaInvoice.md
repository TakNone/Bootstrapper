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
	title : 'ZoTvj3J1x65SfeER',
	description : 'XWtBb324EmYZh7fV',
	photo : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 92,
		mime_type : 'N2sXG48YIqZfnvji',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 42,
				h : 31,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'wyRUteJcXxzqv5f8',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 27,
					x : -924470.408203125,
					y : -284723.890625,
					zoom : -248163.5986328125,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -922927.033203125,
				w : 41,
				h : 57,
				preload_prefix_size : 56,
				video_start_ts : 560789.431640625,
				video_codec : 'GrUuYJOd3tyvqVSN',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 35,
				title : 'PG2j3gLTHYMQxilm',
				performer : 'qaziUjvAwYJNoIO8',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'Qiq9rz18LGIK2yfg',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : '4uLhOg9QDbHieBPy',
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
		currency : 'NuwZTGjlo20IEYOP',
		prices : array(
			$client->labeledPrice(
				label : 'XIVCWU3nPMR2r7as',
				amount : 2998208970032035080,
			),
		),
		max_tip_amount : -7750285514785673575,
		suggested_tip_amounts : array(-4746984247977022349),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 24,
	),
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	provider : 'zJqY4IQGcrFLp0mZ',
	provider_data : $client->dataJSON(
		data : 'YlQrTcfHaz1Ft2di',
	),
	start_param : 'ZF2PHrCvXx5i1NjV',
	extended_media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
);
```
# inputMediaInvoice

**Description** : *Generated invoice of a bot payment*

**Layer** : 229

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
	title : 'ckSKr7t40vJNojnH',
	description : '5j4nNyFGXWSvUDfz',
	photo : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 17,
		mime_type : 'yjhYu7gBazUsdARC',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 54,
				h : 65,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'xSFTM1OYGfqZ5LUE',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 43,
					x : 1291248.353515625,
					y : 91733.2470703125,
					zoom : 1107212.6865234375,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -2084413.662109375,
				w : 55,
				h : 62,
				preload_prefix_size : 55,
				video_start_ts : 1990110.8857421875,
				video_codec : 'PxfXshYErROQgV2L',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 55,
				title : 'pmWO6Xx2zweMRFgL',
				performer : 'UVn4euIlLG8Q6KMb',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'hXEwrCoHL5axkln3',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : '4yKvmq6BQWEseApL',
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
		currency : 'frSMlk6I1u0WemLo',
		prices : array(
			$client->labeledPrice(
				label : '0jdc6RAJbtpCVw1O',
				amount : -4704113599831515893,
			),
		),
		max_tip_amount : 3027598916933171031,
		suggested_tip_amounts : array(-7989305952965328709),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 60,
	),
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	provider : 'URY52XTAx9phLviz',
	provider_data : $client->dataJSON(
		data : '45YNTi7hCrDOWJ0w',
	),
	start_param : 'tNfQH4FMnordg2C1',
	extended_media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
);
```
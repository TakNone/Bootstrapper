# inputMediaInvoice

**Description** : *Generated invoice of a bot payment*

**Layer** : 222

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
	title : 'BwI9VrURKdFe8i3S',
	description : 'UlfNDSmJQcrKti0b',
	photo : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 45,
		mime_type : 'A0JWTaynMjVZzUkt',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 10,
				h : 87,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'lCDXEiyNgLMdaYns',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 39,
					x : -1393613.783203125,
					y : 106170.8623046875,
					zoom : 1421189.3046875,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 138602.4140625,
				w : 25,
				h : 22,
				preload_prefix_size : 39,
				video_start_ts : 1305216.5166015625,
				video_codec : 'xtuNkGCKcB27qTM8',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 64,
				title : 'ndF5aw8beNmErZMR',
				performer : 'Sae9XcJzLyjbDG5d',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'ND1zYnEf7a9Xotdw',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'WBht6MQO5rxVAUjd',
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
		currency : 'HXIB8GMhktzoKade',
		prices : array(
			$client->labeledPrice(
				label : 'tTrsiC3aexKbld4Z',
				amount : -8477640373315773451,
			),
		),
		max_tip_amount : -1573734370621758332,
		suggested_tip_amounts : array(6655960015932353999),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 68,
	),
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	provider : 'cGlrb2Xys8W5MRAa',
	provider_data : $client->dataJSON(
		data : 'HputPSibmEdqjXeN',
	),
	start_param : 'gaB7opk2rmfQ5tju',
	extended_media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
);
```
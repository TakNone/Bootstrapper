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
	title : 'SqKluFn6x29vkQrM',
	description : 'pOrLH14wjcvaGikm',
	photo : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 92,
		mime_type : '1Iuo0Ch7LRqcvmWk',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 48,
				h : 9,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'AMQ0uEyqB1XODTFn',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1948144.78125,
				w : 21,
				h : 86,
				preload_prefix_size : 49,
				video_start_ts : 2052218.705078125,
				video_codec : 'xVJS6WdicIC7DZmq',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 86,
				title : 'Fcq1fb3Y0aj8eG9s',
				performer : 'P8OhUJZQtrGHlCiM',
				waveform : '?j?$LiveProto2??
?',
			),
			$client->documentAttributeFilename(
				file_name : 'bpuHGvBoW6JA4wQg',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'ZFkoCyTu7rcIjlBm',
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
		currency : '7I3BwXT5xZLMsgiz',
		prices : array(
			$client->labeledPrice(
				label : 'Wj4QJAhnFNeM7KZa',
				amount : 4864350759033184070,
			),
		),
		max_tip_amount : -2727640593877523338,
		suggested_tip_amounts : array(-3645618688203247292),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 77,
	),
	payload : '??a?hLiveProto?0?a#',
	provider : '8e5Moyu4DG0FLgWS',
	provider_data : $client->dataJSON(
		data : 'NX30vkZhHwECpWlx',
	),
	start_param : 'uUoKbIE4pMQtv31h',
	extended_media : $client->inputMediaEmpty(),
);
```
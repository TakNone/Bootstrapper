# inputMediaInvoice

**Description** : *Generated invoice of a bot payment*

**Layer** : 214

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
	title : 'hGS2PBm3KDZYMQCN',
	description : 'A5LWJ1MrQn3EPsZN',
	photo : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 89,
		mime_type : '4s95hlipub3tQaTI',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 33,
				h : 27,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : '70cXt3e5pKzmROkJ',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 587254.14453125,
				w : 63,
				h : 73,
				preload_prefix_size : 97,
				video_start_ts : 1580740.453125,
				video_codec : 'Z25CEABvGVYozHMR',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 66,
				title : 'v4ceVo9lFzBKD7QT',
				performer : 'SlQKo9m5FAtfOZJi',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'k37CVUvd5Zmyw4Ja',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : '4RjiVuDtYJFqlEQM',
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
		currency : 'h5x4FlWqEfd2aQ7U',
		prices : array(
			$client->labeledPrice(
				label : 'Yb0utB8ZCMExoy27',
				amount : -8753963997702726119,
			),
		),
		max_tip_amount : 5339610626172342905,
		suggested_tip_amounts : array(-2173274728264044727),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 10,
	),
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	provider : 'cCeWKMIUsXQ69qrw',
	provider_data : $client->dataJSON(
		data : 'PxIn4KTA9hz7jtQB',
	),
	start_param : 'DxUvusQ13awXAjmr',
	extended_media : $client->inputMediaEmpty(),
);
```
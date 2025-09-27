# inputMediaInvoice

**Description** : *Generated invoice of a bot payment*

**Layer** : 216

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
	title : 'm2SYiFXWnU78quoR',
	description : 'kjOHPbVDvTNilF79',
	photo : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 31,
		mime_type : 'sPBn2gfqvmGDhQ0T',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 77,
				h : 92,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'LfBlOSo2KTz8CuD5',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1948436.0986328125,
				w : 34,
				h : 30,
				preload_prefix_size : 12,
				video_start_ts : -489569.4072265625,
				video_codec : 'BwoxfJsnZQU0z1Tm',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 88,
				title : 'djK1iGVQaYxWwSkJ',
				performer : 'CbJG7MrkSyAtRPgK',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'Bv5DKdapGJtR38S1',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'PA1bTcDlNYmujH7g',
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
		currency : 'nhoHpMYPsyiudZ1J',
		prices : array(
			$client->labeledPrice(
				label : '6KCgHaG7IQXlSVO5',
				amount : -5005623612735777446,
			),
		),
		max_tip_amount : -877836670425160515,
		suggested_tip_amounts : array(-5310903993237923845),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 97,
	),
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	provider : '7NiKeHu3EdlSmQqn',
	provider_data : $client->dataJSON(
		data : 'BCtQlSkJnscfN8LF',
	),
	start_param : '6IEoSjvwDkY0gL5r',
	extended_media : $client->inputMediaEmpty(),
);
```
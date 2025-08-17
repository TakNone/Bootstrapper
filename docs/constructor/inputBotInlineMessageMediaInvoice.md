# inputBotInlineMessageMediaInvoice

**Description** : *An invoice*

**Layer** : 211

```tl
inputBotInlineMessageMediaInvoice#d7e78225 flags:# title:string description:string photo:flags.0?InputWebDocument invoice:Invoice payload:bytes provider:string provider_data:DataJSON reply_markup:flags.2?ReplyMarkup = InputBotInlineMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>title</mark> | [`string`](type/string) | Product name, 1-32 characters |
| <mark>description</mark> | [`string`](type/string) | Product description, 1-255 characters |
| **photo** | [`flags.0?InputWebDocument`](type/InputWebDocument) | Invoice photo |
| <mark>invoice</mark> | [`Invoice`](type/Invoice) | The invoice |
| <mark>payload</mark> | [`bytes`](type/bytes) | Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use for your internal processes |
| <mark>provider</mark> | [`string`](type/string) | Payments provider token, obtained via Botfather |
| <mark>provider_data</mark> | [`DataJSON`](type/DataJSON) | A JSON-serialized object for data about the invoice, which will be shared with the payment provider. A detailed description of the required fields should be provided by the payment provider |
| **reply_markup** | [`flags.2?ReplyMarkup`](type/ReplyMarkup) | Inline keyboard |

---

## Type

[InputBotInlineMessage](type/InputBotInlineMessage)

---

## Example

```php
$inputBotInlineMessage = $client->inputBotInlineMessageMediaInvoice(
	title : 'MuqFj6yrHC3Tc1Al',
	description : 'kN4hwzE5D1p0moPK',
	photo : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 31,
		mime_type : 'JISVjyNwrMTdX38b',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 3,
				h : 56,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : '6O9v8ExBLGKQPZ7H',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1857488.7421875,
				w : 51,
				h : 49,
				preload_prefix_size : 6,
				video_start_ts : 1490015.9619140625,
				video_codec : 'DfiCOSwYPR2F6v9n',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 41,
				title : 'nCTMLcKFVxoAlOBu',
				performer : 'AajeC0rkWwy2IhcQ',
				waveform : '??i?9LiveProto?S?',
			),
			$client->documentAttributeFilename(
				file_name : '14kjHLZdKVowmGiY',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'WQUvjE0PYGLxXVkC',
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
		currency : 'e9xyswI3YnETR4td',
		prices : array(
			$client->labeledPrice(
				label : 'K1EDXUwJiszWfRN7',
				amount : -7466039787281238499,
			),
		),
		max_tip_amount : 4619866706402956310,
		suggested_tip_amounts : array(6542274724025919278),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 86,
	),
	payload : '?ELiveProto' . "\0" . '?J?',
	provider : 'uaN0Og6VRUPcHGLA',
	provider_data : $client->dataJSON(
		data : 'S6KRrIqZku4z9GiA',
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```
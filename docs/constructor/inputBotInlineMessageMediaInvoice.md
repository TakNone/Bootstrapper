# inputBotInlineMessageMediaInvoice

**Description** : *An invoice*

**Layer** : 216

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
	title : 'ohHTwDMePLO3JpzB',
	description : 'IuAt6Z9MsBYSURwj',
	photo : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 76,
		mime_type : 'iwz8oaZTr9yMLSRK',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 57,
				h : 37,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'xPiM47TlWOIBG8hf',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -307126.7158203125,
				w : 42,
				h : 55,
				preload_prefix_size : 94,
				video_start_ts : 1578744.6298828125,
				video_codec : 'SkQLfHK2NZ8GlB0s',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 57,
				title : 'C6pqMdsY0ou5GFc8',
				performer : 'jD9RyWFIog8iQ7Sp',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'jJZsmoyYcLPBMR8C',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'meUdCtJ3XGZPFlHE',
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
		currency : 'dwE3Q0TqhlpVO9tG',
		prices : array(
			$client->labeledPrice(
				label : 'huPDQCRBv1Kc07W5',
				amount : -3953639506197695401,
			),
		),
		max_tip_amount : -7713793855127555015,
		suggested_tip_amounts : array(2218095808016891621),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 99,
	),
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	provider : 'kOCUERtxqHZJpQMu',
	provider_data : $client->dataJSON(
		data : 'yKJNT39tCiv7nRWZ',
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```
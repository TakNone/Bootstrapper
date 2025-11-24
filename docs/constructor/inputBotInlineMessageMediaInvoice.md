# inputBotInlineMessageMediaInvoice

**Description** : *An invoice*

**Layer** : 218

```tl
inputBotInlineMessageMediaInvoice#d7e78225 flags:# title:string description:string photo:flags.0?InputWebDocument invoice:Invoice payload:bytes provider:string provider_data:DataJSON reply_markup:flags.2?ReplyMarkup = InputBotInlineMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	title : '3jQGsfoVFEi8cMr6',
	description : 'gUD0oHAmKPe1L3cp',
	photo : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 41,
		mime_type : 'bmO3g0IVyBpRHfkL',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 61,
				h : 32,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'mK8xf2PbihY4BCTI',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 23,
					x : 2044999.1806640625,
					y : 1217334.1669921875,
					zoom : -1661972.7353515625,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 389729.4755859375,
				w : 59,
				h : 64,
				preload_prefix_size : 78,
				video_start_ts : 1118911.123046875,
				video_codec : 'd95acyQ6PwNgUokM',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 13,
				title : '3dVfQ9wNWLgvDGmF',
				performer : 'c4jG5ESOayrwUAtH',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'Ml6zN3JwaysKg4cW',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'bDIACQpXsjnqdGeu',
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
		currency : '3I8Bc5YpKbRWtjrM',
		prices : array(
			$client->labeledPrice(
				label : 'Vk6t7shXY9LQUp8e',
				amount : 2806998783388022745,
			),
		),
		max_tip_amount : 5900881092005233569,
		suggested_tip_amounts : array(732236756640743996),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 61,
	),
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	provider : 'SHa1DToF0wU5bEJ7',
	provider_data : $client->dataJSON(
		data : 'nVp8HTbQAoeOhZmx',
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```
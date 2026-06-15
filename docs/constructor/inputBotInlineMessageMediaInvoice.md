# inputBotInlineMessageMediaInvoice

**Description** : *An invoice*

**Layer** : 227

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
	title : 'k9Kju58zsFyUBTdm',
	description : 'lIQpKetkCcozFU3P',
	photo : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 89,
		mime_type : 'RXYxQSIuGPoUiDc0',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 8,
				h : 81,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 't4VdGHXpsW3BUOb2',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 21,
					x : 1893483.609375,
					y : 2786.314453125,
					zoom : 989832.46484375,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1372066.7978515625,
				w : 58,
				h : 82,
				preload_prefix_size : 22,
				video_start_ts : -721325.5791015625,
				video_codec : 'v5B3TJ28zKD60aHC',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 28,
				title : 'V3KXsk7I1v0ojMZU',
				performer : 'uweroNMiPj3y1XSJ',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : '4PcbwYMZJU9aISs7',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'eoGp7Dt0wnlzWfUd',
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
		currency : 'AmLWPcrxt1s4B508',
		prices : array(
			$client->labeledPrice(
				label : 'jgI9vis2ULKJ3BDS',
				amount : 8520708548942012135,
			),
		),
		max_tip_amount : 3706830584976400600,
		suggested_tip_amounts : array(-6793118600273746791),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 68,
	),
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	provider : 'j2G6EXMWTnmxorUp',
	provider_data : $client->dataJSON(
		data : '3v9JPBIDtHdzNpqw',
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```
# inputBotInlineMessageMediaInvoice

**Description** : *An invoice*

**Layer** : 222

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
	title : '79cNRIFWBg2k1J60',
	description : '5XspykQgK30GljCI',
	photo : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 10,
		mime_type : 'R4LOK1kYjGqgNDeW',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 77,
				h : 36,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'RqBJFkP31iTVrZES',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 67,
					x : 1944773.9326171875,
					y : -1442523.5615234375,
					zoom : -1150335.8798828125,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -10822.837890625,
				w : 99,
				h : 100,
				preload_prefix_size : 44,
				video_start_ts : -1670629.033203125,
				video_codec : 'gawo7WNr6lDpxTEi',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 1,
				title : 'H6p1m5ZDJdEcXW8z',
				performer : 'D98kSmCPqb5j136O',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'WMRsLlF2mp0XVYJH',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'afpnvgSbMH8RQV7F',
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
		currency : 'YIgiNHEQ8Pk7eJwB',
		prices : array(
			$client->labeledPrice(
				label : 'j9UQsbRZ4OVp1hw3',
				amount : 891015169546596732,
			),
		),
		max_tip_amount : -6180615958632126304,
		suggested_tip_amounts : array(5141144237515406504),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 60,
	),
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	provider : 'Op7voJCUKxcSYsFy',
	provider_data : $client->dataJSON(
		data : '2b4DcJhIUmwijsRo',
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```
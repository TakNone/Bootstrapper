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
	title : 'qK0pfY19UnCWPSLi',
	description : 'hCLwWDRuomN7Ges8',
	photo : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 68,
		mime_type : 'uWQFjrTLOvp4ZlRb',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 14,
				h : 5,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'OYJVxvFmZNcL9yI1',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 45,
					x : -1560438.083984375,
					y : 1535312.2607421875,
					zoom : 506570.7724609375,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 803198.451171875,
				w : 50,
				h : 41,
				preload_prefix_size : 43,
				video_start_ts : -1994323.5576171875,
				video_codec : 'qmQT93vp2IkRdYJf',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 89,
				title : 'GIijDwL38WdrKepN',
				performer : 'CJcsZUaf2TrKFn1w',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : '7focjwNTRChyQJKP',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'ovr7HSUjaAnOhFD1',
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
		currency : 'GkLfQPXv61h0B7wt',
		prices : array(
			$client->labeledPrice(
				label : 'BQiSMwXudcHpngft',
				amount : -3349243243804852350,
			),
		),
		max_tip_amount : -5811507541474254698,
		suggested_tip_amounts : array(567621218957126129),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 0,
	),
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	provider : 'O3YDQwM8cXlCPzAn',
	provider_data : $client->dataJSON(
		data : 'OTa42KbiG6xEnrUY',
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```
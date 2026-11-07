# inputBotInlineMessageMediaInvoice

**Description** : *An invoice*

**Layer** : 233

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
	title : '7oOpFjk4z9AJBLcN',
	description : '2dDX9OjTF5EAsLpS',
	photo : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 28,
		mime_type : 'p7L2o6RMBEDYq0rJ',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 97,
				h : 86,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : '9qLzt15vVR2GPQX3',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 69,
					x : -487071.8720703125,
					y : 1270603.640625,
					zoom : -546658.3271484375,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1117250.0458984375,
				w : 98,
				h : 17,
				preload_prefix_size : 88,
				video_start_ts : -694137.900390625,
				video_codec : 'GqIju1BZHpFmw05g',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 92,
				title : 'OLc3YDrdkQNKawEB',
				performer : 'qAv8Cc4yz3mYuWZ7',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'ReosSEAFgCmNyGB3',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'xSJpghLWRtwyZrsn',
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
		currency : 'BTVE1YkvPJqHofnG',
		prices : array(
			$client->labeledPrice(
				label : 'TztE7YJpwloAViOQ',
				amount : 2768515951018737888,
			),
		),
		max_tip_amount : -2431695774969479147,
		suggested_tip_amounts : array(-558088964717447039),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 60,
	),
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	provider : '180wxqGip3lsLZJ4',
	provider_data : $client->dataJSON(
		data : 'wPL7tdimkof1RNzH',
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```
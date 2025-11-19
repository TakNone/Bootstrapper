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
	title : 'sE1xvkS7GCo6azqR',
	description : 'ZGsfxHa7qcCMz1vN',
	photo : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 26,
		mime_type : 'VPgDvZOQFeX5EGrq',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 80,
				h : 83,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'Ey0M56b19qINBCuw',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 4,
					x : 1026158.705078125,
					y : 422828.4638671875,
					zoom : -1297917.3544921875,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -898790.3720703125,
				w : 19,
				h : 5,
				preload_prefix_size : 86,
				video_start_ts : -1395803.68359375,
				video_codec : 'tx61sNKg2LJmFMHw',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 22,
				title : 'xwbivcu5qHBWXJVD',
				performer : 'OSc1EHrZoBzCkD0Q',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'BHIUGg8zVbd6Ontf',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'Rr3SOWI4kMhugpEo',
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
		currency : '3QlUdeWVtHSDAb4Z',
		prices : array(
			$client->labeledPrice(
				label : '9DZlhmy7fes1PxRt',
				amount : -4320172568740087919,
			),
		),
		max_tip_amount : 7097131082558243429,
		suggested_tip_amounts : array(7360333117652886147),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 15,
	),
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	provider : 'AzGhvgO4RJ2eZFLP',
	provider_data : $client->dataJSON(
		data : 'xvG1JKsAa5Pw94Br',
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```
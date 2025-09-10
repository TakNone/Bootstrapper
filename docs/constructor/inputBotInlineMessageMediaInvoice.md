# inputBotInlineMessageMediaInvoice

**Description** : *An invoice*

**Layer** : 214

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
	title : 'PS4bzLhcF3ERfynQ',
	description : 'LWzOigAMy5Q9hbVs',
	photo : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 29,
		mime_type : '5nOg01miTzeCQcB6',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 76,
				h : 43,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'IKQSlca4dWoUZbiH',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1807776.0263671875,
				w : 17,
				h : 18,
				preload_prefix_size : 86,
				video_start_ts : -1852686.3427734375,
				video_codec : '5ZJAi0breSy8Q4vH',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 76,
				title : 'ZHm897LF5VO3dEGz',
				performer : 'wE4K1IADMlkfur0z',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'yaodVig0j7WqJY8k',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'pxQHSnj4kgvbT09K',
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
		currency : '59AGlvMk8IJXZ1Ob',
		prices : array(
			$client->labeledPrice(
				label : 'MtpJojNyEK27u9vT',
				amount : -6531317478534188105,
			),
		),
		max_tip_amount : -5248499922614858746,
		suggested_tip_amounts : array(-7749601726992659763),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 43,
	),
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	provider : 'VGJrN4B2RSjv8iCO',
	provider_data : $client->dataJSON(
		data : 'Le4unCgYVxHTXpjy',
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```
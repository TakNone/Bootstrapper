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
	title : 'DVROasXHbcFE3x5t',
	description : 'jQvhuFISM6dyrkB9',
	photo : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 25,
		mime_type : 'hVfwcljx3BpgMez4',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 53,
				h : 69,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'v2fIu6NXtrgUQwHS',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1916517.2958984375,
				w : 12,
				h : 24,
				preload_prefix_size : 88,
				video_start_ts : -43587.138671875,
				video_codec : 'wC5EytFgNp3Im6fv',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 25,
				title : 'TkbqE2BoalDNXSg9',
				performer : 'TUuBFZbdvCJOnAyf',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'gtjG6CWoqBRKAUZp',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'TlIBX9WczHpD4as3',
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
		currency : 'MN9OtSvr5HfXzxou',
		prices : array(
			$client->labeledPrice(
				label : '9gfG54vDyW3omYZe',
				amount : 2756500793109095546,
			),
		),
		max_tip_amount : -7231046016232336978,
		suggested_tip_amounts : array(5580778439156426420),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 47,
	),
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	provider : 'vO4UWmkjKXT8Ahng',
	provider_data : $client->dataJSON(
		data : 'qaHePN15GYV9S7ob',
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```
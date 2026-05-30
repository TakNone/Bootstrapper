# inputBotInlineMessageMediaInvoice

**Description** : *An invoice*

**Layer** : 225

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
	title : 'hdt7a03JlzQipmVw',
	description : 'VIu6L8BQOWH4mfKr',
	photo : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 36,
		mime_type : 's1SYQO2TX4derIw5',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 74,
				h : 67,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'kz8ZbNx2tiPKh3fq',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 74,
					x : 1717496.828125,
					y : 83596.2431640625,
					zoom : -726187.5302734375,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1034068.3408203125,
				w : 44,
				h : 98,
				preload_prefix_size : 81,
				video_start_ts : 1976017.2958984375,
				video_codec : 'pdaPfbNE8JWyutwY',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 75,
				title : 'Z7qQwrhXTUPlmB4b',
				performer : 'RQrx6GUHuyvg0Nje',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'nyN2JLsCARvKlDmo',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'yEopN1YD8QOtwcHn',
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
		currency : 'ZrchVoW1eQGE5wFb',
		prices : array(
			$client->labeledPrice(
				label : 'BngElYXFOMy51Paq',
				amount : 5414428319668343972,
			),
		),
		max_tip_amount : -6862872296770718074,
		suggested_tip_amounts : array(3217797819879479751),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 56,
	),
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	provider : 'mevzBPqGHJu9obIg',
	provider_data : $client->dataJSON(
		data : 'TqHS9vAMNiWR6lVw',
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```
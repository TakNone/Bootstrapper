# inputBotInlineMessageMediaInvoice

**Description** : *An invoice*

**Layer** : 229

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
	title : '1xumbVsPEjiSIfgC',
	description : 'at1sAEJbz3fNSFUI',
	photo : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 19,
		mime_type : 'X4LJMi9HaEqTvO0c',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 49,
				h : 38,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'WNLrPvGOycI5zuQo',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 63,
					x : 243689.2607421875,
					y : 757043.8837890625,
					zoom : 1762553.54296875,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -493801.1044921875,
				w : 11,
				h : 73,
				preload_prefix_size : 11,
				video_start_ts : 848323.8447265625,
				video_codec : 'osWr2SHv460GN5xT',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 82,
				title : 'XiK6UFxESoqvIw9J',
				performer : 'Bj1Y9pSVd8RnuDO5',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'JrfCVN8EXQ7Riw9j',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : '19NPrDhigTQEIVo7',
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
		currency : 'arjDxlEI0O24d7Z8',
		prices : array(
			$client->labeledPrice(
				label : 'bAGo6Qe28dvki4rf',
				amount : 5798822993695109375,
			),
		),
		max_tip_amount : -6601907522315574017,
		suggested_tip_amounts : array(-270527804939640702),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 30,
	),
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	provider : 'c1LmNeDE9hWkJt6z',
	provider_data : $client->dataJSON(
		data : 'WXpv5fS9LcAqzl31',
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```
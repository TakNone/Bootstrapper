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
	title : 'LSgoUqzNn89vumjf',
	description : 'XD2zR97vQBAasEWV',
	photo : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 82,
		mime_type : '1iyjRmgpZqW4XtaO',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 60,
				h : 31,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'Grs8IlCSyUq520Lj',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 69,
					x : 700807.6337890625,
					y : 425022.0166015625,
					zoom : -1191077.2314453125,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1537738.8095703125,
				w : 4,
				h : 49,
				preload_prefix_size : 82,
				video_start_ts : -488148.7373046875,
				video_codec : 'LkQ9O10qY8KiyWTv',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 33,
				title : 'hgNTRO9ytA7LJH8u',
				performer : '54blQ0dxeMvO3stB',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'ehuxks8dUMA20gZE',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'WyvhpELUZCB4KPwS',
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
		currency : 'vuWqi3BnIZEsYTRH',
		prices : array(
			$client->labeledPrice(
				label : 'ZdVfMqlGrLzTQ3Aa',
				amount : -8684802274235298062,
			),
		),
		max_tip_amount : -9167931519593350692,
		suggested_tip_amounts : array(3562664080653334002),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 55,
	),
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	provider : '4r2Uup8tHxfOjSzI',
	provider_data : $client->dataJSON(
		data : 'EJUkb4Y2OhqIPMsA',
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```
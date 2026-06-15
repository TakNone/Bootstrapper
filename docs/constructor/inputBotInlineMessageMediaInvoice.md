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
	title : 'LCp5W2Rs9b4Jotjm',
	description : 'abcgYofyEVde2LwD',
	photo : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 30,
		mime_type : 'nV48qlbRfxWP0uot',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 69,
				h : 82,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'baLed5IzXcuBxlGt',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 25,
					x : -58092.869140625,
					y : -2006127.6181640625,
					zoom : -1063053.3515625,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1259407.2060546875,
				w : 98,
				h : 73,
				preload_prefix_size : 20,
				video_start_ts : -80908.7236328125,
				video_codec : 'ULdm7X1abDR0OfSo',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 18,
				title : 'LW2p4wTZANm6u8rk',
				performer : 'gFCdPA14pciezrqI',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'NkahUQ9VqPmSFc4G',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'lOjKrqb4PwpxfVv6',
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
		currency : 'AQbBTLy41VYdDlmn',
		prices : array(
			$client->labeledPrice(
				label : 'jhngo7SOAepR2trc',
				amount : -158011398960220241,
			),
		),
		max_tip_amount : -6933397849831808477,
		suggested_tip_amounts : array(-5879050114587274308),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 62,
	),
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	provider : 'mFITyQfLqAbrJ0Rg',
	provider_data : $client->dataJSON(
		data : 'Zh8BC9JFeHG3lrYD',
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```
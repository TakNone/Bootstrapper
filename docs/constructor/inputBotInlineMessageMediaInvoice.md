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
	title : 'WOgdry4I1YlLnfvi',
	description : 'Zgo2MDyxriYuWp5P',
	photo : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 24,
		mime_type : '8a9FPGCLwhgJvk6u',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 21,
				h : 91,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'ZOXfMbRkaexdunES',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 2032007.8076171875,
				w : 84,
				h : 94,
				preload_prefix_size : 35,
				video_start_ts : 1142894.5712890625,
				video_codec : 'LV2BksguKw5oIl6n',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 60,
				title : 'l2UTgXjfy4RpNmCA',
				performer : 'dRvmP96807Qxp5MN',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'W6iqloFULCIpabkP',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : '690bBRJ3VqyZfUGT',
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
		currency : 'mclX0G6yO3bkBuzg',
		prices : array(
			$client->labeledPrice(
				label : 'DHhdEPW68gm2TYce',
				amount : -1521671827564549636,
			),
		),
		max_tip_amount : -5511168325102502215,
		suggested_tip_amounts : array(-5844639725628116170),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 2,
	),
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	provider : 'rLiVH5FeWDfqM1no',
	provider_data : $client->dataJSON(
		data : 'E7iVlmQMwpKzWUvH',
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```
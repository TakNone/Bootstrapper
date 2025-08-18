# inputBotInlineMessageMediaInvoice

**Description** : *An invoice*

**Layer** : 211

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
	title : 'kuzfEP5tSZgOLhTd',
	description : '7PfR3kVNF2lieDLT',
	photo : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 37,
		mime_type : '0a9nfcCbq4oGTex8',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 5,
				h : 87,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'tpmMgIWorGXKUbd2',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 844473.1953125,
				w : 40,
				h : 84,
				preload_prefix_size : 21,
				video_start_ts : 293035.4228515625,
				video_codec : 'r9v2eT5EpFOwnBDt',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 10,
				title : 'XuGWk2jHlapcN9J5',
				performer : '0pE78wlcyomUj4Yg',
				waveform : '1ۄL?LiveProtok???',
			),
			$client->documentAttributeFilename(
				file_name : 'LYsCKqJkanGBFNM5',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'EUI7DsYZxfGoPHht',
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
		currency : '8kEiKP72WCcexqfh',
		prices : array(
			$client->labeledPrice(
				label : 'SPAmaCoujXBIHghV',
				amount : -6936149786040828788,
			),
		),
		max_tip_amount : -5118546708487142622,
		suggested_tip_amounts : array(4206974667826617571),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 79,
	),
	payload : '??LmLiveProto?(??',
	provider : 'xvjQ0itRY9dKAphr',
	provider_data : $client->dataJSON(
		data : 'Fzo4x5bgdHGRle1q',
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```
# inputMediaInvoice

**Description** : *Generated invoice of a bot payment*

**Layer** : 222

```tl
inputMediaInvoice#405fef0d flags:# title:string description:string photo:flags.0?InputWebDocument invoice:Invoice payload:bytes provider:flags.3?string provider_data:DataJSON start_param:flags.1?string extended_media:flags.2?InputMedia = InputMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>title</mark> | [`string`](type/string) | Product name, 1-32 characters |
| <mark>description</mark> | [`string`](type/string) | Product description, 1-255 characters |
| **photo** | [`flags.0?InputWebDocument`](type/InputWebDocument) | URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service. People like it better when they see what they are paying for |
| <mark>invoice</mark> | [`Invoice`](type/Invoice) | The actual invoice |
| <mark>payload</mark> | [`bytes`](type/bytes) | Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use for your internal processes |
| **provider** | [`flags.3?string`](type/string) | Payments provider token, obtained via Botfather |
| <mark>provider_data</mark> | [`DataJSON`](type/DataJSON) | JSON-encoded data about the invoice, which will be shared with the payment provider. A detailed description of required fields should be provided by the payment provider |
| **start_param** | [`flags.1?string`](type/string) | Unique bot deep links start parameter. If present, forwarded copies of the sent message will have a URL button with a deep link to the bot (instead of a Pay button), with the value used as the start parameter. If absent, forwarded copies of the sent message will have a Pay button, allowing multiple users to pay directly from the forwarded message, using the same invoice |
| **extended_media** | [`flags.2?InputMedia`](type/InputMedia) | Deprecated |

---

## Type

[InputMedia](type/InputMedia)

---

## Example

```php
$inputMedia = $client->inputMediaInvoice(
	title : 'dhNFcwrQMePHfgoj',
	description : 'S8AfcYsXV1kbuyMQ',
	photo : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 45,
		mime_type : 'V1ShYoNE3lwsCZLc',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 67,
				h : 39,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'hDyTpGQgV4CsM9wE',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 70,
					x : -1623608.01953125,
					y : -1828204.185546875,
					zoom : 549087.06640625,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1028140.2041015625,
				w : 32,
				h : 28,
				preload_prefix_size : 43,
				video_start_ts : 1012694.2255859375,
				video_codec : 'iPt7znxsWHv8VwZ1',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 75,
				title : 'mqr8ypz0dO6UW9R5',
				performer : 'uRAFsSPh2D3W0nbT',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'qschOTpNJ8EDv3xj',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : '6pKR0B12AJbwnQWZ',
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
		currency : 'q5oY0xv1S6JKXrmf',
		prices : array(
			$client->labeledPrice(
				label : 'o3uqFQR40rVB1zhw',
				amount : 7585824699287550659,
			),
		),
		max_tip_amount : -2141521727560900460,
		suggested_tip_amounts : array(-4302435011969815598),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 20,
	),
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	provider : 'sfSJT8mD7vwk3xBe',
	provider_data : $client->dataJSON(
		data : 'htQGEFwxLVID7iez',
	),
	start_param : 'SBqAXm1HxTb3s5hw',
	extended_media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
);
```
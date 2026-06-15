# messages.sendWebViewResultMessage

**Description** : *Terminate webview interaction started with messages\.requestWebView, sending the specified message to the chat on behalf of the user*

**Layer** : 227

```tl
messages.sendWebViewResultMessage#a4314f5 bot_query_id:string result:InputBotInlineResult = WebViewMessageSent;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bot_query_id</mark> | [`string`](type/string) | Webview interaction ID obtained from messages.requestWebView |
| <mark>result</mark> | [`InputBotInlineResult`](type/InputBotInlineResult) | Message to send |

---

## Result

[WebViewMessageSent](type/WebViewMessageSent)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **QUERY_ID_INVALID** | `400` | The query ID is invalid |
| **USER_BOT_REQUIRED** | `400` | This method can only be called by a bot |

---

## Example

```php
$webViewMessageSent = $client->messages->sendWebViewResultMessage(
	bot_query_id : '98mdEiZgLbJIrVlj',
	result : $client->inputBotInlineResult(
		id : 'lRK7zwGj0SHQ1aEv',
		type : 'EmWnVCFJxS3u50Hb',
		title : 'gHpIFvk08Q2fEWx7',
		description : 'pmHlCtYgoasbnEWz',
		url : 'https://docs.liveproto.dev',
		thumb : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 62,
			mime_type : 'xhcEtPyNGIMR5D6i',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 48,
					h : 3,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'jtErPcoJySX6wKfB',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 598233.2919921875,
					w : 34,
					h : 11,
					preload_prefix_size : 40,
					video_start_ts : -535188.71484375,
					video_codec : 'w2lJxaY9VXPSHKnO',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 53,
					title : 'xUl6JvcAsFmdWirg',
					performer : 'Ey0QDTYBvqoH5dkL',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'yVH8Qhi0tv4wOjBc',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'fcLlETet1xWZI5hM',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		content : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 72,
			mime_type : 'oDqnEp2T9rHSPgt7',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 33,
					h : 4,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'C8jqATLWgoKXDQOH',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1490661.341796875,
					w : 27,
					h : 53,
					preload_prefix_size : 9,
					video_start_ts : -159777.90625,
					video_codec : '2Oz3vo8MYGeFCmN9',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 28,
					title : 'DIYMPc3VOBCAKRN2',
					performer : 'xHYyZ8932phRUDnX',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'G8g3KEucDCqy6x1O',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'jR3ANKvgXkPlUeQn',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		send_message : $client->inputBotInlineMessageMediaAuto(
			invert_media : true,
			message : 'Lzt1xej6FMOVTvqk',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 84,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 8,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 83,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 68,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 52,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 72,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 53,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 54,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 29,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 4,
					language : 'TGi8wgRuU2keA94x',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 54,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 80,
					user_id : 110963942929239802,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 53,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 69,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 39,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 36,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 9,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 89,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 99,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 42,
					document_id : 3770233773328625314,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 56,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 99,
					date : 70,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 59,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 11,
					old_text : 'B47M25i9w6qckERx',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 89,
				),
			),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
		),
	),
);
```
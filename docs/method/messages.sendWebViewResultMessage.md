# messages.sendWebViewResultMessage

**Description** : *Terminate webview interaction started with messages\.requestWebView, sending the specified message to the chat on behalf of the user*

**Layer** : 233

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
	bot_query_id : 'foOlxwFi8vucIgJn',
	result : $client->inputBotInlineResult(
		id : 'W3bFQaN29JoGrfM6',
		type : '7do6l1WxmBKC29Gn',
		title : 'PjOz3L9tvemnTC7a',
		description : 'xkq0hQ3RTlU8eV6D',
		url : 'https://docs.liveproto.dev',
		thumb : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 20,
			mime_type : 'yg90mtY4cP52ONlH',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 43,
					h : 49,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'o6hdqjNVuQCbmHZB',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 435617.3203125,
					w : 55,
					h : 10,
					preload_prefix_size : 21,
					video_start_ts : 1889682.748046875,
					video_codec : 'novWg2pciyzIS6jE',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 87,
					title : 'dFqYuH04VelMWgwn',
					performer : 'J9RbzGCVKOkxn4tI',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'QcPW0L3SU1hpowHR',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '0Rt5rMCnS2wJBNvO',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		content : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 25,
			mime_type : 'HLU9qXblJx26VmOg',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 0,
					h : 4,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'OiHEav6lrLYRZfst',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 670679.89453125,
					w : 85,
					h : 59,
					preload_prefix_size : 77,
					video_start_ts : -470223.62890625,
					video_codec : 'zVhLf0c6MQJIRTwk',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 31,
					title : 'MYVl3ULceEkRqbQg',
					performer : 'bxywn7zj1M5dkSrh',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '5KyuZCMgU3FcbazR',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'PF6ibWxHZNmSCgra',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		send_message : $client->inputBotInlineMessageMediaAuto(
			invert_media : true,
			message : 'pPN57KR2SQ3abEjz',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 13,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 21,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 17,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 8,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 28,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 36,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 79,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 39,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 74,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 35,
					language : 'F6mJEezDWoutqkCn',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 25,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 97,
					user_id : -6081233640409414460,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 0,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 87,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 55,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 17,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 31,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 16,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 61,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 34,
					document_id : 8050396754029509316,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 32,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 33,
					date : 18,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 12,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 4,
					old_text : 'D6BJFq7dbpjfcEmA',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 20,
				),
				$client->messageEntityTonAddress(
					offset : 0,
					length : 30,
				),
			),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
		),
	),
);
```
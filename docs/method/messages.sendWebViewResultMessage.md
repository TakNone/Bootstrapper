# messages.sendWebViewResultMessage

**Description** : *Terminate webview interaction started with messages\.requestWebView, sending the specified message to the chat on behalf of the user*

**Layer** : 225

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
	bot_query_id : 'EuBvL7ZSMRDbQOil',
	result : $client->inputBotInlineResult(
		id : 'sknTg7Fw1fWyQp0C',
		type : 'mH82SfhE5siBdMCb',
		title : '5I8U6GfFKsDyYpqd',
		description : 'yciAaeu9EHmpwhGq',
		url : 'https://docs.liveproto.dev',
		thumb : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 15,
			mime_type : 'h16ME7jJ29BNK3dn',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 37,
					h : 7,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'eAvn41xZbmihBCXo',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -383497.875,
					w : 23,
					h : 54,
					preload_prefix_size : 55,
					video_start_ts : 1472365.0693359375,
					video_codec : '0ordRcxfwHVgXsZI',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 33,
					title : 'G7WIilHga3D6eRjt',
					performer : 'c3yZU5ANMhbTB8QO',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'lhyBo13ZGgDXpiu9',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'qQphK8XxGaYiDR7I',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		content : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 5,
			mime_type : 'TXsG5zCxtfijyJkr',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 33,
					h : 0,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'TSjWRzfxpJ2vF6r9',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1130932.5751953125,
					w : 9,
					h : 97,
					preload_prefix_size : 35,
					video_start_ts : 960542.0908203125,
					video_codec : 'hBku8tDlJePnbd0C',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 52,
					title : 'PCLiqhG1bmFuWBnx',
					performer : 'KJTe642WCmUGVsQE',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'lSeacbKGNmtinyY2',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'bc2sxgmQo8hGL9AE',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		send_message : $client->inputBotInlineMessageMediaAuto(
			invert_media : true,
			message : 'VjbFEOCgy5cezDoT',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 27,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 87,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 27,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 100,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 6,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 45,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 81,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 41,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 52,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 34,
					language : 'JMYdkXOiuafRbAvy',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 52,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 99,
					user_id : 8247223764908119405,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 70,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 35,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 64,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 34,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 19,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 82,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 47,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 66,
					document_id : 1599351837529000015,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 58,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 89,
					date : 58,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 99,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 42,
					old_text : 'Qvc6K7W2brTVJH4a',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 40,
				),
			),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
		),
	),
);
```
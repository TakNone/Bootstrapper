# messages.setInlineBotResults

**Description** : *Answer an inline query, for bots only*

**Layer** : 218

```tl
messages.setInlineBotResults#bb12a419 flags:# gallery:flags.0?true private:flags.1?true query_id:long results:Vector<InputBotInlineResult> cache_time:int next_offset:flags.2?string switch_pm:flags.3?InlineBotSwitchPM switch_webview:flags.4?InlineBotWebView = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **gallery** | [`flags.0?true`](type/true) | Set this flag if the results are composed of media files |
| **private** | [`flags.1?true`](type/true) | Set this flag if results may be cached on the server side only for the user that sent the query. By default, results may be returned to any user who sends the same query |
| <mark>query_id</mark> | [`long`](type/long) | Unique identifier for the answered query |
| <mark>results</mark> | [`Vector<InputBotInlineResult>`](type/InputBotInlineResult) | Vector of results for the inline query |
| <mark>cache_time</mark> | [`int`](type/int) | The maximum amount of time in seconds that the result of the inline query may be cached on the server. Defaults to 300 |
| **next_offset** | [`flags.2?string`](type/string) | Pass the offset that a client should send in the next query with the same text to receive more results. Pass an empty string if there are no more results or if you don't support pagination. Offset length can't exceed 64 bytes |
| **switch_pm** | [`flags.3?InlineBotSwitchPM`](type/InlineBotSwitchPM) | If passed, clients will display a button on top of the remaining inline result list with the specified text, that switches the user to a private chat with the bot and sends the bot a start message with a certain parameter |
| **switch_webview** | [`flags.4?InlineBotWebView`](type/InlineBotWebView) | If passed, clients will display a button on top of the remaining inline result list with the specified text, that switches the user to the specified inline mode mini app |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **ARTICLE_TITLE_EMPTY** | `400` | The title of the article is empty |
| **AUDIO_CONTENT_URL_EMPTY** | `400` | The remote URL specified in the content field is empty |
| **AUDIO_TITLE_EMPTY** | `400` | An empty audio title was provided |
| **BUTTON_DATA_INVALID** | `400` | The data of one or more of the buttons you provided is invalid |
| **BUTTON_TYPE_INVALID** | `400` | The type of one or more of the buttons you provided is invalid |
| **BUTTON_URL_INVALID** | `400` | Button URL invalid |
| **DOCUMENT_INVALID** | `400` | The specified document is invalid |
| **FILE_CONTENT_TYPE_INVALID** | `400` | File content-type is invalid |
| **FILE_TITLE_EMPTY** | `400` | An empty file title was specified |
| **GIF_CONTENT_TYPE_INVALID** | `400` | GIF content-type invalid |
| **MESSAGE_EMPTY** | `400` | The provided message is empty |
| **MESSAGE_TOO_LONG** | `400` | The provided message is too long |
| **NEXT_OFFSET_INVALID** | `400` | The specified offset is longer than 64 bytes |
| **PEER_TYPES_INVALID** | `400` | The passed keyboardButtonSwitchInline.peer_types field is invalid |
| **PHOTO_CONTENT_TYPE_INVALID** | `400` | Photo mime-type invalid |
| **PHOTO_CONTENT_URL_EMPTY** | `400` | Photo URL invalid |
| **PHOTO_INVALID** | `400` | Photo invalid |
| **PHOTO_THUMB_URL_EMPTY** | `400` | Photo thumbnail URL is empty |
| **QUERY_ID_INVALID** | `400` | The query ID is invalid |
| **REPLY_MARKUP_INVALID** | `400` | The provided reply markup is invalid |
| **RESULTS_TOO_MUCH** | `400` | Too many results were provided |
| **RESULT_ID_DUPLICATE** | `400` | You provided a duplicate result ID |
| **RESULT_ID_INVALID** | `400` | One of the specified result IDs is invalid |
| **RESULT_TYPE_INVALID** | `400` | Result type invalid |
| **SEND_MESSAGE_MEDIA_INVALID** | `400` | Invalid media provided |
| **SEND_MESSAGE_TYPE_INVALID** | `400` | The message type is invalid |
| **START_PARAM_EMPTY** | `400` | The start parameter is empty |
| **START_PARAM_INVALID** | `400` | Start parameter invalid |
| **STICKER_DOCUMENT_INVALID** | `400` | The specified sticker document is invalid |
| **SWITCH_PM_TEXT_EMPTY** | `400` | The switch_pm.text field was empty |
| **SWITCH_WEBVIEW_URL_INVALID** | `400` | The URL specified in switch_webview.url is invalid! |
| **URL_INVALID** | `400` | Invalid URL provided |
| **USER_BOT_REQUIRED** | `400` | This method can only be called by a bot |
| **VIDEO_CONTENT_TYPE_INVALID** | `400` | The video's content type is invalid |
| **VIDEO_TITLE_EMPTY** | `400` | The specified video title is empty |
| **WEBDOCUMENT_INVALID** | `400` | Invalid webdocument URL provided |
| **WEBDOCUMENT_MIME_INVALID** | `400` | Invalid webdocument mime type provided |
| **WEBDOCUMENT_SIZE_TOO_BIG** | `400` | Webdocument is too big! |
| **WEBDOCUMENT_URL_EMPTY** | `400` | The passed web document URL is empty |
| **WEBDOCUMENT_URL_INVALID** | `400` | The specified webdocument URL is invalid |

---

## Example

```php
$bool = $client->messages->setInlineBotResults(
	gallery : true,
	private : true,
	query_id : 2747916072865768976,
	results : array(
		$client->inputBotInlineResult(
			id : 'hkKp0f9vXHlDnQV4',
			type : 'mOdXTNbG07qse91L',
			title : 'Ugs43rmqXSekF91n',
			description : 'jd5g0DoJstaxYniK',
			url : 'https://docs.liveproto.dev',
			thumb : $client->inputWebDocument(
				url : 'https://docs.liveproto.dev',
				size : 47,
				mime_type : '8vHJYSZCAFDnT1cj',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 75,
						h : 72,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'Ewdf7hoyip6TbQYH',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : 1986125.3203125,
						w : 80,
						h : 94,
						preload_prefix_size : 54,
						video_start_ts : 181549.0439453125,
						video_codec : 'tldFX1njbgzV68r0',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 78,
						title : '1UuXCwJARP06f2zF',
						performer : 'Ulp8gmdB4VM6oLtr',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'p8hVU4QlLuRiNfr7',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : '2pomkjaLKyRW9rB3',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			content : $client->inputWebDocument(
				url : 'https://docs.liveproto.dev',
				size : 47,
				mime_type : 'LD27qnpTgfoAJVyH',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 47,
						h : 73,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'pnHrMG7BsKIOWhk2',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : 1403342.220703125,
						w : 8,
						h : 22,
						preload_prefix_size : 46,
						video_start_ts : 992250.2421875,
						video_codec : 'YAbfK6QmUr1tPi09',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 58,
						title : 'neJ1oK8TQRxdr9l5',
						performer : '91NPO7JU6yblFSTd',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'u6L8Ag1RnEjVXOki',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'l23S4eZ1kvcn5Xoi',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			send_message : $client->inputBotInlineMessageMediaAuto(
				invert_media : true,
				message : 'RTQDJK3iyMIonZHa',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 18,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 99,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 97,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 10,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 15,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 35,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 2,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 81,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 37,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 18,
						language : 'QP1Htm2Id6VJvsfA',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 97,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 90,
						user_id : 9002539714086843855,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 72,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 13,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 97,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 52,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 28,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 88,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 30,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 98,
						document_id : 2039988681752270611,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 76,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
		$client->inputBotInlineResultPhoto(
			id : 'kTFvWeKXu1R6frqY',
			type : 'cegN9bC8FTt6d5fj',
			photo : $client->inputPhotoEmpty(),
			send_message : $client->inputBotInlineMessageMediaAuto(
				invert_media : true,
				message : 'lk0mHXE8M36cbuJq',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 30,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 85,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 46,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 19,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 75,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 95,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 89,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 21,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 61,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 14,
						language : 'H0hsrZO2q4Xjfopc',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 65,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 90,
						user_id : 2840562885739184181,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 12,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 69,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 94,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 74,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 86,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 34,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 100,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 35,
						document_id : -8318856958333237176,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 27,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
		$client->inputBotInlineResultDocument(
			id : 'R8lApHtmMD1sOow6',
			type : 'cOpSb65eIy20ZV4t',
			title : 'h2xWy4HjfBJCMaDl',
			description : '8V5MG4efIQ7vKCms',
			document : $client->inputDocumentEmpty(),
			send_message : $client->inputBotInlineMessageMediaAuto(
				invert_media : true,
				message : 'Rc83EaNsCzSZeHf7',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 24,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 36,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 97,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 39,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 62,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 22,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 56,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 81,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 55,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 61,
						language : '6kDafiB37RKJsVXv',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 3,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 27,
						user_id : 7452478738043929518,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 14,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 71,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 74,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 23,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 11,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 49,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 73,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 82,
						document_id : 7746919484540359518,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 43,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
		$client->inputBotInlineResultGame(
			id : 'GuBlh13ZTYbUt45k',
			short_name : 'qU705xPMH8Xdyzg9',
			send_message : $client->inputBotInlineMessageMediaAuto(
				invert_media : true,
				message : 'iCGXacDTm0s1hZ98',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 85,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 95,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 83,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 42,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 21,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 50,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 20,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 94,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 6,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 77,
						language : 'k2KvbRogITeCLSa5',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 12,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 67,
						user_id : 3701752927298513123,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 78,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 96,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 72,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 89,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 40,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 46,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 100,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 96,
						document_id : -5566405556828569054,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 63,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
	),
	cache_time : 50,
	next_offset : 'tn0rPZYaSvzmud3p',
	switch_pm : $client->inlineBotSwitchPM(
		text : '0lFzAbBXSvVZ96KQ',
		start_param : 'qlxv1JAZheiULsH0',
	),
	switch_webview : $client->inlineBotWebView(
		text : 'sdQgBAt3kDa7wuKv',
		url : 'https://docs.liveproto.dev',
	),
);
```
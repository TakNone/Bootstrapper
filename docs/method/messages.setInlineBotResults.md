# messages.setInlineBotResults

**Description** : *Answer an inline query, for bots only*

**Layer** : 227

```tl
messages.setInlineBotResults#bb12a419 flags:# gallery:flags.0?true private:flags.1?true query_id:long results:Vector<InputBotInlineResult> cache_time:int next_offset:flags.2?string switch_pm:flags.3?InlineBotSwitchPM switch_webview:flags.4?InlineBotWebView = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	query_id : -1014211717615624832,
	results : array(
		$client->inputBotInlineResult(
			id : 'zNiuEGAeRnUFXpaW',
			type : 'kK9zIPVl3hrNRMOs',
			title : 'vh8XQzB1Rxnkfb49',
			description : 'tGWJA4kFPOSCq6Dj',
			url : 'https://docs.liveproto.dev',
			thumb : $client->inputWebDocument(
				url : 'https://docs.liveproto.dev',
				size : 9,
				mime_type : 'Fgxw5zj4l2nHTW73',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 29,
						h : 33,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'Gf4Ed7DRWbQIr8aw',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : 64340.7060546875,
						w : 48,
						h : 25,
						preload_prefix_size : 1,
						video_start_ts : -98975.3291015625,
						video_codec : 'L9BwQjSpi5RErqsH',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 89,
						title : 'Rhzb07vu9oKswp2x',
						performer : 'V2M4e9TlBw5RQAjN',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'wYHxhenJsZtAPEMK',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'qnZVt0LRiDTvo5rw',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			content : $client->inputWebDocument(
				url : 'https://docs.liveproto.dev',
				size : 14,
				mime_type : 'R6qgNmPZfoHr0kwA',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 83,
						h : 24,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : '9vIa1cS7RFQfYjoC',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : -1457528.7177734375,
						w : 4,
						h : 100,
						preload_prefix_size : 1,
						video_start_ts : -926834.705078125,
						video_codec : '3lf8mNGPEHOjswtF',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 23,
						title : 'sSmu7J2tp0z5RCAa',
						performer : 'tUQTGbDnsu1veY5m',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'c2KFMhOd7pVStXNQ',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'oWO4h5NJmVdDskF8',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			send_message : $client->inputBotInlineMessageMediaAuto(
				invert_media : true,
				message : 'wDtfWvmRP0a6cQBA',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 2,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 96,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 84,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 14,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 82,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 81,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 45,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 20,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 74,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 75,
						language : '3C0UZkoE1tzryBb8',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 89,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 98,
						user_id : 8901170988339923630,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 64,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 3,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 71,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 9,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 77,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 81,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 61,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 26,
						document_id : 6649295892248899085,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 22,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 72,
						date : 83,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 56,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 94,
						old_text : 'jO4dh9gVBU5Qw0Fl',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 69,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
		$client->inputBotInlineResultPhoto(
			id : 'EsaPqQ5F0JwXj2IL',
			type : 'eYXOJIDFvTu1HrtQ',
			photo : $client->inputPhotoEmpty(),
			send_message : $client->inputBotInlineMessageMediaAuto(
				invert_media : true,
				message : 'bF3TGe7Uh6l0QunV',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 93,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 90,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 82,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 14,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 37,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 50,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 1,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 40,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 39,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 63,
						language : '1mqXuUt9aLSA8Ivb',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 66,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 24,
						user_id : 7255068874910727518,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 90,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 15,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 86,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 95,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 4,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 11,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 96,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 78,
						document_id : -6991675589372822547,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 38,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 88,
						date : 7,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 27,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 28,
						old_text : 'Ral4hGe6YM7qDing',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 69,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
		$client->inputBotInlineResultDocument(
			id : '2BMztRTyfJcguEqL',
			type : 'JnYCKQGDvglXdyzS',
			title : '06ViqbINk4527OYE',
			description : 'JLcPHz25rDx9GRdj',
			document : $client->inputDocumentEmpty(),
			send_message : $client->inputBotInlineMessageMediaAuto(
				invert_media : true,
				message : 'MSrxFH5wuBqJ9Npl',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 39,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 44,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 90,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 44,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 78,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 58,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 40,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 1,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 81,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 74,
						language : 'cHOP2azWEd0tT7in',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 37,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 82,
						user_id : 6253599768784239424,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 8,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 69,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 76,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 30,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 18,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 62,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 70,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 15,
						document_id : -416356875759726805,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 79,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 22,
						date : 5,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 9,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 81,
						old_text : '3p6DzlKXq1FZRH5s',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 78,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
		$client->inputBotInlineResultGame(
			id : 'qr9xDtwTOp4JAiyC',
			short_name : 'jNCuX2mYxp5edOtg',
			send_message : $client->inputBotInlineMessageMediaAuto(
				invert_media : true,
				message : 'bfZEDAH1UGXjRam2',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 21,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 28,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 43,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 43,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 55,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 49,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 14,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 60,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 43,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 16,
						language : 'ay1s0FGCNdiOtjxk',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 81,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 52,
						user_id : -7855223322204103286,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 95,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 68,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 94,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 2,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 15,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 83,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 20,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 57,
						document_id : 2854482678862560276,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 54,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 74,
						date : 81,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 75,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 35,
						old_text : 'OEkSQnolxiJ0VzT5',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 67,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
	),
	cache_time : 76,
	next_offset : 'AusFNytQ09lI1dXH',
	switch_pm : $client->inlineBotSwitchPM(
		text : 'jyuSphOdTbxveaR4',
		start_param : 'Q0kAdliHTOjxMFrc',
	),
	switch_webview : $client->inlineBotWebView(
		text : 'Ft4MBOzv5eWjRHDL',
		url : 'https://docs.liveproto.dev',
	),
);
```
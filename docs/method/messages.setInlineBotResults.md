# messages.setInlineBotResults

**Description** : *Answer an inline query, for bots only*

**Layer** : 233

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
| **MEDIA_CAPTION_TOO_LONG** | `400` | The caption is too long |
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
| **USER_BOT_INVALID** | `403` | User accounts must provide the bot method parameter when calling this method. If there is no such method parameter, this method can only be invoked by bot accounts |
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
	query_id : 2404007818860398644,
	results : array(
		$client->inputBotInlineResult(
			id : 'HoWnewi2gGqxuzhy',
			type : '1R8QNCHjMF7SyiDc',
			title : 'AEN0Z1QDU4w8Ozh9',
			description : 'YGNqL24XSfbTa6V1',
			url : 'https://docs.liveproto.dev',
			thumb : $client->inputWebDocument(
				url : 'https://docs.liveproto.dev',
				size : 75,
				mime_type : 'zmjhaSRJVleW2QP7',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 42,
						h : 64,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'D6CGXUFbwputzBm9',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : 1793259.01171875,
						w : 89,
						h : 85,
						preload_prefix_size : 38,
						video_start_ts : -48242.1943359375,
						video_codec : 'OPd4uRDAhs15rUnp',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 29,
						title : 'zqhtRPo2QSOX9slv',
						performer : '8vUHBbPxT6Ajfl5n',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'DdY9BqzKHCcWTF12',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'nD1GBaUI4lJASkMi',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			content : $client->inputWebDocument(
				url : 'https://docs.liveproto.dev',
				size : 77,
				mime_type : 'MGi2fQ9PpkXV3oEy',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 81,
						h : 29,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'iBMxJmYv54QLZENW',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : -1890321.4169921875,
						w : 100,
						h : 6,
						preload_prefix_size : 18,
						video_start_ts : -688752.07421875,
						video_codec : '0CrNdfBUPupb6Rz9',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 35,
						title : 'mdrKZsOYFoEQ58Uc',
						performer : 'hXqfO6Yut12lE3CF',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'abIlMTwOtdQzx7ER',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'k7IPebAjFKyrN3xG',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			send_message : $client->inputBotInlineMessageMediaAuto(
				invert_media : true,
				message : 'UTl1N20wuhgZsOm3',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 23,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 0,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 97,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 69,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 69,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 92,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 10,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 96,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 57,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 67,
						language : 'AL4ZsgDO0f8wQ2uP',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 23,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 63,
						user_id : 1525606686967456529,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 4,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 100,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 83,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 56,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 57,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 33,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 55,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 35,
						document_id : -6404533450124864060,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 46,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 26,
						date : 49,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 29,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 61,
						old_text : 'RNSbd6EWKpxtnZ4l',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 74,
					),
					$client->messageEntityTonAddress(
						offset : 0,
						length : 82,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
		$client->inputBotInlineResultPhoto(
			id : 'dXKYq2NFZTSOoIPH',
			type : 'kjE4S0n523JGKQDL',
			photo : $client->inputPhotoEmpty(),
			send_message : $client->inputBotInlineMessageMediaAuto(
				invert_media : true,
				message : 'CVDJta9mRkqnPHSB',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 28,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 53,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 14,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 53,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 6,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 47,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 89,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 95,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 12,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 42,
						language : '3YApEIiSkRwycVMB',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 40,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 81,
						user_id : 5266785376898117471,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 29,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 93,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 25,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 42,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 12,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 33,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 30,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 91,
						document_id : -3192872971198989712,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 34,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 50,
						date : 71,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 24,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 25,
						old_text : 'N1agdHLbSBxVXCnA',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 31,
					),
					$client->messageEntityTonAddress(
						offset : 0,
						length : 76,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
		$client->inputBotInlineResultDocument(
			id : 'ISVrnJheMBdw5Aol',
			type : 'HmNrPe4RyuszOK8C',
			title : 'VfFchrOkzNjMm0Rb',
			description : 'pjS0R4HqLDXrPezA',
			document : $client->inputDocumentEmpty(),
			send_message : $client->inputBotInlineMessageMediaAuto(
				invert_media : true,
				message : 'oUTkjStP2X14sDcA',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 27,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 62,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 27,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 15,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 91,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 43,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 37,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 25,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 41,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 83,
						language : 'ok9mdQyC8wRuWqiP',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 66,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 56,
						user_id : -595258409408342393,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 62,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 72,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 32,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 70,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 34,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 82,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 60,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 6,
						document_id : -6233332962518114847,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 14,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 5,
						date : 15,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 52,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 78,
						old_text : 'jGxaFEvkMmrIHwV5',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 14,
					),
					$client->messageEntityTonAddress(
						offset : 0,
						length : 7,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
		$client->inputBotInlineResultGame(
			id : 'GUL1BPT4EuKRJCXq',
			short_name : 'PKOzYGxqLB3p9Hge',
			send_message : $client->inputBotInlineMessageMediaAuto(
				invert_media : true,
				message : '4MIhKOsbUfQeiWzo',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 86,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 57,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 96,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 86,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 84,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 54,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 60,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 71,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 17,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 18,
						language : 'fgmSGnIKEjuZokYT',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 51,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 63,
						user_id : -4659146051245708482,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 46,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 3,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 83,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 9,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 92,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 63,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 50,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 17,
						document_id : 931295046039483615,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 74,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 10,
						date : 98,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 52,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 29,
						old_text : '8MR9IFCOVayPKpUA',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 27,
					),
					$client->messageEntityTonAddress(
						offset : 0,
						length : 75,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
	),
	cache_time : 15,
	next_offset : 'vls6L2AN9wDRnTr7',
	switch_pm : $client->inlineBotSwitchPM(
		text : 'rVaLMGt8WqTIp02U',
		start_param : '4WU05YAalkFcJxu1',
	),
	switch_webview : $client->inlineBotWebView(
		text : 'Z9RtDbusayeOIA3f',
		url : 'https://docs.liveproto.dev',
	),
);
```
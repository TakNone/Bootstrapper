# messages.setInlineBotResults

**Description** : *Answer an inline query, for bots only*

**Layer** : 225

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
	query_id : 6266821369283108273,
	results : array(
		$client->inputBotInlineResult(
			id : 'NXIGJtrkWjA6YVDU',
			type : 'MD3N0KRnmJBH7dUu',
			title : '87hpdiu1MqamcEQD',
			description : '2W5socfTryzRSENi',
			url : 'https://docs.liveproto.dev',
			thumb : $client->inputWebDocument(
				url : 'https://docs.liveproto.dev',
				size : 74,
				mime_type : 'xfdQEoZzLHuN9Jn3',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 35,
						h : 59,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : '0gUNKR9SHj4pZDQE',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : 722830.19921875,
						w : 19,
						h : 19,
						preload_prefix_size : 64,
						video_start_ts : -13454.4404296875,
						video_codec : 'ZigsnXv9aemIu0PN',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 39,
						title : 'JYMdcX2BtUfzhvwF',
						performer : 'SwWDK67QE1egaX59',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'vYShgGkVl9XnfemD',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'zbaj7odqyKpe6n2w',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			content : $client->inputWebDocument(
				url : 'https://docs.liveproto.dev',
				size : 91,
				mime_type : 'mAZ9Qq1Tha7YSc6e',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 84,
						h : 45,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : '3Nt1MkrGvAexfKRJ',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : -1996194.765625,
						w : 96,
						h : 10,
						preload_prefix_size : 55,
						video_start_ts : 1086026.552734375,
						video_codec : '6NgiSkpm8WeoaV1M',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 52,
						title : 'wSP5ZgCn1vxB7usI',
						performer : 'vbSEycjHODoqQ0hG',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'pB592aDdVlCQsXfP',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'zP53lGQb49Mw2TuV',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			send_message : $client->inputBotInlineMessageMediaAuto(
				invert_media : true,
				message : 'pH0eEyTAlQLDa9hi',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 80,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 67,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 26,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 18,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 50,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 71,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 47,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 76,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 13,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 11,
						language : 'qKNwdstf2ueEgrSo',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 81,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 98,
						user_id : 1582592397024244331,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 7,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 18,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 51,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 65,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 66,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 30,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 1,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 36,
						document_id : -7669934991426188249,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 48,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 13,
						date : 34,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 81,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 41,
						old_text : 'DR5hoyOXUuf0sQVz',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 42,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
		$client->inputBotInlineResultPhoto(
			id : 'nUZl64zt0m57AICV',
			type : 'IASnNytWJhdgCRlE',
			photo : $client->inputPhotoEmpty(),
			send_message : $client->inputBotInlineMessageMediaAuto(
				invert_media : true,
				message : 'xMpmwQInAJXyCWVl',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 35,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 95,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 65,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 74,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 74,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 37,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 14,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 23,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 98,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 96,
						language : 'E9vow8IMdprxKFJH',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 78,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 20,
						user_id : 4295015161143458923,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 55,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 4,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 76,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 63,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 33,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 13,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 19,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 71,
						document_id : -5294914745340821375,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 21,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 100,
						date : 19,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 74,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 82,
						old_text : 'X85UdLIr2Al07nOB',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 17,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
		$client->inputBotInlineResultDocument(
			id : 'w6qx9OIL4QDkV10B',
			type : 'xlStjbihkJ8Iqo72',
			title : 'T07WPy1dSFCULENn',
			description : 'fDVt98A16OJoyIFh',
			document : $client->inputDocumentEmpty(),
			send_message : $client->inputBotInlineMessageMediaAuto(
				invert_media : true,
				message : 'H1FVolcK5Es2nkrP',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 24,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 9,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 80,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 93,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 59,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 64,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 44,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 95,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 9,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 17,
						language : 'jMJ8s2HEWQhYSaDT',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 72,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 11,
						user_id : 589510483096321540,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 5,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 94,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 12,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 9,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 43,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 76,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 97,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 39,
						document_id : -7968753405634996585,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 19,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 100,
						date : 11,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 60,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 35,
						old_text : 'pAkxat2I93yJ0VBN',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 48,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
		$client->inputBotInlineResultGame(
			id : 'euvNnwcVHgCQMbUI',
			short_name : 'tTxvnl9VBfCMdszO',
			send_message : $client->inputBotInlineMessageMediaAuto(
				invert_media : true,
				message : 'FO3tjAuiSsQ520VT',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 97,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 89,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 97,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 94,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 78,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 50,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 88,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 74,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 51,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 51,
						language : 'q3svA1XKWbGViahr',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 70,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 24,
						user_id : -3464047668162166264,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 0,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 79,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 73,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 96,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 98,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 0,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 15,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 7,
						document_id : 1130859091199255936,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 70,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 23,
						date : 39,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 40,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 47,
						old_text : 'VYAfsTO9KSkFxL6Z',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 46,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
	),
	cache_time : 5,
	next_offset : 'KtvUXb5mZNFIcdOQ',
	switch_pm : $client->inlineBotSwitchPM(
		text : 'grhkc9uRXTZe28AI',
		start_param : '7njcQCdmVOaHoiFK',
	),
	switch_webview : $client->inlineBotWebView(
		text : '6SNsqH8gI5l3ioDu',
		url : 'https://docs.liveproto.dev',
	),
);
```
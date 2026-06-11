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
	query_id : 8877269891544381222,
	results : array(
		$client->inputBotInlineResult(
			id : 'OgLrF9C8bGPRTEyz',
			type : 'SrqgBAvJGl0jyzOP',
			title : 'WVi0UhfqvQltT6cg',
			description : 'NzXOA1MK4TgwkbeS',
			url : 'https://docs.liveproto.dev',
			thumb : $client->inputWebDocument(
				url : 'https://docs.liveproto.dev',
				size : 2,
				mime_type : 'unSeoBGlQ8Wyfdvr',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 73,
						h : 53,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'ktBlP5sCFUGrnHhd',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : 1003836.83984375,
						w : 13,
						h : 38,
						preload_prefix_size : 75,
						video_start_ts : -1803761.0361328125,
						video_codec : 'EF72SkNVGuDLwPQM',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 47,
						title : 'lgCvbqE3H8YzByV7',
						performer : 'bKG1qSvYmICJceXa',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'CdOFKpLhSAUoXjxJ',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : '3R9Kht7x4gVdBZX2',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			content : $client->inputWebDocument(
				url : 'https://docs.liveproto.dev',
				size : 15,
				mime_type : 'oex47NbLcQj9AdYJ',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 24,
						h : 91,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'dC6hvHcoeGw9UrKO',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : 113716.791015625,
						w : 8,
						h : 26,
						preload_prefix_size : 47,
						video_start_ts : -1702742.859375,
						video_codec : 'bdjzFLQZWJ4f1Yu0',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 69,
						title : 'TvcVWzrm6Hkj3LYG',
						performer : 'ktROVSHceaivZh0T',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'Wxamflvr80khC5JA',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'ONWXvCoK8T4ngpzA',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			send_message : $client->inputBotInlineMessageMediaAuto(
				invert_media : true,
				message : 'AzTlyK7aDbSd6BH8',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 47,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 43,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 68,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 61,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 52,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 13,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 27,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 39,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 85,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 20,
						language : '3bQpqtasGz0gjonX',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 73,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 51,
						user_id : 4433211027662149239,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 66,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 15,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 58,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 4,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 58,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 64,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 37,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 73,
						document_id : -2291819040378408748,
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
						length : 12,
						date : 52,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 68,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 79,
						old_text : 'f27eKUIO5wm1ZyCB',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 58,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
		$client->inputBotInlineResultPhoto(
			id : 'AB7yiNadMGjWl6Fx',
			type : 'z5WiDVKhXFfpowCd',
			photo : $client->inputPhotoEmpty(),
			send_message : $client->inputBotInlineMessageMediaAuto(
				invert_media : true,
				message : 'ar1IByLvzW69KJfP',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 9,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 4,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 55,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 62,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 25,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 63,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 21,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 76,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 29,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 28,
						language : 'M3jCfe1UAlXmsBH2',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 12,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 2,
						user_id : -3857728471981657888,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 10,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 36,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 20,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 26,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 56,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 15,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 63,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 26,
						document_id : 2367417628077577534,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 15,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 35,
						date : 52,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 25,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 35,
						old_text : 'ag7wVvsLYKbPU9Wd',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 41,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
		$client->inputBotInlineResultDocument(
			id : 'MEiz5ldj1BTKF2eN',
			type : 'btligdWk7nYpF4PM',
			title : 'yRltIVxgDkunTNds',
			description : 'edwZK568s2XuzERP',
			document : $client->inputDocumentEmpty(),
			send_message : $client->inputBotInlineMessageMediaAuto(
				invert_media : true,
				message : 'YftWbkDaAmgBZleU',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 22,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 45,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 30,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 54,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 32,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 3,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 87,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 66,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 65,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 18,
						language : 'JYdGcszQ5iTWrjVK',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 40,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 1,
						user_id : 6253267745024122705,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 19,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 12,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 22,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 54,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 13,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 25,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 76,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 94,
						document_id : 8300522141732716062,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 71,
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
						date : 90,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 37,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 51,
						old_text : '9Jpx8gIoEukFdwBi',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 81,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
		$client->inputBotInlineResultGame(
			id : 'yu6oV8zpvgSWE9mN',
			short_name : 'E3cyfHhDwP0rbWB6',
			send_message : $client->inputBotInlineMessageMediaAuto(
				invert_media : true,
				message : 'NDSJGBhUEcday3vT',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 51,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 48,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 34,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 23,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 58,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 11,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 17,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 17,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 91,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 25,
						language : '2fh9DgekwVGKoruW',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 55,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 71,
						user_id : 2232055996639396785,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 37,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 69,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 4,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 18,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 41,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 39,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 23,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 36,
						document_id : 4560830795243603700,
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
						length : 56,
						date : 18,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 47,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 67,
						old_text : 'lLTuiWyUvsDJp57M',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 76,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
	),
	cache_time : 82,
	next_offset : 'KebLgcWFPAhJuSGv',
	switch_pm : $client->inlineBotSwitchPM(
		text : 'ZNAdWpa1UizmFHk9',
		start_param : '84Nr9iEn1PUITpfh',
	),
	switch_webview : $client->inlineBotWebView(
		text : 'xS65EtXnqN9L2mgy',
		url : 'https://docs.liveproto.dev',
	),
);
```
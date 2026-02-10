# messages.setInlineBotResults

**Description** : *Answer an inline query, for bots only*

**Layer** : 222

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
	query_id : 7292053874891743547,
	results : array(
		$client->inputBotInlineResult(
			id : 'N57tVPbmYuZEBHiR',
			type : 'HkRPaB8xtO5XwgDz',
			title : '2GycTMrlqkXsYp7V',
			description : 'QdFzRKZC9gUkvL8I',
			url : 'https://docs.liveproto.dev',
			thumb : $client->inputWebDocument(
				url : 'https://docs.liveproto.dev',
				size : 79,
				mime_type : 'KN5SHUYnweRf1lEm',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 14,
						h : 42,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'j3milQGhZAf90UwV',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : 1978863.337890625,
						w : 85,
						h : 31,
						preload_prefix_size : 77,
						video_start_ts : -1796376.001953125,
						video_codec : 'MzPfsHGaZrOLtlcu',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 1,
						title : '5VIqQxysGTH41eAn',
						performer : 'i1Ashzw6ZfuyDkPp',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'sWK0CFPi7re5Uq4L',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : '5h1kCnUJ2LWZVRbz',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			content : $client->inputWebDocument(
				url : 'https://docs.liveproto.dev',
				size : 48,
				mime_type : '73TbyMRqS8rzZCVP',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 37,
						h : 49,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'vYClW0Bz2TLEtoyM',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : -264175.46875,
						w : 56,
						h : 4,
						preload_prefix_size : 63,
						video_start_ts : 362897.84765625,
						video_codec : '0e63l8ijmQFpBK2t',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 18,
						title : '9GEL4zINY2CnKOkF',
						performer : 'cHzglNm80Jy7jdSv',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'gD2SuGOcPrlI7kZH',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'Lfr3ZtVRQbjFKGUd',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			send_message : $client->inputBotInlineMessageMediaAuto(
				invert_media : true,
				message : 'rW1dDGvwiMAyCJEa',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 44,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 28,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 55,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 72,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 76,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 6,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 36,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 16,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 24,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 39,
						language : 'CjihUmOcoxPwnLve',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 54,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 48,
						user_id : 2781932901233191893,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 78,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 50,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 99,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 84,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 38,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 14,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 70,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 85,
						document_id : -787667830198260485,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 39,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
		$client->inputBotInlineResultPhoto(
			id : '7h5tRUYwdvscEn6N',
			type : 'jbNCOehu37XWkGHn',
			photo : $client->inputPhotoEmpty(),
			send_message : $client->inputBotInlineMessageMediaAuto(
				invert_media : true,
				message : 'OiclqfIpQ7DUxVh2',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 95,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 21,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 43,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 38,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 24,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 31,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 87,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 91,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 26,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 47,
						language : 'krgb3TdGDQwcxh4S',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 38,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 58,
						user_id : 215532650950186228,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 39,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 60,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 6,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 64,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 51,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 28,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 26,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 32,
						document_id : -5102993647347646140,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 86,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
		$client->inputBotInlineResultDocument(
			id : 'jfGc9FoNAdy4J6au',
			type : 'LyV2n9GXHFThsEuI',
			title : 'R34sil8BXZjEhSg2',
			description : 'uS24QmxgaFVIzdT1',
			document : $client->inputDocumentEmpty(),
			send_message : $client->inputBotInlineMessageMediaAuto(
				invert_media : true,
				message : 'hCs3zDaNSLMJGWUZ',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 33,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 82,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 25,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 12,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 59,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 15,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 54,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 29,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 38,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 35,
						language : 'ZcTOVoDqdzepawEb',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 37,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 98,
						user_id : -7460075504450115510,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 82,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 61,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 9,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 81,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 79,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 97,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 50,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 96,
						document_id : 4882333483652875975,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
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
			id : 'xtwufzYc34N97CvQ',
			short_name : 'kv7SHbuA1pQXRW2y',
			send_message : $client->inputBotInlineMessageMediaAuto(
				invert_media : true,
				message : 'rLvTMR1w0hUgfzsC',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 52,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 85,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 66,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 82,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 84,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 56,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 31,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 32,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 26,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 41,
						language : '10ghCKXGQJaURosu',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 54,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 97,
						user_id : -6683221636023869916,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 25,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 87,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 77,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 82,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 17,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 78,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 45,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 21,
						document_id : 5690426595397595594,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 16,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
	),
	cache_time : 95,
	next_offset : 'Ikz1LvJp8XVG65sA',
	switch_pm : $client->inlineBotSwitchPM(
		text : '6KjaFhZWz5tr0XDE',
		start_param : 'OtkKMlj1C9WIqDG8',
	),
	switch_webview : $client->inlineBotWebView(
		text : 'AfwL5qWod4yKp3eC',
		url : 'https://docs.liveproto.dev',
	),
);
```
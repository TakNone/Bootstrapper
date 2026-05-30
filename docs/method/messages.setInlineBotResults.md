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
	query_id : -985734120001080512,
	results : array(
		$client->inputBotInlineResult(
			id : 'GW5iEkwPbKBj3y9l',
			type : 'lM4NBLs01tcpSAFQ',
			title : '5S4n8k7zfmyq9dHT',
			description : 'LfoO7JMnd0Kmihs3',
			url : 'https://docs.liveproto.dev',
			thumb : $client->inputWebDocument(
				url : 'https://docs.liveproto.dev',
				size : 95,
				mime_type : 'BsYnEZL87NuIf3Uw',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 87,
						h : 63,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'qgJpfsMR9BtUiCjV',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : 1871688.6162109375,
						w : 95,
						h : 79,
						preload_prefix_size : 70,
						video_start_ts : 1926046.9833984375,
						video_codec : 'Pkfe14KvV8RtOjS2',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 31,
						title : 'ItZUnJzlG6hdxKpq',
						performer : '1vJAg9bsBNz8Ew7C',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'FNd7a4Gjt3mrYcgU',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'I1bR7a0risFteTVy',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			content : $client->inputWebDocument(
				url : 'https://docs.liveproto.dev',
				size : 68,
				mime_type : 'JYk1oxnCPwHRUQ46',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 36,
						h : 73,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'ERP3d1yF75bgWDoc',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : -1524190.9521484375,
						w : 25,
						h : 65,
						preload_prefix_size : 6,
						video_start_ts : 1410424.6533203125,
						video_codec : '8wC0P71lhQi9ktBT',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 75,
						title : 'zx3o5kHEtwK6XdpF',
						performer : 'D3lJdCatmqYiUMQA',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'wcfFAorS6pgKa9Tj',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : '46StDo3Kui8j0Ipr',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			send_message : $client->inputBotInlineMessageMediaAuto(
				invert_media : true,
				message : 'F1ylIRrZEWsLMVgG',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 71,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 62,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 33,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 55,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 2,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 56,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 95,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 68,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 26,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 40,
						language : 'Sp0xJcBtMQj39mwi',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 68,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 30,
						user_id : -7429168591805771085,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 71,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 14,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 31,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 40,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 18,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 37,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 38,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 38,
						document_id : 919384190936761607,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 9,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
		$client->inputBotInlineResultPhoto(
			id : 'X8kbvsj9h0otPlTK',
			type : '83nVhQ4f92GeCKTO',
			photo : $client->inputPhotoEmpty(),
			send_message : $client->inputBotInlineMessageMediaAuto(
				invert_media : true,
				message : '9JTB5xeyEYuj4h0p',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 68,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 100,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 93,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 8,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 15,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 0,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 9,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 63,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 49,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 96,
						language : 'CMrW3sePok27qJLa',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 88,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 6,
						user_id : -5215148282293158690,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 6,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 55,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 22,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 55,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 33,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 33,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 18,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 81,
						document_id : 1797395530166047372,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 73,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
		$client->inputBotInlineResultDocument(
			id : '7TEBd4acSwC1Omjp',
			type : 'L7vaQu5XFqjwDI21',
			title : 'G2xwUoRVX6NjAfLz',
			description : 'RmL7OXIGu6YaNQlZ',
			document : $client->inputDocumentEmpty(),
			send_message : $client->inputBotInlineMessageMediaAuto(
				invert_media : true,
				message : 'Ut4JlXYWSxBZmVKL',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 80,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 2,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 14,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 96,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 17,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 7,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 63,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 24,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 2,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 97,
						language : 'pa8xNZQy5XTKB1v2',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 76,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 72,
						user_id : -879801040235071331,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 0,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 21,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 15,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 36,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 33,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 38,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 97,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 83,
						document_id : 8076419410151392166,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 64,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
		$client->inputBotInlineResultGame(
			id : 'sudo9cfmhOtY416X',
			short_name : 'hifga0JTNdq7tlOr',
			send_message : $client->inputBotInlineMessageMediaAuto(
				invert_media : true,
				message : 'qJFsWS6RpYUc7yQX',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 74,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 17,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 59,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 21,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 18,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 56,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 22,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 4,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 12,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 47,
						language : 'bIi5VqUrGEvXgz2k',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 43,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 32,
						user_id : 543741568016391479,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 49,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 74,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 27,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 6,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 40,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 52,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 67,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 43,
						document_id : -1286278139932954371,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 3,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
	),
	cache_time : 78,
	next_offset : 'Mef61uVr0dn7yo3T',
	switch_pm : $client->inlineBotSwitchPM(
		text : 'mSyPlCi3rVO1JZG5',
		start_param : 'eniRTsWKJuQtVZjb',
	),
	switch_webview : $client->inlineBotWebView(
		text : 'e3wnqD02AdgQltrB',
		url : 'https://docs.liveproto.dev',
	),
);
```
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
	query_id : 2456254382552086658,
	results : array(
		$client->inputBotInlineResult(
			id : 'n06IBbAvVTe1JyLu',
			type : 'qGJ3fkeI1OoLU5YH',
			title : 'NIeF36QdCPXSolfA',
			description : '9iKUFohnzbPmMSju',
			url : 'https://docs.liveproto.dev',
			thumb : $client->inputWebDocument(
				url : 'https://docs.liveproto.dev',
				size : 61,
				mime_type : 'MywVg6KzPILYBJ50',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 43,
						h : 74,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'pKF9mXHZqP2kAO3I',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : -81908.2900390625,
						w : 0,
						h : 33,
						preload_prefix_size : 47,
						video_start_ts : -519397.380859375,
						video_codec : 'P2YaQLlXvGDKT19C',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 0,
						title : 'XDcHo1pg65e2BSMu',
						performer : 'kV9tpsFrO8MAIjLP',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'YpCJVl82uAOSLHhn',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'Bk5YGXcdb6gHQlMa',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			content : $client->inputWebDocument(
				url : 'https://docs.liveproto.dev',
				size : 16,
				mime_type : 'R0tdPNX5GCiscD3M',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 60,
						h : 96,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'RA52hJFmcgK1jQ0x',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : -1626133.9580078125,
						w : 62,
						h : 40,
						preload_prefix_size : 81,
						video_start_ts : -940233.720703125,
						video_codec : 'guyGncEMdR8oj2zX',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 51,
						title : 'SfGCtmVPaoDkq43y',
						performer : 'EQzC3JLls6jbe0Vx',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : '8q4u2PplcvfVyCoQ',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'qMh7pH0ovTO8X5b6',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			send_message : $client->inputBotInlineMessageMediaAuto(
				invert_media : true,
				message : 'SxwtlVdBG31g5PuR',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 75,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 60,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 1,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 75,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 71,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 44,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 76,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 9,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 88,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 4,
						language : 'MKSF2rZLfnj5QsTh',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 75,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 85,
						user_id : 8016422638024758985,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 71,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 39,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 98,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 36,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 53,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 66,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 51,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 39,
						document_id : -3843077742726141333,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 45,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
		$client->inputBotInlineResultPhoto(
			id : 'hQrOxYfAKdVesXp4',
			type : 'vyXh5D2YEubz7nOR',
			photo : $client->inputPhotoEmpty(),
			send_message : $client->inputBotInlineMessageMediaAuto(
				invert_media : true,
				message : '0KACOfQRIemnDuHj',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 6,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 85,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 71,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 44,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 32,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 11,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 47,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 29,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 36,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 89,
						language : 'MZB7AlpgziOIKXVv',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 64,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 11,
						user_id : -3444937552059413379,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 57,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 58,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 61,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 62,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 37,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 57,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 74,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 90,
						document_id : 7228543338642779985,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 66,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
		$client->inputBotInlineResultDocument(
			id : 'nzcU8JhDLSXV7qZt',
			type : 'H9rELxpVGS10wfg4',
			title : 'NenrP0X4a8Ls19iZ',
			description : '0EDQyoj3CGlcXVnK',
			document : $client->inputDocumentEmpty(),
			send_message : $client->inputBotInlineMessageMediaAuto(
				invert_media : true,
				message : 'DaxbE8ZpkP47LiYd',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 97,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 51,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 84,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 75,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 95,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 53,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 58,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 33,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 23,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 10,
						language : '4GO9UtATvWlZIDEd',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 59,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 84,
						user_id : 4400594923618865534,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 42,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 92,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 94,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 75,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 23,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 36,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 64,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 19,
						document_id : -5094057245240094593,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 36,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
		$client->inputBotInlineResultGame(
			id : 'GlFMx25OhWe8qTS6',
			short_name : 'BLoT7JQb6wcF0lq9',
			send_message : $client->inputBotInlineMessageMediaAuto(
				invert_media : true,
				message : 'CImjxdEVvpl1uaU4',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 38,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 77,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 10,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 50,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 58,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 52,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 59,
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
						length : 96,
						language : 'MYx8oniUsFJqcumk',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 91,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 67,
						user_id : -8445643432533202888,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 75,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 25,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 15,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 39,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 63,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 40,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 46,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 65,
						document_id : -6352483682355855026,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 61,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
	),
	cache_time : 14,
	next_offset : 'DO3krzugQv0IqwEi',
	switch_pm : $client->inlineBotSwitchPM(
		text : 'qjSkG07oPHYADger',
		start_param : 'CpM1vAzoigS2PDO0',
	),
	switch_webview : $client->inlineBotWebView(
		text : '6E9d8gvctSY0O2Zy',
		url : 'https://docs.liveproto.dev',
	),
);
```
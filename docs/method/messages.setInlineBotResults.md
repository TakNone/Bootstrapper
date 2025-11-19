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
	query_id : -6694890890316838471,
	results : array(
		$client->inputBotInlineResult(
			id : 'pC7sd4I6mMKq1UGP',
			type : 'X19GJqtNCOSw3h0s',
			title : '8UA3DwQLraIhyFcj',
			description : 'FJTIUye3MZRKaNVc',
			url : 'https://docs.liveproto.dev',
			thumb : $client->inputWebDocument(
				url : 'https://docs.liveproto.dev',
				size : 95,
				mime_type : 'XwzStksyVFv98cZr',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 51,
						h : 32,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'ySxlB2LWi8r3jto7',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : -2096915.3583984375,
						w : 90,
						h : 51,
						preload_prefix_size : 87,
						video_start_ts : -1512308.1728515625,
						video_codec : 'i8zUobhCpmZuBg4X',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 84,
						title : 'uNFStHrGn6h0sER5',
						performer : 'cE2vU3BynA0O67IQ',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'wUiM3ab0ePn8l5KC',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'IoApNHeYLlsJxFfW',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			content : $client->inputWebDocument(
				url : 'https://docs.liveproto.dev',
				size : 31,
				mime_type : '2cyxzIN5Kh7PwFra',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 32,
						h : 82,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'bkh4JsaSoeORTMCq',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : -1141851.3046875,
						w : 49,
						h : 83,
						preload_prefix_size : 74,
						video_start_ts : -1788397.8720703125,
						video_codec : 'aWHRTIEeZ24vt10f',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 36,
						title : 'bYwTN4ZtySvrJaHF',
						performer : 'WPI3DOn6Yvl0zqm2',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'd8izFh6WCk2D3b1G',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'k4x6WlEDhr31Zdyn',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			send_message : $client->inputBotInlineMessageMediaAuto(
				invert_media : true,
				message : 'Qi7LMfJmp1Rlq4CA',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 100,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 1,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 88,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 45,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 37,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 98,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 19,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 5,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 86,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 87,
						language : 'lnv1UYOIC26KyzSH',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 24,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 98,
						user_id : -328261137418480536,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 30,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 36,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 27,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 47,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 72,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 14,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 84,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 7,
						document_id : 4383983039155764068,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 7,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
		$client->inputBotInlineResultPhoto(
			id : 'DiHNQ2yS3TxjZYVO',
			type : 'FjXoJkycDeCNzlWG',
			photo : $client->inputPhotoEmpty(),
			send_message : $client->inputBotInlineMessageMediaAuto(
				invert_media : true,
				message : '3qMQJXBuApWY5EPx',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 46,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 76,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 22,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 20,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 79,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 98,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 14,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 98,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 59,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 42,
						language : 'MRlLQPOu5p0jfyaT',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 12,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 98,
						user_id : -7112415831658630111,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 89,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 55,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 36,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 42,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 92,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 42,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 83,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 93,
						document_id : -8375271919983067020,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 32,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
		$client->inputBotInlineResultDocument(
			id : 'R7ocaItzpmy3JSnq',
			type : 'foUElsgTaCmPAi42',
			title : 'eIGw6fDWsj8Ka32L',
			description : 'NvQueH2b3GUh1Mr5',
			document : $client->inputDocumentEmpty(),
			send_message : $client->inputBotInlineMessageMediaAuto(
				invert_media : true,
				message : 'bBYRHPgeEFt2wDzM',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 95,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 62,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 53,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 36,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 24,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 69,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 14,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 35,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 86,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 28,
						language : '1CxUmEfqhucBSnZQ',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 8,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 16,
						user_id : -4792399221837106613,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 86,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 43,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 97,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 61,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 5,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 38,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 17,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 16,
						document_id : -5421110354849265675,
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
		$client->inputBotInlineResultGame(
			id : 'YhAaM92GuHZVNq60',
			short_name : 'qKkcYlwveHJyf3di',
			send_message : $client->inputBotInlineMessageMediaAuto(
				invert_media : true,
				message : 'nP8izX5lyY3cBru2',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 8,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 19,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 50,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 66,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 48,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 96,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 1,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 4,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 39,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 3,
						language : '75w6om4k1fnKrD8q',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 89,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 3,
						user_id : 2045796105238347952,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 24,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 67,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 14,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 55,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 83,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 41,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 9,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 7,
						document_id : 1658827786506942321,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 20,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
	),
	cache_time : 96,
	next_offset : 'zo2RkhguMQbZ0BOs',
	switch_pm : $client->inlineBotSwitchPM(
		text : 'pYZham5rkCAdHSIl',
		start_param : 'V3K2PJg8kDYnW1ht',
	),
	switch_webview : $client->inlineBotWebView(
		text : '02gYJziMQhb9CvSy',
		url : 'https://docs.liveproto.dev',
	),
);
```
# messages.botResults

**Description** : *Result of a query to an inline bot*

**Layer** : 218

```tl
messages.botResults#e021f2f6 flags:# gallery:flags.0?true query_id:long next_offset:flags.1?string switch_pm:flags.2?InlineBotSwitchPM switch_webview:flags.3?InlineBotWebView results:Vector<BotInlineResult> cache_time:int users:Vector<User> = messages.BotResults;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **gallery** | [`flags.0?true`](type/true) | Whether the result is a picture gallery |
| <mark>query_id</mark> | [`long`](type/long) | Query ID |
| **next_offset** | [`flags.1?string`](type/string) | The next offset to use when navigating through results |
| **switch_pm** | [`flags.2?InlineBotSwitchPM`](type/InlineBotSwitchPM) | Shown as a button on top of the remaining inline result list; if clicked, redirects the user to a private chat with the bot with the specified start parameter |
| **switch_webview** | [`flags.3?InlineBotWebView`](type/InlineBotWebView) | Shown as a button on top of the remaining inline result list; if clicked, opens the specified inline mode mini app |
| <mark>results</mark> | [`Vector<BotInlineResult>`](type/BotInlineResult) | The results |
| <mark>cache_time</mark> | [`int`](type/int) | Caching validity of the results |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users mentioned in the results |

---

## Type

[messages.BotResults](type/messages.BotResults)

---

## Example

```php
$messagesBotResults = $client->messages->botResults(
	gallery : true,
	query_id : -7755854555027815240,
	next_offset : 'p4naLNRDUMtfXE5s',
	switch_pm : $client->inlineBotSwitchPM(
		text : '2CpTrF59yPxLzKkW',
		start_param : 'qOn9Rc5XSpiDvWkA',
	),
	switch_webview : $client->inlineBotWebView(
		text : 'L76Ba9Kf2NeUmtdR',
		url : 'https://docs.liveproto.dev',
	),
	results : array(
		$client->botInlineResult(
			id : '1qzMPwhIfWsEaFTC',
			type : 'LU54xzSpyFQhqduj',
			title : 'hWQbkyqLe6UEZndv',
			description : '9SUEok3l8aPcnHvM',
			url : 'https://docs.liveproto.dev',
			thumb : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : -3330240075982306166,
				size : 43,
				mime_type : '2z1sxOVbQf0cUgNM',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 82,
						h : 63,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'cgZfonViT2Nm7KUP',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : 1446599.66796875,
						w : 5,
						h : 57,
						preload_prefix_size : 26,
						video_start_ts : 822903.5576171875,
						video_codec : 'oFxcARupyH0C4Osg',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 76,
						title : 'EPnt5GD0gjAolwiU',
						performer : 'YZK90guvBIimNezH',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'QpncV23rBwqj7EDO',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'fhFMKdm9xvWJagBc',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			content : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : -1636718978168227922,
				size : 54,
				mime_type : 'LjUu3Ypoe5AMzFWQ',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 2,
						h : 7,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'IqmSf4caHXgNF0Yw',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : -1253697.6474609375,
						w : 86,
						h : 10,
						preload_prefix_size : 57,
						video_start_ts : 1844143.36328125,
						video_codec : 'ewWhRUfiF6ISYc4q',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 33,
						title : 'sxyDT64v2XGVwhYM',
						performer : 'KQ2rFvwf4SUWGAcD',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'KUaWTIp2giQJ8dSy',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'H5B0pyEDVFj4wbLQ',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			send_message : $client->botInlineMessageMediaAuto(
				invert_media : true,
				message : 'Xyq46IT0FMHnQPB7',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 85,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 28,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 86,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 25,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 33,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 45,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 99,
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
						length : 25,
						language : 'AGaQIODwqikZeF3f',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 87,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 38,
						user_id : 4800004945041015081,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 50,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 90,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 11,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 14,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 62,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 76,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 8,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 12,
						document_id : 7022268503874088910,
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
		$client->botInlineMediaResult(
			id : '4t2zaRmDN0Eu3ldO',
			type : 'zPW3t6pD0jmreGX5',
			photo : $client->photoEmpty(
				id : 4471684338853771651,
			),
			document : $client->documentEmpty(
				id : -2928337342833970939,
			),
			title : '9FBVwugG6riEsR3T',
			description : 'hin1V7BRmYv0QEIu',
			send_message : $client->botInlineMessageMediaAuto(
				invert_media : true,
				message : 'oTzqYwvIgWJPB2hE',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 81,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 88,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 87,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 6,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 88,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 5,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 0,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 93,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 65,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 10,
						language : 'GVIjHxcJNBFYerAw',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 71,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 94,
						user_id : -5371350872066485583,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 81,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 28,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 86,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 0,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 40,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 37,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 24,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 78,
						document_id : -6853976126676637325,
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
	cache_time : 56,
	users : array(
		$client->userEmpty(
			id : 9114615465453115139,
		),
		$client->user(
			self : true,
			contact : true,
			mutual_contact : true,
			deleted : true,
			bot : true,
			bot_chat_history : true,
			bot_nochats : true,
			verified : true,
			restricted : true,
			min : true,
			bot_inline_geo : true,
			support : true,
			scam : true,
			apply_min_photo : true,
			fake : true,
			bot_attach_menu : true,
			premium : true,
			attach_menu_enabled : true,
			bot_can_edit : true,
			close_friend : true,
			stories_hidden : true,
			stories_unavailable : true,
			contact_require_premium : true,
			bot_business : true,
			bot_has_main_app : true,
			bot_forum_view : true,
			id : 8165262506749387270,
			access_hash : 1877252974540438767,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 57,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'IbA8T59COpXEwm7Z',
					reason : 'JK3VCuFbpIieHSWl',
					text : 'RvfYi36lnVWCAGQK',
				),
			),
			bot_inline_placeholder : '2aFh63tpKVLgjRCT',
			lang_code : 'ZtwzSksRhuP7dfCb',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 4,
			),
			color : $client->peerColor(
				color : 3,
				background_emoji_id : -2378069120455322838,
			),
			profile_color : $client->peerColor(
				color : 50,
				background_emoji_id : 1517580586760468530,
			),
			bot_active_users : 22,
			bot_verification_icon : 2577166450445770398,
			send_paid_messages_stars : 2403660275073401494,
		),
	),
);
```
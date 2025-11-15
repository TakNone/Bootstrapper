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
	query_id : 5422716269650442085,
	next_offset : 'E4fq6zTKrU1FjLBp',
	switch_pm : $client->inlineBotSwitchPM(
		text : 'qwb5d0nmcWAKrNfJ',
		start_param : 'jYmsXzSabxK9UDt4',
	),
	switch_webview : $client->inlineBotWebView(
		text : '3or6mkjSdftclHaw',
		url : 'https://docs.liveproto.dev',
	),
	results : array(
		$client->botInlineResult(
			id : 'ixaUX6cmh3IMTdzY',
			type : 'GhItLmfbcjA2ZKx4',
			title : 'hITzdWHktgpX15ND',
			description : 'BJqDQU7jekn42Vwc',
			url : 'https://docs.liveproto.dev',
			thumb : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : 5688876553307066129,
				size : 58,
				mime_type : 'kuOCGQHbcXxTpVhl',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 34,
						h : 94,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'JFaRs0y7nXItG4Df',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : 2025390.95703125,
						w : 44,
						h : 59,
						preload_prefix_size : 60,
						video_start_ts : 669984.921875,
						video_codec : 'TCujJHR5XAYmGIgV',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 13,
						title : '1YzbnhKsWUXdC4io',
						performer : 'Scb20FTB51YQKn9M',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : '3DysBmRPa7Q8hFLO',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'es6b7jCtzWa85NoM',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			content : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : -488248683163702794,
				size : 66,
				mime_type : 'tGhkzfc2mTx85NAP',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 57,
						h : 63,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'tS7bM9cVy0FUh1Rp',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : -866676.935546875,
						w : 9,
						h : 38,
						preload_prefix_size : 81,
						video_start_ts : 1870031.68359375,
						video_codec : 'N0qXnh6i19wY7vcO',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 2,
						title : 'zEZmOhI2NQdaAqfk',
						performer : 'xIpuyzDQTrG5odJw',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'wWy8lOtjzx0UqH4s',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'uG6MbFtjLBzgAcHs',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			send_message : $client->botInlineMessageMediaAuto(
				invert_media : true,
				message : 'Yw1Mr0XC8Aq5UtKJ',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 50,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 68,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 26,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 73,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 2,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 27,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 70,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 34,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 90,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 77,
						language : 'qJYNPwImM0xXSrh4',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 33,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 46,
						user_id : -1183606829881192292,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 12,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 27,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 82,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 18,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 61,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 66,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 36,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 86,
						document_id : -4430537291953084181,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 50,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
		$client->botInlineMediaResult(
			id : 'fIC7DlaXPGAhZWEV',
			type : 'LJBNiTc3kejh5n4A',
			photo : $client->photoEmpty(
				id : -7893397071877808543,
			),
			document : $client->documentEmpty(
				id : -3853818237812046732,
			),
			title : 'WX4hiAlOFroeR0C5',
			description : 'FC7ctPHlbeWYh3UR',
			send_message : $client->botInlineMessageMediaAuto(
				invert_media : true,
				message : 'Ugl3GO7RqTL9bQnD',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 76,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 31,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 35,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 90,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 65,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 97,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 37,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 63,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 82,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 2,
						language : 'JlYyLN3qRZVhWbga',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 65,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 78,
						user_id : -5475371369709776445,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 11,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 67,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 4,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 61,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 90,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 8,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 18,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 34,
						document_id : 8692535301144813859,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 33,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
	),
	cache_time : 9,
	users : array(
		$client->userEmpty(
			id : 8474497668004359734,
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
			id : -3255219487210680924,
			access_hash : 2044569944181478579,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 93,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '2OMv03QfFSrWL7YP',
					reason : 'ak1vOdnWFSc7eHgN',
					text : 'KgAVQoJOUkpqyWhb',
				),
			),
			bot_inline_placeholder : 'L3kpuyCVYrRfbwNm',
			lang_code : 'PlnD7cCs3WAOUe1d',
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
				max_id : 79,
			),
			color : $client->peerColor(
				color : 5,
				background_emoji_id : 5263607938406314381,
			),
			profile_color : $client->peerColor(
				color : 78,
				background_emoji_id : -4799254982035882074,
			),
			bot_active_users : 27,
			bot_verification_icon : -7727474369997325114,
			send_paid_messages_stars : -5304737902125061801,
		),
	),
);
```
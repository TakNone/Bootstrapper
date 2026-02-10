# messages.botResults

**Description** : *Result of a query to an inline bot*

**Layer** : 222

```tl
messages.botResults#e021f2f6 flags:# gallery:flags.0?true query_id:long next_offset:flags.1?string switch_pm:flags.2?InlineBotSwitchPM switch_webview:flags.3?InlineBotWebView results:Vector<BotInlineResult> cache_time:int users:Vector<User> = messages.BotResults;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	query_id : 2439821261987051048,
	next_offset : 'qNb5gBjFU3lvat2G',
	switch_pm : $client->inlineBotSwitchPM(
		text : 'MSEH71nY8JqcZhtl',
		start_param : 'H9r1AOWtnzNVoE26',
	),
	switch_webview : $client->inlineBotWebView(
		text : 'ueL24zqfJmpT8var',
		url : 'https://docs.liveproto.dev',
	),
	results : array(
		$client->botInlineResult(
			id : 'cxZf78q0WHLyFDMC',
			type : 'Bki5g4wUGQh21ajV',
			title : 'K2tNn5iDCmUel39G',
			description : '8asz5NxLhJyVqEfp',
			url : 'https://docs.liveproto.dev',
			thumb : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : 8875806738570700690,
				size : 26,
				mime_type : 'D62Q5EkUHcs7tLAS',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 99,
						h : 3,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'o8AprU3hzYnIiZSy',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : -537120.37109375,
						w : 46,
						h : 39,
						preload_prefix_size : 23,
						video_start_ts : 1373019.7080078125,
						video_codec : '6E4OXotlbU5RQkhp',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 77,
						title : 'Bq6XYms80r7OySHe',
						performer : 'ub8RPcv3r57VQL1m',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'W70qBOYij6XLheQI',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'K8gClQ5xTyGzJARU',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			content : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : 2648101667994148205,
				size : 44,
				mime_type : 'UTpenbuFdaOrx48s',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 38,
						h : 50,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'En3TH1zZPoj57ksM',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : 392795.52734375,
						w : 85,
						h : 63,
						preload_prefix_size : 17,
						video_start_ts : 1472968.439453125,
						video_codec : 'fYeHmQOnpwr8BaA4',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 23,
						title : 'U6ZNPTVJO7KMSvnW',
						performer : '1ohpviuPgEd8xMrK',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : '53uKwrIjlfcO4Hny',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'blnZEYRHVNCh1rAO',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			send_message : $client->botInlineMessageMediaAuto(
				invert_media : true,
				message : 'ntPXaSwGeBVAWO80',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 96,
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
						length : 38,
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
						length : 42,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 25,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 66,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 53,
						language : '1ZTmx087uAFwPkbd',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 72,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 64,
						user_id : 9004294665677415139,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 9,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 61,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 44,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 76,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 68,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 99,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 100,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 68,
						document_id : 7528143010802047420,
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
		$client->botInlineMediaResult(
			id : 'ios4bMDwZTRI3rej',
			type : 'cuyGvIPBHCk7zTae',
			photo : $client->photoEmpty(
				id : 4573723808100878885,
			),
			document : $client->documentEmpty(
				id : -8394042190631550887,
			),
			title : '6gqNESosAFHXrzB5',
			description : 'CpDlJFgnzs3IuYTr',
			send_message : $client->botInlineMessageMediaAuto(
				invert_media : true,
				message : 'x2M1i7CmOEgVuS65',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 93,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 10,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 21,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 78,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 42,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 58,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 29,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 37,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 69,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 72,
						language : 'HuxAet5d0PXOITrQ',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 85,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 5,
						user_id : -2031988142769937529,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 85,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 95,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 70,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 63,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 98,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 46,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 45,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 50,
						document_id : 1524494606468666457,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 52,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
	),
	cache_time : 62,
	users : array(
		$client->userEmpty(
			id : 1442834894735028490,
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
			bot_forum_can_manage_topics : true,
			id : 5157145949060324528,
			access_hash : 4989991513867492883,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 8,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'UQgwRIv5ShHoV4ui',
					reason : 'yBPYtj3LAsIGoMc8',
					text : 'EqTL3gkBt0uMQW8j',
				),
			),
			bot_inline_placeholder : 'wev2HTIOdE3YrB1U',
			lang_code : 'xlWqvQd5ktiS0Muj',
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
				max_id : 46,
			),
			color : $client->peerColor(
				color : 58,
				background_emoji_id : 15728684635148909,
			),
			profile_color : $client->peerColor(
				color : 68,
				background_emoji_id : -718796373573747717,
			),
			bot_active_users : 27,
			bot_verification_icon : 5584102559730496307,
			send_paid_messages_stars : -8769266453194504214,
		),
	),
);
```
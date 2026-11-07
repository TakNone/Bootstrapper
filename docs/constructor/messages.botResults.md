# messages.botResults

**Description** : *Result of a query to an inline bot*

**Layer** : 233

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
	query_id : 4077498476933687018,
	next_offset : 'iGmCapstJHBYhrPu',
	switch_pm : $client->inlineBotSwitchPM(
		text : 'MkAecj0ha7SPvJi8',
		start_param : 'asqhwUPTL7GK1Iv6',
	),
	switch_webview : $client->inlineBotWebView(
		text : '6v4fV8DF5jceTMwz',
		url : 'https://docs.liveproto.dev',
	),
	results : array(
		$client->botInlineResult(
			id : 'l12KcrkYfJnBAZ4P',
			type : 'McUoDviZTVBK6u5m',
			title : 'SuRyhOTmDq7Kj46G',
			description : 's8oRUW0f5BDQ4vtZ',
			url : 'https://docs.liveproto.dev',
			thumb : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : -1877874792468693809,
				size : 21,
				mime_type : 'MgbG869pAnmiXH3q',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 23,
						h : 21,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'TZXq3MjBJ75KCDGw',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : -1731405.263671875,
						w : 26,
						h : 5,
						preload_prefix_size : 28,
						video_start_ts : 1392407.6318359375,
						video_codec : 'Ov8xT1ew26F4HnVj',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 73,
						title : 'uIxLq3K49cZFbY05',
						performer : 'tEHsFJ4Di1CYvh9R',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'IuDVlbZaXmPB6FUL',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'rOHiZg4yDa5ItmzT',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			content : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : -3868422709521141243,
				size : 62,
				mime_type : 'ZLKaI938xrBOkJP5',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 5,
						h : 91,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'ZpCF8STXb1MHwdmQ',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : -360908.970703125,
						w : 55,
						h : 28,
						preload_prefix_size : 2,
						video_start_ts : 439160.0205078125,
						video_codec : 'GoW9C3cIqLRtygOv',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 17,
						title : 'lWhX4LjRIkiP9UM7',
						performer : '2p3toakymwDCcRQf',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'eu4VSZCKL8gcDBQf',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'El8zOX9g3xI0HspT',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			send_message : $client->botInlineMessageMediaAuto(
				invert_media : true,
				message : '5617ohfpIsgMven9',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 90,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 27,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 84,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 8,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 81,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 94,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 69,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 70,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 63,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 21,
						language : '9hsrJWNEnqbK32gx',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 10,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 74,
						user_id : -8145554574244179612,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 18,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 94,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 74,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 27,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 28,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 67,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 96,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 22,
						document_id : -6433061288112102995,
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
						length : 15,
						date : 89,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 52,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 10,
						old_text : '75gcWJjdX3RQALEF',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 32,
					),
					$client->messageEntityTonAddress(
						offset : 0,
						length : 62,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
		$client->botInlineMediaResult(
			id : '2ZSAf10rouJcRt3L',
			type : 'FJyAdX42px9wzQCS',
			photo : $client->photoEmpty(
				id : 5669533480678259445,
			),
			document : $client->documentEmpty(
				id : 8973817157528463439,
			),
			title : 'pwbL3ajidISnZWVe',
			description : 'pecvuVzBrfKonJI8',
			send_message : $client->botInlineMessageMediaAuto(
				invert_media : true,
				message : 'vKeUJVgQaRyWowdn',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 74,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 56,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 69,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 42,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 12,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 4,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 27,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 70,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 55,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 77,
						language : '30mMECOSliFLofaZ',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 92,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 2,
						user_id : 2678276345068019591,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 51,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 76,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 61,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 21,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 45,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 7,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 21,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 96,
						document_id : -8749541213307616392,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 58,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 46,
						date : 62,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 37,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 99,
						old_text : '8C6yM73Nwl1dVIFm',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 20,
					),
					$client->messageEntityTonAddress(
						offset : 0,
						length : 48,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
	),
	cache_time : 81,
	users : array(
		$client->userEmpty(
			id : -4607154615097616768,
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
			bot_can_manage_bots : true,
			bot_guestchat : true,
			bot_guard : true,
			bot_forum_sidebar : true,
			id : -3560376885175642468,
			access_hash : 308121109739847533,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 56,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'YfFMPV7Lm82kAJHW',
					reason : 'Wsly1RjTMqodXAbU',
					text : 'VL82IcR95QyhHkYK',
				),
			),
			bot_inline_placeholder : '1Sq4UuriByVRjW0J',
			lang_code : 'CJSzBGfrtW0hka4I',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					deletable : true,
					expired : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 23,
			),
			color : $client->peerColor(
				color : 59,
				background_emoji_id : -6686608525909471435,
			),
			profile_color : $client->peerColor(
				color : 99,
				background_emoji_id : 6149998524919095204,
			),
			bot_active_users : 34,
			bot_verification_icon : 6148741961602116465,
			send_paid_messages_stars : 4338301529375263831,
			linked_community_id : -4735079032800365775,
		),
	),
);
```
# messages.botResults

**Description** : *Result of a query to an inline bot*

**Layer** : 227

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
	query_id : 4775454725643941777,
	next_offset : 'eQo67MGhPqOyglV0',
	switch_pm : $client->inlineBotSwitchPM(
		text : 'Scvlyjs4JOaIDP1e',
		start_param : 'KeZzxYmVkw415aqB',
	),
	switch_webview : $client->inlineBotWebView(
		text : 'lz8OgdbLpAEQmriT',
		url : 'https://docs.liveproto.dev',
	),
	results : array(
		$client->botInlineResult(
			id : 'aTipmHXBIECnlP9y',
			type : 'Lehtf8QpqlC1uXn5',
			title : 'qVnjzZmy2kEeluSU',
			description : 'h2OJu1YwsrMidSQy',
			url : 'https://docs.liveproto.dev',
			thumb : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : -7021815937775303300,
				size : 5,
				mime_type : 'ecskfO8RVUYLMQgd',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 71,
						h : 16,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'vUisr7w9DFJRxlW0',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : -741329.2333984375,
						w : 63,
						h : 26,
						preload_prefix_size : 18,
						video_start_ts : 1959923.0634765625,
						video_codec : 'aCE5Wlj2qrk3HcwQ',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 47,
						title : 'fXD1eWySp5Qn6hvs',
						performer : '5iWj68tSOrEvIBPK',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'M8qfGP1yeITFvDXo',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : '1fnl2TiqWZB0pmhR',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			content : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : 7622801558611935719,
				size : 54,
				mime_type : 'WlY8v17hJjZemfB5',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 20,
						h : 60,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : '0kJKPUdAnLZswISX',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : 833830.505859375,
						w : 66,
						h : 66,
						preload_prefix_size : 37,
						video_start_ts : -1136306.177734375,
						video_codec : '8caJAEn2RGMVTCSo',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 83,
						title : '8bDmrvleNEjT0312',
						performer : 'wQZIDJRT7keKhmnF',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : '26ivKQdSZTgjqmHu',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : '3YjuGUzIKHB41e8X',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			send_message : $client->botInlineMessageMediaAuto(
				invert_media : true,
				message : 'g9foE5yVnvHN3bal',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 49,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 100,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 53,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 85,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 21,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 40,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 22,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 2,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 86,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 100,
						language : '24Ba8GM9lOPVL6TH',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 9,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 53,
						user_id : 5557822859053362467,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 54,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 89,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 62,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 87,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 95,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 73,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 37,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 50,
						document_id : 7701637644809102852,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 56,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 28,
						date : 84,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 18,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 14,
						old_text : 'MxlKtjfHzevZmD2y',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 13,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
		$client->botInlineMediaResult(
			id : 'bNAP74s8d9eDOJt1',
			type : 'FeLlroCOfc831Gmh',
			photo : $client->photoEmpty(
				id : -2647160613074771572,
			),
			document : $client->documentEmpty(
				id : 8208589949349216641,
			),
			title : '456sfn8hkrTBM9Lb',
			description : '4LwvK0253CEetJPl',
			send_message : $client->botInlineMessageMediaAuto(
				invert_media : true,
				message : 'wMlrevICXHcSz1J0',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 35,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 70,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 45,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 6,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 61,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 18,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 38,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 76,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 17,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 79,
						language : '0vnFjHOJDkmwU9IB',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 82,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 100,
						user_id : 7383193365906452766,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 38,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 46,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 61,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 26,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 2,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 88,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 98,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 42,
						document_id : 5769617714616576031,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 18,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 67,
						date : 30,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 66,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 23,
						old_text : 'DUpEIr8zsJY01Rjt',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 5,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
	),
	cache_time : 51,
	users : array(
		$client->userEmpty(
			id : 2968967699398562264,
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
			id : 8986054226267147097,
			access_hash : -3319335618693605937,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 49,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'aUZ1sibAcJmD2hCS',
					reason : 'LFlHYPa6O5vc7ADN',
					text : 'Qkfs8Ic9MaSpemJj',
				),
			),
			bot_inline_placeholder : 'gjTvpZXCqAwFBhun',
			lang_code : 'neQBGcizYgkvRAhU',
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
				max_id : 75,
			),
			color : $client->peerColor(
				color : 89,
				background_emoji_id : -5510788474496863534,
			),
			profile_color : $client->peerColor(
				color : 73,
				background_emoji_id : 2828912742559547494,
			),
			bot_active_users : 11,
			bot_verification_icon : -1500598588992276584,
			send_paid_messages_stars : 185125093905187689,
		),
	),
);
```
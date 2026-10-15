# messages.botResults

**Description** : *Result of a query to an inline bot*

**Layer** : 229

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
	query_id : 3954859616552868808,
	next_offset : 'mzUSnwM9s4vXacLZ',
	switch_pm : $client->inlineBotSwitchPM(
		text : 'yj7g5BhO1DH3Lnsc',
		start_param : 'f6oylkHKs9ugS0n2',
	),
	switch_webview : $client->inlineBotWebView(
		text : '90o3e6G5zh2cIrql',
		url : 'https://docs.liveproto.dev',
	),
	results : array(
		$client->botInlineResult(
			id : '2ohIXkvYJUMQgHx5',
			type : 'TN2HBWqAw8smnVca',
			title : 'amOpNCKiT8ADQwds',
			description : 'dqxUHmhZNDicfnMw',
			url : 'https://docs.liveproto.dev',
			thumb : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : 2609509089218709571,
				size : 50,
				mime_type : 'z6RdVx2XILEQCh5Z',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 52,
						h : 27,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : '3mYWthBbsLk7vwXd',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : 102142.1640625,
						w : 5,
						h : 66,
						preload_prefix_size : 26,
						video_start_ts : 323235.8720703125,
						video_codec : 'JclubZDB6o5f4s0T',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 75,
						title : '1h2CJewLH7Ia8fX4',
						performer : 'cru0VzidFl4hP2mt',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'br3GYKOk8VFuQNlI',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'jP89KoTpez1AiUJQ',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			content : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : 4194736345719027744,
				size : 74,
				mime_type : 'zOXimJ3jqw6YAUNQ',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 37,
						h : 88,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'G5YXjKmQqkb7RrNZ',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : -1276019.265625,
						w : 20,
						h : 99,
						preload_prefix_size : 84,
						video_start_ts : -294148.962890625,
						video_codec : 'e5W6aDAIYiSul4Fz',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 0,
						title : 'Z2LNK6bIpVSm0aYC',
						performer : 'fdFTLCg9jHX4No6e',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'YNahknBFgUDRQd2w',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'En6RfSJi3y7Z4Oac',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			send_message : $client->botInlineMessageMediaAuto(
				invert_media : true,
				message : 'fEVNDtcWAQ3OIHS2',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 22,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 78,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 70,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 30,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 42,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 36,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 43,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 10,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 45,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 66,
						language : 'r2ANiqjD67bQZfCG',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 91,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 6,
						user_id : -3342412092698834979,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 86,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 53,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 22,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 59,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 64,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 6,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 12,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 46,
						document_id : 3062264028325579790,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 75,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 70,
						date : 17,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 4,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 21,
						old_text : 'M2eOZmhfz371E4Cc',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 34,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
		$client->botInlineMediaResult(
			id : 'JkVYyFKXM7hDB0S4',
			type : '4mAhrTR2MZEB6zcd',
			photo : $client->photoEmpty(
				id : -2856990647603198163,
			),
			document : $client->documentEmpty(
				id : 5805396357497751884,
			),
			title : 'MkUI760BOwjGXbou',
			description : 'RjP8WkTMX0Ef4Abl',
			send_message : $client->botInlineMessageMediaAuto(
				invert_media : true,
				message : 'Uw3NVuZEzj2M8xTb',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 81,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 93,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 46,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 2,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 38,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 1,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 57,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 33,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 64,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 49,
						language : 'Jqtpk0AuDb3woyHT',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 99,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 47,
						user_id : -7934114395827020793,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 94,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 37,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 5,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 78,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 93,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 20,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 34,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 63,
						document_id : -5246529633504450942,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 60,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 53,
						date : 67,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 33,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 42,
						old_text : 'UM7Ia8j2YSzoep6c',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 26,
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
			id : 1344079272459774479,
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
			id : -2213733130189180677,
			access_hash : -8712130495237055382,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 78,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'YmtU3Do7V8fndMwP',
					reason : 'TS1djKu29Vvc4QI5',
					text : 'W2Gj0DwyPZrc81hk',
				),
			),
			bot_inline_placeholder : 'Qet8dOzRjYvXqKIC',
			lang_code : 'gWtEx7bduF6UlJkG',
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
				max_id : 86,
			),
			color : $client->peerColor(
				color : 18,
				background_emoji_id : 8774093492233208475,
			),
			profile_color : $client->peerColor(
				color : 10,
				background_emoji_id : -5150858322197174605,
			),
			bot_active_users : 15,
			bot_verification_icon : -256252954282463893,
			send_paid_messages_stars : 5328312758545663849,
			linked_community_id : 4499219029962837001,
		),
	),
);
```
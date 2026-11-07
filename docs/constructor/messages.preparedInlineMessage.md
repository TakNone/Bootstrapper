# messages.preparedInlineMessage

**Description** : *Represents a prepared inline message received via a bot&#039;s mini app, that can be sent to some chats &raquo;*

**Layer** : 229

```tl
messages.preparedInlineMessage#ff57708d query_id:long result:BotInlineResult peer_types:Vector<InlineQueryPeerType> cache_time:int users:Vector<User> = messages.PreparedInlineMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>query_id</mark> | [`long`](type/long) | The query_id to pass to messages.sendInlineBotResult |
| <mark>result</mark> | [`BotInlineResult`](type/BotInlineResult) | The contents of the message, to be shown in a preview |
| <mark>peer_types</mark> | [`Vector<InlineQueryPeerType>`](type/InlineQueryPeerType) | Types of chats where this message can be sent |
| <mark>cache_time</mark> | [`int`](type/int) | Caching validity of the results |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users mentioned in the results |

---

## Type

[messages.PreparedInlineMessage](type/messages.PreparedInlineMessage)

---

## Example

```php
$messagesPreparedInlineMessage = $client->messages->preparedInlineMessage(
	query_id : 6160521026338618339,
	result : $client->botInlineResult(
		id : 'noYHGKibEQgcJaTF',
		type : 'PdAuT4yXs3NDtI5Y',
		title : 'RSqa2sLIAghKbouv',
		description : 'EG3sd8k5BW9qScyw',
		url : 'https://docs.liveproto.dev',
		thumb : $client->webDocument(
			url : 'https://docs.liveproto.dev',
			access_hash : -1469306789934361650,
			size : 69,
			mime_type : 'Azan78yNZgPL2Got',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 35,
					h : 39,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'I2FxvtZClkG6Ud9i',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1005910.3818359375,
					w : 80,
					h : 34,
					preload_prefix_size : 19,
					video_start_ts : -679146.56640625,
					video_codec : '3zRNV5rAn8D6B4Et',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 65,
					title : 'bhQSkPx52RUiEXyv',
					performer : 'kr1lE7cOoFUpeay2',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'OEtQzUyJB6gdVN9K',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'pS89Jw130INoMtXH',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		content : $client->webDocument(
			url : 'https://docs.liveproto.dev',
			access_hash : -7549134009134929420,
			size : 24,
			mime_type : 'k3GDbHLaOlhAYmK4',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 21,
					h : 88,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'XDVTw2vrW1LniAK6',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1190204.4716796875,
					w : 100,
					h : 3,
					preload_prefix_size : 17,
					video_start_ts : -853939.5703125,
					video_codec : 'q8m7azlcyfWJTpYt',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 30,
					title : 'o7xpujnyXziB8LUY',
					performer : 'AGtDiqgjrlb7O6ds',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'VT1Iz37Elm2eu0HZ',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'BGjHaD4e9OwiZovJ',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		send_message : $client->botInlineMessageMediaAuto(
			invert_media : true,
			message : 'V6qwvQlyEsizBXNr',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 60,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 81,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 65,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 97,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 81,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 44,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 27,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 50,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 55,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 48,
					language : 'kWjnBDfyY8NxXmaC',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 18,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 36,
					user_id : 6721112309325666014,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 36,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 60,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 14,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 75,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 53,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 23,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 67,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 59,
					document_id : -5183713118691176847,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 5,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 31,
					date : 88,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 81,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 90,
					old_text : 'FrcWVqYduZRBhyeE',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 46,
				),
			),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
		),
	),
	peer_types : array(
		$client->inlineQueryPeerTypeSameBotPM(),
		$client->inlineQueryPeerTypePM(),
		$client->inlineQueryPeerTypeChat(),
		$client->inlineQueryPeerTypeMegagroup(),
		$client->inlineQueryPeerTypeBroadcast(),
		$client->inlineQueryPeerTypeBotPM(),
	),
	cache_time : 61,
	users : array(
		$client->userEmpty(
			id : 5135278561404521947,
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
			id : 8751698994903692982,
			access_hash : -6563177078225224468,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 95,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '6sHLUJYFIcfayNm9',
					reason : 'hvrEKOpBXkRYFin8',
					text : 'jCxp6em3RPWiaucF',
				),
			),
			bot_inline_placeholder : '8ilRCzvuTI2o3hnS',
			lang_code : 'x6sBHZRy4X9Qg2NL',
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
				max_id : 21,
			),
			color : $client->peerColor(
				color : 62,
				background_emoji_id : 6223516569496310034,
			),
			profile_color : $client->peerColor(
				color : 87,
				background_emoji_id : -2049072792165003834,
			),
			bot_active_users : 25,
			bot_verification_icon : -1349140342195937038,
			send_paid_messages_stars : -8275259440936617406,
			linked_community_id : 5119140386499040833,
		),
	),
);
```
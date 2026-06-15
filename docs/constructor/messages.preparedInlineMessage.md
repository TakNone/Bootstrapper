# messages.preparedInlineMessage

**Description** : *Represents a prepared inline message received via a bot&#039;s mini app, that can be sent to some chats &raquo;*

**Layer** : 227

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
	query_id : -7438550276691778367,
	result : $client->botInlineResult(
		id : 'ZDRG6WFuqpIcJHSO',
		type : 'dBOrxSR6QlDigu9I',
		title : 'vif0StqPcJrKVzLo',
		description : 'Fbh0WV9qOJIQsfxT',
		url : 'https://docs.liveproto.dev',
		thumb : $client->webDocument(
			url : 'https://docs.liveproto.dev',
			access_hash : -6582663337355301865,
			size : 52,
			mime_type : 'ocs8gurO6DwA1aqM',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 65,
					h : 11,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'oE1B2Wy6VXhUqj3k',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1446977.32421875,
					w : 35,
					h : 17,
					preload_prefix_size : 20,
					video_start_ts : -899927.171875,
					video_codec : 'cAuDIbTSCYxWhMLU',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 39,
					title : 'PAXECJ5pUV8FLQri',
					performer : 'CETDzAI0hYZpmUcS',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'IdnRqB4wWASCxP2r',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'rKla2hEXPNjHQdMk',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		content : $client->webDocument(
			url : 'https://docs.liveproto.dev',
			access_hash : -3057858843762455461,
			size : 64,
			mime_type : 'HRxo2meUT7rbfcXl',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 96,
					h : 21,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '601R7ngramzkZ4FK',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 276872.8173828125,
					w : 72,
					h : 82,
					preload_prefix_size : 34,
					video_start_ts : 1045758.814453125,
					video_codec : 'sQzBkMuGe9DOAWbc',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 46,
					title : 'ZthjMRcsS6GJervx',
					performer : 'iUm4Po32zbwsQja7',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'FpD6L7R52J8KUZEc',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '8on9rMgRQm5E462f',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		send_message : $client->botInlineMessageMediaAuto(
			invert_media : true,
			message : 'P0ugGixZI9K3BUo6',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 3,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 68,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 32,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 72,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 89,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 56,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 10,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 20,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 52,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 16,
					language : 'Pf8IDvE0Z7ohb65O',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 59,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 36,
					user_id : -1624981370958665008,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 32,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 23,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 75,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 2,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 87,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 58,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 58,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 60,
					document_id : 4915730274405730128,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 10,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 4,
					date : 44,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 58,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 97,
					old_text : 'OygZGrC06Ad81vIj',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 73,
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
	cache_time : 34,
	users : array(
		$client->userEmpty(
			id : 3219424454104281443,
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
			id : 6465016057654441006,
			access_hash : 2392657915427585543,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 78,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'mL749zaQy8IvulGg',
					reason : 'cBKfYaVA8xSEteqb',
					text : '8zflEHSxKmahq1b4',
				),
			),
			bot_inline_placeholder : 'FzMfqsT7JjvPVAeO',
			lang_code : 'O0FlKzhe8p7qcx4M',
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
				max_id : 33,
			),
			color : $client->peerColor(
				color : 51,
				background_emoji_id : -6102246125039086694,
			),
			profile_color : $client->peerColor(
				color : 100,
				background_emoji_id : -8118874491513178451,
			),
			bot_active_users : 67,
			bot_verification_icon : -340025797974133051,
			send_paid_messages_stars : -9195079613340200174,
		),
	),
);
```
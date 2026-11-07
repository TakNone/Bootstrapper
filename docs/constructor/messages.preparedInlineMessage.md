# messages.preparedInlineMessage

**Description** : *Represents a prepared inline message received via a bot&#039;s mini app, that can be sent to some chats &raquo;*

**Layer** : 233

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
	query_id : 248664722300939377,
	result : $client->botInlineResult(
		id : 'k354cWtUPpHbL7JE',
		type : 'RoBdsk7VSOzatIKu',
		title : 'rqY1x27nO0wem3dz',
		description : '60Lhaut5woH1XJNk',
		url : 'https://docs.liveproto.dev',
		thumb : $client->webDocument(
			url : 'https://docs.liveproto.dev',
			access_hash : 8170534363279361249,
			size : 93,
			mime_type : 'd4yl3rxgHIf9KONR',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 58,
					h : 2,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'dROiFJWb2m3Srqt8',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1118448.42578125,
					w : 21,
					h : 20,
					preload_prefix_size : 45,
					video_start_ts : 109467.7880859375,
					video_codec : 'WGxERYcn4g5eQ6im',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 29,
					title : 'CDO7fJx4zpRYjPLv',
					performer : 'RSKjmcaFk02wfB9H',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'AsWSKojXbNuUwQZi',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'RUhAv59ulayrbTfG',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		content : $client->webDocument(
			url : 'https://docs.liveproto.dev',
			access_hash : -3949562663821996140,
			size : 79,
			mime_type : 'OlJASeghaGNpvjqV',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 71,
					h : 70,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'Mtblejyzx4VEWRPC',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1503227.2138671875,
					w : 74,
					h : 15,
					preload_prefix_size : 47,
					video_start_ts : -888048.291015625,
					video_codec : 'qvwfWY7ngUXc9sAj',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 4,
					title : 'VUl1OMx2jhGuzWKA',
					performer : 'vCSNpewXi0R5jbKf',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '78a5kFirmqof2HsV',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'lWs5UEHvCiFXTwk2',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		send_message : $client->botInlineMessageMediaAuto(
			invert_media : true,
			message : 'hAGcgEYoTzDbpuCs',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 93,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 29,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 22,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 99,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 27,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 16,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 47,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 97,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 19,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 88,
					language : '7dOFmV1GxbnfzrA6',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 22,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 54,
					user_id : -309125829274130574,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 11,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 30,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 99,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 80,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 33,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 33,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 19,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 38,
					document_id : 7593136049745758739,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 93,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 85,
					date : 31,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 78,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 83,
					old_text : 'r3TIsokQBcL56plu',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 22,
				),
				$client->messageEntityTonAddress(
					offset : 0,
					length : 97,
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
	cache_time : 53,
	users : array(
		$client->userEmpty(
			id : 5602174648377290885,
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
			id : -4624921207355760282,
			access_hash : -4160187164842976289,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 13,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'B1pIQc8jYeDvfVFz',
					reason : 'mvk4i7tzXDBlwWnE',
					text : 'DWHklsZ23tOP80Mv',
				),
			),
			bot_inline_placeholder : '6h0dK2GmrHASTCew',
			lang_code : 'b8nIyZceCTdQ2plw',
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
				max_id : 52,
			),
			color : $client->peerColor(
				color : 68,
				background_emoji_id : 6977687211594935380,
			),
			profile_color : $client->peerColor(
				color : 87,
				background_emoji_id : -2810797451342671817,
			),
			bot_active_users : 98,
			bot_verification_icon : -3339553696909786266,
			send_paid_messages_stars : -3357192565722275075,
			linked_community_id : 3627115147242984214,
		),
	),
);
```
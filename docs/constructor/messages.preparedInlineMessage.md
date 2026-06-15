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
	query_id : -7668081070751436343,
	result : $client->botInlineResult(
		id : '2raQqMpRYWcivdyF',
		type : 'aYfLuOXoDiCFJ5kW',
		title : '5RjX2idQwE6h7JAn',
		description : 'tqLW3Fwn7TGJQsuU',
		url : 'https://docs.liveproto.dev',
		thumb : $client->webDocument(
			url : 'https://docs.liveproto.dev',
			access_hash : 1826277039707524371,
			size : 65,
			mime_type : 'FG7MiAzc9qZB4CX6',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 40,
					h : 37,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '4Iy3P5eHblmhktvs',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1356566.3037109375,
					w : 6,
					h : 66,
					preload_prefix_size : 90,
					video_start_ts : 932023.6044921875,
					video_codec : '5AewsoCI91BicHdT',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 31,
					title : '3RwI4W2aOfkJ0vsm',
					performer : 'H5LW76fjOcBC2Rb9',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '62UQA8hGJwCMZLkF',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'OaluZfX2Li1RhbNP',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		content : $client->webDocument(
			url : 'https://docs.liveproto.dev',
			access_hash : 425344290939729214,
			size : 18,
			mime_type : 'LvCVRDUdQsSfpwT7',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 38,
					h : 21,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'AfB7Wns2D0Npuetl',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1036632.462890625,
					w : 49,
					h : 64,
					preload_prefix_size : 23,
					video_start_ts : 1755662.18359375,
					video_codec : 'l9E6WsOHzrg7PUTj',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 28,
					title : 'pJIoLRNQXaAEv8n9',
					performer : 'JuGnvRBDqsdcVACX',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'hfimdHuaKXlvjWn4',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '47hRqTK203WraSod',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		send_message : $client->botInlineMessageMediaAuto(
			invert_media : true,
			message : 't2JbkigfSFPNZ9vW',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 2,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 47,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 17,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 26,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 42,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 60,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 1,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 43,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 23,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 11,
					language : 'N02uf81AcWjbv6sI',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 36,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 87,
					user_id : -6858181138398502354,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 11,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 71,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 84,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 75,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 24,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 64,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 43,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 98,
					document_id : 928751405197772429,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 87,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 37,
					date : 89,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 72,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 19,
					old_text : 'QumsPYGlB0frdHjU',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 32,
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
	cache_time : 1,
	users : array(
		$client->userEmpty(
			id : 385972912695137640,
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
			id : 8605625883886109674,
			access_hash : -205799236822712944,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 90,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'GIlewBf8PAi9UtzK',
					reason : 'ls5pWAf9oOZ6c10U',
					text : 'FYZxsBSct5NbK3aD',
				),
			),
			bot_inline_placeholder : '4pxi6BLKNGgfsdz3',
			lang_code : 'QAzO0Lbovm4xMVSC',
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
				max_id : 97,
			),
			color : $client->peerColor(
				color : 30,
				background_emoji_id : -7572249621002251855,
			),
			profile_color : $client->peerColor(
				color : 89,
				background_emoji_id : -6454825694077723406,
			),
			bot_active_users : 74,
			bot_verification_icon : 5973224557324861462,
			send_paid_messages_stars : 6341563370066905105,
		),
	),
);
```
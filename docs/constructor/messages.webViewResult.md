# messages.webViewResult

**Layer** : 218

```tl
messages.webViewResult#aadf159b result:BotInlineResult users:Vector<User> = messages.WebViewResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>result</mark> | [`BotInlineResult`](type/BotInlineResult) | NOTHING |
| <mark>users</mark> | [`Vector<User>`](type/User) | NOTHING |

---

## Type

[messages.WebViewResult](type/messages.WebViewResult)

---

## Example

```php
$messagesWebViewResult = $client->messages->webViewResult(
	result : $client->botInlineResult(
		id : 'VTkpW4efLQdnzlmG',
		type : 'lCm0TxwF9PyiSOKG',
		title : 'AWQLP63b2KVJMdg1',
		description : 'crThNAQiqbxV3oPk',
		url : 'https://docs.liveproto.dev',
		thumb : $client->webDocument(
			url : 'https://docs.liveproto.dev',
			access_hash : -6125857984170878050,
			size : 10,
			mime_type : 'kdw5OymqbgBPQISs',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 42,
					h : 46,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'Y4V2nm3M1xz5cgHJ',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -990439.357421875,
					w : 45,
					h : 28,
					preload_prefix_size : 95,
					video_start_ts : 1165342.080078125,
					video_codec : 'wz84fQbJlMHnRDUp',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 66,
					title : 'GDgraetxUd1L7T9H',
					performer : '3xUlczv1JKVWg5us',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'XlWVE5Hz9NdYcZMx',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '4aBlOHZ18AdGCVEo',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		content : $client->webDocument(
			url : 'https://docs.liveproto.dev',
			access_hash : 1729670862288176652,
			size : 66,
			mime_type : 'y5wUEAKv3jaHnlDq',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 70,
					h : 99,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'XNi2KbvzZpfcYtMr',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -120188.48828125,
					w : 76,
					h : 31,
					preload_prefix_size : 11,
					video_start_ts : -622572.5458984375,
					video_codec : 'HimbQU1CZskFW23c',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 87,
					title : 'a2iAUmjkhLYBqKsE',
					performer : 'iyMfT1nRZ7OCVsh6',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'fMwalLhsz4jqQrNF',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'o6cxtMI0RCGVrDAz',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		send_message : $client->botInlineMessageMediaAuto(
			invert_media : true,
			message : '2LnXDKsgAIlYTP73',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 86,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 67,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 78,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 10,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 60,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 69,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 75,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 92,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 11,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 49,
					language : 'cNRhrUP8inYBCmJp',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 62,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 62,
					user_id : -6245828571974249484,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 83,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 76,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 95,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 63,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 2,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 3,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 15,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 57,
					document_id : -2549825523341398074,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 70,
				),
			),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : -1450058273486582688,
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
			id : 2547383032786343283,
			access_hash : 3799024622113277631,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 32,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ODQA1RCJiY2umwpb',
					reason : 'BtVSNP0TXUqhH2ad',
					text : '89NK56BpMJVzRQSP',
				),
			),
			bot_inline_placeholder : 'JBu6GH7gULjSqfkw',
			lang_code : 'gvHfRwsFmT0KCqrV',
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
				max_id : 54,
			),
			color : $client->peerColor(
				color : 11,
				background_emoji_id : -2757518941162465639,
			),
			profile_color : $client->peerColor(
				color : 80,
				background_emoji_id : 2688113530769347836,
			),
			bot_active_users : 40,
			bot_verification_icon : -8797463629745821362,
			send_paid_messages_stars : -7382781320443332229,
		),
	),
);
```
# help.premiumPromo

**Description** : *Telegram Premium promotion information*

**Layer** : 222

```tl
help.premiumPromo#5334759c status_text:string status_entities:Vector<MessageEntity> video_sections:Vector<string> videos:Vector<Document> period_options:Vector<PremiumSubscriptionOption> users:Vector<User> = help.PremiumPromo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>status_text</mark> | [`string`](type/string) | Description of the current state of the user's Telegram Premium subscription |
| <mark>status_entities</mark> | [`Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |
| <mark>video_sections</mark> | [`Vector<string>`](type/string) | A list of premium feature identifiers », associated to each video |
| <mark>videos</mark> | [`Vector<Document>`](type/Document) | A list of videos |
| <mark>period_options</mark> | [`Vector<PremiumSubscriptionOption>`](type/PremiumSubscriptionOption) | Telegram Premium subscription options |
| <mark>users</mark> | [`Vector<User>`](type/User) | Related user information |

---

## Type

[help.PremiumPromo](type/help.PremiumPromo)

---

## Example

```php
$helpPremiumPromo = $client->help->premiumPromo(
	status_text : 'hJRlbYc8ZeGqxOiu',
	status_entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 30,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 8,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 92,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 64,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 5,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 62,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 82,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 1,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 6,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 92,
			language : '8oSH0yOJjgdYe39E',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 49,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 99,
			user_id : -3726131702901252863,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 62,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 71,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 53,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 76,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 48,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 11,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 65,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 6,
			document_id : 6501725709851190439,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 5,
		),
	),
	video_sections : array('zHwMR9OIYKW5qPEB'),
	videos : array(
		$client->documentEmpty(
			id : 6689089804135587014,
		),
		$client->document(
			id : -822373551916078927,
			access_hash : 7360498557226544036,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 10,
			mime_type : '5y9HudCwr0af1S2R',
			size : 7080467156485819230,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'NVXCiOIkDKRg4JL7',
				),
				$client->photoSize(
					type : 'ctFy7Rr29VohJOaW',
					w : 96,
					h : 22,
					size : 74,
				),
				$client->photoCachedSize(
					type : 'uTkPRChi5slXGdax',
					w : 84,
					h : 16,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '6eJqxOfEbd3okBtn',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'y4ZLcBd8YkRC2NOH',
					w : 17,
					h : 9,
					sizes : array(8),
				),
				$client->photoPathSize(
					type : 'Jdnm4e9hQXAUZxE1',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'MFeuUyR4omwthsC9',
					w : 99,
					h : 98,
					size : 17,
					video_start_ts : -1170115.6767578125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 3759734104847640817,
					background_colors : array(79),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -2484180380111839495,
					background_colors : array(68),
				),
			),
			dc_id : 76,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 48,
					h : 65,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'KVJe19Pc5nyFHmWG',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 71,
						x : 1497378.5126953125,
						y : -1321053.8564453125,
						zoom : -321268.091796875,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -715238.9716796875,
					w : 99,
					h : 68,
					preload_prefix_size : 78,
					video_start_ts : 1462985.9541015625,
					video_codec : 'GaJbYwhos3C0nKOm',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 49,
					title : 'hBAIYOdZtMR6CjKb',
					performer : '0p9BnCyMh5NDw1bW',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'IJarBCujQkKR9Ni0',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'Arw6PMQSiU3smD1o',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
	period_options : array(
		$client->premiumSubscriptionOption(
			current : true,
			can_purchase_upgrade : true,
			transaction : 'l19Fir8SGmw2K0fQ',
			months : 14,
			currency : 'myEzSPOJIljAnwKQ',
			amount : -6691392926810644267,
			bot_url : 'https://docs.liveproto.dev',
			store_product : '1Rsmh0XCv2MVcPDe',
		),
	),
	users : array(
		$client->userEmpty(
			id : -281300119427001121,
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
			id : -4704515226803157464,
			access_hash : 1010196149483121995,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 18,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'P3CWI5u8V0v7n1Si',
					reason : 'GlH5XvnapJe8mEiM',
					text : 'jqIC5TagZ9P2YJlz',
				),
			),
			bot_inline_placeholder : '0Xi5cWyTNdGzg1Mt',
			lang_code : 'EA9Ob8vKRl6SI1Gz',
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
				max_id : 89,
			),
			color : $client->peerColor(
				color : 27,
				background_emoji_id : -8516943086580354089,
			),
			profile_color : $client->peerColor(
				color : 73,
				background_emoji_id : 8154693613289482670,
			),
			bot_active_users : 18,
			bot_verification_icon : 3029887473785092944,
			send_paid_messages_stars : 535633401762994953,
		),
	),
);
```
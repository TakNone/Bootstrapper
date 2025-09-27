# help.premiumPromo

**Description** : *Telegram Premium promotion information*

**Layer** : 214

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
	status_text : 'GyVBxoAKlHsPJuOd',
	status_entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 20,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 79,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 78,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 39,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 49,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 86,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 48,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 62,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 86,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 14,
			language : 'y3dBJuWGmDE4hoN7',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 45,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 68,
			user_id : 4031090461275599336,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 66,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 43,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 64,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 55,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 49,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 62,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 51,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 20,
			document_id : 1364616206429449194,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 66,
		),
	),
	video_sections : array('gbvBQ93CXhtl8MGw'),
	videos : array(
		$client->documentEmpty(
			id : 5561356472797948260,
		),
		$client->document(
			id : 6523839089283354362,
			access_hash : -7879779348851907409,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 12,
			mime_type : 'XuIVWfKDLwPCqdAc',
			size : -5726371832826651509,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'omJdRt6yuA3fPxkb',
				),
				$client->photoSize(
					type : 'jnDeh5RzOimvAVsw',
					w : 17,
					h : 36,
					size : 36,
				),
				$client->photoCachedSize(
					type : 'XuSjNe2HBFh5C3Jg',
					w : 63,
					h : 75,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '59efTUZDyx3bVGS2',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'RJmT2coEL0re3n5f',
					w : 95,
					h : 14,
					sizes : array(45),
				),
				$client->photoPathSize(
					type : 'w0lKTfJIWYdkCLbx',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'Sy2EFu6aeDAwCZQo',
					w : 11,
					h : 42,
					size : 91,
					video_start_ts : -1086326.4892578125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 7108154108864740134,
					background_colors : array(18),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -8495887569335251193,
					background_colors : array(36),
				),
			),
			dc_id : 95,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 22,
					h : 6,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'x4Fc9MGpv3CwP8li',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 972913.7587890625,
					w : 47,
					h : 33,
					preload_prefix_size : 89,
					video_start_ts : 768693.771484375,
					video_codec : '58O2ql7IAeP3vShj',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 58,
					title : 'FIsZxDRthCOJzdGm',
					performer : '4nqJxpLgE1FWy8t0',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'OTktrK9YvCz3bGZ5',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'x4ASY8GzVXyUbjwe',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
	period_options : array(
		$client->premiumSubscriptionOption(
			current : true,
			can_purchase_upgrade : true,
			transaction : 'MlYvIK4NP68TmAiD',
			months : 26,
			currency : '6MqaIpHLv2tfTDNs',
			amount : 4296911596833601407,
			bot_url : 'https://docs.liveproto.dev',
			store_product : '2VtzvB3ni5C0l9gU',
		),
	),
	users : array(
		$client->userEmpty(
			id : -2522681411685797101,
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
			id : -4380532851815134831,
			access_hash : -37572497210189731,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 83,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '2gozil79tbwLpJKd',
					reason : 'VdAMhFakoWJxYKrI',
					text : 'nGCJps8jdESMwuLA',
				),
			),
			bot_inline_placeholder : 'oMeiAV5jITvcC1r6',
			lang_code : 'XEZpmV3YFJgMOe6r',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 98,
			color : $client->peerColor(
				color : 29,
				background_emoji_id : 1151831086068818267,
			),
			profile_color : $client->peerColor(
				color : 5,
				background_emoji_id : 61482111096706750,
			),
			bot_active_users : 72,
			bot_verification_icon : -9208411484097885853,
			send_paid_messages_stars : 7237471551971198731,
		),
	),
);
```
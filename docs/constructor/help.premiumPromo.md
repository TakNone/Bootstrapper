# help.premiumPromo

**Description** : *Telegram Premium promotion information*

**Layer** : 216

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
	status_text : '8vZ1z5WSTJcrCM2N',
	status_entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 29,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 56,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 89,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 93,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 28,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 67,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 56,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 3,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 95,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 55,
			language : '6qNYnyL7uAMBkio8',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 43,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 7,
			user_id : -4129514400966860766,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 34,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 15,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 35,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 45,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 97,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 58,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 61,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 31,
			document_id : 5313342345627328665,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 5,
		),
	),
	video_sections : array('G19qEVhWHNk6dLgD'),
	videos : array(
		$client->documentEmpty(
			id : -7936763770102536135,
		),
		$client->document(
			id : -2409016211783651580,
			access_hash : 5347114576340779899,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 3,
			mime_type : 'V8mlrxu9nNDR3bIT',
			size : 1425765649480585818,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'b0RXtlErUv3V6uk8',
				),
				$client->photoSize(
					type : 'hJYpVW3r9swQ5f4e',
					w : 94,
					h : 91,
					size : 66,
				),
				$client->photoCachedSize(
					type : 'pwhN0ZOJWUf5Lrat',
					w : 86,
					h : 83,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'YxGS9biWJZp4TOwN',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'Y07wLt6HCfhKZlRq',
					w : 3,
					h : 5,
					sizes : array(88),
				),
				$client->photoPathSize(
					type : 'pCIYNLowlUS5rvfX',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'zgm5pXlIV9yr1HqK',
					w : 66,
					h : 8,
					size : 71,
					video_start_ts : 123850.0947265625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 3781506897008954641,
					background_colors : array(41),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : 7810542763587637871,
					background_colors : array(11),
				),
			),
			dc_id : 86,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 44,
					h : 59,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '9hPWqLCkvwGTyX2E',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1786598.6015625,
					w : 97,
					h : 55,
					preload_prefix_size : 19,
					video_start_ts : 771622.6064453125,
					video_codec : '1JnPsgQLRFo85uDv',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 100,
					title : 'vnqKHNPdtpiMm1Bk',
					performer : 'DIBA9yNCzLpcaF3W',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'NmYXMkqZI8G6CBFd',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'AzFTr7COBwcd8tUf',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
	period_options : array(
		$client->premiumSubscriptionOption(
			current : true,
			can_purchase_upgrade : true,
			transaction : 'DgNlEIhK7kOSjBGe',
			months : 62,
			currency : 'zLJjxeD9ngB81o2K',
			amount : 1434734378249345417,
			bot_url : 'https://docs.liveproto.dev',
			store_product : 'BSjuWvA48zPbMIFX',
		),
	),
	users : array(
		$client->userEmpty(
			id : -6125644045884492583,
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
			id : -3054477204048758953,
			access_hash : -1357565821648970876,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 5,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'MyCBf2FJDGTAai5o',
					reason : '4rQm6VcHhvPb0DRl',
					text : '0T4H5rnkIgwpFx3b',
				),
			),
			bot_inline_placeholder : '0ImMhDSPdrRoC4ib',
			lang_code : '2Lq4T0Sb8KZvDk6A',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 24,
			color : $client->peerColor(
				color : 58,
				background_emoji_id : -3812336792660320019,
			),
			profile_color : $client->peerColor(
				color : 3,
				background_emoji_id : -2453145033322165652,
			),
			bot_active_users : 9,
			bot_verification_icon : -4294564442100292618,
			send_paid_messages_stars : 8238352038745305320,
		),
	),
);
```
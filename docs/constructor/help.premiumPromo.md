# help.premiumPromo

**Description** : *Telegram Premium promotion information*

**Layer** : 218

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
	status_text : 'CMzvUYQpI4GXrOkc',
	status_entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 51,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 29,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 46,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 99,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 70,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 83,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 73,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 56,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 42,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 77,
			language : 'CNBK6HAX25REUhns',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 8,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 64,
			user_id : -1993158762445722480,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 61,
			user_id : $client->get_input_user(peer : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 44,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 40,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 7,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 97,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 93,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 47,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 38,
			document_id : -4860368928309866282,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 81,
		),
	),
	video_sections : array('2EbLqZ46OsDHpg3d'),
	videos : array(
		$client->documentEmpty(
			id : 1632378534339281566,
		),
		$client->document(
			id : 1808858373693264632,
			access_hash : -331961289081048126,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 93,
			mime_type : '6Tm29gXdDIArVlFu',
			size : 7663746152524485668,
			thumbs : array(
				$client->photoSizeEmpty(
					type : '7AquRnv2PGgE3LH4',
				),
				$client->photoSize(
					type : 'Jjv6w1SaAV7RyPX4',
					w : 73,
					h : 27,
					size : 95,
				),
				$client->photoCachedSize(
					type : 'ByW2obGHemFi1xMX',
					w : 67,
					h : 45,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'ng6iMRCfHZkPvEoA',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '2bRGdETnhjYAkHCl',
					w : 30,
					h : 84,
					sizes : array(55),
				),
				$client->photoPathSize(
					type : 'Tq5xnF3R90cmweao',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'FWID5fRbaY0iyZwQ',
					w : 94,
					h : 34,
					size : 60,
					video_start_ts : 55413.712890625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 7001761505243054053,
					background_colors : array(77),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 5506789359602785268,
					background_colors : array(19),
				),
			),
			dc_id : 20,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 28,
					h : 58,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'lMpWcC4VN8jwtFyk',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 64,
						x : -1245131.392578125,
						y : -80755.103515625,
						zoom : 345954.0654296875,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1819187.0791015625,
					w : 98,
					h : 30,
					preload_prefix_size : 80,
					video_start_ts : -1530290.5400390625,
					video_codec : 'A82zpLvNwYWCbn7o',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 88,
					title : 'UnAKJkmXofT8t5pY',
					performer : 'sAZFVL4QxKiC5Wob',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '78T1VEhCFR2ojY0r',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'EMIG3wFRWniT7CAq',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
	period_options : array(
		$client->premiumSubscriptionOption(
			current : true,
			can_purchase_upgrade : true,
			transaction : 'Vk7sN3Xel0BRbuK1',
			months : 47,
			currency : 'pVM7lt2RXdYQUGAu',
			amount : 7497937618640205720,
			bot_url : 'https://docs.liveproto.dev',
			store_product : 'ZIYkgPMxiaznhKG7',
		),
	),
	users : array(
		$client->userEmpty(
			id : -8261483632862278527,
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
			id : 4762394792163961831,
			access_hash : -4906175173645461214,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 83,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'wSNyD1b2UoLAIhZg',
					reason : 'kRB16mx8WySUduKL',
					text : 'mYjKhMwn6vzQbqUS',
				),
			),
			bot_inline_placeholder : 'EKTxWUdoib5AX0fu',
			lang_code : 'aXghEnpfyAZSuMK9',
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
				max_id : 35,
			),
			color : $client->peerColor(
				color : 69,
				background_emoji_id : -4644433269583229438,
			),
			profile_color : $client->peerColor(
				color : 52,
				background_emoji_id : -8197399850654100793,
			),
			bot_active_users : 38,
			bot_verification_icon : 5233628554772541440,
			send_paid_messages_stars : 7042075828588056019,
		),
	),
);
```
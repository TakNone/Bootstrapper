# help.premiumPromo

**Description** : *Telegram Premium promotion information*

**Layer** : 211

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
	status_text : 'VFc1ROUKirsfzTlu',
	status_entities : array(
		$client->messageEntityUnknown(
			offset : 32,
			length : 100,
		),
		$client->messageEntityMention(
			offset : 94,
			length : 47,
		),
		$client->messageEntityHashtag(
			offset : 14,
			length : 7,
		),
		$client->messageEntityBotCommand(
			offset : 74,
			length : 58,
		),
		$client->messageEntityUrl(
			offset : 76,
			length : 27,
		),
		$client->messageEntityEmail(
			offset : 68,
			length : 54,
		),
		$client->messageEntityBold(
			offset : 32,
			length : 77,
		),
		$client->messageEntityItalic(
			offset : 5,
			length : 34,
		),
		$client->messageEntityCode(
			offset : 31,
			length : 75,
		),
		$client->messageEntityPre(
			offset : 59,
			length : 68,
			language : 'ZPBF76QXRr0dUokH',
		),
		$client->messageEntityTextUrl(
			offset : 2,
			length : 40,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 21,
			length : 45,
			user_id : 1626345278659607156,
		),
		$client->inputMessageEntityMentionName(
			offset : 43,
			length : 68,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 77,
			length : 7,
		),
		$client->messageEntityCashtag(
			offset : 4,
			length : 10,
		),
		$client->messageEntityUnderline(
			offset : 59,
			length : 62,
		),
		$client->messageEntityStrike(
			offset : 75,
			length : 12,
		),
		$client->messageEntityBankCard(
			offset : 32,
			length : 14,
		),
		$client->messageEntitySpoiler(
			offset : 16,
			length : 81,
		),
		$client->messageEntityCustomEmoji(
			offset : 64,
			length : 65,
			document_id : -1482123632888826117,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 91,
			length : 46,
		),
	),
	video_sections : array('VjJiGP1bfr3dnoXq'),
	videos : array(
		$client->documentEmpty(
			id : -23544003318630789,
		),
		$client->document(
			id : -6295561662210475684,
			access_hash : -27039228517030377,
			file_reference : '?s??LiveProto`#?S',
			date : 3,
			mime_type : 'gt9WGl41LUEQqCZ7',
			size : -863868022268464466,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'noWBZKzkVtOfh4iJ',
				),
				$client->photoSize(
					type : 'DtjsawVXFz8IqidB',
					w : 38,
					h : 81,
					size : 32,
				),
				$client->photoCachedSize(
					type : 'TEesDIcwyLr6blQ4',
					w : 4,
					h : 14,
					bytes : '
O?LiveProtouP?:?',
				),
				$client->photoStrippedSize(
					type : 'eLRjrqTZMuYBDmiI',
					bytes : '.3??wLiveProto\\??+?',
				),
				$client->photoSizeProgressive(
					type : '8PrlQIaKon4WMVtm',
					w : 55,
					h : 37,
					sizes : array(95),
				),
				$client->photoPathSize(
					type : 'DHeL3AtoGdnvulU9',
					bytes : 'Y???cLiveProto?z/ݹ',
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'uh5Dv74XjRzr2kcN',
					w : 3,
					h : 85,
					size : 17,
					video_start_ts : -581180.4833984375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 2938950856886804993,
					background_colors : array(47),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -7397622988472312518,
					background_colors : array(53),
				),
			),
			dc_id : 36,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 94,
					h : 47,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'O6IzqUPpG8mnLfw4',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1824665.6728515625,
					w : 30,
					h : 58,
					preload_prefix_size : 93,
					video_start_ts : -1426181.6064453125,
					video_codec : 'UgRLseETzVFtPbkX',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 89,
					title : 'hOFWlR5YvsXd9EKU',
					performer : 'qjdtAVPpRMlSK92W',
					waveform : 'I??hLiveProtopVK?',
				),
				$client->documentAttributeFilename(
					file_name : 'wuj95kNxzsVtCacv',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '5hC67GaYi19MjuXJ',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
	period_options : array(
		$client->premiumSubscriptionOption(
			current : true,
			can_purchase_upgrade : true,
			transaction : 'pu2H6DQYdJoSCmwA',
			months : 71,
			currency : 'LZbhFqCj3wf1Psmr',
			amount : -8537984840870428711,
			bot_url : 'https://docs.liveproto.dev',
			store_product : 'fsL0EtoSQ6T4wjH9',
		),
	),
	users : array(
		$client->userEmpty(
			id : -6463079728647394486,
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
			id : -2954109176426777812,
			access_hash : 4052842676599044696,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 87,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'YyKaACtPJRuNFWhw',
					reason : 'xFBrbA16V9XCZaI7',
					text : 'j2spzeRNf4gUwHaV',
				),
			),
			bot_inline_placeholder : 'DUGxKYE9dnR6OXJF',
			lang_code : 'pKdkOXnL7sctWqx6',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 31,
			color : $client->peerColor(
				color : 20,
				background_emoji_id : 1763893995209941655,
			),
			profile_color : $client->peerColor(
				color : 100,
				background_emoji_id : -2041474306563126091,
			),
			bot_active_users : 3,
			bot_verification_icon : -6426264505316279835,
			send_paid_messages_stars : 5849164181587563895,
		),
	),
);
```
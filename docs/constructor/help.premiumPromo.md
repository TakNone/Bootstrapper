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
	status_text : 'xur1fKXcAZpT2UJh',
	status_entities : array(
		$client->messageEntityUnknown(
			offset : 89,
			length : 83,
		),
		$client->messageEntityMention(
			offset : 26,
			length : 19,
		),
		$client->messageEntityHashtag(
			offset : 22,
			length : 90,
		),
		$client->messageEntityBotCommand(
			offset : 35,
			length : 49,
		),
		$client->messageEntityUrl(
			offset : 50,
			length : 68,
		),
		$client->messageEntityEmail(
			offset : 88,
			length : 35,
		),
		$client->messageEntityBold(
			offset : 90,
			length : 43,
		),
		$client->messageEntityItalic(
			offset : 26,
			length : 70,
		),
		$client->messageEntityCode(
			offset : 42,
			length : 36,
		),
		$client->messageEntityPre(
			offset : 50,
			length : 77,
			language : 'N3XQqYMRcJSg1iU4',
		),
		$client->messageEntityTextUrl(
			offset : 100,
			length : 14,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 30,
			length : 2,
			user_id : 5983820102634534416,
		),
		$client->inputMessageEntityMentionName(
			offset : 48,
			length : 43,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 74,
			length : 88,
		),
		$client->messageEntityCashtag(
			offset : 28,
			length : 69,
		),
		$client->messageEntityUnderline(
			offset : 77,
			length : 42,
		),
		$client->messageEntityStrike(
			offset : 19,
			length : 85,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 5,
		),
		$client->messageEntitySpoiler(
			offset : 50,
			length : 83,
		),
		$client->messageEntityCustomEmoji(
			offset : 55,
			length : 28,
			document_id : -6617943542802982019,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 21,
			length : 51,
		),
	),
	video_sections : array('sSe7zN6HQFTfjGcM'),
	videos : array(
		$client->documentEmpty(
			id : -2528672434951769620,
		),
		$client->document(
			id : -5968928849208134769,
			access_hash : 1126804571268679817,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 12,
			mime_type : 'KOdo0LbnJsImetUQ',
			size : 3783256109461829038,
			thumbs : array(
				$client->photoSizeEmpty(
					type : '1OjQ3We8xhmUsN7z',
				),
				$client->photoSize(
					type : '0kMcKm3B2YbAp1Uq',
					w : 45,
					h : 59,
					size : 22,
				),
				$client->photoCachedSize(
					type : 'UIOZwdelzokWb1Rv',
					w : 88,
					h : 91,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '7vrc9wplkCXTAS8I',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'RdbgtGpq70e8Ci4n',
					w : 52,
					h : 38,
					sizes : array(90),
				),
				$client->photoPathSize(
					type : '1ITyvGeDJ7fMWEb5',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'hOa5Imex7vtwgi68',
					w : 70,
					h : 52,
					size : 56,
					video_start_ts : -199253.111328125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 314982326531652007,
					background_colors : array(57),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : 2622543465051917187,
					background_colors : array(11),
				),
			),
			dc_id : 89,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 75,
					h : 24,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'Xg6RGe0kta8LYQH9',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1606394.716796875,
					w : 79,
					h : 8,
					preload_prefix_size : 60,
					video_start_ts : -205900.09765625,
					video_codec : 'ktQqVslYeaHCwXjo',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 37,
					title : 'zDIxhQgqWc1e4HNA',
					performer : 'tVkIdX2Y8uM3iZon',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'CbhTyai5eDQIlmFd',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '8D3BUclSf5tJKMkP',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
	period_options : array(
		$client->premiumSubscriptionOption(
			current : true,
			can_purchase_upgrade : true,
			transaction : '4EjPaQIKohN0mZrB',
			months : 62,
			currency : 'u14zDmaqB2iwMsYj',
			amount : 3894214398546868978,
			bot_url : 'https://docs.liveproto.dev',
			store_product : 'Zm4H0Wc7jn8XtseM',
		),
	),
	users : array(
		$client->userEmpty(
			id : 3220137081016660376,
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
			id : 7492182678542952627,
			access_hash : -715186535284198440,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 17,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'nhlRS9uvm5rfDbtw',
					reason : 'sSPExYf0MqaVbz8I',
					text : 'nT4WyObJlaUsEzjK',
				),
			),
			bot_inline_placeholder : 'SIjFEbOcQsvwX1MK',
			lang_code : 'sGA3umrZLighFc2l',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 65,
			color : $client->peerColor(
				color : 73,
				background_emoji_id : 5439886636693410516,
			),
			profile_color : $client->peerColor(
				color : 24,
				background_emoji_id : 172085907080763530,
			),
			bot_active_users : 65,
			bot_verification_icon : -7913853863847935852,
			send_paid_messages_stars : 4863868819699826695,
		),
	),
);
```
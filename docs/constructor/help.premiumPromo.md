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
	status_text : '9yrbwYizuIj5C0Gh',
	status_entities : array(
		$client->messageEntityUnknown(
			offset : 15,
			length : 11,
		),
		$client->messageEntityMention(
			offset : 37,
			length : 17,
		),
		$client->messageEntityHashtag(
			offset : 96,
			length : 27,
		),
		$client->messageEntityBotCommand(
			offset : 30,
			length : 86,
		),
		$client->messageEntityUrl(
			offset : 93,
			length : 25,
		),
		$client->messageEntityEmail(
			offset : 51,
			length : 60,
		),
		$client->messageEntityBold(
			offset : 72,
			length : 51,
		),
		$client->messageEntityItalic(
			offset : 85,
			length : 77,
		),
		$client->messageEntityCode(
			offset : 47,
			length : 14,
		),
		$client->messageEntityPre(
			offset : 30,
			length : 47,
			language : '2OwLoaqtvCGysmFV',
		),
		$client->messageEntityTextUrl(
			offset : 24,
			length : 76,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 56,
			length : 97,
			user_id : -885672010927018100,
		),
		$client->inputMessageEntityMentionName(
			offset : 53,
			length : 24,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 3,
			length : 14,
		),
		$client->messageEntityCashtag(
			offset : 43,
			length : 86,
		),
		$client->messageEntityUnderline(
			offset : 2,
			length : 5,
		),
		$client->messageEntityStrike(
			offset : 86,
			length : 32,
		),
		$client->messageEntityBankCard(
			offset : 86,
			length : 59,
		),
		$client->messageEntitySpoiler(
			offset : 83,
			length : 25,
		),
		$client->messageEntityCustomEmoji(
			offset : 66,
			length : 43,
			document_id : -7504043437022811807,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 63,
			length : 53,
		),
	),
	video_sections : array('JcAIMOZSbdUfNCXE'),
	videos : array(
		$client->documentEmpty(
			id : -1639076940586133778,
		),
		$client->document(
			id : -3582971077712375197,
			access_hash : -4845700255287880984,
			file_reference : 's?k*?LiveProtoSL??',
			date : 8,
			mime_type : 'Pv1UikQmyrNIHnh0',
			size : 6135047891324324960,
			thumbs : array(
				$client->photoSizeEmpty(
					type : '3ClyYqD6s5a9hVwK',
				),
				$client->photoSize(
					type : 'KDOonWcLzBuPfxTY',
					w : 87,
					h : 42,
					size : 63,
				),
				$client->photoCachedSize(
					type : '7O8T54hJD1zn20R9',
					w : 66,
					h : 54,
					bytes : '? ?_ULiveProto:' . "\0" . '??' . "\0" . '',
				),
				$client->photoStrippedSize(
					type : 'av7PmNsDE0gYzFHA',
					bytes : '?j??kLiveProto??P1?',
				),
				$client->photoSizeProgressive(
					type : 'M4OQbg3TGzCIYhoE',
					w : 75,
					h : 59,
					sizes : array(50),
				),
				$client->photoPathSize(
					type : 'RwhkWjMHA5z7I6cs',
					bytes : '`?OۓLiveProto?+Y?V',
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'YlfdSGrORkHAsCeP',
					w : 79,
					h : 48,
					size : 15,
					video_start_ts : -1672865.5458984375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -7003162682201675883,
					background_colors : array(51),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -6307972088013421580,
					background_colors : array(50),
				),
			),
			dc_id : 82,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 6,
					h : 14,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '7Mvc9sFBP1a8hoDT',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 399974.67578125,
					w : 78,
					h : 33,
					preload_prefix_size : 61,
					video_start_ts : 1790992.306640625,
					video_codec : 'meo29Ua1lLiHftJQ',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 68,
					title : 'MecuVyjrbR38EvNH',
					performer : 'mAzNxF6HhTKCODWw',
					waveform : 'QӉ??LiveProto?-N ',
				),
				$client->documentAttributeFilename(
					file_name : 'ebcN1dp0su3FOqI9',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'gl4ZIBfdVweF3Ej9',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
	period_options : array(
		$client->premiumSubscriptionOption(
			current : true,
			can_purchase_upgrade : true,
			transaction : 'qlxmoWy9YAtrBjfU',
			months : 54,
			currency : '5zKWlAOSe1I93Tc6',
			amount : 6682217878317845762,
			bot_url : 'https://docs.liveproto.dev',
			store_product : 'thVDbXFNjqfCKRwy',
		),
	),
	users : array(
		$client->userEmpty(
			id : 1235323001027290307,
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
			id : 4711899144845314007,
			access_hash : 5601199738642540273,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 21,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'MAPq1gFwU8uCLXnZ',
					reason : 'luSrvGECOn7412oc',
					text : 'sab2LjwWJ84imfuT',
				),
			),
			bot_inline_placeholder : 'y17JZ3qkRUwTcgrt',
			lang_code : 'rIM6sVaRgdBfpnWt',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 100,
			color : $client->peerColor(
				color : 16,
				background_emoji_id : 1763112493532932679,
			),
			profile_color : $client->peerColor(
				color : 55,
				background_emoji_id : -7127920939710043416,
			),
			bot_active_users : 99,
			bot_verification_icon : 6787595130552268049,
			send_paid_messages_stars : 8552724944791790947,
		),
	),
);
```
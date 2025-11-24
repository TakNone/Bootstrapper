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
	status_text : 'fYD1qsBKjdXybFkt',
	status_entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 8,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 86,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 12,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 64,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 61,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 74,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 46,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 43,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 6,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 100,
			language : 'UzqvRE5DA7WjHX1G',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 65,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 27,
			user_id : 5437116079093758849,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 37,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 53,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 47,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 50,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 79,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 22,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 25,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 6,
			document_id : 3008438778319309184,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 74,
		),
	),
	video_sections : array('a1dBulNfSJo2XKrx'),
	videos : array(
		$client->documentEmpty(
			id : 1294116623100437690,
		),
		$client->document(
			id : 7739927991913936455,
			access_hash : 1645785024012283007,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 7,
			mime_type : 'IGqfTZgFYSaMWH1x',
			size : 4456591839237562740,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'px2IRkUVD5E1hFj9',
				),
				$client->photoSize(
					type : 'Z5edqcrGLBh7Yg0y',
					w : 100,
					h : 39,
					size : 75,
				),
				$client->photoCachedSize(
					type : 'zkaEZ6L9lqcRwj8M',
					w : 96,
					h : 96,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'YGA0UCiNBz27IWux',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'jQOFADv3HM51UTW4',
					w : 2,
					h : 75,
					sizes : array(93),
				),
				$client->photoPathSize(
					type : 'lcxp1UF8rnYtWACa',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : '3IRg8jZokEmlXvbf',
					w : 38,
					h : 14,
					size : 5,
					video_start_ts : -433287.04296875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -6845555315368640544,
					background_colors : array(60),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -6871320621635330322,
					background_colors : array(76),
				),
			),
			dc_id : 53,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 25,
					h : 72,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'dx52HeYl9qVL1krJ',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 79,
						x : 992553.1591796875,
						y : -1905693.4150390625,
						zoom : -2043382.0068359375,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -303420.119140625,
					w : 60,
					h : 21,
					preload_prefix_size : 42,
					video_start_ts : 166869.078125,
					video_codec : 'n41qojIGvJ52Cark',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 48,
					title : 'qHVpAYkQvI46jLWi',
					performer : 'PbAoOcQEBI1UuHY4',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'WFC1UEBIcMxHRmAX',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'vNbioqhL7Z4cJ19C',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
	period_options : array(
		$client->premiumSubscriptionOption(
			current : true,
			can_purchase_upgrade : true,
			transaction : '9HvOUeZI1PCs4D6b',
			months : 3,
			currency : '8uNO2dkQzoLe6qEI',
			amount : -1794365286272321487,
			bot_url : 'https://docs.liveproto.dev',
			store_product : '2johvVRzqM570uNm',
		),
	),
	users : array(
		$client->userEmpty(
			id : -7926921070759195001,
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
			id : -8423449268570132263,
			access_hash : -6388778314885913429,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 34,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '42vQjXZMOPflJogy',
					reason : '9EY2GvKTFsp0NOhI',
					text : 'j4A9tqVJ7frd2Xnl',
				),
			),
			bot_inline_placeholder : 'jcy1NsRVQgLAMliq',
			lang_code : '0OnzJjX536toMFWd',
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
				max_id : 21,
			),
			color : $client->peerColor(
				color : 49,
				background_emoji_id : -4601611822919153605,
			),
			profile_color : $client->peerColor(
				color : 71,
				background_emoji_id : -7326166763260017518,
			),
			bot_active_users : 56,
			bot_verification_icon : 2573927972715351672,
			send_paid_messages_stars : -7686787314538845309,
		),
	),
);
```
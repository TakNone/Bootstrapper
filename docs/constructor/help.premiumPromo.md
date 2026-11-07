# help.premiumPromo

**Description** : *Telegram Premium promotion information*

**Layer** : 233

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
	status_text : 'GqLXe1bh9dN2slRw',
	status_entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 44,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 91,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 93,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 43,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 56,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 48,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 76,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 49,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 38,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 48,
			language : 'nT4vo9fxSyaM6ZIs',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 84,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 60,
			user_id : -8828905322079210422,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 71,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 30,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 99,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 87,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 78,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 7,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 0,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 13,
			document_id : 2369327152973514885,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 19,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 14,
			date : 26,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 26,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 42,
			old_text : 'N9kb0E7VsirWceuy',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 58,
		),
		$client->messageEntityTonAddress(
			offset : 0,
			length : 5,
		),
	),
	video_sections : array('Z4AsLtFxzm8ReMol'),
	videos : array(
		$client->documentEmpty(
			id : 3235189150713040171,
		),
		$client->document(
			id : -2046268821342546340,
			access_hash : -6211033845808562434,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 25,
			mime_type : 'YxmaWKI9eic0g4SP',
			size : -562623266705272471,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'X2WcOlCjEBqv7PiY',
				),
				$client->photoSize(
					type : 'AcuGKV9Lpfv5drlC',
					w : 11,
					h : 69,
					size : 21,
				),
				$client->photoCachedSize(
					type : 'YNO0GzjmcElItfqd',
					w : 79,
					h : 30,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'ewTrlynxu3t1VhWC',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'ekx5bYazpZoLOKMN',
					w : 54,
					h : 69,
					sizes : array(87),
				),
				$client->photoPathSize(
					type : 'XZ6nMuWIdrefD3TY',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'CX5sLJvik8HYyfq4',
					w : 23,
					h : 95,
					size : 40,
					video_start_ts : 854966.220703125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -6392754012189401563,
					background_colors : array(56),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -6478769035468760186,
					background_colors : array(43),
				),
			),
			dc_id : 95,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 80,
					h : 4,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'SG1AwkPh75XyoYQs',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 96,
						x : 509001.9169921875,
						y : 1574480.1533203125,
						zoom : 838357.2841796875,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1386139.7744140625,
					w : 84,
					h : 45,
					preload_prefix_size : 20,
					video_start_ts : 776901.44921875,
					video_codec : 'fDt5QJGNh2vwLiBb',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 52,
					title : '2ELuBPX9Mxd1vNRC',
					performer : 'NckOF1wzgsiXGmCL',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'ljQq8gHdKDtUXYoZ',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'cotxuwVbiJ5yDgKS',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
	period_options : array(
		$client->premiumSubscriptionOption(
			current : true,
			can_purchase_upgrade : true,
			transaction : 'vy4CoMVsBTUSnGjP',
			months : 72,
			currency : 'KVCQ9nGXs2p5B7zx',
			amount : -6024229476329707137,
			bot_url : 'https://docs.liveproto.dev',
			store_product : 'pe2fuLPjcmWxZyIK',
		),
	),
	users : array(
		$client->userEmpty(
			id : -7893884666896952938,
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
			bot_forum_sidebar : true,
			id : 1286224074546704189,
			access_hash : -3300807429553499923,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 19,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Au0OINRlYhgjk5ZS',
					reason : '5k71jbYBqDCUsXlp',
					text : 'yag5ukFdv4Vh0mIj',
				),
			),
			bot_inline_placeholder : 'YAFVIm7CzLrocZyh',
			lang_code : 'DSQjKTsypfL8ZWkg',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					deletable : true,
					expired : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 5,
			),
			color : $client->peerColor(
				color : 93,
				background_emoji_id : 7390889657170098760,
			),
			profile_color : $client->peerColor(
				color : 19,
				background_emoji_id : 7149078184440155917,
			),
			bot_active_users : 66,
			bot_verification_icon : 49613547870894919,
			send_paid_messages_stars : -102438977206730260,
			linked_community_id : -150352649856795221,
		),
	),
);
```
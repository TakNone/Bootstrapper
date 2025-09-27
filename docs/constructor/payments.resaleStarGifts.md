# payments.resaleStarGifts

**Layer** : 216

```tl
payments.resaleStarGifts#947a12df flags:# count:int gifts:Vector<StarGift> next_offset:flags.0?string attributes:flags.1?Vector<StarGiftAttribute> attributes_hash:flags.1?long chats:Vector<Chat> counters:flags.2?Vector<StarGiftAttributeCounter> users:Vector<User> = payments.ResaleStarGifts;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| <mark>count</mark> | [`int`](type/int) | NOTHING |
| <mark>gifts</mark> | [`Vector<StarGift>`](type/StarGift) | NOTHING |
| **next_offset** | [`flags.0?string`](type/string) | NOTHING |
| **attributes** | [`flags.1?Vector<StarGiftAttribute>`](type/StarGiftAttribute) | NOTHING |
| **attributes_hash** | [`flags.1?long`](type/long) | NOTHING |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | NOTHING |
| **counters** | [`flags.2?Vector<StarGiftAttributeCounter>`](type/StarGiftAttributeCounter) | NOTHING |
| <mark>users</mark> | [`Vector<User>`](type/User) | NOTHING |

---

## Type

[payments.ResaleStarGifts](type/payments.ResaleStarGifts)

---

## Example

```php
$paymentsResaleStarGifts = $client->payments->resaleStarGifts(
	count : 14,
	gifts : array(
		$client->starGift(
			limited : true,
			sold_out : true,
			birthday : true,
			can_upgrade : true,
			require_premium : true,
			limited_per_user : true,
			peer_color_available : true,
			id : 9160666245727489551,
			sticker : $client->documentEmpty(
				id : -8283189032051138298,
			),
			stars : -8905129277641026492,
			availability_remains : 55,
			availability_total : 75,
			availability_resale : -651208576254483882,
			convert_stars : 1914157936078004448,
			first_sale_date : 32,
			last_sale_date : 84,
			upgrade_stars : 7056742217455108605,
			resell_min_stars : -2908507906619766424,
			title : 'gzcQ4G7luxhqjUF8',
			released_by : $client->peerUser(
				user_id : -593019142947021198,
			),
			per_user_total : 22,
			per_user_remains : 55,
			locked_until_date : 68,
		),
		$client->starGiftUnique(
			require_premium : true,
			resale_ton_only : true,
			theme_available : true,
			id : -8208618992510916463,
			gift_id : 1668079162194961552,
			title : 'Als2modLcv5WiE6S',
			slug : 'vCxWUMAyOXITmz8o',
			num : 73,
			owner_id : $client->peerUser(
				user_id : -8186217291852234378,
			),
			owner_name : 'zrVo6vmQHKJde0bS',
			owner_address : 'Oicjo74ezxd1E3WG',
			attributes : array(
				$client->starGiftAttributeModel(
					name : 'j3a9K7g5Nyl1WVvU',
					document : $client->documentEmpty(...),
					rarity_permille : 69,
				),
				$client->starGiftAttributePattern(
					name : '6ZnEThcBvHkWLM8O',
					document : $client->documentEmpty(...),
					rarity_permille : 29,
				),
				$client->starGiftAttributeBackdrop(
					name : 'JdmBADKXsjLUCFEo',
					backdrop_id : 51,
					center_color : 17,
					edge_color : 90,
					pattern_color : 7,
					text_color : 82,
					rarity_permille : 5,
				),
				$client->starGiftAttributeOriginalDetails(
					sender_id : $client->peerUser(...),
					recipient_id : $client->peerUser(...),
					date : 7,
					message : $client->textWithEntities(...),
				),
			),
			availability_issued : 100,
			availability_total : 49,
			gift_address : 'j0LqP5NHIou16CAZ',
			resell_amount : array(
				$client->starsAmount(
					amount : 2700128708522018908,
					nanos : 100,
				),
				$client->starsTonAmount(
					amount : -1401599738237163809,
				),
			),
			released_by : $client->peerUser(
				user_id : -2693885046511937084,
			),
			value_amount : -8704317959480771191,
			value_currency : '8Fqp5voXU6g2WPTM',
			theme_peer : $client->peerUser(
				user_id : 3095530571387928483,
			),
			peer_color : $client->peerColor(
				color : 38,
				background_emoji_id : -854404732485420692,
			),
			host_id : $client->peerUser(
				user_id : 586979992786110703,
			),
		),
	),
	next_offset : 'AP6zRGLyWhO40XcM',
	attributes : array(
		$client->starGiftAttributeModel(
			name : 'Ciwb9WIljvHQygT1',
			document : $client->documentEmpty(
				id : -4326751510159146184,
			),
			rarity_permille : 77,
		),
		$client->starGiftAttributePattern(
			name : 'rvA6qfzUaF35eTtK',
			document : $client->documentEmpty(
				id : 6882753965476612567,
			),
			rarity_permille : 9,
		),
		$client->starGiftAttributeBackdrop(
			name : 'Gs2OLIHujzdFaYbV',
			backdrop_id : 79,
			center_color : 6,
			edge_color : 8,
			pattern_color : 28,
			text_color : 2,
			rarity_permille : 30,
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : -6735547096516237432,
			),
			recipient_id : $client->peerUser(
				user_id : 4877203362684134241,
			),
			date : 79,
			message : $client->textWithEntities(
				text : 'hurCoswSXnLVDKNt',
				entities : array(
					$client->messageEntityUnknown(...),
					$client->messageEntityMention(...),
					$client->messageEntityHashtag(...),
					$client->messageEntityBotCommand(...),
					$client->messageEntityUrl(...),
					$client->messageEntityEmail(...),
					$client->messageEntityBold(...),
					$client->messageEntityItalic(...),
					$client->messageEntityCode(...),
					$client->messageEntityPre(...),
					$client->messageEntityTextUrl(...),
					$client->messageEntityMentionName(...),
					$client->inputMessageEntityMentionName(...),
					$client->messageEntityPhone(...),
					$client->messageEntityCashtag(...),
					$client->messageEntityUnderline(...),
					$client->messageEntityStrike(...),
					$client->messageEntityBankCard(...),
					$client->messageEntitySpoiler(...),
					$client->messageEntityCustomEmoji(...),
					$client->messageEntityBlockquote(...),
				),
			),
		),
	),
	attributes_hash : 2601990593859784815,
	chats : array(
		$client->chatEmpty(
			id : 6280421303092669409,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 9007884748402388997,
			title : '9fM0GqT61XkrdcF3',
			photo : $client->chatPhotoEmpty(),
			participants_count : 65,
			date : 47,
			version : 0,
			migrated_to : $client->inputChannelEmpty(),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 63,
			),
		),
		$client->chatForbidden(
			id : -6852311806510770204,
			title : 'u3h6OWdXPcbmVQZ2',
		),
		$client->channel(
			creator : true,
			left : true,
			broadcast : true,
			verified : true,
			megagroup : true,
			restricted : true,
			signatures : true,
			min : true,
			scam : true,
			has_link : true,
			has_geo : true,
			slowmode_enabled : true,
			call_active : true,
			call_not_empty : true,
			fake : true,
			gigagroup : true,
			noforwards : true,
			join_to_send : true,
			join_request : true,
			forum : true,
			stories_hidden : true,
			stories_hidden_min : true,
			stories_unavailable : true,
			signature_profiles : true,
			autotranslation : true,
			broadcast_messages_allowed : true,
			monoforum : true,
			forum_tabs : true,
			id : 5592545838911142997,
			access_hash : -4420083880071363948,
			title : 'zrpbVL4OX5SEemag',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 93,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'niMCk25NYyIAmxPp',
					reason : 'hTrI2WN8FodnVC6j',
					text : 'hTDqIYUyurlFvR8b',
				),
			),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 8,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 0,
			),
			participants_count : 68,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 40,
			color : $client->peerColor(
				color : 5,
				background_emoji_id : -8444765519443787732,
			),
			profile_color : $client->peerColor(
				color : 69,
				background_emoji_id : -8092144261287459933,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 99,
			subscription_until_date : 59,
			bot_verification_icon : -2293773772979831041,
			send_paid_messages_stars : 7491542243894579820,
			linked_monoforum_id : -5760453729434789168,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 7183218396425612167,
			access_hash : -6317667820364630932,
			title : 'EOPWTi6FvzGkMY1u',
			until_date : 82,
		),
	),
	counters : array(
		$client->starGiftAttributeCounter(
			attribute : $client->starGiftAttributeIdModel(
				document_id : 5649965388000168992,
			),
			count : 1,
		),
	),
	users : array(
		$client->userEmpty(
			id : -2852756390368920645,
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
			id : -4500312528098661251,
			access_hash : 2548629285336619857,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 67,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'WlE3cFbI091jxBCD',
					reason : 'HXIPQVAsepxKWuTa',
					text : '4pe0gPHcMFaY6KAN',
				),
			),
			bot_inline_placeholder : 'MY3TXBP67drS9cN1',
			lang_code : 'OEjYI47nderBHcmw',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 88,
			color : $client->peerColor(
				color : 10,
				background_emoji_id : 5143407984412409247,
			),
			profile_color : $client->peerColor(
				color : 87,
				background_emoji_id : -7833146036112925320,
			),
			bot_active_users : 42,
			bot_verification_icon : 826864455754174572,
			send_paid_messages_stars : -3777719881749909017,
		),
	),
);
```
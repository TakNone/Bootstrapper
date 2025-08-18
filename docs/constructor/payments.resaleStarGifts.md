# payments.resaleStarGifts

**Layer** : 211

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
	count : 4,
	gifts : array(
		$client->starGift(
			limited : true,
			sold_out : true,
			birthday : true,
			require_premium : true,
			limited_per_user : true,
			id : -765395726514648898,
			sticker : $client->documentEmpty(
				id : -8157417274275394837,
			),
			stars : 9015468376128620439,
			availability_remains : 81,
			availability_total : 27,
			availability_resale : 1603140047921316378,
			convert_stars : 8143807279209711306,
			first_sale_date : 99,
			last_sale_date : 56,
			upgrade_stars : -2793234448658033118,
			resell_min_stars : -3862115103340594861,
			title : 'ulxYi2TdPyU9wXD3',
			released_by : $client->peerUser(
				user_id : 2773133664784399475,
			),
			per_user_total : 73,
			per_user_remains : 80,
		),
		$client->starGiftUnique(
			require_premium : true,
			resale_ton_only : true,
			id : -8080584339318305614,
			title : '2n8aRrK5xYMwvCgI',
			slug : 'IUajNP63EZWlGq2m',
			num : 10,
			owner_id : $client->peerUser(
				user_id : 926764053929321492,
			),
			owner_name : 'ZGibVFk1sNhpcEDu',
			owner_address : 'FwYJm0xMzOHDQ3pt',
			attributes : array(
				$client->starGiftAttributeModel(
					name : 'zmFBxUuVIlkX4eQ1',
					document : $client->documentEmpty(...),
					rarity_permille : 84,
				),
				$client->starGiftAttributePattern(
					name : 'bXq4G8ozc2iBNICY',
					document : $client->documentEmpty(...),
					rarity_permille : 16,
				),
				$client->starGiftAttributeBackdrop(
					name : 'k4mnYyJvQILWSlKG',
					backdrop_id : 90,
					center_color : 69,
					edge_color : 51,
					pattern_color : 22,
					text_color : 18,
					rarity_permille : 42,
				),
				$client->starGiftAttributeOriginalDetails(
					sender_id : $client->peerUser(...),
					recipient_id : $client->peerUser(...),
					date : 87,
					message : $client->textWithEntities(...),
				),
			),
			availability_issued : 14,
			availability_total : 2,
			gift_address : 'va5tET1c7MqUHSyV',
			resell_amount : array(
				$client->starsAmount(
					amount : -6274283932803679514,
					nanos : 63,
				),
				$client->starsTonAmount(
					amount : 6645522879857155162,
				),
			),
			released_by : $client->peerUser(
				user_id : 1842309835933852586,
			),
		),
	),
	next_offset : '2Mcqm0vlpnBsP79o',
	attributes : array(
		$client->starGiftAttributeModel(
			name : 'SguR4aj9LOH3nfmC',
			document : $client->documentEmpty(
				id : 8739350414998853942,
			),
			rarity_permille : 62,
		),
		$client->starGiftAttributePattern(
			name : 'pFyGNH7zMeKkdU28',
			document : $client->documentEmpty(
				id : 2821055089308077310,
			),
			rarity_permille : 51,
		),
		$client->starGiftAttributeBackdrop(
			name : 'obGSXLEHiWrUtkyJ',
			backdrop_id : 84,
			center_color : 84,
			edge_color : 46,
			pattern_color : 37,
			text_color : 41,
			rarity_permille : 88,
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : -6266207343255176245,
			),
			recipient_id : $client->peerUser(
				user_id : 8205453724930312486,
			),
			date : 78,
			message : $client->textWithEntities(
				text : 'uKEazrFpLwAIeTxN',
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
	attributes_hash : 3049586638052854415,
	chats : array(
		$client->chatEmpty(
			id : 971625890520563950,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -8825936583204136880,
			title : 'WChxZ6MrvYn1Lp8N',
			photo : $client->chatPhotoEmpty(),
			participants_count : 2,
			date : 78,
			version : 88,
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
				until_date : 65,
			),
		),
		$client->chatForbidden(
			id : 1878113889901284598,
			title : 't3pdbAFWOhK8ulBa',
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
			id : 5907714667778752902,
			access_hash : -8039917738026468051,
			title : 'C2WH0aQL5lwbzVxp',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 92,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'e6gtiVpSM78RZOrU',
					reason : 'AjagpUJvbINWC09Z',
					text : 'b7UZVITjtzeoJuSE',
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
				until_date : 35,
			),
			participants_count : 4,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 33,
			color : $client->peerColor(
				color : 28,
				background_emoji_id : 7562056354103605537,
			),
			profile_color : $client->peerColor(
				color : 10,
				background_emoji_id : 2467362700941344468,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 55,
			subscription_until_date : 98,
			bot_verification_icon : -2736831608291487934,
			send_paid_messages_stars : -7461427736120740139,
			linked_monoforum_id : 4595601248360978872,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -1559204687557134106,
			access_hash : -6462778751685435774,
			title : 'EOc2R4FxJWCB3ige',
			until_date : 87,
		),
	),
	counters : array(
		$client->starGiftAttributeCounter(
			attribute : $client->starGiftAttributeIdModel(
				document_id : 5716208040532330500,
			),
			count : 30,
		),
	),
	users : array(
		$client->userEmpty(
			id : 1101137049289865597,
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
			id : 4643454050748132677,
			access_hash : 8567619684952090939,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 6,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'tk31JDhEXLIG52Sj',
					reason : '2AXvdeURZFwK7mGQ',
					text : 'HtAUI01BL9GfsZRm',
				),
			),
			bot_inline_placeholder : 'ylHxfCQewga8Djv1',
			lang_code : 'ht2NSPE9QGfkg5J7',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 19,
			color : $client->peerColor(
				color : 90,
				background_emoji_id : 1566474168709803130,
			),
			profile_color : $client->peerColor(
				color : 69,
				background_emoji_id : 1033227383625560657,
			),
			bot_active_users : 29,
			bot_verification_icon : 9029961328542649863,
			send_paid_messages_stars : 2014881079868037093,
		),
	),
);
```
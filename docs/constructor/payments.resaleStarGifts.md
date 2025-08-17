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
	count : 2,
	gifts : array(
		$client->starGift(
			limited : true,
			sold_out : true,
			birthday : true,
			require_premium : true,
			limited_per_user : true,
			id : -2714464803136720394,
			sticker : $client->documentEmpty(
				id : 1355846004599430538,
			),
			stars : 4425547929180587137,
			availability_remains : 37,
			availability_total : 1,
			availability_resale : 1411014817864492769,
			convert_stars : -5964123508456195327,
			first_sale_date : 34,
			last_sale_date : 44,
			upgrade_stars : 7819368143497315072,
			resell_min_stars : 272755942342178750,
			title : 'qZurt2GlbKpW9inz',
			released_by : $client->peerUser(
				user_id : 4836317688983773607,
			),
			per_user_total : 40,
			per_user_remains : 9,
		),
		$client->starGiftUnique(
			require_premium : true,
			resale_ton_only : true,
			id : 8280142811118074793,
			title : 'gNRwuYMV1cPy8AQ2',
			slug : 'VQLIwzlm9RNCD5Eg',
			num : 15,
			owner_id : $client->peerUser(
				user_id : -4113809719274611561,
			),
			owner_name : 'v0TjM3H6xahXUoiS',
			owner_address : 'cdDsGP4Sm90EaHj1',
			attributes : array(
				$client->starGiftAttributeModel(
					name : 'Y0AfUiOPsqg4hDKQ',
					document : $client->documentEmpty(...),
					rarity_permille : 83,
				),
				$client->starGiftAttributePattern(
					name : 'Is1m2DNJb7vRUary',
					document : $client->documentEmpty(...),
					rarity_permille : 15,
				),
				$client->starGiftAttributeBackdrop(
					name : 'CBEenTtZrdbPFsOk',
					backdrop_id : 76,
					center_color : 1,
					edge_color : 65,
					pattern_color : 6,
					text_color : 53,
					rarity_permille : 71,
				),
				$client->starGiftAttributeOriginalDetails(
					sender_id : $client->peerUser(...),
					recipient_id : $client->peerUser(...),
					date : 26,
					message : $client->textWithEntities(...),
				),
			),
			availability_issued : 78,
			availability_total : 72,
			gift_address : 'ZMTi4mKIQh1FwY6u',
			resell_amount : array(
				$client->starsAmount(
					amount : -541439951044966355,
					nanos : 23,
				),
				$client->starsTonAmount(
					amount : 4611995944092811166,
				),
			),
			released_by : $client->peerUser(
				user_id : -2248310960705952987,
			),
		),
	),
	next_offset : 'QuS6dZKFA7tGevJ2',
	attributes : array(
		$client->starGiftAttributeModel(
			name : 'rUjcPaAoyFxdC3Ln',
			document : $client->documentEmpty(
				id : -4561837006885080687,
			),
			rarity_permille : 48,
		),
		$client->starGiftAttributePattern(
			name : 'BNJEulZFHMhKIgLm',
			document : $client->documentEmpty(
				id : -8747235728505159046,
			),
			rarity_permille : 92,
		),
		$client->starGiftAttributeBackdrop(
			name : '1hJBIHTmRvlPnO3u',
			backdrop_id : 85,
			center_color : 74,
			edge_color : 95,
			pattern_color : 5,
			text_color : 66,
			rarity_permille : 69,
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : -7196353606201641881,
			),
			recipient_id : $client->peerUser(
				user_id : 6181068057046015796,
			),
			date : 27,
			message : $client->textWithEntities(
				text : 'beTVzaxg4dInyl6p',
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
	attributes_hash : 8201923843157102625,
	chats : array(
		$client->chatEmpty(
			id : -20564575061800747,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -5960382170511686285,
			title : 'UdYTskQPwrWbSZcC',
			photo : $client->chatPhotoEmpty(),
			participants_count : 64,
			date : 72,
			version : 61,
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
				until_date : 52,
			),
		),
		$client->chatForbidden(
			id : 5620466648061968838,
			title : 'j1FBi6wQkfd5mVUC',
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
			id : -5559976060572220685,
			access_hash : -668080445385673528,
			title : '4SHvciBX096xg2fq',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 84,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'qtWxEFmABdoGnHhv',
					reason : 'jcSVElOz5IWMhFX8',
					text : 'fOBECPRdA4zYNuGv',
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
				until_date : 62,
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
				until_date : 98,
			),
			participants_count : 35,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 15,
			color : $client->peerColor(
				color : 57,
				background_emoji_id : -1980699639899856275,
			),
			profile_color : $client->peerColor(
				color : 5,
				background_emoji_id : 4663296115482613922,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 33,
			subscription_until_date : 87,
			bot_verification_icon : -8534229240723069119,
			send_paid_messages_stars : -8513261239506913032,
			linked_monoforum_id : 1103970934971768614,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -628588952590511485,
			access_hash : -4581766352022067020,
			title : 'gwoxjmisdLyAUF6Z',
			until_date : 31,
		),
	),
	counters : array(
		$client->starGiftAttributeCounter(
			attribute : $client->starGiftAttributeIdModel(
				document_id : 1914031398940192352,
			),
			count : 70,
		),
	),
	users : array(
		$client->userEmpty(
			id : 2438117859934778756,
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
			id : 1267459577046548128,
			access_hash : 5287095797371486351,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 89,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Hm1rMUiqRaZpvgsb',
					reason : 'fBD9M6AFNS8aWGy1',
					text : 'aWgIbSJjo4L7Q1Uu',
				),
			),
			bot_inline_placeholder : 'PMGxkJawdfVRYHNU',
			lang_code : 'kScDex1BUmFoQALZ',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 50,
			color : $client->peerColor(
				color : 30,
				background_emoji_id : -462431803942202513,
			),
			profile_color : $client->peerColor(
				color : 86,
				background_emoji_id : 3035580592916585375,
			),
			bot_active_users : 83,
			bot_verification_icon : 1892725684803433677,
			send_paid_messages_stars : -8184366567248436720,
		),
	),
);
```
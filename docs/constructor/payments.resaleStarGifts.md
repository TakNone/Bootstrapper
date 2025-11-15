# payments.resaleStarGifts

**Description** : *List of gifts currently on resale &raquo;*

**Layer** : 216

```tl
payments.resaleStarGifts#947a12df flags:# count:int gifts:Vector<StarGift> next_offset:flags.0?string attributes:flags.1?Vector<StarGiftAttribute> attributes_hash:flags.1?long chats:Vector<Chat> counters:flags.2?Vector<StarGiftAttributeCounter> users:Vector<User> = payments.ResaleStarGifts;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>count</mark> | [`int`](type/int) | Total number of results |
| <mark>gifts</mark> | [`Vector<StarGift>`](type/StarGift) | Collectible gifts on resale (may be less than count, in which case next_offset will be set) |
| **next_offset** | [`flags.0?string`](type/string) | Offset for pagination, pass this to payments.getResaleStarGifts.offset to fetch the next results |
| **attributes** | [`flags.1?Vector<StarGiftAttribute>`](type/StarGiftAttribute) | Possible gift attributes, only set if payments.getResaleStarGifts.attributes_hash is set (on the first call, it must be equal to 0) |
| **attributes_hash** | [`flags.1?long`](type/long) | Hash of the attributes field, pass this to payments.getResaleStarGifts.attributes_hash to avoid returning any attributes (flag not set) if they haven't changed |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats mentioned in the attributes |
| **counters** | [`flags.2?Vector<StarGiftAttributeCounter>`](type/StarGiftAttributeCounter) | Indicates the total number of gifts that have a specific attribute, only set if payments.getResaleStarGifts.offset is empty (since this field is not related to the current result page but to all of them, it's only returned on the first page) |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users mentioned in the attributes |

---

## Type

[payments.ResaleStarGifts](type/payments.ResaleStarGifts)

---

## Example

```php
$paymentsResaleStarGifts = $client->payments->resaleStarGifts(
	count : 20,
	gifts : array(
		$client->starGift(
			limited : true,
			sold_out : true,
			birthday : true,
			can_upgrade : true,
			require_premium : true,
			limited_per_user : true,
			peer_color_available : true,
			id : -4445424070938877373,
			sticker : $client->documentEmpty(
				id : -395739220675121525,
			),
			stars : 3583290437348477728,
			availability_remains : 36,
			availability_total : 50,
			availability_resale : 4304701021481277867,
			convert_stars : -8688694929269720475,
			first_sale_date : 11,
			last_sale_date : 75,
			upgrade_stars : -7458691871394004133,
			resell_min_stars : 5753614663610855572,
			title : 'qrEQhX8wpoYbs7lI',
			released_by : $client->peerUser(
				user_id : 6353209172908594487,
			),
			per_user_total : 39,
			per_user_remains : 78,
			locked_until_date : 100,
		),
		$client->starGiftUnique(
			require_premium : true,
			resale_ton_only : true,
			theme_available : true,
			id : -7781683946159732817,
			gift_id : 8085496220393590575,
			title : 'f0aCF5YQzBde7vXj',
			slug : 'J32HOvgzM5rKsa7d',
			num : 84,
			owner_id : $client->peerUser(
				user_id : 4562928342359017833,
			),
			owner_name : 'efFEbpgVKxBaYDR2',
			owner_address : 'uvGQk8h70snrjIyN',
			attributes : array(
				$client->starGiftAttributeModel(
					name : 'j0TegH4ZwYQnDGC2',
					document : $client->documentEmpty(...),
					rarity_permille : 92,
				),
				$client->starGiftAttributePattern(
					name : 'Am0R4iWBQb9I6qZo',
					document : $client->documentEmpty(...),
					rarity_permille : 41,
				),
				$client->starGiftAttributeBackdrop(
					name : 'WEKlquN0erxYHcv3',
					backdrop_id : 30,
					center_color : 67,
					edge_color : 44,
					pattern_color : 25,
					text_color : 80,
					rarity_permille : 74,
				),
				$client->starGiftAttributeOriginalDetails(
					sender_id : $client->peerUser(...),
					recipient_id : $client->peerUser(...),
					date : 93,
					message : $client->textWithEntities(...),
				),
			),
			availability_issued : 46,
			availability_total : 44,
			gift_address : 'I2V9AuZS8nWb75QC',
			resell_amount : array(
				$client->starsAmount(
					amount : -8290170679361309650,
					nanos : 83,
				),
				$client->starsTonAmount(
					amount : -4395728756644385006,
				),
			),
			released_by : $client->peerUser(
				user_id : 1992961752524608134,
			),
			value_amount : 6405784280096200995,
			value_currency : 'KkTEGFyd6jzb29fv',
			theme_peer : $client->peerUser(
				user_id : -3746942413155202681,
			),
			peer_color : $client->peerColor(
				color : 37,
				background_emoji_id : 3359852445165534860,
			),
			host_id : $client->peerUser(
				user_id : -1247389568944714319,
			),
		),
	),
	next_offset : 'HnqElhvdx8gO93Fu',
	attributes : array(
		$client->starGiftAttributeModel(
			name : 'nSlp4hb3297yOQwe',
			document : $client->documentEmpty(
				id : 3895090118121137503,
			),
			rarity_permille : 84,
		),
		$client->starGiftAttributePattern(
			name : 'L5CnMc8frbYdX4go',
			document : $client->documentEmpty(
				id : 1797851461782926051,
			),
			rarity_permille : 36,
		),
		$client->starGiftAttributeBackdrop(
			name : 'MBjxf0RtL79bw4SQ',
			backdrop_id : 76,
			center_color : 89,
			edge_color : 66,
			pattern_color : 54,
			text_color : 46,
			rarity_permille : 33,
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : -33273146882580585,
			),
			recipient_id : $client->peerUser(
				user_id : 1908611636259748786,
			),
			date : 99,
			message : $client->textWithEntities(
				text : '6whQI4qLF0XP1nbz',
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
	attributes_hash : -8258877251119706939,
	chats : array(
		$client->chatEmpty(
			id : -3693031640237326789,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 749572728559781765,
			title : 'nVugjZfwQ3xkyod4',
			photo : $client->chatPhotoEmpty(),
			participants_count : 30,
			date : 88,
			version : 64,
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
				until_date : 23,
			),
		),
		$client->chatForbidden(
			id : -9145669063276558579,
			title : 'a5lZoUIuFLC1iY0b',
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
			id : 7585149965403107632,
			access_hash : 2818771055659009212,
			title : 'kmulcbOP8pDNeLiS',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 96,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'XOk3GQIt5ZpwFWou',
					reason : 'pXNKG0htTQLsja5k',
					text : '4ItgiBmZyFYhLRJ5',
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
				until_date : 31,
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
				until_date : 53,
			),
			participants_count : 93,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 59,
			color : $client->peerColor(
				color : 28,
				background_emoji_id : -8752600869476347626,
			),
			profile_color : $client->peerColor(
				color : 41,
				background_emoji_id : -480960093431043895,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 83,
			subscription_until_date : 90,
			bot_verification_icon : -1263622782479058417,
			send_paid_messages_stars : -4248812103909051423,
			linked_monoforum_id : 3563347560581985353,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 6269139042780752729,
			access_hash : -5793484929650961480,
			title : 'ao8XMESNBmC9jJwK',
			until_date : 18,
		),
	),
	counters : array(
		$client->starGiftAttributeCounter(
			attribute : $client->starGiftAttributeIdModel(
				document_id : 6530327041957123424,
			),
			count : 51,
		),
	),
	users : array(
		$client->userEmpty(
			id : -4748958998351950909,
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
			id : -1229512579749782436,
			access_hash : -8017994857337849749,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 21,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '8bGnalVZjOWkLDem',
					reason : 'JNVm9ZoeM2RdiahL',
					text : 'zxws0oQ9ydR813MH',
				),
			),
			bot_inline_placeholder : 'Lnv7kGzpCuawiBJd',
			lang_code : 'UVIfo9Ykag02cPF4',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 27,
			color : $client->peerColor(
				color : 99,
				background_emoji_id : -136119192312637412,
			),
			profile_color : $client->peerColor(
				color : 53,
				background_emoji_id : 6262899806888650905,
			),
			bot_active_users : 93,
			bot_verification_icon : -7943947798832559447,
			send_paid_messages_stars : 672821572981577415,
		),
	),
);
```
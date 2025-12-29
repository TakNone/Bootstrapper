# payments.resaleStarGifts

**Description** : *List of gifts currently on resale &raquo;*

**Layer** : 218

```tl
payments.resaleStarGifts#947a12df flags:# count:int gifts:Vector<StarGift> next_offset:flags.0?string attributes:flags.1?Vector<StarGiftAttribute> attributes_hash:flags.1?long chats:Vector<Chat> counters:flags.2?Vector<StarGiftAttributeCounter> users:Vector<User> = payments.ResaleStarGifts;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	count : 81,
	gifts : array(
		$client->starGift(
			limited : true,
			sold_out : true,
			birthday : true,
			can_upgrade : true,
			require_premium : true,
			limited_per_user : true,
			peer_color_available : true,
			auction : true,
			id : 5028492209223381151,
			sticker : $client->documentEmpty(
				id : -3261753359902088107,
			),
			stars : -5043578666751941496,
			availability_remains : 88,
			availability_total : 8,
			availability_resale : -8096199089397985748,
			convert_stars : 699324966078175303,
			first_sale_date : 91,
			last_sale_date : 79,
			upgrade_stars : -9060399020986465314,
			resell_min_stars : 2930806249828697588,
			title : 'gJYx8D3od1eR0BOh',
			released_by : $client->peerUser(
				user_id : -2724614568895408067,
			),
			per_user_total : 29,
			per_user_remains : 37,
			locked_until_date : 82,
			auction_slug : 'elA8HrRdLEuDfKVt',
			gifts_per_round : 22,
		),
		$client->starGiftUnique(
			require_premium : true,
			resale_ton_only : true,
			theme_available : true,
			id : -3802945607042549766,
			gift_id : -4092562612738269873,
			title : 'HoOI5PQa0rmYtNJA',
			slug : 'j7opcHz0NAPlw8OC',
			num : 14,
			owner_id : $client->peerUser(
				user_id : -2955039314840839397,
			),
			owner_name : 'jBlZNmCQubGq9PWI',
			owner_address : 'Fgk7qmSB53HXsjhp',
			attributes : array(
				$client->starGiftAttributeModel(
					name : 'jfGz83PAkcqXyWxl',
					document : $client->documentEmpty(
						id : -7350075641970772006,
					),
					rarity_permille : 15,
				),
				$client->starGiftAttributePattern(
					name : 'YAwp49FNGszkbyqh',
					document : $client->documentEmpty(
						id : -1981081635395087931,
					),
					rarity_permille : 73,
				),
				$client->starGiftAttributeBackdrop(
					name : '3R7qXBAiwW12df45',
					backdrop_id : 83,
					center_color : 66,
					edge_color : 2,
					pattern_color : 88,
					text_color : 71,
					rarity_permille : 88,
				),
				$client->starGiftAttributeOriginalDetails(
					sender_id : $client->peerUser(
						user_id : -1890956838206668657,
					),
					recipient_id : $client->peerUser(
						user_id : -1422149856762741907,
					),
					date : 11,
					message : $client->textWithEntities(
						text : 'YCgLqnJQ9Fmob08t',
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
			availability_issued : 68,
			availability_total : 87,
			gift_address : 'ByMY20Tab6x5uHFU',
			resell_amount : array(
				$client->starsAmount(
					amount : 1739795318784166166,
					nanos : 6,
				),
				$client->starsTonAmount(
					amount : -3501398452349795876,
				),
			),
			released_by : $client->peerUser(
				user_id : 8454950803639570755,
			),
			value_amount : -5178369081912248160,
			value_currency : 'Z6aAeXfEPkQxYRhn',
			theme_peer : $client->peerUser(
				user_id : -4525661719902454070,
			),
			peer_color : $client->peerColor(
				color : 27,
				background_emoji_id : 3538322936090970726,
			),
			host_id : $client->peerUser(
				user_id : 6463436724177534783,
			),
		),
	),
	next_offset : 'YCoN7wkIFeqihVDm',
	attributes : array(
		$client->starGiftAttributeModel(
			name : 'a5P6iphWJlGOzxTu',
			document : $client->documentEmpty(
				id : -7197094670874966127,
			),
			rarity_permille : 13,
		),
		$client->starGiftAttributePattern(
			name : '1D4w2jyWFZeUQ9YS',
			document : $client->documentEmpty(
				id : 3184913603257891031,
			),
			rarity_permille : 51,
		),
		$client->starGiftAttributeBackdrop(
			name : 'lKfJzbnGEmX3vuoH',
			backdrop_id : 19,
			center_color : 79,
			edge_color : 6,
			pattern_color : 76,
			text_color : 71,
			rarity_permille : 87,
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : -4570776841314792191,
			),
			recipient_id : $client->peerUser(
				user_id : -2792113597234773246,
			),
			date : 8,
			message : $client->textWithEntities(
				text : 'tgEGPFHcWXM3wedS',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 53,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 94,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 73,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 80,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 49,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 19,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 1,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 29,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 53,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 55,
						language : '8dihUjmYIPqSFaRo',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 79,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 90,
						user_id : -3485549530698583663,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 98,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 2,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 72,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 70,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 28,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 86,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 3,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 53,
						document_id : 1679802403654468813,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 46,
					),
				),
			),
		),
	),
	attributes_hash : 4138363225424170689,
	chats : array(
		$client->chatEmpty(
			id : -5710141693934391537,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -1193643186911418205,
			title : 'ueimcwCSVE5Bz4J2',
			photo : $client->chatPhotoEmpty(),
			participants_count : 53,
			date : 95,
			version : 84,
			migrated_to : $client->get_input_channel(channel : '@LiveProto'),
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
				until_date : 71,
			),
		),
		$client->chatForbidden(
			id : -1204724589116264440,
			title : 'WarnbUTOVdgf9mLv',
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
			id : 3373076550800253326,
			access_hash : -5206858422799792560,
			title : '9NDbeZCJgGuhPkHQ',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 29,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '57H2LStWAU4qjdnw',
					reason : '0ZnGUTbvrFsuRgl7',
					text : '6rCnAa1ugPE0fFdo',
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
				until_date : 28,
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
				until_date : 16,
			),
			participants_count : 45,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 33,
			),
			color : $client->peerColor(
				color : 90,
				background_emoji_id : 2290966190764706143,
			),
			profile_color : $client->peerColor(
				color : 24,
				background_emoji_id : 1453489178346227982,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 26,
			subscription_until_date : 92,
			bot_verification_icon : -1897797840392449202,
			send_paid_messages_stars : -7527080128391140052,
			linked_monoforum_id : -1980883782552178329,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 3645753410423026779,
			access_hash : 3634479588760828893,
			title : 'bShFXmzCvcEIDT3i',
			until_date : 95,
		),
	),
	counters : array(
		$client->starGiftAttributeCounter(
			attribute : $client->starGiftAttributeIdModel(
				document_id : -4022481941970613705,
			),
			count : 49,
		),
	),
	users : array(
		$client->userEmpty(
			id : -2564141722475455626,
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
			id : 8665230267972250340,
			access_hash : 1782303091794389779,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 77,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'PvkKTIciFHJAztm2',
					reason : '1cQVqPJrlYy5hi3C',
					text : 'ekKbEAXVFS8a9Ldx',
				),
			),
			bot_inline_placeholder : 'JrG3vLiDUF4uygK7',
			lang_code : 'lHONjtFxfkAb3Rmd',
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
				max_id : 49,
			),
			color : $client->peerColor(
				color : 42,
				background_emoji_id : -4146825408943805171,
			),
			profile_color : $client->peerColor(
				color : 12,
				background_emoji_id : 32976296832039279,
			),
			bot_active_users : 74,
			bot_verification_icon : 3551799933062338391,
			send_paid_messages_stars : -4039641797992663658,
		),
	),
);
```
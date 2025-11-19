# payments.savedStarGifts

**Description** : *Represents a list of gifts*

**Layer** : 218

```tl
payments.savedStarGifts#95f389b1 flags:# count:int chat_notifications_enabled:flags.1?Bool gifts:Vector<SavedStarGift> next_offset:flags.0?string chats:Vector<Chat> users:Vector<User> = payments.SavedStarGifts;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>count</mark> | [`int`](type/int) | Total number of results (can be less than the returned gifts, in which case next_offset will be set) |
| **chat_notifications_enabled** | [`flags.1?Bool`](type/Bool) | Ternary value: can be not set, set&true, set&false. Can only be set for channels we own: the value indicates whether we enabled gift notifications for this channel |
| <mark>gifts</mark> | [`Vector<SavedStarGift>`](type/SavedStarGift) | Gifts |
| **next_offset** | [`flags.0?string`](type/string) | Offset to pass to payments.getSavedStarGifts to fetch the next page of results |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Channels mentioned in gifts |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users mentioned in gifts |

---

## Type

[payments.SavedStarGifts](type/payments.SavedStarGifts)

---

## Example

```php
$paymentsSavedStarGifts = $client->payments->savedStarGifts(
	count : 7,
	chat_notifications_enabled : false,
	gifts : array(
		$client->savedStarGift(
			name_hidden : true,
			unsaved : true,
			refunded : true,
			can_upgrade : true,
			pinned_to_top : true,
			upgrade_separate : true,
			from_id : $client->peerUser(
				user_id : 4220993304018975790,
			),
			date : 41,
			gift : $client->starGift(
				limited : true,
				sold_out : true,
				birthday : true,
				can_upgrade : true,
				require_premium : true,
				limited_per_user : true,
				peer_color_available : true,
				auction : true,
				id : 2154493963675348066,
				sticker : $client->documentEmpty(
					id : 1875355717234828111,
				),
				stars : -8236199307643713510,
				availability_remains : 3,
				availability_total : 8,
				availability_resale : 2524726323117789545,
				convert_stars : 4771704241020615981,
				first_sale_date : 71,
				last_sale_date : 70,
				upgrade_stars : -3586524699036720386,
				resell_min_stars : -5668730896985423705,
				title : 'TAP7gLcVZ6aSwKDW',
				released_by : $client->peerUser(
					user_id : 1054458694044018469,
				),
				per_user_total : 78,
				per_user_remains : 57,
				locked_until_date : 45,
				auction_slug : 'JqkYNvVB1LGyFh3w',
				gifts_per_round : 84,
			),
			message : $client->textWithEntities(
				text : 'MCeLtan4dJFwr59s',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 24,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 32,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 72,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 5,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 15,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 86,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 71,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 46,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 98,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 8,
						language : 'vWITcmDPBLHu835N',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 90,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 29,
						user_id : -5603021538708405358,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 15,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 7,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 1,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 51,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 33,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 58,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 25,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 15,
						document_id : 388874005005261505,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 91,
					),
				),
			),
			msg_id : 96,
			saved_id : 6031132425322813931,
			convert_stars : 1897334593088496913,
			upgrade_stars : 4169335318244542684,
			can_export_at : 30,
			transfer_stars : -3396968038458446349,
			can_transfer_at : 95,
			can_resell_at : 51,
			collection_id : array(1),
			prepaid_upgrade_hash : 'SJD5EsgcwQ6UHAGY',
			drop_original_details_stars : -1941667829614699803,
		),
	),
	next_offset : 'kTNQYdUa4mb0Vvhy',
	chats : array(
		$client->chatEmpty(
			id : -1272395484039518420,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 5496409730735107321,
			title : 'ZHMxeAT2E8YKaBUh',
			photo : $client->chatPhotoEmpty(),
			participants_count : 33,
			date : 10,
			version : 21,
			migrated_to : $client->get_input_channel(peer : '@LiveProto'),
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
			id : -1479812754246203329,
			title : 'aKLoN4DRlzIhm65d',
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
			id : 4889953265265660619,
			access_hash : 7588311999579541398,
			title : 'K6XqcFa5fwRO4h8N',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 77,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'kZBfgLbj8xReEh6u',
					reason : 'LIpVv0mKrPewgEfo',
					text : 'ezEmilcbW2VqKJPQ',
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
				until_date : 76,
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
				until_date : 14,
			),
			participants_count : 47,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 5,
			),
			color : $client->peerColor(
				color : 10,
				background_emoji_id : 5062148452134307063,
			),
			profile_color : $client->peerColor(
				color : 62,
				background_emoji_id : -7802464839549308983,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 20,
			subscription_until_date : 28,
			bot_verification_icon : -1235916510804276781,
			send_paid_messages_stars : 857420495946202352,
			linked_monoforum_id : 8693976889988981560,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 4411169613938983318,
			access_hash : 4162954658559230727,
			title : 'CAmWnU1wDqRaBNST',
			until_date : 48,
		),
	),
	users : array(
		$client->userEmpty(
			id : -9005755383386932474,
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
			id : 8788142585283458917,
			access_hash : 3665562453578703089,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 52,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Mxrl4zT9nQdjBUcX',
					reason : 'RUfJGFYDeXz8msZo',
					text : 'Al1IfaKF8bGHXqyg',
				),
			),
			bot_inline_placeholder : 'DqkURTNJ6PSCd7lF',
			lang_code : 'IG09PqbBHwZs6xer',
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
				max_id : 50,
			),
			color : $client->peerColor(
				color : 75,
				background_emoji_id : -1517593638430595158,
			),
			profile_color : $client->peerColor(
				color : 3,
				background_emoji_id : -3080866451638402953,
			),
			bot_active_users : 25,
			bot_verification_icon : 954979758237070410,
			send_paid_messages_stars : 2484911227404914300,
		),
	),
);
```
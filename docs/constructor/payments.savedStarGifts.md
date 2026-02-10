# payments.savedStarGifts

**Description** : *Represents a list of gifts*

**Layer** : 222

```tl
payments.savedStarGifts#95f389b1 flags:# count:int chat_notifications_enabled:flags.1?Bool gifts:Vector<SavedStarGift> next_offset:flags.0?string chats:Vector<Chat> users:Vector<User> = payments.SavedStarGifts;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	count : 42,
	chat_notifications_enabled : true,
	gifts : array(
		$client->savedStarGift(
			name_hidden : true,
			unsaved : true,
			refunded : true,
			can_upgrade : true,
			pinned_to_top : true,
			upgrade_separate : true,
			from_id : $client->peerUser(
				user_id : 8400295501218211402,
			),
			date : 62,
			gift : $client->starGift(
				limited : true,
				sold_out : true,
				birthday : true,
				require_premium : true,
				limited_per_user : true,
				peer_color_available : true,
				auction : true,
				id : -8076423626760476763,
				sticker : $client->documentEmpty(
					id : 6256022597083910496,
				),
				stars : -3594779784867136339,
				availability_remains : 46,
				availability_total : 29,
				availability_resale : 4163508321625544826,
				convert_stars : 2984021768220058548,
				first_sale_date : 37,
				last_sale_date : 83,
				upgrade_stars : -1319554498516642518,
				resell_min_stars : 3384931997143019112,
				title : 'aRNSIohXTCV7imYP',
				released_by : $client->peerUser(
					user_id : -5183150458817404780,
				),
				per_user_total : 51,
				per_user_remains : 36,
				locked_until_date : 62,
				auction_slug : 'NwPcnLlEue13FkTJ',
				gifts_per_round : 26,
				auction_start_date : 0,
				upgrade_variants : 1,
				background : $client->starGiftBackground(
					center_color : 67,
					edge_color : 38,
					text_color : 42,
				),
			),
			message : $client->textWithEntities(
				text : 'dEvPmLCuhni6JFpX',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 22,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 52,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 94,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 20,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 25,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 54,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 48,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 76,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 21,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 85,
						language : 'aXQvDzhTnrSJ9jOG',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 66,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 62,
						user_id : 896908733959109343,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 53,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 70,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 28,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 18,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 21,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 15,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 80,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 77,
						document_id : -1254425123664297900,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 68,
					),
				),
			),
			msg_id : 34,
			saved_id : 819685859068651567,
			convert_stars : -5728008313449278912,
			upgrade_stars : -7085987405297415367,
			can_export_at : 88,
			transfer_stars : 5729103780358807306,
			can_transfer_at : 61,
			can_resell_at : 10,
			collection_id : array(77),
			prepaid_upgrade_hash : 'pA3IViy4KBbgdeP6',
			drop_original_details_stars : -4511537535667373305,
			gift_num : 80,
			can_craft_at : 16,
		),
	),
	next_offset : 'LrNCa9vsR3KdYT60',
	chats : array(
		$client->chatEmpty(
			id : 5643381811281807489,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 6047872639855023155,
			title : '65ylaV8MrPfZwCxY',
			photo : $client->chatPhotoEmpty(),
			participants_count : 40,
			date : 63,
			version : 13,
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
				until_date : 29,
			),
		),
		$client->chatForbidden(
			id : 7830453110467855097,
			title : 'wOv6PXnaYp5TISJC',
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
			id : -5225283526952537070,
			access_hash : -675380658542258767,
			title : 'UVHlZfJtYGPu2BxS',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 67,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'cwkb1XGO2ad5iSz3',
					reason : 'U29CBKo34uewArcH',
					text : 'CFMQeHlvsntXhio4',
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
				until_date : 80,
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
				until_date : 59,
			),
			participants_count : 77,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 87,
			),
			color : $client->peerColor(
				color : 73,
				background_emoji_id : -1590649219970810081,
			),
			profile_color : $client->peerColor(
				color : 57,
				background_emoji_id : 367939149718949723,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 67,
			subscription_until_date : 60,
			bot_verification_icon : -5688553853893480844,
			send_paid_messages_stars : 4963241604997900953,
			linked_monoforum_id : 2155865425910698683,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -8535226280282962030,
			access_hash : -8609035430620576219,
			title : 'TOvMNGSPompkFK7d',
			until_date : 72,
		),
	),
	users : array(
		$client->userEmpty(
			id : -8892868022176940614,
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
			id : -7365899112951919773,
			access_hash : -8504697890471690637,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 55,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'KiBkS35IQZxtWyJm',
					reason : 'Q8M0WxENDwlam27H',
					text : '6w0gBdGto7fKSucq',
				),
			),
			bot_inline_placeholder : 'DIAV2UmLb3B810xT',
			lang_code : 'x8CnEmX31O7PujSt',
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
				max_id : 23,
			),
			color : $client->peerColor(
				color : 67,
				background_emoji_id : -1983676710362055106,
			),
			profile_color : $client->peerColor(
				color : 89,
				background_emoji_id : -1556484518259157258,
			),
			bot_active_users : 42,
			bot_verification_icon : -8476691547680787906,
			send_paid_messages_stars : -2912795131925017162,
		),
	),
);
```
# payments.starGiftAuctionAcquiredGifts

**Layer** : 218

```tl
payments.starGiftAuctionAcquiredGifts#7d5bd1f0 gifts:Vector<StarGiftAuctionAcquiredGift> users:Vector<User> chats:Vector<Chat> = payments.StarGiftAuctionAcquiredGifts;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>gifts</mark> | [`Vector<StarGiftAuctionAcquiredGift>`](type/StarGiftAuctionAcquiredGift) | NOTHING |
| <mark>users</mark> | [`Vector<User>`](type/User) | NOTHING |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | NOTHING |

---

## Type

[payments.StarGiftAuctionAcquiredGifts](type/payments.StarGiftAuctionAcquiredGifts)

---

## Example

```php
$paymentsStarGiftAuctionAcquiredGifts = $client->payments->starGiftAuctionAcquiredGifts(
	gifts : array(
		$client->starGiftAuctionAcquiredGift(
			name_hidden : true,
			peer : $client->peerUser(
				user_id : 7360595063951014145,
			),
			date : 47,
			bid_amount : -1607172797311219721,
			round : 91,
			pos : 59,
			message : $client->textWithEntities(
				text : 'Ccos5vezaTgNF4w0',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 1,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 51,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 25,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 38,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 35,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 97,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 89,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 40,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 75,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 10,
						language : 'Mcem2GgTnh9zjUNd',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 50,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 23,
						user_id : 7014066264470110814,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 32,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 57,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 71,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 72,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 90,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 84,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 20,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 72,
						document_id : 343102971422181151,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 87,
					),
				),
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : 7700056073963148102,
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
			id : 4669655173704345412,
			access_hash : 4546902895327077068,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 60,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '89bgfTwIDrOcRXZU',
					reason : 'wdgp6nz9KuOTfV3B',
					text : 'tnp0FEUhwN32AeBP',
				),
			),
			bot_inline_placeholder : 'fJAa0o9XL4nqKYOd',
			lang_code : 'xNd0HO27tJrW5gnz',
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
				max_id : 43,
			),
			color : $client->peerColor(
				color : 15,
				background_emoji_id : 6630790506959190856,
			),
			profile_color : $client->peerColor(
				color : 92,
				background_emoji_id : -1692445413312272245,
			),
			bot_active_users : 8,
			bot_verification_icon : 8302411096473636838,
			send_paid_messages_stars : -5480041031321237117,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 5010629310520154913,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 4793121215311950753,
			title : 'wbzZpHOCTcW6o0QM',
			photo : $client->chatPhotoEmpty(),
			participants_count : 18,
			date : 95,
			version : 1,
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
				until_date : 51,
			),
		),
		$client->chatForbidden(
			id : 1713243718294076814,
			title : 'PnKbMIjCrXafULx3',
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
			id : 3345087943473287731,
			access_hash : -4807181227044782757,
			title : 'cJmLqds3tHnXDuY4',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 17,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'fNImnM5G7vgwCP3W',
					reason : 'KLjudxikM1nCY9wm',
					text : 'GEVW8hBHTKsw261J',
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
				until_date : 13,
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
				until_date : 4,
			),
			participants_count : 83,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 24,
			),
			color : $client->peerColor(
				color : 79,
				background_emoji_id : -4252771596055603804,
			),
			profile_color : $client->peerColor(
				color : 92,
				background_emoji_id : -6978575908779851024,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 3,
			subscription_until_date : 7,
			bot_verification_icon : -7148818980554663591,
			send_paid_messages_stars : 5414033050486136157,
			linked_monoforum_id : -6510014785833594245,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 7005384409065761775,
			access_hash : -3197350299399543873,
			title : 'yNpU84sE9ZCrniBM',
			until_date : 16,
		),
	),
);
```
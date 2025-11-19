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
				user_id : 6798711919846482142,
			),
			date : 3,
			bid_amount : -4892921763814741830,
			round : 58,
			pos : 14,
			message : $client->textWithEntities(
				text : 'LFDKE2aQpYbukTSU',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 98,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 51,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 33,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 100,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 7,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 36,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 50,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 34,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 2,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 78,
						language : 'KTYtNpzj62hbvn7A',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 86,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 73,
						user_id : -4910373319365259349,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 59,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 16,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 2,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 86,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 5,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 29,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 16,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 42,
						document_id : -7728217250584466976,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 88,
					),
				),
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : -4383062645197141559,
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
			id : 705302267148144501,
			access_hash : -8205139269420563704,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 41,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'OYW7xqQZGHRaNCjK',
					reason : 'MG7pw09SjcrJ86Ca',
					text : '1vqDLm49riTAwpzJ',
				),
			),
			bot_inline_placeholder : 'vmcsyPXNq317S6Jp',
			lang_code : 'juVQi702xF45feHL',
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
				max_id : 98,
			),
			color : $client->peerColor(
				color : 34,
				background_emoji_id : -7595053736757081642,
			),
			profile_color : $client->peerColor(
				color : 83,
				background_emoji_id : -4436612962044388091,
			),
			bot_active_users : 76,
			bot_verification_icon : 682337750813893849,
			send_paid_messages_stars : 8962283490009440696,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 8964994024737227308,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 4985009917583131222,
			title : 'VSiTO1f8Ku3I5JX7',
			photo : $client->chatPhotoEmpty(),
			participants_count : 85,
			date : 49,
			version : 11,
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
			id : -7872765061617181573,
			title : 'lkKMjSvXPVnys8uJ',
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
			id : 455906958756492179,
			access_hash : -1783113026370637206,
			title : 'UKnBgoCYZkzlSPTf',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 74,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '2Yt3lvJpE5fTrSIa',
					reason : 'fLkyqv1mNBrcJw4h',
					text : 'm8sUxOriHoBtzyb5',
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
				until_date : 93,
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
				until_date : 92,
			),
			participants_count : 87,
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
				color : 10,
				background_emoji_id : 4666928449845725549,
			),
			profile_color : $client->peerColor(
				color : 90,
				background_emoji_id : 6437981918732564174,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 54,
			subscription_until_date : 79,
			bot_verification_icon : 1636580578350002904,
			send_paid_messages_stars : 3516182453493338374,
			linked_monoforum_id : -5798694147035966108,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 7515576432980930113,
			access_hash : -2162683472038217803,
			title : 'qyDvHYtg98ZNfkoP',
			until_date : 24,
		),
	),
);
```
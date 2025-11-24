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
				user_id : 5676250564827839641,
			),
			date : 32,
			bid_amount : 2363936798203442013,
			round : 0,
			pos : 88,
			message : $client->textWithEntities(
				text : 'NaKOfRQ2eG8sdWJY',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 21,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 19,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 98,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 80,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 45,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 67,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 24,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 28,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 99,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 28,
						language : 'rzcslRjpqBoI3Nyk',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 69,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 92,
						user_id : -4572700711952532655,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 27,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 21,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 96,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 65,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 36,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 77,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 39,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 41,
						document_id : -336196678697762941,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 100,
					),
				),
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : -7820182514431422581,
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
			id : -4549731126161776195,
			access_hash : 3922263129981138732,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 55,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'dRUHuk6zpOGjXqJt',
					reason : 'YLO7k2CaUcT0pHoF',
					text : 'FNBzmRMne9HG4Qj1',
				),
			),
			bot_inline_placeholder : 'RfdpnJ5hAgbj4Tax',
			lang_code : 'E2MneYc47pfubUNo',
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
				max_id : 56,
			),
			color : $client->peerColor(
				color : 24,
				background_emoji_id : -8600862992820715375,
			),
			profile_color : $client->peerColor(
				color : 35,
				background_emoji_id : 4674596425970599325,
			),
			bot_active_users : 98,
			bot_verification_icon : 2083219363444345387,
			send_paid_messages_stars : 450828396537973253,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 6274697372513281657,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 2933202706327943308,
			title : 'eFa4UGBSCErImRcL',
			photo : $client->chatPhotoEmpty(),
			participants_count : 7,
			date : 17,
			version : 49,
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
				until_date : 87,
			),
		),
		$client->chatForbidden(
			id : -497872018923350995,
			title : 'NiBZnKoc7kDU6It4',
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
			id : -2641044418517955265,
			access_hash : 7408921535106673473,
			title : 'hud5IgQaZqNoWcUx',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 25,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'jkCeDiw5s9TIRlq0',
					reason : '6gN5KyaEj8R1X0n3',
					text : 'H6nkUmeQYIlPNEvG',
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
				until_date : 22,
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
				until_date : 95,
			),
			participants_count : 62,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 90,
			),
			color : $client->peerColor(
				color : 89,
				background_emoji_id : -515088855717619426,
			),
			profile_color : $client->peerColor(
				color : 0,
				background_emoji_id : 654308901392490800,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 39,
			subscription_until_date : 95,
			bot_verification_icon : 7977793687929794659,
			send_paid_messages_stars : 8667852151482531908,
			linked_monoforum_id : 2087164807726885174,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -4802266560995597492,
			access_hash : 3170811103907895866,
			title : 'xD5SAE47nyKHWoLZ',
			until_date : 87,
		),
	),
);
```
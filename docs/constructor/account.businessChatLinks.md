# account.businessChatLinks

**Description** : *Contains info about business chat deep links &raquo; created by the current account*

**Layer** : 222

```tl
account.businessChatLinks#ec43a2d1 links:Vector<BusinessChatLink> chats:Vector<Chat> users:Vector<User> = account.BusinessChatLinks;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>links</mark> | [`Vector<BusinessChatLink>`](type/BusinessChatLink) | Links |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[account.BusinessChatLinks](type/account.BusinessChatLinks)

---

## Example

```php
$accountBusinessChatLinks = $client->account->businessChatLinks(
	links : array(
		$client->businessChatLink(
			link : 'Tltb1B6UChZ2KOmF',
			message : 'otzDS7V5jZPdGbmk',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 78,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 26,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 15,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 9,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 57,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 48,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 8,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 94,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 96,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 93,
					language : 'RIHq7ZtuK9NfldhP',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 95,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 65,
					user_id : -3619095305706297809,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 59,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 46,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 9,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 77,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 20,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 76,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 50,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 2,
					document_id : 8091007453235170501,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 55,
				),
			),
			title : 'dgrjaxEn9FYpVMzQ',
			views : 33,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 5192279626143846154,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -8419712920041220736,
			title : 'JlFZxR0WSYO79q1C',
			photo : $client->chatPhotoEmpty(),
			participants_count : 80,
			date : 82,
			version : 86,
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
				until_date : 56,
			),
		),
		$client->chatForbidden(
			id : -9051598796120216325,
			title : 'TVmDY6GsaXH42dMf',
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
			id : -9009336635230394876,
			access_hash : -2867670697274835197,
			title : 'bgELv5DH9Ph2YnmF',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 26,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '2nG8w6TfspBbOkVm',
					reason : 'F3Xdv74DiEC1xm9p',
					text : 'Bn3vIN6XkT4OtRlx',
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
				until_date : 23,
			),
			participants_count : 0,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 60,
			),
			color : $client->peerColor(
				color : 59,
				background_emoji_id : 6570446457074676652,
			),
			profile_color : $client->peerColor(
				color : 19,
				background_emoji_id : 611669786522351099,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 72,
			subscription_until_date : 55,
			bot_verification_icon : -7418522343265687073,
			send_paid_messages_stars : -4045192006409644173,
			linked_monoforum_id : 6230757743922979617,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 983482073919861780,
			access_hash : -349912589903993061,
			title : 'ThiRw4Lq5ZYNug0H',
			until_date : 16,
		),
	),
	users : array(
		$client->userEmpty(
			id : -4267005842201377279,
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
			id : 6258896153479461611,
			access_hash : -5464024964184216910,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 98,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '3LXidMQVphyPfm8C',
					reason : '7My6o5nEQAmKk8GN',
					text : 'WOoHCbJp9IMUPj37',
				),
			),
			bot_inline_placeholder : 'KDICN1Q2RJXB7Tkr',
			lang_code : 'vW9N1Zn82yKUF76S',
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
				max_id : 64,
			),
			color : $client->peerColor(
				color : 85,
				background_emoji_id : -8591638358341291144,
			),
			profile_color : $client->peerColor(
				color : 17,
				background_emoji_id : -6807628611756441765,
			),
			bot_active_users : 61,
			bot_verification_icon : 8589155547567230919,
			send_paid_messages_stars : 1573281586726655813,
		),
	),
);
```
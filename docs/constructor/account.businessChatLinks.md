# account.businessChatLinks

**Description** : *Contains info about business chat deep links &raquo; created by the current account*

**Layer** : 218

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
			link : 'k9iDcUay75LqNswA',
			message : 'ZAV35f2WgtyRKeN8',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 83,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 97,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 90,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 67,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 63,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 35,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 8,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 34,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 7,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 28,
					language : '7vmIrPgK1509VHFL',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 46,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 88,
					user_id : 223146200997756237,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 51,
					user_id : $client->get_input_user(peer : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 63,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 23,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 20,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 73,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 85,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 13,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 2,
					document_id : -7515218348257902424,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 45,
				),
			),
			title : 'dASmX4b1Hi6OURNB',
			views : 50,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 7829309909322403779,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 7181972579250744094,
			title : 'yNGMhuKjDBtzvw0C',
			photo : $client->chatPhotoEmpty(),
			participants_count : 17,
			date : 84,
			version : 63,
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
				until_date : 32,
			),
		),
		$client->chatForbidden(
			id : -7838265428599360969,
			title : 'h6LMSDPHYirBgcsJ',
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
			id : 1954596125096540276,
			access_hash : -2052734887191100819,
			title : 'qBZicY4P5k2EW9jI',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 59,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'gyvx06EtMaZoIhCd',
					reason : 'FbwztR5HhESO86PQ',
					text : 'uNq7dPD6SKnfORGI',
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
				until_date : 9,
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
				until_date : 69,
			),
			participants_count : 91,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 68,
			),
			color : $client->peerColor(
				color : 98,
				background_emoji_id : -1493960750979077514,
			),
			profile_color : $client->peerColor(
				color : 35,
				background_emoji_id : 3047186472079393296,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 74,
			subscription_until_date : 12,
			bot_verification_icon : -7655872613284923238,
			send_paid_messages_stars : -1024916653454767269,
			linked_monoforum_id : 117452676872848131,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 7246387472188114360,
			access_hash : 4479112644425065750,
			title : 'bsH5KnpFikDPmu2d',
			until_date : 94,
		),
	),
	users : array(
		$client->userEmpty(
			id : -7726122654130482358,
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
			id : 7090790276456038564,
			access_hash : -912634888896585052,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 38,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '8gjp0zD6JlxwNPy5',
					reason : '42CkBbiXMeOvcIp1',
					text : 'nIWgeZDxoJYGCuzi',
				),
			),
			bot_inline_placeholder : 'OXSaG2UYRgQtPWKd',
			lang_code : 'd5L2CpHlwJPou9e4',
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
				max_id : 15,
			),
			color : $client->peerColor(
				color : 34,
				background_emoji_id : -6524730579658698437,
			),
			profile_color : $client->peerColor(
				color : 40,
				background_emoji_id : -4815448120589046180,
			),
			bot_active_users : 57,
			bot_verification_icon : 4673853219946428397,
			send_paid_messages_stars : 8937679408110236265,
		),
	),
);
```
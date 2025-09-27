# account.businessChatLinks

**Description** : *Contains info about business chat deep links &raquo; created by the current account*

**Layer** : 214

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
			link : 'gACqBXQwJzpn31Sb',
			message : 'XtxgrKi81Qul6W7B',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 15,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 28,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 22,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 5,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 5,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 28,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 14,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 98,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 2,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 48,
					language : 'ASY6LgNJkRVeby21',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 54,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 75,
					user_id : 8844615982334743917,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 2,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 57,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 82,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 26,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 34,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 100,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 28,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 51,
					document_id : -8714824628512073553,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 72,
				),
			),
			title : 'lwh63eAEGITPk9ZW',
			views : 65,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 6073056252981869725,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 1483270209985025735,
			title : '5DGol2qksCrRPtHX',
			photo : $client->chatPhotoEmpty(),
			participants_count : 18,
			date : 13,
			version : 3,
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
				until_date : 62,
			),
		),
		$client->chatForbidden(
			id : -4035392568401917510,
			title : 'im8TC2W7yVhqlxZs',
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
			id : -566940663291590434,
			access_hash : 6970376499469434474,
			title : 'kehYRLZ8ATJ75PnO',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 69,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '3KdWvSBDOlcFPIe6',
					reason : 'oeLqTHNZIEAFcdmQ',
					text : 'HBTd0x6K3uY2mtiW',
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
				until_date : 29,
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
				until_date : 79,
			),
			participants_count : 61,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 65,
			color : $client->peerColor(
				color : 81,
				background_emoji_id : -921726384682025632,
			),
			profile_color : $client->peerColor(
				color : 81,
				background_emoji_id : -8717487221810404476,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 12,
			subscription_until_date : 62,
			bot_verification_icon : -6443525448835941093,
			send_paid_messages_stars : 7861869261006190406,
			linked_monoforum_id : 2560311393264894715,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -2372359039954131680,
			access_hash : 6164065108367693545,
			title : '5plxj7woTAOIb4ZD',
			until_date : 20,
		),
	),
	users : array(
		$client->userEmpty(
			id : -2076150066594846348,
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
			id : -8460503120791858387,
			access_hash : -7285638424376774014,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 72,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '57IVhbNtm4Z0vrjU',
					reason : 'P0GvmWoC6RpkBKXN',
					text : '0knfs8xXlCiAPmpa',
				),
			),
			bot_inline_placeholder : 'QSJZPL7IF8Et0uoU',
			lang_code : 'z3B8UkmQcYy7Ci2x',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 100,
			color : $client->peerColor(
				color : 68,
				background_emoji_id : -5338479391559010032,
			),
			profile_color : $client->peerColor(
				color : 1,
				background_emoji_id : 577051257331585806,
			),
			bot_active_users : 0,
			bot_verification_icon : -6583091840073672520,
			send_paid_messages_stars : -8361921403655492830,
		),
	),
);
```
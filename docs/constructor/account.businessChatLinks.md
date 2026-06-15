# account.businessChatLinks

**Description** : *Contains info about business chat deep links &raquo; created by the current account*

**Layer** : 227

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
			link : 'ZMBVh5fgs96KyecL',
			message : 'ekNM4R15sSCYTz0i',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 23,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 78,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 16,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 47,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 24,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 97,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 68,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 41,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 34,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 69,
					language : 'oxa9uwgnCHle0A17',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 94,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 73,
					user_id : -1098066906987390734,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 85,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 78,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 58,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 82,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 84,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 30,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 44,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 12,
					document_id : -5850131979329733522,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 2,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 60,
					date : 7,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 15,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 30,
					old_text : 'OZ2E5Fm6YWpcvXda',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 98,
				),
			),
			title : 'abxiQv24YCufEWRK',
			views : 33,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 3996432424376468643,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -2601525642142407870,
			title : 'UdvT6XpOouwfZi7a',
			photo : $client->chatPhotoEmpty(),
			participants_count : 94,
			date : 66,
			version : 100,
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
				manage_ranks : true,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 34,
			),
		),
		$client->chatForbidden(
			id : -3579322080691403458,
			title : 'ZkN0Jle1st8dBWCo',
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
			id : -2875736294017481753,
			access_hash : -7278748450917936467,
			title : '9DVQq6pTgJ1IZf54',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 39,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'igrvAKsON53E9QC7',
					reason : '92nJTpE1uSwOKfvY',
					text : 'XFDPG3xSM4fZCE0q',
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
				manage_ranks : true,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 17,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 17,
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
				max_id : 15,
			),
			color : $client->peerColor(
				color : 63,
				background_emoji_id : -2799874811375601334,
			),
			profile_color : $client->peerColor(
				color : 35,
				background_emoji_id : -6560154870583820751,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 63,
			subscription_until_date : 57,
			bot_verification_icon : 4721411105577812762,
			send_paid_messages_stars : -8484840698477313001,
			linked_monoforum_id : -404258314814576391,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 4634818250931671950,
			access_hash : -906637545360374712,
			title : 'zahr3OEXuZWA9Bwb',
			until_date : 62,
		),
	),
	users : array(
		$client->userEmpty(
			id : -5834958979497819638,
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
			bot_can_manage_bots : true,
			bot_guestchat : true,
			bot_guard : true,
			id : 7263593431542826368,
			access_hash : -3102864331280379321,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 83,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '9UtLxHhfkYjeqSi3',
					reason : 'KbjEzfD14YsopUAk',
					text : '1gLaKNVj9leRSTGW',
				),
			),
			bot_inline_placeholder : 'GTmFxuca0gHAOBW2',
			lang_code : 'djWJoxOu2FA5Hmz4',
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
				max_id : 78,
			),
			color : $client->peerColor(
				color : 7,
				background_emoji_id : -7172506536351480474,
			),
			profile_color : $client->peerColor(
				color : 73,
				background_emoji_id : 7393830313825333158,
			),
			bot_active_users : 81,
			bot_verification_icon : -2051013710619932298,
			send_paid_messages_stars : 8671960856132832910,
		),
	),
);
```
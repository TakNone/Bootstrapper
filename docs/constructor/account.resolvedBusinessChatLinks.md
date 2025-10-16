# account.resolvedBusinessChatLinks

**Description** : *Contains info about a single resolved business chat deep link &raquo;*

**Layer** : 216

```tl
account.resolvedBusinessChatLinks#9a23af21 flags:# peer:Peer message:string entities:flags.0?Vector<MessageEntity> chats:Vector<Chat> users:Vector<User> = account.ResolvedBusinessChatLinks;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>peer</mark> | [`Peer`](type/Peer) | Destination peer |
| <mark>message</mark> | [`string`](type/string) | Message to pre-fill in the message input field |
| **entities** | [`flags.0?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[account.ResolvedBusinessChatLinks](type/account.ResolvedBusinessChatLinks)

---

## Example

```php
$accountResolvedBusinessChatLinks = $client->account->resolvedBusinessChatLinks(
	peer : $client->peerUser(
		user_id : 5293197218598252022,
	),
	message : 'TcPZQ7NJKef3bzRF',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 9,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 50,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 1,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 87,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 98,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 0,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 44,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 42,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 94,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 5,
			language : 'apljsyheq0uK7XcD',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 15,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 24,
			user_id : -785453063370186713,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 90,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 46,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 78,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 70,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 62,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 16,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 84,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 7,
			document_id : 8057985642800277954,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 13,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -3317217208062155787,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 658217797318342530,
			title : 'HvsB9baUdqylgzMG',
			photo : $client->chatPhotoEmpty(),
			participants_count : 1,
			date : 78,
			version : 11,
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
				until_date : 47,
			),
		),
		$client->chatForbidden(
			id : -4560936663975172990,
			title : 'FVnKi5trLXTyek49',
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
			id : -6123590714894359565,
			access_hash : 4765141386978633023,
			title : 'fAIuTOweLi4hSglG',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 59,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'F2ybWq9RpnMXZSdo',
					reason : '3xSUZ6DAk9dnPQKG',
					text : 'lUCAaeQO6xGNKpb0',
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
				until_date : 52,
			),
			participants_count : 51,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 15,
			color : $client->peerColor(
				color : 19,
				background_emoji_id : -8890742544184246478,
			),
			profile_color : $client->peerColor(
				color : 86,
				background_emoji_id : 6262559489928999144,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 64,
			subscription_until_date : 70,
			bot_verification_icon : -748877710025134624,
			send_paid_messages_stars : 3667933054849328057,
			linked_monoforum_id : -180115520990376556,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 5442453043120153640,
			access_hash : -8044835246998503648,
			title : 'vZ3bk5N87MuoVlQy',
			until_date : 0,
		),
	),
	users : array(
		$client->userEmpty(
			id : 2982214282825018990,
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
			id : 5289961912639591014,
			access_hash : 918485990665023349,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 28,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '7oiVejZWf9YILal3',
					reason : 'bPolyKBVwqa4TmAW',
					text : 'OPjJFD83oiQSrB4Y',
				),
			),
			bot_inline_placeholder : 'BDyx8qH6NnotQ7Si',
			lang_code : 'WYhK75ITRvqyB4t2',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 69,
			color : $client->peerColor(
				color : 95,
				background_emoji_id : -1543709516997166965,
			),
			profile_color : $client->peerColor(
				color : 98,
				background_emoji_id : -274171332478562500,
			),
			bot_active_users : 99,
			bot_verification_icon : -775853066142081870,
			send_paid_messages_stars : 5534078751006032168,
		),
	),
);
```
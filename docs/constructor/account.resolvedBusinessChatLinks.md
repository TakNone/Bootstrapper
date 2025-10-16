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
		user_id : 4756167914207406653,
	),
	message : 'c5i8zlZp0xSRD9gU',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 70,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 0,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 85,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 27,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 48,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 21,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 98,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 89,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 39,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 99,
			language : 'ZgAzqbB4R6PnriKH',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 99,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 64,
			user_id : 1927796313092775769,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 48,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 62,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 75,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 3,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 95,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 19,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 18,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 52,
			document_id : -8828024632652113799,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 100,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -419646572120492233,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 4215039700854015230,
			title : 'VonkNPyAigIEUzB4',
			photo : $client->chatPhotoEmpty(),
			participants_count : 15,
			date : 71,
			version : 2,
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
				until_date : 91,
			),
		),
		$client->chatForbidden(
			id : -7615406969384536733,
			title : 'BQwLpxyV0r8UYDF3',
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
			id : -5034893865027260264,
			access_hash : -7583018088861839627,
			title : '0wnjVJy1x3pSsZYt',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 0,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '3fmtpsq94gA2JGEK',
					reason : 'K0vjUoMltqX35Res',
					text : 'GfyOs496Ck8xmvl7',
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
				until_date : 58,
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
				until_date : 65,
			),
			participants_count : 55,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 84,
			color : $client->peerColor(
				color : 4,
				background_emoji_id : 8960113546793328377,
			),
			profile_color : $client->peerColor(
				color : 58,
				background_emoji_id : -2540506742714397502,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 74,
			subscription_until_date : 67,
			bot_verification_icon : 7243433620140288265,
			send_paid_messages_stars : 4502983217799290465,
			linked_monoforum_id : 6013210911276869127,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -1148330948248751356,
			access_hash : 5762131546339851118,
			title : 'm4QUxyDcIql8vHC1',
			until_date : 25,
		),
	),
	users : array(
		$client->userEmpty(
			id : 1725683535736880400,
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
			id : 2157737159568714304,
			access_hash : -6977610012773673918,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 34,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'AeBU1WNuCLZb4rpH',
					reason : '2hL0Bqb965fwyZ8g',
					text : 'fI9Ku8HlGSqo52sD',
				),
			),
			bot_inline_placeholder : 'zDvpGmTJ5W3NyMbS',
			lang_code : 'qeh3n4Qm0wj2xoGO',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 38,
			color : $client->peerColor(
				color : 14,
				background_emoji_id : 8134288518442575674,
			),
			profile_color : $client->peerColor(
				color : 50,
				background_emoji_id : -3058444215015585109,
			),
			bot_active_users : 99,
			bot_verification_icon : 2316538247974732875,
			send_paid_messages_stars : -8370207281439533163,
		),
	),
);
```
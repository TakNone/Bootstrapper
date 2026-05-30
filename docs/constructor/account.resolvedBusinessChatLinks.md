# account.resolvedBusinessChatLinks

**Description** : *Contains info about a single resolved business chat deep link &raquo;*

**Layer** : 222

```tl
account.resolvedBusinessChatLinks#9a23af21 flags:# peer:Peer message:string entities:flags.0?Vector<MessageEntity> chats:Vector<Chat> users:Vector<User> = account.ResolvedBusinessChatLinks;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
		user_id : -7017045523592450151,
	),
	message : 'tvjsu5UWPG13hgCl',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 11,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 88,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 74,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 91,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 50,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 99,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 72,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 26,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 86,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 79,
			language : 'zaUc4jO3mPVv5kql',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 72,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 55,
			user_id : 5471844859506645467,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 14,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 58,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 59,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 3,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 81,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 100,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 10,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 96,
			document_id : -6457866497199685721,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 47,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 247401573261094492,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 2790566039250546183,
			title : 'XRfxarzQApylknuC',
			photo : $client->chatPhotoEmpty(),
			participants_count : 35,
			date : 14,
			version : 9,
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
				until_date : 66,
			),
		),
		$client->chatForbidden(
			id : -6605292568240494153,
			title : 'wChbpWBrVJGv9R5d',
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
			id : 7792071244600476001,
			access_hash : 9093956600978646654,
			title : 'keU1tbQBdhf5PTas',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 40,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'T6oN4JQIwpE1s2Xt',
					reason : 'oOX6hTClcGvum2bJ',
					text : 'YqENtiDf6sCHBvJF',
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
				until_date : 71,
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
				until_date : 22,
			),
			participants_count : 93,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 85,
			),
			color : $client->peerColor(
				color : 32,
				background_emoji_id : -910831365289573017,
			),
			profile_color : $client->peerColor(
				color : 90,
				background_emoji_id : -5276858432847897256,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 23,
			subscription_until_date : 44,
			bot_verification_icon : -5693217144217512821,
			send_paid_messages_stars : 4089113479010972018,
			linked_monoforum_id : -1116856090694027067,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 7307323817125899199,
			access_hash : 2221860846129195079,
			title : 'HTmPEle3BSGhroKq',
			until_date : 48,
		),
	),
	users : array(
		$client->userEmpty(
			id : -375321162671342278,
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
			id : 4516285364202347025,
			access_hash : 4997862275740077687,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 52,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'cqCTwrt4n2aNEMYK',
					reason : 'lFCGDSnPLBkKXT7Q',
					text : 'nGtXUMRW6flCLKg2',
				),
			),
			bot_inline_placeholder : 'fGq36KsxFJ9pIdmM',
			lang_code : '9v0M17ycNfXxDtHS',
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
				max_id : 8,
			),
			color : $client->peerColor(
				color : 1,
				background_emoji_id : -5364114990992550319,
			),
			profile_color : $client->peerColor(
				color : 40,
				background_emoji_id : -7350108330990753409,
			),
			bot_active_users : 76,
			bot_verification_icon : -2295936367710973359,
			send_paid_messages_stars : 892422322574664015,
		),
	),
);
```
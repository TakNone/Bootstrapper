# account.resolvedBusinessChatLinks

**Description** : *Contains info about a single resolved business chat deep link &raquo;*

**Layer** : 211

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
		user_id : 7448916089214883264,
	),
	message : 'xfLEizbPsGjXR7Ce',
	entities : array(
		$client->messageEntityUnknown(
			offset : 94,
			length : 7,
		),
		$client->messageEntityMention(
			offset : 18,
			length : 54,
		),
		$client->messageEntityHashtag(
			offset : 64,
			length : 65,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 26,
		),
		$client->messageEntityUrl(
			offset : 58,
			length : 62,
		),
		$client->messageEntityEmail(
			offset : 54,
			length : 69,
		),
		$client->messageEntityBold(
			offset : 34,
			length : 67,
		),
		$client->messageEntityItalic(
			offset : 77,
			length : 63,
		),
		$client->messageEntityCode(
			offset : 2,
			length : 60,
		),
		$client->messageEntityPre(
			offset : 96,
			length : 39,
			language : '3YzLrMm8jw9T2sQn',
		),
		$client->messageEntityTextUrl(
			offset : 21,
			length : 2,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 69,
			length : 4,
			user_id : -2039162359158146737,
		),
		$client->inputMessageEntityMentionName(
			offset : 10,
			length : 45,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 13,
			length : 92,
		),
		$client->messageEntityCashtag(
			offset : 16,
			length : 69,
		),
		$client->messageEntityUnderline(
			offset : 70,
			length : 11,
		),
		$client->messageEntityStrike(
			offset : 7,
			length : 1,
		),
		$client->messageEntityBankCard(
			offset : 13,
			length : 24,
		),
		$client->messageEntitySpoiler(
			offset : 35,
			length : 8,
		),
		$client->messageEntityCustomEmoji(
			offset : 2,
			length : 45,
			document_id : -6464571827862638347,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 84,
			length : 4,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -2877846312055814460,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -2243032097336006392,
			title : 'Y7L1KRlJEyvZFmnP',
			photo : $client->chatPhotoEmpty(),
			participants_count : 8,
			date : 66,
			version : 74,
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
				until_date : 29,
			),
		),
		$client->chatForbidden(
			id : 2318592583614153739,
			title : 'aHDSGp9PQChFf65E',
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
			id : 3082734201445728349,
			access_hash : 1407409322691832257,
			title : 'gFrD8YxnyojOE25W',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 37,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'n720FrqvtlLW145y',
					reason : 'mFOXG4kPrpHQcLWu',
					text : 'mIOboLt019GwHZpF',
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
				until_date : 76,
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
				until_date : 11,
			),
			participants_count : 45,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 32,
			color : $client->peerColor(
				color : 18,
				background_emoji_id : 3101978895457527644,
			),
			profile_color : $client->peerColor(
				color : 4,
				background_emoji_id : 5146922392019261706,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 80,
			subscription_until_date : 11,
			bot_verification_icon : -8755315892518269615,
			send_paid_messages_stars : 6905902435668417331,
			linked_monoforum_id : -360057801142451566,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -6329802042507020050,
			access_hash : -2556892840488316521,
			title : 'BvoUYIXtZ2AaNdFR',
			until_date : 98,
		),
	),
	users : array(
		$client->userEmpty(
			id : 8929829164763283509,
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
			id : 1072421179037973419,
			access_hash : -545433049841870071,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 33,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'kLMhIlNc5DRwCotj',
					reason : '3Bz6EAfJsnjTgoFH',
					text : 'HGQhDaVZ3OP59c2U',
				),
			),
			bot_inline_placeholder : 'mZYA7CRpfFKySdk8',
			lang_code : 'pW4SoeknhHKaG7wx',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 45,
			color : $client->peerColor(
				color : 18,
				background_emoji_id : -9071085480829930208,
			),
			profile_color : $client->peerColor(
				color : 39,
				background_emoji_id : 5508444772729465757,
			),
			bot_active_users : 62,
			bot_verification_icon : -8449874907633363421,
			send_paid_messages_stars : -4439234156839659085,
		),
	),
);
```
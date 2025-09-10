# account.resolvedBusinessChatLinks

**Description** : *Contains info about a single resolved business chat deep link &raquo;*

**Layer** : 214

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
		user_id : -6096480076303086063,
	),
	message : 'Ydc4M9VbmWN6lipE',
	entities : array(
		$client->messageEntityUnknown(
			offset : 44,
			length : 55,
		),
		$client->messageEntityMention(
			offset : 46,
			length : 77,
		),
		$client->messageEntityHashtag(
			offset : 57,
			length : 86,
		),
		$client->messageEntityBotCommand(
			offset : 63,
			length : 6,
		),
		$client->messageEntityUrl(
			offset : 3,
			length : 67,
		),
		$client->messageEntityEmail(
			offset : 69,
			length : 80,
		),
		$client->messageEntityBold(
			offset : 63,
			length : 79,
		),
		$client->messageEntityItalic(
			offset : 55,
			length : 43,
		),
		$client->messageEntityCode(
			offset : 100,
			length : 3,
		),
		$client->messageEntityPre(
			offset : 19,
			length : 97,
			language : '26eWG5tXfN7iQcS0',
		),
		$client->messageEntityTextUrl(
			offset : 84,
			length : 35,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 97,
			length : 38,
			user_id : 8063461328514979501,
		),
		$client->inputMessageEntityMentionName(
			offset : 95,
			length : 61,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 92,
			length : 17,
		),
		$client->messageEntityCashtag(
			offset : 88,
			length : 3,
		),
		$client->messageEntityUnderline(
			offset : 34,
			length : 22,
		),
		$client->messageEntityStrike(
			offset : 59,
			length : 91,
		),
		$client->messageEntityBankCard(
			offset : 77,
			length : 67,
		),
		$client->messageEntitySpoiler(
			offset : 18,
			length : 66,
		),
		$client->messageEntityCustomEmoji(
			offset : 47,
			length : 11,
			document_id : 2879519473504696040,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 65,
			length : 59,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 8571287715724371248,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 6755540967141257918,
			title : 'x9iYuAnMw7GaJZFX',
			photo : $client->chatPhotoEmpty(),
			participants_count : 100,
			date : 28,
			version : 19,
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
				until_date : 26,
			),
		),
		$client->chatForbidden(
			id : -1720088787771785080,
			title : 'bhuDGzvrfOqgSQ1Z',
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
			id : -9135041245755797854,
			access_hash : 125261927829767438,
			title : '8EfwJiLNqz6P0S9V',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 60,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'gT2I35wbQFWxNMfs',
					reason : 'NiCxSsh627HZn3Vz',
					text : 'WL70zAqBVkjU391i',
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
				until_date : 3,
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
			participants_count : 19,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 84,
			color : $client->peerColor(
				color : 90,
				background_emoji_id : -3341746730485345668,
			),
			profile_color : $client->peerColor(
				color : 95,
				background_emoji_id : -8312713697189245607,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 71,
			subscription_until_date : 65,
			bot_verification_icon : -1753555466086139128,
			send_paid_messages_stars : 1012245662302106751,
			linked_monoforum_id : -7584183686396839095,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 2665637476062512931,
			access_hash : -5011989315719693987,
			title : 'BgGm5oxz4iNfk7Wb',
			until_date : 48,
		),
	),
	users : array(
		$client->userEmpty(
			id : -8067125707127664547,
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
			id : 4566271111353480171,
			access_hash : 3674447716953934229,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 40,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'orEJ0RumXwZIdM6V',
					reason : 'u1mowWQtkh0zqEXg',
					text : 'H1VAzpn0L8BaDcix',
				),
			),
			bot_inline_placeholder : '60ucwI2gd4Sr8iNe',
			lang_code : '4xjH2egISdOuJZtA',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 58,
			color : $client->peerColor(
				color : 82,
				background_emoji_id : -1275915702784373254,
			),
			profile_color : $client->peerColor(
				color : 89,
				background_emoji_id : 8308192118741591355,
			),
			bot_active_users : 94,
			bot_verification_icon : 7195884864239834346,
			send_paid_messages_stars : -3554804574666319629,
		),
	),
);
```
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
		user_id : 405283293073779875,
	),
	message : 'cQgFRokqauJyltwZ',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 19,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 41,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 8,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 79,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 77,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 79,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 11,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 76,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 40,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 28,
			language : 'KLcBIqxPwT80MNEy',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 76,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 60,
			user_id : 2110399367035619704,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 36,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 52,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 3,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 8,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 64,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 44,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 78,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 59,
			document_id : 6571602606407584031,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 98,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -6230089067771633926,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -5905015494729110539,
			title : 'mWCzGRfvDZ2JtBxq',
			photo : $client->chatPhotoEmpty(),
			participants_count : 94,
			date : 32,
			version : 96,
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
				until_date : 98,
			),
		),
		$client->chatForbidden(
			id : 5567609861502112088,
			title : 'WS2Tum63xKUHVfCJ',
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
			id : 203034027189973052,
			access_hash : -1456618971377268106,
			title : 'T18gJkuCvhL9lHiP',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 83,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Xk0IRTfaG3SAnVcQ',
					reason : 'o7miU8tOrkClfdbW',
					text : 'YJ6dV1z8CXqpZ4lM',
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
				until_date : 94,
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
				until_date : 27,
			),
			participants_count : 75,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 39,
			),
			color : $client->peerColor(
				color : 64,
				background_emoji_id : -7880223599636040305,
			),
			profile_color : $client->peerColor(
				color : 24,
				background_emoji_id : -2595252055281367972,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 47,
			subscription_until_date : 75,
			bot_verification_icon : 7291023600355679854,
			send_paid_messages_stars : -7288164683602314909,
			linked_monoforum_id : -4033861679418513793,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 1445190175211371494,
			access_hash : 5885897722593771999,
			title : 'fOkEjnBXWch2HpNg',
			until_date : 67,
		),
	),
	users : array(
		$client->userEmpty(
			id : -5810352598901268607,
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
			id : 6174065631703564501,
			access_hash : 2742170981539292613,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 91,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'YN4CQMtobkOE6Jgu',
					reason : 'h2tkSR4OXzbvTG8y',
					text : 'o4BcVd2sjeqf0LNb',
				),
			),
			bot_inline_placeholder : 'w8HrQaNexhtVj3lT',
			lang_code : 'gjNmveOZQ6MCokRh',
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
				max_id : 83,
			),
			color : $client->peerColor(
				color : 30,
				background_emoji_id : -7769080638597733608,
			),
			profile_color : $client->peerColor(
				color : 19,
				background_emoji_id : -4029048594192203475,
			),
			bot_active_users : 1,
			bot_verification_icon : -5419174319026509204,
			send_paid_messages_stars : 7730289968018938394,
		),
	),
);
```
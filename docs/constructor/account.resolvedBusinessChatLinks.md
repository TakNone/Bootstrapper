# account.resolvedBusinessChatLinks

**Description** : *Contains info about a single resolved business chat deep link &raquo;*

**Layer** : 227

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
		user_id : -5220438588589498765,
	),
	message : '1ZKLdJeC9SOcvM45',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 61,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 16,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 97,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 1,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 3,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 24,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 17,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 36,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 65,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 7,
			language : 'VIAs79zPgpnokNET',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 10,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 56,
			user_id : -2270916056964442369,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 96,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 47,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 87,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 96,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 53,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 33,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 31,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 88,
			document_id : -5450234493494028281,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 44,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 58,
			date : 73,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 33,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 6,
			old_text : '8ML7orub5aGBD4ct',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 93,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -5736573111906630968,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -4610487668639085636,
			title : 'J31EFzCyeLqIlR7g',
			photo : $client->chatPhotoEmpty(),
			participants_count : 61,
			date : 40,
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
				until_date : 81,
			),
		),
		$client->chatForbidden(
			id : -2102785332231694637,
			title : 'dlwyLF9NBmaVk5Xs',
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
			id : -2932756462732369530,
			access_hash : 2752502757016875216,
			title : 'lpuqY82WJwLZzaXP',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 67,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'emruZgJKcxAOT9EF',
					reason : 'GftPdSQgiCJUeRYc',
					text : 'NepSOYvr34wRfuhI',
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
				until_date : 95,
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
				until_date : 80,
			),
			participants_count : 61,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 31,
			),
			color : $client->peerColor(
				color : 8,
				background_emoji_id : -931912100169829607,
			),
			profile_color : $client->peerColor(
				color : 6,
				background_emoji_id : -5062346204083032294,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 89,
			subscription_until_date : 6,
			bot_verification_icon : 6520509185823342268,
			send_paid_messages_stars : -9032074013774652463,
			linked_monoforum_id : 1543362011593562555,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 8153928675550643760,
			access_hash : -7886087533259715060,
			title : 'm0BY6iuay8qOwJb2',
			until_date : 68,
		),
	),
	users : array(
		$client->userEmpty(
			id : 5253875573677880921,
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
			id : -8558363764985162022,
			access_hash : -2202218621677747555,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 17,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'gNWQAduqC3hkRsL5',
					reason : 'RAwDLK7ElpN15Ztr',
					text : 'iuMn6T3vP4xaLqsf',
				),
			),
			bot_inline_placeholder : 'otyEqPWiCad7nl2X',
			lang_code : 'meqk1YuJcnvB6WtG',
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
				max_id : 24,
			),
			color : $client->peerColor(
				color : 30,
				background_emoji_id : -8544116761058604828,
			),
			profile_color : $client->peerColor(
				color : 97,
				background_emoji_id : 6970616636944596088,
			),
			bot_active_users : 95,
			bot_verification_icon : -8957065425054182881,
			send_paid_messages_stars : -5923603138020075827,
		),
	),
);
```
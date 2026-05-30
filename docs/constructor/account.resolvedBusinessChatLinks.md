# account.resolvedBusinessChatLinks

**Description** : *Contains info about a single resolved business chat deep link &raquo;*

**Layer** : 225

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
		user_id : 8397813530842182854,
	),
	message : '5aZgPJhVWyTFQlzv',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 54,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 86,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 46,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 54,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 87,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 16,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 52,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 41,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 88,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 38,
			language : 'Di1t3nXUgH7BdmEl',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 56,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 67,
			user_id : -5212742820693948433,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 35,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 68,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 77,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 35,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 21,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 71,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 35,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 38,
			document_id : -7181001034551578049,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 12,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 21,
			date : 38,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 27,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 88,
			old_text : '3hoc1ki7Yg2zGHB4',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 67,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 4886347922877177206,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 7437521388363488489,
			title : 'g7HQzJUwvBhGZeFf',
			photo : $client->chatPhotoEmpty(),
			participants_count : 5,
			date : 20,
			version : 73,
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
				until_date : 11,
			),
		),
		$client->chatForbidden(
			id : -697174006986680274,
			title : 'WYyfiTezwaNJGFmr',
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
			id : -5333289956611963189,
			access_hash : 3997542153005449535,
			title : 'An2rYGkRaQsqzTdb',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 21,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'w8m7yeuOWldUvgQV',
					reason : '2PHsV6ACJ5bxGXwm',
					text : '5bS9T3CqeZka1oEl',
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
				until_date : 4,
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
				until_date : 64,
			),
			participants_count : 82,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 67,
			),
			color : $client->peerColor(
				color : 60,
				background_emoji_id : -7042175919972357990,
			),
			profile_color : $client->peerColor(
				color : 88,
				background_emoji_id : 721152916097128990,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 92,
			subscription_until_date : 89,
			bot_verification_icon : -3361877863417184725,
			send_paid_messages_stars : -8910825347600345641,
			linked_monoforum_id : -3422129542524990222,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -570282735860042078,
			access_hash : -4728593854375576716,
			title : '6zKYrFngdMjbutW0',
			until_date : 57,
		),
	),
	users : array(
		$client->userEmpty(
			id : -7607841284290893496,
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
			id : 6596522117730688438,
			access_hash : 3128953621236573985,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 9,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '8bl9OqN5znHG2x31',
					reason : 's7AWKBu2CZYhe3vS',
					text : 'JDEYoGwmnF4ZeCOS',
				),
			),
			bot_inline_placeholder : 'MTbmPKrtXYxhZN3F',
			lang_code : 'CLWZqB16QRcdYPka',
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
				max_id : 40,
			),
			color : $client->peerColor(
				color : 18,
				background_emoji_id : -1546509366435078754,
			),
			profile_color : $client->peerColor(
				color : 99,
				background_emoji_id : 6403580885027797679,
			),
			bot_active_users : 59,
			bot_verification_icon : -4209562418788236781,
			send_paid_messages_stars : 1754624099254045850,
		),
	),
);
```
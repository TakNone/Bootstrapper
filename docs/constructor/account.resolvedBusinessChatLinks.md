# account.resolvedBusinessChatLinks

**Description** : *Contains info about a single resolved business chat deep link &raquo;*

**Layer** : 218

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
		user_id : -7909812986344113427,
	),
	message : '2xw5onlGDeCRuhOy',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 42,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 66,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 65,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 59,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 46,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 77,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 53,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 63,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 74,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 82,
			language : 'PIryOsLKFQfDaXq7',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 44,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 29,
			user_id : 2045935081522051191,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 90,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 12,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 0,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 12,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 69,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 35,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 81,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 41,
			document_id : 4630100699453968823,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 47,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 5595897502547542564,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 5448039671246476643,
			title : '6Aob1O04YwdEgifZ',
			photo : $client->chatPhotoEmpty(),
			participants_count : 62,
			date : 75,
			version : 2,
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
				until_date : 34,
			),
		),
		$client->chatForbidden(
			id : -9128659440455902264,
			title : 'sKqjOvVP2HNtdoZh',
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
			id : 6931633802428781676,
			access_hash : 9115952957625391516,
			title : 'AfKMvZEzO4rF3jnc',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 62,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'NsOGcBDuzUwtkfnF',
					reason : 'sj0MX7g3UoQlDw6G',
					text : '5EeVcT1oOAwgv6Dn',
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
				until_date : 21,
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
				until_date : 84,
			),
			participants_count : 32,
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
				color : 48,
				background_emoji_id : -507665048568264267,
			),
			profile_color : $client->peerColor(
				color : 56,
				background_emoji_id : -2672996522063684527,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 80,
			subscription_until_date : 11,
			bot_verification_icon : -2097360533603245656,
			send_paid_messages_stars : 5621996422109657868,
			linked_monoforum_id : 6234793388075720040,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 486297495192187796,
			access_hash : -1646058011357030091,
			title : 'Tt9dRB3vbHsJEQca',
			until_date : 89,
		),
	),
	users : array(
		$client->userEmpty(
			id : -3598495843544605452,
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
			id : -7658663999856184294,
			access_hash : 2506956688665533864,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 19,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Gcglv1CVJErAnKDx',
					reason : 'aMc6b93UZqk8QeYm',
					text : 'lRh1L9rapoesSg7q',
				),
			),
			bot_inline_placeholder : 'mhTOSYQWKPpBMvna',
			lang_code : 'JDnPeA3z8h12NT0M',
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
				max_id : 56,
			),
			color : $client->peerColor(
				color : 34,
				background_emoji_id : -4973338400925282354,
			),
			profile_color : $client->peerColor(
				color : 90,
				background_emoji_id : 2702276760031888895,
			),
			bot_active_users : 55,
			bot_verification_icon : -1041570216915990809,
			send_paid_messages_stars : 6792561223252923699,
		),
	),
);
```
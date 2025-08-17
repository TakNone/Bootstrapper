# account.resolvedBusinessChatLinks

**Description** : *Contains info about a single resolved business chat deep link »*

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
		user_id : 5811110705854350833,
	),
	message : 'B6svZlEoLHzINQWu',
	entities : array(
		$client->messageEntityUnknown(
			offset : 72,
			length : 61,
		),
		$client->messageEntityMention(
			offset : 22,
			length : 9,
		),
		$client->messageEntityHashtag(
			offset : 84,
			length : 72,
		),
		$client->messageEntityBotCommand(
			offset : 25,
			length : 56,
		),
		$client->messageEntityUrl(
			offset : 63,
			length : 70,
		),
		$client->messageEntityEmail(
			offset : 79,
			length : 50,
		),
		$client->messageEntityBold(
			offset : 52,
			length : 83,
		),
		$client->messageEntityItalic(
			offset : 75,
			length : 57,
		),
		$client->messageEntityCode(
			offset : 97,
			length : 31,
		),
		$client->messageEntityPre(
			offset : 5,
			length : 81,
			language : '7Xi8uxLJb9DcCVeE',
		),
		$client->messageEntityTextUrl(
			offset : 74,
			length : 8,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 26,
			length : 64,
			user_id : 7781223429329764675,
		),
		$client->inputMessageEntityMentionName(
			offset : 50,
			length : 33,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 12,
			length : 86,
		),
		$client->messageEntityCashtag(
			offset : 20,
			length : 43,
		),
		$client->messageEntityUnderline(
			offset : 84,
			length : 59,
		),
		$client->messageEntityStrike(
			offset : 32,
			length : 63,
		),
		$client->messageEntityBankCard(
			offset : 6,
			length : 40,
		),
		$client->messageEntitySpoiler(
			offset : 79,
			length : 64,
		),
		$client->messageEntityCustomEmoji(
			offset : 43,
			length : 49,
			document_id : -8556798686095318331,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 68,
			length : 50,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -794997161322720309,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 8454852348181256743,
			title : 'aNjufC7Ec8H2Akzn',
			photo : $client->chatPhotoEmpty(),
			participants_count : 27,
			date : 83,
			version : 34,
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
				until_date : 62,
			),
		),
		$client->chatForbidden(
			id : -6358260579333285271,
			title : 'rNTAVzxw8WIEH69y',
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
			id : -8505323280317765381,
			access_hash : 5266084963439691121,
			title : 'KCS617xJhVOkXFcA',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 24,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'GUNspRu7g8JbTf5I',
					reason : 'WjD9kKMt2Nlry5Ou',
					text : '63Urx0VsQEzDqRpK',
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
				until_date : 56,
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
				until_date : 25,
			),
			participants_count : 97,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 9,
			color : $client->peerColor(
				color : 24,
				background_emoji_id : -2735856146847647706,
			),
			profile_color : $client->peerColor(
				color : 8,
				background_emoji_id : 407164939917164141,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 81,
			subscription_until_date : 31,
			bot_verification_icon : -3012950964806501602,
			send_paid_messages_stars : 8855372798599089163,
			linked_monoforum_id : -1295855358272695421,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 4060555923966409000,
			access_hash : -5831609562898746802,
			title : 'uqw5JecIARMzH0Lp',
			until_date : 59,
		),
	),
	users : array(
		$client->userEmpty(
			id : -7296185318550559510,
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
			id : -8629445787639931192,
			access_hash : -8550125633156353224,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 41,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'gWO739JsGwo5mZyd',
					reason : 'wlkZa8dW17SYj5GV',
					text : 'GlN7wdP23YmEzLUg',
				),
			),
			bot_inline_placeholder : 'L6UyfIwcFuVZv4We',
			lang_code : 'mtRbWh49fHuj3Y5N',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 97,
			color : $client->peerColor(
				color : 14,
				background_emoji_id : 7544175087016337200,
			),
			profile_color : $client->peerColor(
				color : 80,
				background_emoji_id : -3753391204189063532,
			),
			bot_active_users : 55,
			bot_verification_icon : 9153136623377426040,
			send_paid_messages_stars : 8764234042022549051,
		),
	),
);
```
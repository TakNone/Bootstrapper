# account.businessChatLinks

**Description** : *Contains info about business chat deep links » created by the current account*

**Layer** : 211

```tl
account.businessChatLinks#ec43a2d1 links:Vector<BusinessChatLink> chats:Vector<Chat> users:Vector<User> = account.BusinessChatLinks;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>links</mark> | [`Vector<BusinessChatLink>`](type/BusinessChatLink) | Links |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[account.BusinessChatLinks](type/account.BusinessChatLinks)

---

## Example

```php
$accountBusinessChatLinks = $client->account->businessChatLinks(
	links : array(
		$client->businessChatLink(
			link : '3ofPd12mWT9jq4D8',
			message : 'gGPCSdm0Fp13UOau',
			entities : array(
				$client->messageEntityUnknown(
					offset : 30,
					length : 81,
				),
				$client->messageEntityMention(
					offset : 100,
					length : 23,
				),
				$client->messageEntityHashtag(
					offset : 59,
					length : 50,
				),
				$client->messageEntityBotCommand(
					offset : 85,
					length : 96,
				),
				$client->messageEntityUrl(
					offset : 54,
					length : 57,
				),
				$client->messageEntityEmail(
					offset : 17,
					length : 47,
				),
				$client->messageEntityBold(
					offset : 38,
					length : 55,
				),
				$client->messageEntityItalic(
					offset : 95,
					length : 63,
				),
				$client->messageEntityCode(
					offset : 40,
					length : 16,
				),
				$client->messageEntityPre(
					offset : 37,
					length : 79,
					language : 'O5KkzlHAxLgTafU7',
				),
				$client->messageEntityTextUrl(
					offset : 41,
					length : 14,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 22,
					length : 68,
					user_id : -4196278545552000336,
				),
				$client->inputMessageEntityMentionName(
					offset : 39,
					length : 34,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 82,
					length : 94,
				),
				$client->messageEntityCashtag(
					offset : 34,
					length : 9,
				),
				$client->messageEntityUnderline(
					offset : 3,
					length : 89,
				),
				$client->messageEntityStrike(
					offset : 90,
					length : 21,
				),
				$client->messageEntityBankCard(
					offset : 86,
					length : 35,
				),
				$client->messageEntitySpoiler(
					offset : 45,
					length : 13,
				),
				$client->messageEntityCustomEmoji(
					offset : 76,
					length : 69,
					document_id : 6682618110970357392,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 87,
					length : 7,
				),
			),
			title : 'LSEsQxZtVI1uiDYb',
			views : 100,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 7899188704697413537,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -8909386893868805321,
			title : 'kBd3y7z4Gxw98uDZ',
			photo : $client->chatPhotoEmpty(),
			participants_count : 90,
			date : 95,
			version : 30,
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
				until_date : 68,
			),
		),
		$client->chatForbidden(
			id : 6177085235373194902,
			title : 'xuKzEyvVN58tdlh4',
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
			id : -7074846985733633419,
			access_hash : 5908546820948595325,
			title : 'mZvlE0xQ9HMfW2Yh',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 17,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'zQBaIK76eErOfPiy',
					reason : '5Ouhq93RHXfdQGop',
					text : '9Ct7j3aFsrT1dcWR',
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
				until_date : 72,
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
			participants_count : 81,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 61,
			color : $client->peerColor(
				color : 64,
				background_emoji_id : 6072939283006352782,
			),
			profile_color : $client->peerColor(
				color : 52,
				background_emoji_id : 1118301273875313675,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 27,
			subscription_until_date : 72,
			bot_verification_icon : 8010180393757605726,
			send_paid_messages_stars : 1322851444382710645,
			linked_monoforum_id : -428178679831801011,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -732912613796453632,
			access_hash : 5141653590118138817,
			title : 'xqGziSbAtDwOUKC6',
			until_date : 6,
		),
	),
	users : array(
		$client->userEmpty(
			id : -1031003764612063750,
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
			id : 8598893772910857596,
			access_hash : -6535530512616944402,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 100,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ZW5ljQX098fISOqM',
					reason : '296UcKkPdloaFNBt',
					text : 'P3U4D7ZtYMnG50V2',
				),
			),
			bot_inline_placeholder : 'hCu49eZiB0SToM5n',
			lang_code : 'lqwT2iWOEv9Cjypb',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 15,
			color : $client->peerColor(
				color : 51,
				background_emoji_id : -6177062705706250566,
			),
			profile_color : $client->peerColor(
				color : 96,
				background_emoji_id : 2041652681583699829,
			),
			bot_active_users : 11,
			bot_verification_icon : 6364412865691573500,
			send_paid_messages_stars : 670305067382402157,
		),
	),
);
```
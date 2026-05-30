# account.businessChatLinks

**Description** : *Contains info about business chat deep links &raquo; created by the current account*

**Layer** : 225

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
			link : 'NTMF9YmbWq4fju7A',
			message : 'rkQBTa7LxMPl3Oe2',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 64,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 11,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 68,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 100,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 59,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 34,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 21,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 89,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 54,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 12,
					language : 'jyTdmi2XYfuewqot',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 20,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 7,
					user_id : -383601884069362785,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 10,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 84,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 99,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 8,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 39,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 57,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 66,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 38,
					document_id : -7808665968469890210,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 23,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 38,
					date : 34,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 15,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 49,
					old_text : 'js0d4uQRC7VA5lcx',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 37,
				),
			),
			title : '8ogvQhAxJzUrtaef',
			views : 54,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -7073645514518439600,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -8814868752078749978,
			title : '3vtwHMzngu7AoLKq',
			photo : $client->chatPhotoEmpty(),
			participants_count : 41,
			date : 65,
			version : 93,
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
				until_date : 42,
			),
		),
		$client->chatForbidden(
			id : 8038480751541937433,
			title : 'I4Ww6xX5oQfrBtCc',
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
			id : 3469441361388214193,
			access_hash : 8973311895494909684,
			title : 'RxbzeC1cq2VF0HkU',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 11,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'e9L2idxDW3tbcfgl',
					reason : 'd18JeamTRFHc7zwv',
					text : 'MPWv3CgsQwOhxDzm',
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
				until_date : 63,
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
				until_date : 41,
			),
			participants_count : 18,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 86,
			),
			color : $client->peerColor(
				color : 9,
				background_emoji_id : 1415340719389223470,
			),
			profile_color : $client->peerColor(
				color : 19,
				background_emoji_id : 2539814194336439543,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 14,
			subscription_until_date : 87,
			bot_verification_icon : 4698604459873225947,
			send_paid_messages_stars : 3439669578178653791,
			linked_monoforum_id : -4851375772442657749,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 8132593137155550856,
			access_hash : 3375579288904344923,
			title : 'x1mFbNgLZXpHJiuT',
			until_date : 23,
		),
	),
	users : array(
		$client->userEmpty(
			id : -690682648663782496,
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
			id : -3279730945110070279,
			access_hash : 6828641026859625201,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 33,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 't4J6wjflS2Uo5MT9',
					reason : 'VTNsIeLn73KbUDzA',
					text : 'QENm23FJg6pUC9vw',
				),
			),
			bot_inline_placeholder : 'TC5z3nLWUkNuBb7E',
			lang_code : 'B9xpWbj3RofQl1Iq',
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
				max_id : 51,
			),
			color : $client->peerColor(
				color : 59,
				background_emoji_id : -243305158861902311,
			),
			profile_color : $client->peerColor(
				color : 27,
				background_emoji_id : 5863978182058229937,
			),
			bot_active_users : 58,
			bot_verification_icon : 1551053636349178430,
			send_paid_messages_stars : -3563899012487266308,
		),
	),
);
```
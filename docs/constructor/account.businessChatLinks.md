# account.businessChatLinks

**Description** : *Contains info about business chat deep links &raquo; created by the current account*

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
			link : 'Uw3Nrh56qyzToaBj',
			message : '4Qp6W3n9FHg0DxeC',
			entities : array(
				$client->messageEntityUnknown(
					offset : 79,
					length : 59,
				),
				$client->messageEntityMention(
					offset : 16,
					length : 36,
				),
				$client->messageEntityHashtag(
					offset : 91,
					length : 17,
				),
				$client->messageEntityBotCommand(
					offset : 92,
					length : 61,
				),
				$client->messageEntityUrl(
					offset : 49,
					length : 2,
				),
				$client->messageEntityEmail(
					offset : 49,
					length : 79,
				),
				$client->messageEntityBold(
					offset : 13,
					length : 93,
				),
				$client->messageEntityItalic(
					offset : 76,
					length : 53,
				),
				$client->messageEntityCode(
					offset : 64,
					length : 44,
				),
				$client->messageEntityPre(
					offset : 11,
					length : 29,
					language : '0jr2mBDbWtwcd5Oi',
				),
				$client->messageEntityTextUrl(
					offset : 27,
					length : 88,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 11,
					length : 68,
					user_id : 8630333115061378100,
				),
				$client->inputMessageEntityMentionName(
					offset : 58,
					length : 74,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 62,
					length : 80,
				),
				$client->messageEntityCashtag(
					offset : 81,
					length : 45,
				),
				$client->messageEntityUnderline(
					offset : 5,
					length : 26,
				),
				$client->messageEntityStrike(
					offset : 26,
					length : 83,
				),
				$client->messageEntityBankCard(
					offset : 57,
					length : 45,
				),
				$client->messageEntitySpoiler(
					offset : 95,
					length : 43,
				),
				$client->messageEntityCustomEmoji(
					offset : 43,
					length : 76,
					document_id : -596886916859051944,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 23,
					length : 56,
				),
			),
			title : 'WZ4CtaNdApHu0VQs',
			views : 65,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 5609043773583780481,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 3237058405855610558,
			title : 'dyHKEWJlSgwUmpho',
			photo : $client->chatPhotoEmpty(),
			participants_count : 85,
			date : 66,
			version : 13,
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
				until_date : 31,
			),
		),
		$client->chatForbidden(
			id : -1588561477400865134,
			title : 'hePUimWto8wFJ04c',
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
			id : 1543654887799781126,
			access_hash : -4188038703234527624,
			title : 'XdzsOrfWjmQqTV1I',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 8,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '16e8ER7rl5NyOzXW',
					reason : '9l2YXsRJFGOWeHj8',
					text : 'jEUxo4PshILm9dFM',
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
				until_date : 20,
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
				until_date : 77,
			),
			participants_count : 61,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 3,
			color : $client->peerColor(
				color : 91,
				background_emoji_id : 3792437521979192930,
			),
			profile_color : $client->peerColor(
				color : 85,
				background_emoji_id : 470113899092581091,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 65,
			subscription_until_date : 90,
			bot_verification_icon : 4458390186450414162,
			send_paid_messages_stars : -6506291193652296606,
			linked_monoforum_id : -8320427899787899567,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 109207759176818284,
			access_hash : 5063762091830655803,
			title : 'UyzM9HnaIoT0LVli',
			until_date : 81,
		),
	),
	users : array(
		$client->userEmpty(
			id : -7299897855043300205,
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
			id : 1338362377723603019,
			access_hash : -4473568377185211164,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 59,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'hcag26ZXFIlTBM4O',
					reason : 'E930V4ntPqNCeSQ2',
					text : 'iq70wovgyVLQbtKM',
				),
			),
			bot_inline_placeholder : 'ZGFnxe4yNHXcaE8o',
			lang_code : 'gn7asxj35qfLcI9l',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 89,
			color : $client->peerColor(
				color : 81,
				background_emoji_id : -2683503773823242001,
			),
			profile_color : $client->peerColor(
				color : 66,
				background_emoji_id : -2713539521419303152,
			),
			bot_active_users : 70,
			bot_verification_icon : 5454267829513403664,
			send_paid_messages_stars : -1154761648469007911,
		),
	),
);
```
# help.recentMeUrls

**Description** : *Recent t\.me URLs*

**Layer** : 222

```tl
help.recentMeUrls#e0310d7 urls:Vector<RecentMeUrl> chats:Vector<Chat> users:Vector<User> = help.RecentMeUrls;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>urls</mark> | [`Vector<RecentMeUrl>`](type/RecentMeUrl) | URLs |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users |

---

## Type

[help.RecentMeUrls](type/help.RecentMeUrls)

---

## Example

```php
$helpRecentMeUrls = $client->help->recentMeUrls(
	urls : array(
		$client->recentMeUrlUnknown(
			url : 'https://docs.liveproto.dev',
		),
		$client->recentMeUrlUser(
			url : 'https://docs.liveproto.dev',
			user_id : -3625400971653705915,
		),
		$client->recentMeUrlChat(
			url : 'https://docs.liveproto.dev',
			chat_id : 1338870976299236275,
		),
		$client->recentMeUrlChatInvite(
			url : 'https://docs.liveproto.dev',
			chat_invite : $client->chatInviteAlready(
				chat : $client->chatEmpty(
					id : 4386615929384106493,
				),
			),
		),
		$client->recentMeUrlStickerSet(
			url : 'https://docs.liveproto.dev',
			set : $client->stickerSetCovered(
				set : $client->stickerSet(
					archived : true,
					official : true,
					masks : true,
					emojis : true,
					text_color : true,
					channel_emoji_status : true,
					creator : true,
					installed_date : 27,
					id : 2461685293705057692,
					access_hash : 4018262792772505828,
					title : 'WFCrRkO61Nn8Uyt9',
					short_name : 'YjDCkQ8dxZGv6igB',
					thumbs : array(
						$client->photoSizeEmpty(...),
						$client->photoSize(...),
						$client->photoCachedSize(...),
						$client->photoStrippedSize(...),
						$client->photoSizeProgressive(...),
						$client->photoPathSize(...),
					),
					thumb_dc_id : 96,
					thumb_version : 64,
					thumb_document_id : -6001097577929040794,
					count : 47,
					hash : 0,
				),
				cover : $client->documentEmpty(
					id : 2405201540445131960,
				),
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 2253430296255773289,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -8517529635267159480,
			title : 'xTzSXOaNfGr4EopI',
			photo : $client->chatPhotoEmpty(),
			participants_count : 23,
			date : 26,
			version : 54,
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
				until_date : 31,
			),
		),
		$client->chatForbidden(
			id : -819701550314538726,
			title : '91rxvVi8qgLlsEpP',
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
			id : -1250723350592120927,
			access_hash : 6435724303168539809,
			title : 'czA3pregZiuYlU0S',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 75,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '9N2h35UoVCJ607Ye',
					reason : 'gS9vBlZrYaARXOW6',
					text : '1OAuIZDMqzSBlV4o',
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
				until_date : 73,
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
				until_date : 89,
			),
			participants_count : 74,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 49,
			),
			color : $client->peerColor(
				color : 87,
				background_emoji_id : 1870166446859984314,
			),
			profile_color : $client->peerColor(
				color : 89,
				background_emoji_id : 6596485065308868575,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 62,
			subscription_until_date : 14,
			bot_verification_icon : 266510330666212373,
			send_paid_messages_stars : -5738783249699503135,
			linked_monoforum_id : 4744804075416722030,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 1894253000761872493,
			access_hash : -3138132376665947754,
			title : 'k2Y6t8xoWuBpKyLb',
			until_date : 31,
		),
	),
	users : array(
		$client->userEmpty(
			id : -5634446464878186171,
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
			id : 6877665308823812245,
			access_hash : -3908434029081482557,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 35,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'HiC2tUnsDvXyaW9e',
					reason : 'dlqu6nQ9p1i2w3NA',
					text : 'USMQaZA5B2xOtF6v',
				),
			),
			bot_inline_placeholder : 'rNi9IePt4lOCwK7n',
			lang_code : 'WIK2Hh8q6ay94gmJ',
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
				max_id : 17,
			),
			color : $client->peerColor(
				color : 14,
				background_emoji_id : -925896771027327010,
			),
			profile_color : $client->peerColor(
				color : 74,
				background_emoji_id : -5393014086842819630,
			),
			bot_active_users : 66,
			bot_verification_icon : 2728054829858216592,
			send_paid_messages_stars : 2218599675273250315,
		),
	),
);
```
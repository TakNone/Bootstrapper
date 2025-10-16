# help.recentMeUrls

**Description** : *Recent t\.me URLs*

**Layer** : 216

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
			user_id : 7743827442895513546,
		),
		$client->recentMeUrlChat(
			url : 'https://docs.liveproto.dev',
			chat_id : 1078898675698534943,
		),
		$client->recentMeUrlChatInvite(
			url : 'https://docs.liveproto.dev',
			chat_invite : $client->chatInviteAlready(
				chat : $client->chatEmpty(...),
			),
		),
		$client->recentMeUrlStickerSet(
			url : 'https://docs.liveproto.dev',
			set : $client->stickerSetCovered(
				set : $client->stickerSet(...),
				cover : $client->documentEmpty(...),
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 128908884329106274,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 6397477842672208510,
			title : 'lZP0937EORcNvDgF',
			photo : $client->chatPhotoEmpty(),
			participants_count : 91,
			date : 87,
			version : 48,
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
				until_date : 71,
			),
		),
		$client->chatForbidden(
			id : -1774020238297030692,
			title : 'BFmsICandMOlVrHP',
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
			id : 8477267655235013860,
			access_hash : 7199592791190661802,
			title : 'nBiJo5CfesmNljKX',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 67,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'IEn0agX67BPyNcVO',
					reason : '4MEGShbBiNeXajfH',
					text : 'pP2y8MY5FnhjK1iO',
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
				until_date : 34,
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
				until_date : 48,
			),
			participants_count : 1,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 91,
			color : $client->peerColor(
				color : 55,
				background_emoji_id : -3230037767578660137,
			),
			profile_color : $client->peerColor(
				color : 47,
				background_emoji_id : 6337214017728554199,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 99,
			subscription_until_date : 66,
			bot_verification_icon : -329002759932899987,
			send_paid_messages_stars : 3764800397194364145,
			linked_monoforum_id : 4040762814474038863,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 3767079618014953194,
			access_hash : -455093225534960765,
			title : 'Rv0SQZFa48bLYtMA',
			until_date : 13,
		),
	),
	users : array(
		$client->userEmpty(
			id : -1836049190873309462,
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
			id : 3983399969620978128,
			access_hash : -3389901817967889674,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 34,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'D8sKb7NRTkprLJl9',
					reason : '0Rd8WqHiYUwGXPIp',
					text : 'uO6zg5QWD2mIakFR',
				),
			),
			bot_inline_placeholder : 'd4txOmGLbDKeNIl7',
			lang_code : 'mP64cKapZlYfuw8H',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 60,
			color : $client->peerColor(
				color : 34,
				background_emoji_id : 6345552074360422647,
			),
			profile_color : $client->peerColor(
				color : 9,
				background_emoji_id : 151036875271759060,
			),
			bot_active_users : 79,
			bot_verification_icon : -3450428571165316051,
			send_paid_messages_stars : -2305402146655939090,
		),
	),
);
```
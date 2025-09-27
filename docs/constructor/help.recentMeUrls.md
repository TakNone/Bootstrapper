# help.recentMeUrls

**Description** : *Recent t\.me URLs*

**Layer** : 214

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
			user_id : -8590197370889609931,
		),
		$client->recentMeUrlChat(
			url : 'https://docs.liveproto.dev',
			chat_id : -3274391711017025981,
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
			id : 3446908932389570288,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -4026152065414222339,
			title : 'szpRFOiUPBNqQhxr',
			photo : $client->chatPhotoEmpty(),
			participants_count : 40,
			date : 58,
			version : 19,
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
				until_date : 29,
			),
		),
		$client->chatForbidden(
			id : 4132737462568373473,
			title : '9eVdRHU1Gr3laEXQ',
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
			id : -3228861061609596211,
			access_hash : 2332673037401104135,
			title : 'AQnTSr6ykogzfZua',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 65,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '936P5rcVI4q2l7oy',
					reason : 'psPWAEfBiMVlSbLo',
					text : 'cvGd4aqNQ0y2wPbe',
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
				until_date : 55,
			),
			participants_count : 58,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 34,
			color : $client->peerColor(
				color : 43,
				background_emoji_id : 1293051598682613445,
			),
			profile_color : $client->peerColor(
				color : 81,
				background_emoji_id : -3672790363133987077,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 15,
			subscription_until_date : 40,
			bot_verification_icon : -7190757073877644977,
			send_paid_messages_stars : -3146272181135445305,
			linked_monoforum_id : -4291431141399293109,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 4191022916046365637,
			access_hash : -717957462543898393,
			title : 'snv5K6EkrWfJM0jl',
			until_date : 51,
		),
	),
	users : array(
		$client->userEmpty(
			id : -3522586273387282465,
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
			id : -4001860747203937458,
			access_hash : 5656221852522080649,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 81,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '1VyNcEwQ9JpAIm7M',
					reason : 'LRdGmAVuxiqnIbeh',
					text : 'hJSlwyqp9YQeP7co',
				),
			),
			bot_inline_placeholder : 'ev1k2A47WoI5s6ru',
			lang_code : 'zqEA17PhHaOJWLuV',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 1,
			color : $client->peerColor(
				color : 38,
				background_emoji_id : 4913706469080222944,
			),
			profile_color : $client->peerColor(
				color : 57,
				background_emoji_id : -2681441956270990463,
			),
			bot_active_users : 7,
			bot_verification_icon : -7617598570627921785,
			send_paid_messages_stars : 3203180647071336769,
		),
	),
);
```
# account.autoSaveSettings

**Description** : *Contains media autosave settings*

**Layer** : 216

```tl
account.autoSaveSettings#4c3e069d users_settings:AutoSaveSettings chats_settings:AutoSaveSettings broadcasts_settings:AutoSaveSettings exceptions:Vector<AutoSaveException> chats:Vector<Chat> users:Vector<User> = account.AutoSaveSettings;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>users_settings</mark> | [`AutoSaveSettings`](type/AutoSaveSettings) | Default media autosave settings for private chats |
| <mark>chats_settings</mark> | [`AutoSaveSettings`](type/AutoSaveSettings) | Default media autosave settings for groups and supergroups |
| <mark>broadcasts_settings</mark> | [`AutoSaveSettings`](type/AutoSaveSettings) | Default media autosave settings for channels |
| <mark>exceptions</mark> | [`Vector<AutoSaveException>`](type/AutoSaveException) | Peer-specific granular autosave settings |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats mentioned in the peer-specific granular autosave settings |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users mentioned in the peer-specific granular autosave settings |

---

## Type

[account.AutoSaveSettings](type/account.AutoSaveSettings)

---

## Example

```php
$accountAutoSaveSettings = $client->account->autoSaveSettings(
	users_settings : $client->autoSaveSettings(
		photos : true,
		videos : true,
		video_max_size : 109284561495689737,
	),
	chats_settings : $client->autoSaveSettings(
		photos : true,
		videos : true,
		video_max_size : -2035684696610311004,
	),
	broadcasts_settings : $client->autoSaveSettings(
		photos : true,
		videos : true,
		video_max_size : -2609680584533910445,
	),
	exceptions : array(
		$client->autoSaveException(
			peer : $client->peerUser(
				user_id : 3357415909092972837,
			),
			settings : $client->autoSaveSettings(
				photos : true,
				videos : true,
				video_max_size : 5669220621182140917,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 3893256994208552655,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -8611354479153281176,
			title : 'zEwVWCcYDUultfAe',
			photo : $client->chatPhotoEmpty(),
			participants_count : 34,
			date : 44,
			version : 89,
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
				until_date : 0,
			),
		),
		$client->chatForbidden(
			id : 4648594571189844435,
			title : 'PS05I2BMuyHznbXF',
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
			id : 3602064518030675678,
			access_hash : 1851767892238966550,
			title : 'NMJVD3Ol917RHCBk',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 80,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'V9bh6LlWUikIw48m',
					reason : '7FnIWkDzfYQrTNAj',
					text : 'GfxMTvuCeY4Fonld',
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
				until_date : 16,
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
				until_date : 28,
			),
			participants_count : 34,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 46,
			color : $client->peerColor(
				color : 43,
				background_emoji_id : -483113320022813541,
			),
			profile_color : $client->peerColor(
				color : 63,
				background_emoji_id : 3430891379951728819,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 6,
			subscription_until_date : 27,
			bot_verification_icon : -1882791206707067083,
			send_paid_messages_stars : 5624082175552830195,
			linked_monoforum_id : -631327186244782553,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -4387656765580131259,
			access_hash : -3417383652637142575,
			title : 'O2itrSHKBQkNEa7f',
			until_date : 10,
		),
	),
	users : array(
		$client->userEmpty(
			id : -852454610377908478,
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
			id : 4687334449697092438,
			access_hash : -5870055956743290035,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 63,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '3qgceRu0zB8piZV1',
					reason : 'DlULgvqG8duExsn9',
					text : 'NbsmW2V0RcIyeTha',
				),
			),
			bot_inline_placeholder : '9zYNgfXFDLGmhsyq',
			lang_code : 'abHpwQntO8INFloP',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 13,
			color : $client->peerColor(
				color : 71,
				background_emoji_id : 4738623318262481332,
			),
			profile_color : $client->peerColor(
				color : 41,
				background_emoji_id : 1640271338214637576,
			),
			bot_active_users : 67,
			bot_verification_icon : -925054874627961377,
			send_paid_messages_stars : -2168243333996446650,
		),
	),
);
```
# account.autoSaveSettings

**Description** : *Contains media autosave settings*

**Layer** : 222

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
		video_max_size : 535615182156684717,
	),
	chats_settings : $client->autoSaveSettings(
		photos : true,
		videos : true,
		video_max_size : -8410967194831754715,
	),
	broadcasts_settings : $client->autoSaveSettings(
		photos : true,
		videos : true,
		video_max_size : -2469706175432302572,
	),
	exceptions : array(
		$client->autoSaveException(
			peer : $client->peerUser(
				user_id : 714812991882583673,
			),
			settings : $client->autoSaveSettings(
				photos : true,
				videos : true,
				video_max_size : 1496659796928501465,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -7923693691042044574,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -8203112471102518494,
			title : 'w8CehuqfYQ1Lom5y',
			photo : $client->chatPhotoEmpty(),
			participants_count : 14,
			date : 75,
			version : 98,
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
				until_date : 98,
			),
		),
		$client->chatForbidden(
			id : 5298140888536350642,
			title : 'kwLcb3NiGu6PQYXq',
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
			id : 4148488767881595814,
			access_hash : 608884402462740174,
			title : '8R9J0TIrgiop4w6s',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 76,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'T4LC3lbcqBIx0EoK',
					reason : 'e64Iou7hfiOY0DWw',
					text : 't1pIVB5gNTeUQ8x9',
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
				until_date : 36,
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
				until_date : 5,
			),
			participants_count : 11,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 77,
			),
			color : $client->peerColor(
				color : 93,
				background_emoji_id : -892899152523368216,
			),
			profile_color : $client->peerColor(
				color : 72,
				background_emoji_id : 3139466245674493491,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 55,
			subscription_until_date : 93,
			bot_verification_icon : 7239241877242860421,
			send_paid_messages_stars : -7701117364650277736,
			linked_monoforum_id : 19059145516326775,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -3875893811002517666,
			access_hash : -8605289579369357980,
			title : 'fNqF9OdRrGgQLmUv',
			until_date : 100,
		),
	),
	users : array(
		$client->userEmpty(
			id : 6961063332115340217,
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
			id : 1796615754365279084,
			access_hash : 7665301922139659192,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 83,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'jL0A4PJbHZUpBMwl',
					reason : 'z1BU8CuGpNYFoAn9',
					text : 'uI7OYUz9ygn3xANV',
				),
			),
			bot_inline_placeholder : 'Nf7uFOM5W89jRwmr',
			lang_code : 'CXlJxOTc0sUWrkV4',
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
				max_id : 25,
			),
			color : $client->peerColor(
				color : 26,
				background_emoji_id : -1148896219524356752,
			),
			profile_color : $client->peerColor(
				color : 62,
				background_emoji_id : -7202697251592517917,
			),
			bot_active_users : 46,
			bot_verification_icon : -911400898804798184,
			send_paid_messages_stars : 5221616946362245779,
		),
	),
);
```
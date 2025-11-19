# account.autoSaveSettings

**Description** : *Contains media autosave settings*

**Layer** : 218

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
		video_max_size : 1460936290697251697,
	),
	chats_settings : $client->autoSaveSettings(
		photos : true,
		videos : true,
		video_max_size : -3362357534100018064,
	),
	broadcasts_settings : $client->autoSaveSettings(
		photos : true,
		videos : true,
		video_max_size : 8548399318923555851,
	),
	exceptions : array(
		$client->autoSaveException(
			peer : $client->peerUser(
				user_id : -8858596136780993623,
			),
			settings : $client->autoSaveSettings(
				photos : true,
				videos : true,
				video_max_size : -6890520233362708095,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 8300499776417430138,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 355912711315163937,
			title : 'aGrnZjqOQ0oTyl4e',
			photo : $client->chatPhotoEmpty(),
			participants_count : 47,
			date : 74,
			version : 51,
			migrated_to : $client->get_input_channel(peer : '@LiveProto'),
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
				until_date : 67,
			),
		),
		$client->chatForbidden(
			id : 3715238741261998886,
			title : 'jOUFDGc9LW2yM8az',
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
			id : 6620802143826095911,
			access_hash : 8019716343302647426,
			title : 'VFj7KCeA4nEtrwWR',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 32,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'duPzpLMGET7210NX',
					reason : 'eUj35uAMg19ywqCz',
					text : 'IDdq0tp9c6UhJZVB',
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
				until_date : 50,
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
				until_date : 91,
			),
			participants_count : 6,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 16,
			),
			color : $client->peerColor(
				color : 46,
				background_emoji_id : 3992480511437578791,
			),
			profile_color : $client->peerColor(
				color : 56,
				background_emoji_id : -8723849444405100160,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 47,
			subscription_until_date : 64,
			bot_verification_icon : 1555106227825641287,
			send_paid_messages_stars : -4312599572255509854,
			linked_monoforum_id : -6863252407036549547,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 5280162537807821872,
			access_hash : -2595914060230126652,
			title : '7KeI2CnzUc6rpgZ0',
			until_date : 19,
		),
	),
	users : array(
		$client->userEmpty(
			id : 6090928793762010567,
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
			id : -6380235197322511210,
			access_hash : -3645084503192712905,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 16,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'H4WBcxrseDpY83Nt',
					reason : 'Cv7x4zMs9tZUQJB0',
					text : 'mCiqFyNPWOXuhAdR',
				),
			),
			bot_inline_placeholder : 'qbx5jY6GnkyHRXcI',
			lang_code : 'Zn5I0S4cPAJD6kqb',
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
				max_id : 76,
			),
			color : $client->peerColor(
				color : 54,
				background_emoji_id : 3800007651600510214,
			),
			profile_color : $client->peerColor(
				color : 27,
				background_emoji_id : 7170830057484682410,
			),
			bot_active_users : 70,
			bot_verification_icon : -3149000460693303827,
			send_paid_messages_stars : 4637740116236153484,
		),
	),
);
```
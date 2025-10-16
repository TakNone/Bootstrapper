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
		video_max_size : -8437847297026277532,
	),
	chats_settings : $client->autoSaveSettings(
		photos : true,
		videos : true,
		video_max_size : -2859956612581961786,
	),
	broadcasts_settings : $client->autoSaveSettings(
		photos : true,
		videos : true,
		video_max_size : 3524264226946941134,
	),
	exceptions : array(
		$client->autoSaveException(
			peer : $client->peerUser(
				user_id : -7364904675426096594,
			),
			settings : $client->autoSaveSettings(
				photos : true,
				videos : true,
				video_max_size : 3777271158985339068,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -7083484418826301023,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 7779870753558295612,
			title : 'WHvLA5C29UMK8ONR',
			photo : $client->chatPhotoEmpty(),
			participants_count : 58,
			date : 85,
			version : 85,
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
				until_date : 67,
			),
		),
		$client->chatForbidden(
			id : 8377394761575878333,
			title : 'QzsyvLWUBtGS8C0x',
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
			id : 3454202374948608097,
			access_hash : -1852149285145833889,
			title : 'FtyCJlP45MvKzQ6L',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 67,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'LBOE3CmxAqa2Sfn9',
					reason : 'YNtcJGqm9uLSW6Ig',
					text : 'AG6E4YPkaLwR3FeD',
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
				until_date : 21,
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
				until_date : 33,
			),
			participants_count : 64,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 57,
			color : $client->peerColor(
				color : 33,
				background_emoji_id : -8931260247992692432,
			),
			profile_color : $client->peerColor(
				color : 79,
				background_emoji_id : -8134220496858920992,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 74,
			subscription_until_date : 63,
			bot_verification_icon : 6697428602200547274,
			send_paid_messages_stars : 4325708985435605067,
			linked_monoforum_id : 1081104484288300154,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 8519272585879916068,
			access_hash : -6525193328420228251,
			title : 'L4MJy2tcX78pjikW',
			until_date : 89,
		),
	),
	users : array(
		$client->userEmpty(
			id : 3746840542232761843,
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
			id : 4466578207200930222,
			access_hash : -9183812563725802728,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 11,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'qDecpsRf1mkb2EwV',
					reason : 'Yel2B1VDJ9P6oTy8',
					text : '4hNwj6OELZmAU5M7',
				),
			),
			bot_inline_placeholder : 'xaFAWhZvdOktw9Gy',
			lang_code : 'M8ac3z1YXTlhJLVe',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 6,
			color : $client->peerColor(
				color : 7,
				background_emoji_id : 315197979948827807,
			),
			profile_color : $client->peerColor(
				color : 58,
				background_emoji_id : 3577726766674024100,
			),
			bot_active_users : 29,
			bot_verification_icon : 7793427249522749743,
			send_paid_messages_stars : -5823728868027976982,
		),
	),
);
```
# account.autoSaveSettings

**Description** : *Contains media autosave settings*

**Layer** : 214

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
		video_max_size : 1229349334241419089,
	),
	chats_settings : $client->autoSaveSettings(
		photos : true,
		videos : true,
		video_max_size : -1214397196092134253,
	),
	broadcasts_settings : $client->autoSaveSettings(
		photos : true,
		videos : true,
		video_max_size : -309467751789741301,
	),
	exceptions : array(
		$client->autoSaveException(
			peer : $client->peerUser(
				user_id : 2934117715142263877,
			),
			settings : $client->autoSaveSettings(
				photos : true,
				videos : true,
				video_max_size : -2869713167836873740,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 7108014125823049741,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 691772699475905486,
			title : 'vXpFqBGH8gS1jhC4',
			photo : $client->chatPhotoEmpty(),
			participants_count : 16,
			date : 20,
			version : 26,
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
				until_date : 5,
			),
		),
		$client->chatForbidden(
			id : -1506854970515555481,
			title : '31wiugYyFolMeBTv',
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
			id : 588184289629443038,
			access_hash : -196601872086434740,
			title : '0jd1lpL9khwYigzP',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 80,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'wdA3yqGjKbz6ugTX',
					reason : 'Ym8XJwuW47diByQr',
					text : 'CQ4KZhe1tmkSnFsN',
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
				until_date : 77,
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
			participants_count : 40,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 17,
			color : $client->peerColor(
				color : 47,
				background_emoji_id : 5059823525098587173,
			),
			profile_color : $client->peerColor(
				color : 45,
				background_emoji_id : 2675665352743786322,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 42,
			subscription_until_date : 46,
			bot_verification_icon : 9165790617111267858,
			send_paid_messages_stars : 3808523621792180349,
			linked_monoforum_id : 5351424319642682794,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 6583458699476281276,
			access_hash : 5855951662556863570,
			title : 'kv2JwfcFm1SNxlGY',
			until_date : 10,
		),
	),
	users : array(
		$client->userEmpty(
			id : -8327426688245833278,
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
			id : 7553857584604046639,
			access_hash : 5690155081488109065,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 22,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'gQMT5NaKH3C8muAV',
					reason : 'RYSvlVZDOb0C8Nzp',
					text : 'tqr7DFSgQP2bpeWO',
				),
			),
			bot_inline_placeholder : 'AzJuSrQkEhsR0jZb',
			lang_code : 'jJtO5H0cSlBYNGx1',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 8,
			color : $client->peerColor(
				color : 95,
				background_emoji_id : 4429378365314301851,
			),
			profile_color : $client->peerColor(
				color : 5,
				background_emoji_id : 7188625895454445706,
			),
			bot_active_users : 46,
			bot_verification_icon : 5991204778934936359,
			send_paid_messages_stars : -6367381041290363572,
		),
	),
);
```
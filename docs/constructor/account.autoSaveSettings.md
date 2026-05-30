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
		video_max_size : -5625877695767809270,
	),
	chats_settings : $client->autoSaveSettings(
		photos : true,
		videos : true,
		video_max_size : -8060752471076571979,
	),
	broadcasts_settings : $client->autoSaveSettings(
		photos : true,
		videos : true,
		video_max_size : 1825530558764230707,
	),
	exceptions : array(
		$client->autoSaveException(
			peer : $client->peerUser(
				user_id : 6062641895357448376,
			),
			settings : $client->autoSaveSettings(
				photos : true,
				videos : true,
				video_max_size : 4692284279606513183,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -1210143786896651449,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -4892312420250146496,
			title : 'e2YwnbM0RxogST7U',
			photo : $client->chatPhotoEmpty(),
			participants_count : 31,
			date : 34,
			version : 19,
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
				until_date : 29,
			),
		),
		$client->chatForbidden(
			id : 6944919667069888746,
			title : 'vmUzlpkg3xREHs6A',
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
			id : 1630101522688238231,
			access_hash : 3900254715493343050,
			title : '5WMsnp6YCQXGeqOD',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 53,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'renK92lusqQ4ohTG',
					reason : 'A1Gh4kcSPdy6DNx9',
					text : 'Nzs1IiX4lc9xWTbA',
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
				until_date : 39,
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
				until_date : 13,
			),
			participants_count : 36,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 100,
			),
			color : $client->peerColor(
				color : 87,
				background_emoji_id : 5428745178578375227,
			),
			profile_color : $client->peerColor(
				color : 28,
				background_emoji_id : 960322377955631320,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 0,
			subscription_until_date : 56,
			bot_verification_icon : 3517479759337255549,
			send_paid_messages_stars : 2885936347200208350,
			linked_monoforum_id : -5400048669014924424,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -601321649639116212,
			access_hash : 8241007867048638188,
			title : 'BTRs4pvm5IAXbjyu',
			until_date : 66,
		),
	),
	users : array(
		$client->userEmpty(
			id : 5107264134973122413,
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
			id : -8077537623601119825,
			access_hash : 8630919044191327883,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 54,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'jVGoZMsaXh21uOlm',
					reason : 'H5zr0KGYw8gVybWP',
					text : '8gsJPA7Z6LBfFr41',
				),
			),
			bot_inline_placeholder : 'UGh0upgl69NPJbfk',
			lang_code : 'fn5EUk4G2XmlqoQd',
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
				max_id : 39,
			),
			color : $client->peerColor(
				color : 0,
				background_emoji_id : -5049752127661403145,
			),
			profile_color : $client->peerColor(
				color : 38,
				background_emoji_id : -8687573025448950536,
			),
			bot_active_users : 39,
			bot_verification_icon : -5068938173078767884,
			send_paid_messages_stars : 7846692457999820648,
		),
	),
);
```
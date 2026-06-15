# account.autoSaveSettings

**Description** : *Contains media autosave settings*

**Layer** : 227

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
		video_max_size : 8184611665160889268,
	),
	chats_settings : $client->autoSaveSettings(
		photos : true,
		videos : true,
		video_max_size : -8931871932118742145,
	),
	broadcasts_settings : $client->autoSaveSettings(
		photos : true,
		videos : true,
		video_max_size : -6392389066541959170,
	),
	exceptions : array(
		$client->autoSaveException(
			peer : $client->peerUser(
				user_id : 4249862947505047325,
			),
			settings : $client->autoSaveSettings(
				photos : true,
				videos : true,
				video_max_size : 2943764387626446212,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -2538347016603291681,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -7273189436761269842,
			title : 'CZOaE9I4gjAuTNxF',
			photo : $client->chatPhotoEmpty(),
			participants_count : 23,
			date : 81,
			version : 33,
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
				manage_ranks : true,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 61,
			),
		),
		$client->chatForbidden(
			id : 416135018772409871,
			title : 'wvRmhC265ueUf13c',
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
			id : -8806579750094718862,
			access_hash : 8939410841445922970,
			title : 'GlumMJ1fPpZr4N8s',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 36,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'WaL8yulxOzA3hI9P',
					reason : 'omI69wlGPJ3TBpMi',
					text : 'RTIfEAgKV3rdc67W',
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
				manage_ranks : true,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 85,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 92,
			),
			participants_count : 70,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 90,
			),
			color : $client->peerColor(
				color : 24,
				background_emoji_id : 6982711235427326030,
			),
			profile_color : $client->peerColor(
				color : 36,
				background_emoji_id : -3522346090697670169,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 91,
			subscription_until_date : 5,
			bot_verification_icon : -516188299064748986,
			send_paid_messages_stars : 6062417561519008997,
			linked_monoforum_id : 5632321561538856269,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -1869570485634108150,
			access_hash : 3165139783918525881,
			title : 'U8yVaK0uHe3xwtod',
			until_date : 61,
		),
	),
	users : array(
		$client->userEmpty(
			id : -8438703076572871710,
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
			bot_can_manage_bots : true,
			bot_guestchat : true,
			bot_guard : true,
			id : 4381718034154733971,
			access_hash : -4745390410703427044,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 84,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '7KujXIw3iJHxRsfB',
					reason : 'cmrkygEIhvYzMwTG',
					text : 'Jml1GoejdF9WtAfz',
				),
			),
			bot_inline_placeholder : 'uIMSAKs8612QTZqJ',
			lang_code : 'uCVfmNnw6RPxDTbo',
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
				max_id : 95,
			),
			color : $client->peerColor(
				color : 14,
				background_emoji_id : -1273613197422096526,
			),
			profile_color : $client->peerColor(
				color : 81,
				background_emoji_id : -2741290693377918765,
			),
			bot_active_users : 82,
			bot_verification_icon : -9034347569341570654,
			send_paid_messages_stars : 887547269868234537,
		),
	),
);
```
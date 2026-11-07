# bots.popularAppBots

**Description** : *Popular Main Mini Apps, to be used in the apps tab of global search &raquo;*

**Layer** : 233

```tl
bots.popularAppBots#1991b13b flags:# next_offset:flags.0?string users:Vector<User> = bots.PopularAppBots;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **next_offset** | [`flags.0?string`](type/string) | Offset for pagination |
| <mark>users</mark> | [`Vector<User>`](type/User) | The bots associated to each Main Mini App, see here » for more info |

---

## Type

[bots.PopularAppBots](type/bots.PopularAppBots)

---

## Example

```php
$botsPopularAppBots = $client->bots->popularAppBots(
	next_offset : 'kVnHRlIBwtc54pgJ',
	users : array(
		$client->userEmpty(
			id : -6662874033746959353,
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
			bot_forum_sidebar : true,
			id : 4602772056671969986,
			access_hash : 3953958025351360787,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 86,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'EPsc2d1L7HIyqDKv',
					reason : 'MCOflzk41YtuPF5J',
					text : 'WwiZMXdg1kbHmLxt',
				),
			),
			bot_inline_placeholder : '4eQVRKw5mtsplSga',
			lang_code : 'z9MnlLOiEBqrRwcT',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					deletable : true,
					expired : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 40,
			),
			color : $client->peerColor(
				color : 61,
				background_emoji_id : -85014800626225186,
			),
			profile_color : $client->peerColor(
				color : 93,
				background_emoji_id : 3526515781798952677,
			),
			bot_active_users : 93,
			bot_verification_icon : -2787892881835151293,
			send_paid_messages_stars : -3655733584116373360,
			linked_community_id : -98190628485322978,
		),
	),
);
```
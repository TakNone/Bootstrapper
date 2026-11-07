# bots.accessSettings

**Description** : *Access restriction settings for a managed bot &raquo;*

**Layer** : 233

```tl
bots.accessSettings#dd1fbf93 flags:# restricted:flags.0?true add_users:flags.1?Vector<User> = bots.AccessSettings;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **restricted** | [`flags.0?true`](type/true) | If set, only the owner and the users in add_users can access the managed bot |
| **add_users** | [`flags.1?Vector<User>`](type/User) | Additional users (max 10, excluding the owner) who can access the managed bot; only present when restricted is set |

---

## Type

[bots.AccessSettings](type/bots.AccessSettings)

---

## Example

```php
$botsAccessSettings = $client->bots->accessSettings(
	restricted : true,
	add_users : array(
		$client->userEmpty(
			id : 1777563640123338659,
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
			id : 1506565114234514104,
			access_hash : 2790656901767785950,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 33,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'QtNBqiXaOhr1mgw8',
					reason : 'dIn753bZrcYqAzWu',
					text : 'Q4RvEYmZ7XlVdib3',
				),
			),
			bot_inline_placeholder : 'JZ6NsTuKREYzki5y',
			lang_code : 'Jwx96tTg1HubUB53',
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
				max_id : 20,
			),
			color : $client->peerColor(
				color : 96,
				background_emoji_id : -8559371364434512160,
			),
			profile_color : $client->peerColor(
				color : 61,
				background_emoji_id : -7324242441509329652,
			),
			bot_active_users : 59,
			bot_verification_icon : -3660340806863383117,
			send_paid_messages_stars : 801111359982202622,
			linked_community_id : -2710674591826432647,
		),
	),
);
```
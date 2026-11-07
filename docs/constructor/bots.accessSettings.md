# bots.accessSettings

**Description** : *Access restriction settings for a managed bot &raquo;*

**Layer** : 229

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
			id : 8058013161853697329,
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
			id : 6111992117720415821,
			access_hash : 3424402372809296500,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 82,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '0xiwvG6eV1fuZIyU',
					reason : 'tLlodJrvZW3e6C8R',
					text : 'gvbHZl3KAkUpfJB6',
				),
			),
			bot_inline_placeholder : 'PjYadNMAZ8KQzweG',
			lang_code : 'UKIrecnxwB5VS7sv',
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
				max_id : 17,
			),
			color : $client->peerColor(
				color : 98,
				background_emoji_id : 6473679309966414300,
			),
			profile_color : $client->peerColor(
				color : 12,
				background_emoji_id : -3572483205165022852,
			),
			bot_active_users : 6,
			bot_verification_icon : -3379725639083655651,
			send_paid_messages_stars : -7904921370509998524,
			linked_community_id : 2460082809728236528,
		),
	),
);
```